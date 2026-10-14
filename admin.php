<?php
/**
 * Ultra-2 Pro Smartwatch - Admin Order Management
 * Developed by CodingBurg (codingburg.com)
 * Phone: 01908121146
 */

$jsonFile = __DIR__ . '/data/orders.json';
$orders = [];
if (file_exists($jsonFile)) {
    $orders = json_decode(file_get_contents($jsonFile), true) ?: [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $targetId = $_POST['order_id'] ?? '';
    
    if ($_POST['action'] === 'update_status') {
        $newStatus = $_POST['new_status'] ?? 'Pending';
        foreach ($orders as &$ord) {
            if ($ord['order_id'] === $targetId) {
                $ord['status'] = $newStatus;
                break;
            }
        }
        file_put_contents($jsonFile, json_encode($orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    } elseif ($_POST['action'] === 'delete') {
        $orders = array_values(array_filter($orders, fn($o) => $o['order_id'] !== $targetId));
        file_put_contents($jsonFile, json_encode($orders, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    header('Location: admin.php');
    exit;
}

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=smartwatch_orders_' . date('Y-m-d') . '.csv');
    $output = fopen('php://output', 'w');
    fwrite($output, "\xEF\xBB\xBF");
    fputcsv($output, ['Order ID', 'Date', 'Customer Name', 'Phone', 'Address', 'Package', 'Color', 'Qty', 'Total (BDT)', 'Delivery Area', 'Status']);
    foreach ($orders as $o) {
        fputcsv($output, [
            $o['order_id'],
            $o['created_at'],
            $o['customer_name'],
            $o['customer_phone'],
            $o['customer_address'],
            $o['package_name'],
            $o['selected_color'] ?? '',
            $o['quantity'],
            $o['grand_total'],
            $o['delivery_area'],
            $o['status'] ?? 'Pending'
        ]);
    }
    fclose($output);
    exit;
}

$totalOrders = count($orders);
$totalRevenue = array_reduce($orders, fn($sum, $o) => $sum + ($o['grand_total'] ?? 0), 0);
$pendingOrders = count(array_filter($orders, fn($o) => ($o['status'] ?? 'Pending') === 'Pending'));
$deliveredOrders = count(array_filter($orders, fn($o) => ($o['status'] ?? '') === 'Delivered'));
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অর্ডার ড্যাশবোর্ড | আল্ট্রা-২ প্রো স্মার্টওয়াচ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-[#030712] text-slate-200 min-h-screen">

    <header class="bg-slate-900 border-b border-slate-800 text-white shadow-xl sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-400 border border-cyan-500/40 flex items-center justify-center font-bold text-lg">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h1 class="text-base sm:text-lg font-bold">আল্ট্রা-২ প্রো স্মার্টওয়াচ — অর্ডার ড্যাশবোর্ড</h1>
                    <p class="text-[11px] text-cyan-400">Powered by CodingBurg</p>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <a href="?export=csv" class="px-3.5 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold transition flex items-center gap-1.5 shadow">
                    <i class="fa-solid fa-file-excel"></i>
                    <span>এক্সেল এক্সপোর্ট</span>
                </a>
                <a href="index.php" target="_blank" class="px-3.5 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-200 text-xs font-semibold transition flex items-center gap-1.5 border border-slate-700">
                    <i class="fa-solid fa-external-link"></i>
                    <span class="hidden sm:inline">লাইভ সাইট</span>
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 shadow-sm">
                <div class="text-xs text-slate-400 font-semibold mb-1">মোট অর্ডার</div>
                <div class="text-2xl font-black text-white font-en"><?= $totalOrders ?></div>
            </div>
            <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 shadow-sm">
                <div class="text-xs text-slate-400 font-semibold mb-1">মোট বিক্রয় (BDT)</div>
                <div class="text-2xl font-black text-cyan-400 font-en">৳<?= number_format($totalRevenue) ?></div>
            </div>
            <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 shadow-sm">
                <div class="text-xs text-slate-400 font-semibold mb-1">পেন্ডিং অর্ডার</div>
                <div class="text-2xl font-black text-amber-400 font-en"><?= $pendingOrders ?></div>
            </div>
            <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 shadow-sm">
                <div class="text-xs text-slate-400 font-semibold mb-1">ডেলিভারড</div>
                <div class="text-2xl font-black text-emerald-400 font-en"><?= $deliveredOrders ?></div>
            </div>
        </div>

        <div class="bg-slate-900/80 rounded-2xl border border-slate-800 shadow-xl overflow-hidden">
            <div class="p-5 border-b border-slate-800 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h2 class="text-base font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-list-check text-cyan-400"></i>
                    <span>সর্বশেষ অর্ডার তালিকা</span>
                </h2>
                <div class="text-xs text-slate-400">
                    মোট <?= count($orders) ?> টি অর্ডার প্রদর্শিত হচ্ছে
                </div>
            </div>

            <?php if (empty($orders)): ?>
                <div class="p-12 text-center text-slate-500">
                    <i class="fa-regular fa-folder-open text-4xl mb-3 text-slate-600"></i>
                    <p class="text-sm">এখনো পর্যন্ত কোনো অর্ডার জমা পড়েনি।</p>
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-slate-950/60 text-slate-400 uppercase font-bold border-b border-slate-800 tracking-wider">
                            <tr>
                                <th class="p-4">আইডি ও সময়</th>
                                <th class="p-4">গ্রাহকের তথ্য</th>
                                <th class="p-4">প্যাকেজ ও কালার</th>
                                <th class="p-4">মূল্য ও ডেলিভারি</th>
                                <th class="p-4">স্ট্যাটাস</th>
                                <th class="p-4 text-right">অ্যাকশন</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            <?php foreach ($orders as $o): ?>
                                <tr class="hover:bg-slate-800/40 transition">
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="font-mono font-bold text-cyan-400"><?= htmlspecialchars($o['order_id']) ?></div>
                                        <div class="text-[10px] text-slate-500"><?= htmlspecialchars($o['created_at']) ?></div>
                                    </td>
                                    <td class="p-4">
                                        <div class="font-bold text-white"><?= htmlspecialchars($o['customer_name']) ?></div>
                                        <div class="text-cyan-400 font-semibold font-mono">
                                            <a href="tel:<?= htmlspecialchars($o['customer_phone']) ?>"><?= htmlspecialchars($o['customer_phone']) ?></a>
                                        </div>
                                        <div class="text-[11px] text-slate-400 max-w-xs truncate"><?= htmlspecialchars($o['customer_address']) ?></div>
                                    </td>
                                    <td class="p-4">
                                        <div class="font-semibold text-slate-200"><?= htmlspecialchars($o['package_name']) ?></div>
                                        <div class="text-[11px] text-cyan-400"><?= htmlspecialchars($o['selected_color'] ?? '') ?></div>
                                        <div class="text-slate-400 font-en"><?= htmlspecialchars($o['quantity']) ?> <?= htmlspecialchars($o['unit'] ?? 'পিস') ?></div>
                                    </td>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="text-sm font-black text-cyan-400 font-en">৳<?= number_format($o['grand_total']) ?></div>
                                        <div class="text-[10px] text-slate-400"><?= htmlspecialchars($o['delivery_area']) ?></div>
                                    </td>
                                    <td class="p-4 whitespace-nowrap">
                                        <form method="POST" class="inline">
                                            <input type="hidden" name="action" value="update_status">
                                            <input type="hidden" name="order_id" value="<?= htmlspecialchars($o['order_id']) ?>">
                                            <select name="new_status" onchange="this.form.submit()" class="text-xs font-semibold rounded-lg px-2.5 py-1 border border-slate-700 bg-slate-950 <?= ($o['status'] ?? 'Pending') === 'Delivered' ? 'text-emerald-400' : 'text-amber-400' ?>">
                                                <option value="Pending" <?= ($o['status'] ?? 'Pending') === 'Pending' ? 'selected' : '' ?>>Pending</option>
                                                <option value="Confirmed" <?= ($o['status'] ?? '') === 'Confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                                <option value="Delivered" <?= ($o['status'] ?? '') === 'Delivered' ? 'selected' : '' ?>>Delivered</option>
                                                <option value="Cancelled" <?= ($o['status'] ?? '') === 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td class="p-4 text-right whitespace-nowrap">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="https://wa.me/88<?= preg_replace('/\D/', '', $o['customer_phone']) ?>" target="_blank" class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-400 hover:bg-emerald-500/30 border border-emerald-500/40 flex items-center justify-center transition" title="WhatsApp Message">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                            <form method="POST" onsubmit="return confirm('আপনি কি নিশ্চিত যে এই অর্ডারটি মুছে ফেলতে চান?');" class="inline">
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="order_id" value="<?= htmlspecialchars($o['order_id']) ?>">
                                                <button type="submit" class="w-7 h-7 rounded-lg bg-red-500/20 text-red-400 hover:bg-red-500/30 border border-red-500/40 flex items-center justify-center transition" title="Delete Order">
                                                    <i class="fa-solid fa-trash-can text-xs"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>

        </div>
    </main>

</body>
</html>
