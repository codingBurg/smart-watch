<?php
/**
 * Ultra-2 Pro Smartwatch - Order Success Page
 * Developed by CodingBurg (codingburg.com)
 * Phone: 01908121146
 */

session_start();

$order = $_SESSION['latest_order'] ?? null;
$orderId = $_GET['order_id'] ?? ($order['order_id'] ?? 'SW-' . time());

if (!$order) {
    $order = [
        'order_id'         => $orderId,
        'customer_name'    => 'সম্মানিত গ্রাহক',
        'customer_phone'   => '০১XXXXXXXXX',
        'customer_address' => 'আপনার দেওয়া ঠিকানা',
        'package_name'     => 'আল্ট্রা প্রো কম্বো',
        'selected_color'   => 'আলপাইন অরেঞ্জ',
        'quantity'         => 1,
        'unit'             => 'কম্বো',
        'grand_total'      => 1890,
        'delivery_area'    => 'হোম ডেলিভারি',
        'delivery_charge'  => 0
    ];
}

function bnNum($num) {
    $bn = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return str_replace(range(0, 9), $bn, (string)$num);
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>অর্ডার সম্পন্ন হয়েছে! | আল্ট্রা-২ প্রো স্মার্টওয়াচ</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
</head>
<body class="bg-[#030712] text-slate-100 antialiased min-h-screen py-10 px-4 flex items-center justify-center">

    <div class="max-w-xl w-full mx-auto">
        <div class="bg-slate-900/90 border border-slate-800 rounded-3xl shadow-2xl overflow-hidden p-6 sm:p-8 text-center relative backdrop-blur-xl">
            
            <div class="w-20 h-20 bg-emerald-500/20 text-emerald-400 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl shadow-lg ring-8 ring-emerald-500/10 border border-emerald-500/30">
                <i class="fa-solid fa-check"></i>
            </div>

            <span class="inline-block px-3.5 py-1 rounded-full bg-cyan-950 text-cyan-300 border border-cyan-800 text-xs font-bold uppercase tracking-wider mb-2">
                অর্ডার সফলভাবে কনফার্ম হয়েছে
            </span>

            <h1 class="text-2xl sm:text-3xl font-black text-white mb-2">
                ধন্যবাদ, <?= htmlspecialchars($order['customer_name']) ?>!
            </h1>
            
            <p class="text-xs sm:text-sm text-slate-400 max-w-md mx-auto mb-6">
                আপনার আল্ট্রা-২ প্রো স্মার্টওয়াচের অর্ডারটি গ্রহণ করা হয়েছে। আমাদের প্রতিনিধি শীঘ্রই ফোন করে পার্সেল ট্র্যাকিং নিশ্চিত করবেন।
            </p>

            <div class="bg-slate-950/80 border border-slate-800 rounded-2xl p-5 text-left text-xs sm:text-sm space-y-3 mb-6 shadow-inner">
                <div class="flex justify-between items-center pb-2.5 border-b border-slate-800">
                    <span class="text-slate-400 font-medium">অর্ডার আইডি:</span>
                    <span class="font-mono font-bold text-cyan-400 bg-cyan-950/80 px-2.5 py-0.5 rounded border border-cyan-800 text-xs"><?= htmlspecialchars($order['order_id']) ?></span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-slate-400 font-medium">প্যাকেজ:</span>
                    <span class="font-bold text-white"><?= htmlspecialchars($order['package_name']) ?></span>
                </div>

                <?php if (!empty($order['selected_color'])): ?>
                <div class="flex justify-between items-center">
                    <span class="text-slate-400 font-medium">নির্বাচিত কালার/স্ট্র্যাপ:</span>
                    <span class="font-bold text-cyan-300"><?= htmlspecialchars($order['selected_color']) ?></span>
                </div>
                <?php endif; ?>

                <div class="flex justify-between items-center">
                    <span class="text-slate-400 font-medium">পরিমাণ:</span>
                    <span class="font-bold text-white font-en"><?= bnNum($order['quantity']) ?> <?= htmlspecialchars($order['unit']) ?></span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-slate-400 font-medium">ডেলিভারি এলাকা:</span>
                    <span class="font-bold text-white"><?= htmlspecialchars($order['delivery_area']) ?></span>
                </div>

                <div class="flex justify-between items-center">
                    <span class="text-slate-400 font-medium">ডেলিভারি চার্জ:</span>
                    <span class="font-bold <?= $order['delivery_charge'] == 0 ? 'text-emerald-400' : 'text-white' ?>">
                        <?= $order['delivery_charge'] == 0 ? 'ফ্রি হোম ডেলিভারি (৳০)' : '৳' . bnNum($order['delivery_charge']) ?>
                    </span>
                </div>

                <div class="flex justify-between items-center pt-2.5 border-t border-slate-800 text-sm sm:text-base font-black">
                    <span class="text-slate-200">সর্বমোট প্রদেয় মূল্য (COD):</span>
                    <span class="text-cyan-400 text-lg sm:text-xl font-en">৳<?= bnNum(number_format($order['grand_total'])) ?></span>
                </div>
            </div>

            <div class="bg-slate-800/50 border border-slate-700/60 rounded-2xl p-4 text-left text-xs text-slate-300 space-y-1 mb-6">
                <p><strong><i class="fa-solid fa-phone text-cyan-400 mr-1.5"></i>মোবাইল:</strong> <?= htmlspecialchars($order['customer_phone']) ?></p>
                <p><strong><i class="fa-solid fa-location-dot text-cyan-400 mr-1.5"></i>ডেলিভারি ঠিকানা:</strong> <?= htmlspecialchars($order['customer_address']) ?></p>
                <p class="text-[11px] text-emerald-400 pt-1 font-medium"><i class="fa-solid fa-shield-halved mr-1"></i>ক্যাশ অন ডেলিভারি — পার্সেল খুলে ঘড়ি অন করে চেক করে ডেলিভারি ম্যানকে মূল্য পরিশোধ করুন। সাথে ১ বছরের ওয়ারেন্টি কার্ড অন্তর্ভুক্ত!</p>
            </div>

            <div class="space-y-3">
                <a href="https://wa.me/8801908121146?text=হ্যালো,%20আমি%20আল্ট্রা-২%20প্রো%20স্মার্টওয়াচের%20অর্ডার%20করেছি।%20আমার%20অর্ডার%20আইডি:%20<?= urlencode($order['order_id']) ?>" 
                   target="_blank" 
                   class="w-full py-3.5 px-6 rounded-xl text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 transition flex items-center justify-center gap-2 shadow-lg">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                    <span>হোয়াটসঅ্যাপে দ্রুত কনফার্ম করুন</span>
                </a>

                <div class="grid grid-cols-2 gap-3">
                    <a href="tel:01908121146" class="py-3 px-4 rounded-xl text-xs sm:text-sm font-bold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 transition flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-phone text-cyan-400"></i>
                        <span>হটলাইন কল</span>
                    </a>
                    <a href="index.php" class="py-3 px-4 rounded-xl text-xs sm:text-sm font-bold text-slate-300 bg-slate-800/50 hover:bg-slate-800 border border-slate-700 transition flex items-center justify-center gap-1.5">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>মূল পেজে ফিরুন</span>
                    </a>
                </div>
            </div>

            <p class="text-[11px] text-slate-500 mt-6 border-t border-slate-800/80 pt-3">
                আল্ট্রা-২ প্রো স্মার্টওয়াচ | Designed & Developed by <a href="https://codingburg.com" target="_blank" class="text-cyan-400 font-semibold hover:underline">CodingBurg</a>
            </p>

        </div>
    </div>

    <script>
        window.addEventListener('load', function() {
            if (typeof confetti === 'function') {
                confetti({
                    particleCount: 90,
                    spread: 70,
                    origin: { y: 0.6 },
                    colors: ['#06b6d4', '#3b82f6', '#10b981', '#f97316']
                });
            }
        });
    </script>
</body>
</html>
