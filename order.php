<?php
/**
 * Ultra-2 Pro Smartwatch - Order Processing Backend
 * Developed by CodingBurg (codingburg.com)
 * Phone: 01908121146
 */

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$packages = [
    'standard_edition' => [
        'name' => 'স্ট্যান্ডার্ড এডিশন (স্মার্টওয়াচ + ১টি স্ট্র্যাপ)',
        'price' => 1550,
        'unit' => 'পিস',
        'freeDeliveryMinQty' => 2,
        'bulkDiscountMinQty' => 2,
        'bulkDiscountAmount' => 100
    ],
    'pro_combo' => [
        'name' => 'আল্ট্রা প্রো কম্বো (স্মার্টওয়াচ + ২টি স্ট্র্যাপ + স্ক্রিন প্রোটেক্টর)',
        'price' => 1890,
        'unit' => 'কম্বো',
        'freeDeliveryMinQty' => 1,
        'bulkDiscountMinQty' => 2,
        'bulkDiscountAmount' => 150
    ],
    'ultimate_gadget_combo' => [
        'name' => 'আলটিমেট গ্যাজেট কম্বো (স্মার্টওয়াচ + TWS এয়ারবাডস + ৩টি স্ট্র্যাপ)',
        'price' => 2650,
        'unit' => 'কম্বো',
        'freeDeliveryMinQty' => 1,
        'bulkDiscountMinQty' => 2,
        'bulkDiscountAmount' => 250
    ]
];

$deliveryRates = [
    'inside_dhaka' => 70,
    'outside_dhaka' => 130
];

$customer_name    = trim(filter_input(INPUT_POST, 'customer_name', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$customer_phone   = trim(filter_input(INPUT_POST, 'customer_phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$customer_address = trim(filter_input(INPUT_POST, 'customer_address', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$variety_id       = trim(filter_input(INPUT_POST, 'variety_id', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'pro_combo');
$delivery_area    = trim(filter_input(INPUT_POST, 'delivery_area', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'inside_dhaka');
$quantity         = intval(filter_input(INPUT_POST, 'hidden_quantity', FILTER_VALIDATE_INT) ?? 1);
$selected_color   = trim(filter_input(INPUT_POST, 'hidden_selected_color', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'আলপাইন অরেঞ্জ');
$customer_note    = trim(filter_input(INPUT_POST, 'customer_note', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

if ($quantity < 1) $quantity = 1;
if ($quantity > 20) $quantity = 20;

$cleanPhone = preg_replace('/[\s\-\+]/', '', $customer_phone);
if (str_starts_with($cleanPhone, '8801')) {
    $cleanPhone = substr($cleanPhone, 2);
}

if (!preg_match('/^01[3-9]\d{8}$/', $cleanPhone)) {
    die("<h3>ভুল মোবাইল নম্বর!</h3><p>দয়া করে সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 017XXXXXXXX)। <a href='javascript:history.back()'>ফিরে যান</a></p>");
}

if (empty($customer_name) || empty($customer_address)) {
    die("<h3>তথ্য অসম্পূর্ণ!</h3><p>দয়া করে আপনার নাম এবং সম্পূর্ণ ঠিকানা প্রদান করুন। <a href='javascript:history.back()'>ফিরে যান</a></p>");
}

if (!isset($packages[$variety_id])) {
    $variety_id = 'pro_combo';
}
$pack = $packages[$variety_id];

$subtotal = $pack['price'] * $quantity;
$deliveryCharge = $deliveryRates[$delivery_area] ?? 70;
$discount = 0;

if ($quantity >= $pack['freeDeliveryMinQty']) {
    $deliveryCharge = 0;
}

if ($quantity >= $pack['bulkDiscountMinQty']) {
    $discount = $pack['bulkDiscountAmount'] * ($quantity - 1);
}

$grandTotal = max(0, $subtotal - $discount + $deliveryCharge);

$orderId = 'SW-' . date('ymd') . '-' . rand(1000, 9999);
$orderTime = date('Y-m-d H:i:s');

$orderRecord = [
    'order_id'          => $orderId,
    'created_at'        => $orderTime,
    'customer_name'     => $customer_name,
    'customer_phone'    => $customer_phone,
    'customer_address'  => $customer_address,
    'variety_id'        => $variety_id,
    'package_name'      => $pack['name'],
    'selected_color'    => $selected_color,
    'quantity'          => $quantity,
    'unit'              => $pack['unit'],
    'unit_price'        => $pack['price'],
    'subtotal'          => $subtotal,
    'discount'          => $discount,
    'delivery_area'     => $delivery_area === 'inside_dhaka' ? 'ঢাকার ভেতরে' : 'ঢাকার বাইরে',
    'delivery_charge'   => $deliveryCharge,
    'grand_total'       => $grandTotal,
    'customer_note'     => $customer_note,
    'status'            => 'Pending'
];

$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0755, true);
}

$jsonFile = $dataDir . '/orders.json';
$existingOrders = [];
if (file_exists($jsonFile)) {
    $content = file_get_contents($jsonFile);
    $existingOrders = json_decode($content, true) ?: [];
}
array_unshift($existingOrders, $orderRecord);
file_put_contents($jsonFile, json_encode($existingOrders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

$csvFile = $dataDir . '/orders.csv';
$isNewCsv = !file_exists($csvFile);
$fp = fopen($csvFile, 'a');
if ($isNewCsv) {
    fwrite($fp, "\xEF\xBB\xBF");
    fputcsv($fp, ['Order ID', 'Date & Time', 'Customer Name', 'Phone', 'Address', 'Package', 'Color', 'Qty', 'Total (BDT)', 'Delivery Area', 'Delivery Fee', 'Status']);
}
fputcsv($fp, [
    $orderId,
    $orderTime,
    $customer_name,
    $customer_phone,
    $customer_address,
    $pack['name'],
    $selected_color,
    $quantity,
    $grandTotal,
    $orderRecord['delivery_area'],
    $deliveryCharge,
    'Pending'
]);
fclose($fp);

$_SESSION['latest_order'] = $orderRecord;

header('Location: success.php?order_id=' . urlencode($orderId));
exit;
