<?php
/**
 * Ultra-2 Pro Smartwatch (আল্ট্রা-২ প্রো স্মার্টওয়াচ) - Landing Page
 * Designed & Developed by CodingBurg (codingburg.com)
 * Phone / WhatsApp: 01908121146
 */
?>
<!DOCTYPE html>
<html lang="bn" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আল্ট্রা-২ প্রো সুপার অ্যামোলেড কলিং স্মার্টওয়াচ | প্রিমিয়াম টাইটানিয়াম বডি ও ১ বছর ওয়ারেন্টি</title>
    
    <!-- Meta SEO & Social Sharing -->
    <meta name="description" content="২.০৪ ইঞ্চি সুপার অ্যামোলেড ডিসপ্লে, ক্রিস্টাল ক্লিয়ার ব্লুটুথ কলিং, ১০০+ ফিটনেস মোড ও ৭ দিনের ব্যাটারি ব্যাকআপযুক্ত আল্ট্রা-২ প্রো স্মার্টওয়াচ। ক্যাশ অন ডেলিভারি ও ১ বছরের ওয়ারেন্টি।">
    <meta name="keywords" content="স্মার্টওয়াচ, smartwatch, ultra smartwatch, amoled smartwatch, bluetooth calling, gadget, bangladesh, codingburg">
    <meta property="og:title" content="আল্ট্রা-২ প্রো স্মার্টওয়াচ - প্রিমিয়াম অ্যামোলেড কলিং ওয়াচ">
    <meta property="og:description" content="সরাসরি ঘড়ি থেকেই কথা বলুন ও নোটিফিকেশন চেক করুন। ক্যাশ অন ডেলিভারি ও চেক করে মূল্য পরিশোধের নিশ্চয়তা।">
    <meta property="og:image" content="assets/images/hero-watch.jpg">
    <meta property="og:type" content="website">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyan: {
                            50: '#ecfeff',
                            100: '#cffafe',
                            200: '#a5f3fc',
                            300: '#67e8f9',
                            400: '#22d3ee',
                            500: '#06b6d4',
                            600: '#0891b2',
                            700: '#0e7490',
                            800: '#155e75',
                            900: '#164e63',
                            950: '#083344',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-[#030712] text-slate-100 antialiased selection:bg-cyan-500 selection:text-black pb-24 md:pb-12">

    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950 text-cyan-300 py-2.5 px-4 text-center text-xs md:text-sm font-medium border-b border-cyan-900/40 tracking-wide">
        <div class="max-w-6xl mx-auto flex items-center justify-center gap-2 flex-wrap">
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-bold bg-cyan-500 text-slate-950 animate-pulse">
                ⚡ মেগা গ্যাজেট অফার
            </span>
            <span>আল্ট্রা প্রো কম্বো অর্ডারে <strong>সারাদেশে ফ্রি হোম ডেলিভারি + ২টি প্রিমিয়াম স্ট্র্যাপ ফ্রি!</strong></span>
            <a href="#order-form-section" class="underline font-bold hover:text-white ml-1 inline-flex items-center gap-1">
                অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-40 bg-slate-950/90 backdrop-blur-md border-b border-slate-800 shadow-xl transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-3.5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 text-white flex items-center justify-center shadow-lg shadow-cyan-500/25 text-xl font-bold">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h1 class="text-xl md:text-2xl font-black text-white leading-tight flex items-center gap-2">
                        আল্ট্রা-২ প্রো
                        <span class="hidden sm:inline-block text-[11px] font-semibold bg-cyan-950 text-cyan-400 px-2 py-0.5 rounded-full border border-cyan-800">AMOLED</span>
                    </h1>
                    <p class="text-xs text-slate-400 font-medium">নেক্সট-জেন ব্লুটুথ কলিং স্মার্টওয়াচ</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="tel:01908121146" class="hidden md:inline-flex items-center gap-2 px-3.5 py-2 text-xs font-bold text-cyan-300 bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded-full transition">
                    <i class="fa-solid fa-phone text-cyan-400"></i>
                    <span>০১৯০৮-১২১১৪৬</span>
                </a>
                <a href="https://wa.me/8801908121146?text=হ্যালো,%20আমি%20আল্ট্রা-২%20প্রো%20স্মার্টওয়াচ%20সম্পর্কে%20জানতে%20চাই" target="_blank" class="inline-flex items-center gap-1.5 px-3.5 py-2 text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-500 rounded-full shadow-lg transition">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                    <span class="hidden sm:inline">হোয়াটসঅ্যাপ</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden pt-8 pb-12 md:py-20 bg-gradient-to-b from-[#030712] via-[#090e1a] to-[#030712]">
        <!-- Tech Glow Gradients -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute top-1/2 -right-32 w-96 h-96 bg-blue-600/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 relative">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Hero Copy -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-950/80 border border-cyan-800 text-cyan-300 text-xs md:text-sm font-bold shadow-inner">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                        <span>🔥 প্রিমিয়াম আল্ট্রা টাইটানিয়াম এডিশন</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight">
                        আপনার ব্যক্তিত্ব ও ফিটনেসে আনুন রাজকীয় লুক— <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-teal-300 to-emerald-400">
                            আল্ট্রা-২ প্রো সুপার অ্যামোলেড!
                        </span>
                    </h2>

                    <p class="text-sm md:text-base text-slate-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        ২.০৪ ইঞ্চি সুপার অ্যামোলেড অলওয়েজ-অন ডিসপ্লে, নয়েজ ক্যানসেলিং এইচডি ব্লুটুথ কলিং, ১০০+ স্পোর্টস ও হেলথ ট্র্যাকিং এবং ৭ দিনের দীর্ঘস্থায়ী ব্যাটারি। সাথে পাচ্ছেন <strong>ফ্রি প্রিমিয়াম ডিজাইনার স্ট্র্যাপ ও ১ বছরের সম্পূর্ণ ওয়ারেন্টি!</strong>
                    </p>

                    <!-- Interactive Color Selector Bar -->
                    <div class="bg-slate-900/80 p-4 rounded-2xl border border-slate-800 max-w-md mx-auto lg:mx-0">
                        <div class="flex items-center justify-between text-xs mb-2.5">
                            <span class="text-slate-400 font-medium">পছন্দের কালার ও স্ট্র্যাপ প্রিভিউ:</span>
                            <span id="selected-color-name" class="font-bold text-cyan-400">আলপাইন অরেঞ্জ</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="button" class="color-swatch-btn flex-1 py-2 px-2.5 rounded-xl border border-slate-700 bg-slate-800/80 hover:bg-slate-800 text-xs font-bold transition flex items-center justify-center gap-2 ring-4 ring-cyan-400 scale-105" data-color-name="আলপাইন অরেঞ্জ" data-img-src="assets/images/watch-orange.jpg">
                                <span class="w-3.5 h-3.5 rounded-full bg-orange-500 shadow-sm shrink-0"></span>
                                <span>অরেঞ্জ</span>
                            </button>
                            <button type="button" class="color-swatch-btn flex-1 py-2 px-2.5 rounded-xl border border-slate-700 bg-slate-800/80 hover:bg-slate-800 text-xs font-bold transition flex items-center justify-center gap-2" data-color-name="ওশান ব্ল্যাক" data-img-src="assets/images/watch-black.jpg">
                                <span class="w-3.5 h-3.5 rounded-full bg-slate-900 border border-slate-500 shadow-sm shrink-0"></span>
                                <span>ব্ল্যাক</span>
                            </button>
                            <button type="button" class="color-swatch-btn flex-1 py-2 px-2.5 rounded-xl border border-slate-700 bg-slate-800/80 hover:bg-slate-800 text-xs font-bold transition flex items-center justify-center gap-2" data-color-name="টাইটানিয়াম সিলভার" data-img-src="assets/images/watch-silver.jpg">
                                <span class="w-3.5 h-3.5 rounded-full bg-slate-300 shadow-sm shrink-0"></span>
                                <span>সিলভার</span>
                            </button>
                        </div>
                    </div>

                    <!-- Trust Key Badges -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-1">
                        <div class="flex items-center gap-2.5 p-3 rounded-2xl bg-slate-900/80 border border-slate-800 shadow-md">
                            <div class="w-9 h-9 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 text-sm">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="text-left">
                                <h4 class="text-xs font-bold text-white">এইচডি কলিং</h4>
                                <p class="text-[11px] text-slate-400">সরাসরি কথা বলুন</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2.5 p-3 rounded-2xl bg-slate-900/80 border border-slate-800 shadow-md">
                            <div class="w-9 h-9 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0 text-sm">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="text-left">
                                <h4 class="text-xs font-bold text-white">১ বছর ওয়ারেন্টি</h4>
                                <p class="text-[11px] text-slate-400">অফিসিয়াল কার্ডসহ</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-2.5 p-3 rounded-2xl bg-slate-900/80 border border-slate-800 shadow-md col-span-2 sm:col-span-1">
                            <div class="w-9 h-9 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 text-sm">
                                <i class="fa-solid fa-box-open"></i>
                            </div>
                            <div class="text-left">
                                <h4 class="text-xs font-bold text-white">চেক করে মূল্য</h4>
                                <p class="text-[11px] text-slate-400">ক্যাশ অন ডেলিভারি</p>
                            </div>
                        </div>
                    </div>

                    <!-- Call To Action Group -->
                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="#order-form-section" class="btn-cyber-cta w-full sm:w-auto px-8 py-4 rounded-xl text-base font-bold shadow-xl flex items-center justify-center gap-3 animate-cyber-pulse">
                            <i class="fa-solid fa-bag-shopping text-lg"></i>
                            <span>অনলাইনে অর্ডার করুন</span>
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>

                        <a href="tel:01908121146" class="w-full sm:w-auto px-6 py-4 rounded-xl text-sm font-bold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 flex items-center justify-center gap-2 transition">
                            <i class="fa-solid fa-phone text-cyan-400"></i>
                            <span>হটলাইন: ০১৯০৮-১২১১৪৬</span>
                        </a>
                    </div>

                    <!-- Urgency Countdown Card -->
                    <div class="pt-1">
                        <div class="inline-flex items-center gap-3 bg-slate-950 text-white px-4 py-2.5 rounded-xl border border-slate-800 shadow-md text-xs md:text-sm">
                            <span class="text-cyan-400 font-bold flex items-center gap-1.5">
                                <i class="fa-regular fa-clock"></i> আজকের স্পেশাল ডিসকাউন্ট বাকি:
                            </span>
                            <div class="flex items-center gap-1 font-mono font-bold text-white">
                                <span id="cd-hours" class="bg-slate-900 px-2 py-0.5 rounded border border-slate-700 text-cyan-300">08</span> :
                                <span id="cd-mins" class="bg-slate-900 px-2 py-0.5 rounded border border-slate-700 text-cyan-300">35</span> :
                                <span id="cd-secs" class="bg-slate-900 px-2 py-0.5 rounded border border-slate-700 text-orange-400">10</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Showcase -->
                <div class="lg:col-span-5">
                    <div class="relative">
                        <div class="absolute -inset-2 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-3xl blur-2xl opacity-25 transform -rotate-1"></div>

                        <div class="relative bg-slate-900/90 rounded-3xl p-3 border border-slate-800 shadow-2xl overflow-hidden backdrop-blur-xl">
                            <div class="relative aspect-square rounded-2xl overflow-hidden bg-slate-950 flex items-center justify-center">
                                <img id="hero-watch-image" 
                                     src="assets/images/watch-orange.jpg" 
                                     alt="আল্ট্রা-২ প্রো স্মার্টওয়াচ আলপাইন অরেঞ্জ স্ট্র্যাপ" 
                                     class="w-full h-full object-cover transform hover:scale-105 transition duration-500">
                                
                                <div class="absolute top-3 left-3 bg-slate-950/90 backdrop-blur-md text-cyan-300 text-[11px] font-bold px-3 py-1 rounded-full border border-cyan-800/80 flex items-center gap-1.5 shadow">
                                    <i class="fa-solid fa-microchip text-cyan-400"></i> আল্ট্রা-২ প্রো চিপসেট
                                </div>

                                <div class="absolute bottom-3 right-3 bg-slate-950/90 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-xl border border-slate-800 shadow-md flex items-center gap-1.5">
                                    <i class="fa-solid fa-truck-fast text-emerald-400"></i> সারাদেশে ক্যাশ অন ডেলিভারি
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-2 mt-3 pt-1">
                                <div class="bg-slate-950/70 p-2.5 rounded-xl border border-slate-800 flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 text-xs font-bold">
                                        ১
                                    </div>
                                    <span class="text-xs font-bold text-slate-200 leading-tight">টাইটানিয়াম অ্যালয় বডি</span>
                                </div>
                                <div class="bg-slate-950/70 p-2.5 rounded-xl border border-slate-800 flex items-center gap-2">
                                    <div class="w-7 h-7 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center shrink-0 text-xs font-bold">
                                        ২
                                    </div>
                                    <span class="text-xs font-bold text-slate-200 leading-tight">সুপার AMOLED ডিসপ্লে</span>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-5 -left-4 bg-slate-900 border border-slate-700 rounded-2xl p-3 shadow-2xl flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xl">
                                <i class="fa-solid fa-certificate"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-black text-white">১০০% অরিজিনাল গ্যারান্টি</h4>
                                <p class="text-[11px] text-slate-400">১ বছর অফিসিয়াল রিপ্লেসমেন্ট</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Key Tech Features Grid (৮টি প্রিমিয়াম প্রযুক্তি) -->
    <section class="py-12 md:py-20 bg-slate-950/60 border-y border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-cyan-400 bg-cyan-950 px-3.5 py-1 rounded-full uppercase tracking-wider border border-cyan-800">উন্নত প্রযুক্তি</span>
                <h3 class="text-2xl md:text-4xl font-black text-white mt-2">
                    কেন আল্ট্রা-২ প্রো স্মার্টওয়াচ সেরা?
                </h3>
                <p class="text-sm text-slate-400 mt-2">
                    ফ্ল্যাগশিপ গ্রেডের উপাদান এবং আধুনিক প্রযুক্তির সমন্বয়ে তৈরি যা আপনার প্রতিদিনের জীবনকে করবে আরো সহজ ও আধুনিক।
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Feature 1 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">২.০৪" সুপার AMOLED ডিসপ্লে</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        প্রখর রোদেও সুস্পষ্ট দেখার জন্য সর্বোচ্চ ব্রাইটনেস এবং অলওয়েজ-অন ডিসপ্লে সাপোর্ট।
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">এইচডি ব্লুটুথ কলিং</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        হাই-ফাই স্পিকার ও নয়েজ ক্যানসেলিং মাইক—ফোন না বের করেই সরাসরি কথা বলুন ও রিসিভ করুন।
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">২৪/৭ হেলথ মনিটরিং</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        হার্ট রেট, রক্তে অক্সিজেন (SpO2), ব্লাড প্রেশার ও স্লিপ মনিটরিং সেন্সরে সবসময় রাখুন নজর।
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-orange-500/20 text-orange-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-person-running"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">১০০+ স্পোর্টস মোড</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        রানিং, সাইক্লিং, ওয়াকিং ও জিম ওয়ার্কআউটে স্টেপস ও ক্যালোরি বার্ন নিখুঁতভাবে ট্র্যাক করে।
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">IP68 ওয়াটারপ্রুফ</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        বৃষ্টি, ঘাম ও হাত ধোয়ার পানিতে সম্পূর্ণ সুরক্ষিত। নিশ্চিন্তে যেকোনো আবহাওয়ায় ব্যবহারযোগ্য।
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">৭ দিনের ব্যাটারি ব্যাকআপ</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        ম্যাগনেটিক ফাস্ট ওয়্যারলেস চার্জিং—এক চার্জেই ৭ থেকে ১০ দিন পর্যন্ত অনায়াসে ব্যাকআপ দেয়।
                    </p>
                </div>

                <!-- Feature 7 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/20 text-purple-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-brands fa-android"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">Android & iPhone কম্প্যাটিবল</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        যেকোনো অ্যান্ড্রয়েড বা আইওএস (iPhone) স্মার্টফোনের সাথে সহজেই ব্লুটুথে কানেক্টেড হয়।
                    </p>
                </div>

                <!-- Feature 8 -->
                <div class="glass-panel p-5 rounded-2xl glass-panel-hover">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 text-blue-400 flex items-center justify-center text-xl mb-4">
                        <i class="fa-solid fa-bell"></i>
                    </div>
                    <h4 class="text-base font-bold text-white mb-1.5">স্মার্ট নোটিফিকেশন</h4>
                    <p class="text-xs text-slate-400 leading-relaxed">
                        হোয়াটসঅ্যাপ, ফেসবুক, মেসেঞ্জার, এসএমএস ও কলার অ্যালার্ট সরাসরি ঘড়ির স্ক্রিনে ভেসে উঠবে।
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Visual Detail Showcase -->
    <section class="py-12 md:py-16 bg-[#030712]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 rounded-3xl p-6 md:p-10 border border-slate-800 text-white relative shadow-2xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                    
                    <div class="lg:col-span-7 space-y-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-cyan-950 border border-cyan-800 text-cyan-400 text-xs font-bold tracking-wide">
                            ⌚ প্রিমিয়াম ক্রাফটসম্যানশিপ
                        </span>
                        <h3 class="text-2xl md:text-3xl lg:text-4xl font-black leading-tight">
                            টাইটানিয়াম অ্যালয় কেসিং—<br>
                            <span class="text-cyan-400">মজবুত, হালকা ও প্রিমিয়াম ফিনিশ!</span>
                        </h3>
                        <p class="text-xs md:text-sm text-slate-300 leading-relaxed">
                            আল্ট্রা-২ প্রো তৈরি করা হয়েছে এভিয়েশন-গ্রেড টাইটানিয়াম অ্যালয় দিয়ে, যা একই সাথে অত্যন্ত টেকসই এবং ওজনে হালকা। স্ক্র্যাচ-রেজিস্ট্যান্ট স্যাফায়ার গ্লাস আপনার ঘড়ির ডিসপ্লেকে যেকোনো দাগ ও আঁচড় থেকে সুরক্ষা দেবে।
                        </p>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2">
                            <div class="bg-slate-900/80 p-3 rounded-xl border border-slate-800">
                                <span class="text-cyan-400 text-base font-bold block">স্যাফায়ার গ্লাস</span>
                                <span class="text-[11px] text-slate-400">স্ক্র্যাচ-প্রুফ ডিসপ্লে</span>
                            </div>
                            <div class="bg-slate-900/80 p-3 rounded-xl border border-slate-800">
                                <span class="text-cyan-400 text-base font-bold block">ডিজিটাল ক্রাউন</span>
                                <span class="text-[11px] text-slate-400">স্মুথ কন্ট্রোল হুইল</span>
                            </div>
                            <div class="bg-slate-900/80 p-3 rounded-xl border border-slate-800 col-span-2 sm:col-span-1">
                                <span class="text-cyan-400 text-base font-bold block">অ্যাকশন বাটন</span>
                                <span class="text-[11px] text-slate-400">কুইক স্পোর্টস এক্সেস</span>
                            </div>
                        </div>

                        <div class="pt-2">
                            <a href="#order-form-section" class="btn-cyber-cta inline-flex items-center gap-2.5 px-6 py-3.5 rounded-xl font-bold text-sm shadow-lg transition">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <span>অর্ডার করতে এখানে ক্লিক করুন</span>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5">
                        <div class="relative aspect-4/3 rounded-2xl overflow-hidden border border-slate-800 shadow-2xl">
                            <img src="assets/images/watch-ultra-detail.jpg" 
                                 alt="আল্ট্রা-২ প্রো স্মার্টওয়াচ ক্লোজআপ ডিটেইলস" 
                                 class="w-full h-full object-cover transform hover:scale-105 transition duration-700">
                            <div class="absolute bottom-3 left-3 right-3 bg-black/70 backdrop-blur-md p-2.5 rounded-xl border border-white/10 text-center">
                                <span class="text-xs font-bold text-cyan-300">প্রিমিয়াম রোটারি ক্রাউন ও টাইটানিয়াম ফিনিশ</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Section: সাধারণ সস্তা ঘড়ি বনাম আল্ট্রা-২ প্রো -->
    <section class="py-12 md:py-16 bg-slate-950/80 border-y border-slate-800">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold text-cyan-400 bg-cyan-950 px-3 py-1 rounded-full uppercase tracking-wider border border-cyan-800">সতর্ক হোন</span>
                <h3 class="text-2xl md:text-3xl font-extrabold text-white mt-2">
                    ফেসবুকের সস্তা ক্লোন ঘড়ি কিনে প্রতারিত হচ্ছেন না তো?
                </h3>
                <p class="text-sm text-slate-400 mt-2">
                    কম দামে পাওয়া অধিকাংশ ঘড়িতেই থাকে নিম্নমানের টিএফটি ডিসপ্লে, কোনো ওয়ারেন্টি থাকে না এবং ১ মাসেই ব্যাটারি নষ্ট হয়ে যায়।
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Bad Market Watch -->
                <div class="bg-red-950/20 rounded-2xl p-6 border border-red-900/40">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-red-900/40 text-red-400 flex items-center justify-center text-lg font-bold">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <h4 class="text-lg font-bold text-red-300">বাজারের কমদামি সস্তা ঘড়ি</h4>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-300">
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-xmark text-red-500 mt-1"></i>
                            <span>সস্তা প্লাস্টিক বডি, সামান্য আঘাতেই ভেঙে যায় বা রঙ উঠে যায়।</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-xmark text-red-500 mt-1"></i>
                            <span>অস্পষ্ট সাধারণ টিএফটি ডিসপ্লে, রোদের আলোতে কিছুই দেখা যায় না।</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-xmark text-red-500 mt-1"></i>
                            <span>কথা বলার সময় বাজে নয়েজ ও ভাঙা আওয়াজ আসে।</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-xmark text-red-500 mt-1"></i>
                            <span>কোনো অফিসিয়াল ওয়ারেন্টি থাকে না, নষ্ট হলে টাকা পানিতে।</span>
                        </li>
                    </ul>
                </div>

                <!-- Ultra-2 Pro Smartwatch -->
                <div class="bg-cyan-950/20 rounded-2xl p-6 border border-cyan-500/40 relative shadow-lg">
                    <div class="absolute -top-3 right-4 bg-cyan-500 text-slate-950 text-[11px] font-black px-3 py-0.5 rounded-full shadow">
                        আমাদের আল্ট্রা-২ প্রো
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-lg font-bold">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <h4 class="text-lg font-bold text-white">আমাদের আল্ট্রা-২ প্রো স্মার্টওয়াচ</h4>
                    </div>
                    <ul class="space-y-3 text-sm text-slate-200">
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i>
                            <span>অরিজিনাল টাইটানিয়াম অ্যালয় বডি ও স্ক্র্যাচ-প্রুফ ফ্রন্ট গ্লাস।</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i>
                            <span>২.০৪" ক্রিস্টাল ক্লিয়ার সুপার অ্যামোলেড অলওয়েজ-অন ডিসপ্লে।</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i>
                            <span>নয়েজ ক্যানসেলিং এইচডি কলিং—পরিষ্কার স্পষ্ট সাউন্ড কোয়ালিটি।</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-circle-check text-cyan-400 mt-1"></i>
                            <span>১ বছরের সম্পূর্ণ অফিসিয়াল রিপ্লেসমেন্ট ওয়ারেন্টি কার্ড অন্তর্ভুক্ত।</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Packages Section -->
    <section class="py-12 md:py-20 bg-[#030712]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-cyan-400 bg-cyan-950 px-3.5 py-1 rounded-full uppercase tracking-wider border border-cyan-800">প্যাকেজ সমূহ</span>
                <h3 class="text-2xl md:text-4xl font-black text-white mt-2">
                    আপনার পছন্দের প্যাকেজটি নির্বাচন করুন
                </h3>
                <p class="text-sm text-slate-400 mt-2">
                    প্রতিটি প্যাকেজের সাথেই থাকছে সিলগালা বক্স, ম্যাগনেটিক ওয়্যারলেস চার্জার ও অফিসিয়াল ওয়ারেন্টি কার্ড।
                </p>
            </div>

            <!-- 3 Package Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">

                <!-- 1. Standard Edition -->
                <div class="package-card rounded-3xl p-6 flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-4/3 rounded-2xl overflow-hidden bg-slate-950 mb-5 border border-slate-800">
                            <img src="assets/images/watch-black.jpg" 
                                 alt="স্ট্যান্ডার্ড এডিশন আল্ট্রা স্মার্টওয়াচ" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <div class="absolute top-2.5 left-2.5 bg-slate-900/90 text-cyan-400 text-[11px] font-bold px-3 py-0.5 rounded-full border border-slate-700">
                                স্ট্যান্ডার্ড প্যাক
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="text-lg font-bold text-white">স্ট্যান্ডার্ড এডিশন স্মার্টওয়াচ</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">
                                ১টি আল্ট্রা স্মার্টওয়াচ + ১টি সিলিকন ওশান স্ট্র্যাপ + ম্যাগনেটিক ফাস্ট ওয়্যারলেস চার্জার।
                            </p>
                            <div class="flex items-baseline gap-2 pt-1">
                                <span class="text-3xl font-black text-cyan-400 font-en">৳১,৫৫০</span>
                                <span class="text-xs font-semibold text-slate-400">/ ১ সেট</span>
                            </div>
                            <ul class="text-xs space-y-2 text-slate-300 pt-3 border-t border-slate-800">
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i>২.০৪" সুপার AMOLED ডিসপ্লে</li>
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i>এইচডি ব্লুটুথ কলিং ও হেলথ ট্র্যাকার</li>
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i>১টি ফ্রি ওশান স্ট্র্যাপ</li>
                                <li><i class="fa-solid fa-shield-halved text-emerald-400 mr-2"></i>১ বছর অফিসিয়াল রিপ্লেসমেন্ট</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button onclick="selectPackageFromCard('standard_edition', 1)" class="w-full py-3 px-4 rounded-xl text-xs sm:text-sm font-bold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 transition flex items-center justify-center gap-2 shadow-md">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>অর্ডার সিলেক্ট করুন</span>
                        </button>
                    </div>
                </div>

                <!-- 2. Pro Combo (BESTSELLER) -->
                <div class="package-card package-card-highlight rounded-3xl p-6 flex flex-col justify-between relative transform lg:-translate-y-3">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-gradient-to-r from-cyan-500 to-blue-600 text-slate-950 text-xs font-black uppercase tracking-wider py-1 px-4 rounded-full shadow-lg whitespace-nowrap">
                        👑 সর্বাধিক জনপ্রিয় (ফ্রি ডেলিভারি)
                    </div>

                    <div>
                        <div class="relative aspect-4/3 rounded-2xl overflow-hidden bg-slate-950 mb-5 mt-2 border border-cyan-800">
                            <img src="assets/images/watch-orange.jpg" 
                                 alt="আল্ট্রা প্রো কম্বো এডিশন" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <div class="absolute bottom-2.5 left-2.5 bg-emerald-500 text-slate-950 text-[11px] font-black px-3 py-0.5 rounded-full">
                                ৳১০০ ক্যাশ ছাড়
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="text-xl font-black text-white">আল্ট্রা প্রো কম্বো এডিশন</h4>
                            <p class="text-xs text-slate-300 leading-relaxed">
                                ১টি ওয়াচ + ২টি প্রিমিয়াম ডিজাইনার স্ট্র্যাপ (অরেঞ্জ + ব্ল্যাক) + ১টি HD স্ক্রিন প্রোটেক্টর।
                            </p>
                            <div class="flex items-baseline gap-2 pt-1">
                                <span class="text-3xl font-black text-cyan-400 font-en">৳১,৮৯০</span>
                                <span class="text-xs font-bold text-emerald-400 bg-emerald-950 border border-emerald-800 px-2 py-0.5 rounded">ফ্রি ডেলিভারি!</span>
                            </div>
                            <ul class="text-xs space-y-2 text-slate-200 font-medium pt-3 border-t border-slate-800">
                                <li><i class="fa-solid fa-circle-check text-cyan-400 mr-2"></i>আল্ট্রা-২ প্রো স্মার্টওয়াচ</li>
                                <li><i class="fa-solid fa-circle-check text-cyan-400 mr-2"></i>২টি প্রিমিয়াম স্ট্র্যাপ অন্তর্ভুক্ত</li>
                                <li><i class="fa-solid fa-circle-check text-cyan-400 mr-2"></i>HD স্ক্রিন প্রোটেক্টর ফ্রি</li>
                                <li><i class="fa-solid fa-truck-fast text-emerald-400 mr-2"></i><strong>সারাদেশে ফ্রি হোম ডেলিভারি!</strong></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button onclick="selectPackageFromCard('pro_combo', 1)" class="btn-cyber-cta w-full py-3.5 px-4 rounded-xl text-xs sm:text-sm font-black flex items-center justify-center gap-2 shadow-lg">
                            <i class="fa-solid fa-crown text-amber-300"></i>
                            <span>প্রো কম্বো অর্ডার করুন</span>
                        </button>
                    </div>
                </div>

                <!-- 3. Ultimate Gadget Combo -->
                <div class="package-card rounded-3xl p-6 flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-4/3 rounded-2xl overflow-hidden bg-slate-950 mb-5 border border-slate-800">
                            <img src="assets/images/tws-earbuds.jpg" 
                                 alt="আলটিমেট গ্যাজেট কম্বো" 
                                 class="w-full h-full object-cover hover:scale-105 transition duration-500">
                            <div class="absolute top-2.5 right-2.5 bg-emerald-500 text-slate-950 text-[11px] font-black px-3 py-0.5 rounded-full">
                                ৳৩৫০ সেভ করুন
                            </div>
                        </div>

                        <div class="space-y-3">
                            <h4 class="text-lg font-bold text-white">আলটিমেট গ্যাজেট কম্বো</h4>
                            <p class="text-xs text-slate-400 leading-relaxed">
                                ১টি আল্ট্রা স্মার্টওয়াচ + ১টি TWS ব্লুটুথ ওয়্যারলেস এয়ারবাডস + ৩টি স্ট্র্যাপের মেগা সেট!
                            </p>
                            <div class="flex items-baseline gap-2 pt-1">
                                <span class="text-3xl font-black text-cyan-400 font-en">৳২,৬৫০</span>
                                <span class="text-xs font-bold text-emerald-400 bg-emerald-950 border border-emerald-800 px-2 py-0.5 rounded">ফ্রি ডেলিভারি!</span>
                            </div>
                            <ul class="text-xs space-y-2 text-slate-300 pt-3 border-t border-slate-800">
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i>স্মার্টওয়াচ + TWS এয়ারবাডস সেট</li>
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i>৩টি প্রিমিয়াম স্ট্র্যাপ ফ্রি</li>
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i><strong>সারাদেশে ফ্রি হোম ডেলিভারি!</strong></li>
                                <li><i class="fa-solid fa-check text-cyan-400 mr-2"></i>১ বছর অফিসিয়াল ওয়ারেন্টি</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button onclick="selectPackageFromCard('ultimate_gadget_combo', 1)" class="w-full py-3 px-4 rounded-xl text-xs sm:text-sm font-bold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 transition flex items-center justify-center gap-2 shadow-md">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>মেগা কম্বো অর্ডার করুন</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Interactive Checkout Form Section -->
    <section id="order-form-section" class="py-12 md:py-20 bg-gradient-to-b from-[#030712] via-slate-950 to-[#030712] scroll-mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="text-center max-w-xl mx-auto mb-8">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-cyan-950 text-cyan-400 border border-cyan-800 text-xs font-bold uppercase tracking-wider shadow">
                    <i class="fa-solid fa-shield-halved"></i> সহজ ক্যাশ অন ডেলিভারি
                </span>
                <h3 class="text-2xl md:text-3xl font-black text-white mt-2">
                    অর্ডার করতে নিচের তথ্যগুলো পূরণ করুন
                </h3>
                <p class="text-xs md:text-sm text-slate-400 mt-1">
                    পণ্য হাতে পেয়ে অন করে চেক করে ডেলিভারি ম্যানের কাছে মূল্য পরিশোধ করুন। অগ্রিম কোনো টাকা দিতে হবে না।
                </p>
            </div>

            <div id="bulk-discount-banner" class="hidden mb-6 bg-gradient-to-r from-cyan-600 to-blue-700 text-white p-4 rounded-2xl shadow-xl flex items-center justify-between gap-4 animate-bounce">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-xl shrink-0">
                        🎉
                    </div>
                    <div>
                        <h4 class="text-sm font-bold">অভিনন্দন! আপনি স্পেশাল অফার পেয়েছেন!</h4>
                        <p class="text-xs text-cyan-100">আপনার সিলেক্ট করা প্যাকেজে পাচ্ছেন <strong>ফ্রি হোম ডেলিভারি ও বিশেষ ক্যাশ ছাড়!</strong></p>
                    </div>
                </div>
                <span class="text-xs bg-white text-slate-950 font-black px-3 py-1 rounded-full shrink-0">অফার অ্যাপ্লাইড</span>
            </div>

            <!-- Form Card Container -->
            <div class="bg-slate-900/90 rounded-3xl p-6 md:p-8 border border-slate-800 shadow-2xl relative overflow-hidden backdrop-blur-xl">
                <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-500/10 rounded-full blur-2xl pointer-events-none"></div>

                <form id="order-form" action="order.php" method="POST" class="space-y-8">
                    
                    <!-- STEP 1: Select Edition -->
                    <div>
                        <label class="block text-sm font-bold text-white mb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-cyan-500 text-slate-950 flex items-center justify-center text-xs font-en font-black">১</span>
                            প্যাকেজ নির্বাচন করুন:
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <label class="variety-card cursor-pointer">
                                <input type="radio" name="variety_id" value="standard_edition" class="hidden">
                                <div class="variety-content p-4 rounded-2xl border border-slate-800 transition flex flex-col justify-between h-full bg-slate-950/70">
                                    <div class="flex items-center gap-2.5 mb-2">
                                        <div class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center shrink-0">
                                            <div class="w-1.5 h-1.5 rounded-full bg-slate-900"></div>
                                        </div>
                                        <h4 class="text-xs sm:text-sm font-bold text-white leading-tight">স্ট্যান্ডার্ড এডিশন</h4>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-base font-extrabold text-cyan-400 font-en">৳১,৫৫০</span>
                                        <span class="text-[10px] text-slate-400 block">১টি স্ট্র্যাপ</span>
                                    </div>
                                </div>
                            </label>

                            <label class="variety-card cursor-pointer">
                                <input type="radio" name="variety_id" value="pro_combo" class="hidden" checked>
                                <div class="variety-content p-4 rounded-2xl border border-slate-800 transition flex flex-col justify-between h-full bg-slate-950/70">
                                    <div class="flex items-center gap-2.5 mb-2">
                                        <div class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center shrink-0">
                                            <div class="w-1.5 h-1.5 rounded-full bg-slate-900"></div>
                                        </div>
                                        <h4 class="text-xs sm:text-sm font-bold text-white leading-tight">আল্ট্রা প্রো কম্বো</h4>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-base font-extrabold text-cyan-400 font-en">৳১,৮৯০</span>
                                        <span class="text-[10px] text-emerald-400 font-bold block">ফ্রি ডেলিভারি</span>
                                    </div>
                                </div>
                            </label>

                            <label class="variety-card cursor-pointer">
                                <input type="radio" name="variety_id" value="ultimate_gadget_combo" class="hidden">
                                <div class="variety-content p-4 rounded-2xl border border-slate-800 transition flex flex-col justify-between h-full bg-slate-950/70">
                                    <div class="flex items-center gap-2.5 mb-2">
                                        <div class="radio-indicator w-4 h-4 rounded-full border-2 border-slate-600 flex items-center justify-center shrink-0">
                                            <div class="w-1.5 h-1.5 rounded-full bg-slate-900"></div>
                                        </div>
                                        <h4 class="text-xs sm:text-sm font-bold text-white leading-tight">আলটিমেট কম্বো</h4>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-base font-extrabold text-cyan-400 font-en">৳২,৬৫০</span>
                                        <span class="text-[10px] text-emerald-400 font-bold block">ওয়াচ + এয়ারবাডস</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- STEP 2: Quantity & Color Selection -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-bold text-white mb-2 flex items-center justify-between">
                                <span class="flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-cyan-500 text-slate-950 flex items-center justify-center text-xs font-en font-black">২</span>
                                    পরিমাণ:
                                </span>
                            </label>

                            <div class="flex items-center gap-3">
                                <div class="inline-flex items-center border border-slate-700 rounded-2xl p-1 bg-slate-950 shadow-inner">
                                    <button type="button" id="btn-qty-minus" class="w-10 h-10 rounded-xl bg-slate-800 text-cyan-400 hover:bg-slate-700 flex items-center justify-center font-bold text-lg transition shadow-sm">
                                        <i class="fa-solid fa-minus text-xs"></i>
                                    </button>
                                    <input type="number" id="quantity-input" value="1" min="1" max="10" class="w-16 text-center font-black text-white text-lg bg-transparent border-0 focus:ring-0 font-en">
                                    <button type="button" id="btn-qty-plus" class="w-10 h-10 rounded-xl bg-slate-800 text-cyan-400 hover:bg-slate-700 flex items-center justify-center font-bold text-lg transition shadow-sm">
                                        <i class="fa-solid fa-plus text-xs"></i>
                                    </button>
                                </div>
                                <span class="text-xs text-slate-400">পিস / সেট</span>
                            </div>
                        </div>

                        <!-- Color preference for order -->
                        <div>
                            <label class="block text-sm font-bold text-white mb-2 flex items-center gap-2">
                                <i class="fa-solid fa-palette text-cyan-400 text-xs"></i>
                                পছন্দের মূল স্ট্র্যাপ কালার:
                            </label>
                            <input type="hidden" id="hidden_selected_color" name="hidden_selected_color" value="আলপাইন অরেঞ্জ">
                            <div class="text-xs text-slate-300 p-3 rounded-xl bg-slate-950 border border-slate-800 flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-cyan-400 shrink-0"></span>
                                <span>উপরের কালার প্যানেলে ক্লিক করে যেকোনো স্ট্র্যাপ বেছে নিন (ডিফল্ট: অরেঞ্জ)</span>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 3: Customer Information -->
                    <div>
                        <label class="block text-sm font-bold text-white mb-3 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-cyan-500 text-slate-950 flex items-center justify-center text-xs font-en font-black">৩</span>
                            আপনার নাম, মোবাইল নম্বর ও ঠিকানা দিন:
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="customer_name" class="block text-xs font-bold text-slate-300 mb-1">
                                    আপনার নাম <span class="text-red-400">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                                        <i class="fa-regular fa-user"></i>
                                    </span>
                                    <input type="text" id="customer_name" name="customer_name" required placeholder="আপনার সম্পূর্ণ নাম লিখুন" class="w-full pl-10 pr-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none text-xs sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="customer_phone" class="block text-xs font-bold text-slate-300 mb-1">
                                    মোবাইল নম্বর <span class="text-red-400">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <input type="tel" id="customer_phone" name="customer_phone" required placeholder="০১XXXXXXXXX" class="w-full pl-10 pr-4 py-3 rounded-xl bg-slate-950 border border-slate-700 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none text-xs sm:text-sm font-en">
                                </div>
                                <p id="phone-error" class="hidden text-[11px] text-red-400 mt-1">দয়া করে সঠিক ১১ ডিজিটের মোবাইল নম্বর দিন (যেমন: 017XXXXXXXX)</p>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="customer_address" class="block text-xs font-bold text-slate-300 mb-1">
                                    ডেলিভারির সম্পূর্ণ ঠিকানা <span class="text-red-400">*</span>
                                </label>
                                <div class="relative">
                                    <span class="absolute top-3 left-3.5 pointer-events-none text-slate-500">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <textarea id="customer_address" name="customer_address" rows="2" required placeholder="রোড নং, বাড়ি নং, এলাকা/উপজেলা, জেলার নাম বিস্তারিত লিখুন" class="w-full pl-10 pr-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 text-white placeholder-slate-500 focus:border-cyan-500 focus:outline-none text-xs sm:text-sm"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STEP 4: Delivery Location -->
                    <div>
                        <label class="block text-sm font-bold text-white mb-2 flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-cyan-500 text-slate-950 flex items-center justify-center text-xs font-en font-black">৪</span>
                            ডেলিভারি এরিয়া নির্বাচন করুন:
                        </label>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="delivery_area" value="inside_dhaka" class="hidden peer" checked>
                                <div class="p-3.5 rounded-xl border border-slate-700 bg-slate-950 peer-checked:border-cyan-400 peer-checked:bg-cyan-950/40 transition flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <i class="fa-solid fa-location-dot text-cyan-400"></i>
                                        <span class="text-xs font-bold text-slate-200">ঢাকার ভেতরে</span>
                                    </div>
                                    <span class="text-xs font-bold text-cyan-300 font-en">৳৭০</span>
                                </div>
                            </label>

                            <label class="cursor-pointer">
                                <input type="radio" name="delivery_area" value="outside_dhaka" class="hidden peer">
                                <div class="p-3.5 rounded-xl border border-slate-700 bg-slate-950 peer-checked:border-cyan-400 peer-checked:bg-cyan-950/40 transition flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <i class="fa-solid fa-truck text-cyan-400"></i>
                                        <span class="text-xs font-bold text-slate-200">ঢাকার বাইরে (সারা দেশ)</span>
                                    </div>
                                    <span class="text-xs font-bold text-cyan-300 font-en">৳১৩০</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- STEP 5: Live Order Summary Breakdown -->
                    <div class="bg-slate-950 p-5 rounded-2xl border border-slate-800 space-y-2.5 text-xs md:text-sm">
                        <h4 class="font-bold text-slate-200 border-b border-slate-800 pb-2 flex items-center justify-between">
                            <span>অর্ডার সামারি</span>
                            <span id="summary-variety-name" class="text-cyan-400 font-semibold">আল্ট্রা প্রো কম্বো</span>
                        </h4>

                        <div class="flex justify-between text-slate-400">
                            <span>নির্বাচিত পরিমাণ:</span>
                            <span id="summary-qty-display" class="font-bold text-white font-en">১ কম্বো</span>
                        </div>

                        <div class="flex justify-between text-slate-400">
                            <span>সাব-টোটাল মূল্য:</span>
                            <span id="summary-subtotal" class="font-bold text-white font-en">৳১,৮৯০</span>
                        </div>

                        <div id="summary-discount-row" class="hidden flex justify-between text-emerald-400 font-bold">
                            <span>স্পেশাল ক্যাশ ছাড়:</span>
                            <span id="summary-discount" class="font-en">- ৳০</span>
                        </div>

                        <div class="flex justify-between text-slate-400">
                            <span>ডেলিভারি চার্জ:</span>
                            <span id="summary-delivery" class="font-bold text-emerald-400 font-en">ফ্রি হোম ডেলিভারি (৳০)</span>
                        </div>

                        <div class="flex justify-between items-center text-base md:text-lg font-black text-white pt-2 border-t border-slate-800">
                            <span>সর্বমোট প্রদেয় মূল্য (COD):</span>
                            <span id="summary-total" class="text-cyan-400 text-xl font-en">৳১,৮৯০</span>
                        </div>
                    </div>

                    <!-- Hidden Inputs for dynamic calculation -->
                    <input type="hidden" id="hidden_total_price" name="hidden_total_price" value="1890">
                    <input type="hidden" id="hidden_delivery_charge" name="hidden_delivery_charge" value="0">
                    <input type="hidden" id="hidden_discount" name="hidden_discount" value="0">
                    <input type="hidden" id="hidden_quantity" name="hidden_quantity" value="1">

                    <!-- Big Order Submit CTA -->
                    <div class="space-y-3">
                        <button type="submit" id="submit-order-btn" class="btn-cyber-cta w-full py-4 px-6 rounded-2xl text-base md:text-lg font-extrabold flex items-center justify-center gap-3 shadow-2xl">
                            <i class="fa-solid fa-circle-check text-xl text-cyan-200"></i>
                            <span>অর্ডার নিশ্চিত করুন — <span id="submit-btn-total" class="font-en">৳১,৮৯০</span> (ক্যাশ অন ডেলিভারি)</span>
                        </button>

                        <div class="flex items-center justify-center gap-6 text-[11px] text-slate-400 font-medium pt-1">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-lock text-cyan-400"></i> নিরাপদ চেকআউট</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-hand-holding-dollar text-emerald-400"></i> অগ্রিম টাকা নেই</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-rotate-left text-blue-400"></i> ১ বছর অফিসিয়াল ওয়ারেন্টি</span>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="py-12 md:py-16 bg-slate-950/60 border-y border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-cyan-400 bg-cyan-950 px-3.5 py-1 rounded-full uppercase tracking-wider border border-cyan-800">কাস্টমার ফিডব্যাক</span>
                <h3 class="text-2xl md:text-3xl font-black text-white mt-2">
                    ব্যবহারকারীদের অভিজ্ঞতা ও মতামত
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Review 1 -->
                <div class="bg-slate-900/80 p-6 rounded-2xl border border-slate-800 shadow-md flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-xs gap-1 mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-xs text-slate-300 leading-relaxed italic">
                            “ডিসপ্লে কোয়ালিটি সত্যি অসাধারণ! রোদের মধ্যেও একদম পরিষ্কার দেখা যায়। কলিং স্পিকার সাউন্ডও বেশ স্পষ্ট। বাইক চালানোর সময় ফোন বের না করেই কথা বলতে পারি। টাকা উসুল গ্যাজেট!”
                        </p>
                    </div>
                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-slate-800">
                        <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold text-xs border border-cyan-500/30">
                            তান
                        </div>
                        <div>
                            <h5 class="text-xs font-bold text-white">তানভীর আহমেদ</h5>
                            <p class="text-[10px] text-slate-400">উত্তরা, ঢাকা (ভেরিফাইড ক্রেতা)</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-slate-900/80 p-6 rounded-2xl border border-slate-800 shadow-md flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-xs gap-1 mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-xs text-slate-300 leading-relaxed italic">
                            “অরেঞ্জ আলপাইন স্ট্র্যাপের লুকটা প্রিমিয়াম অ্যাপল ওয়াচ আল্ট্রার মতো লাগে। ব্যাটারি ব্যাকআপ এক চার্জে ৬ দিন পেয়েছি। সাথে স্ক্রিন প্রোটেক্টর ও অতিরিক্ত ব্ল্যাক স্ট্র্যাপ পেয়ে খুবই খুশি।”
                        </p>
                    </div>
                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-slate-800">
                        <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold text-xs border border-cyan-500/30">
                            নাফ
                        </div>
                        <div>
                            <h5 class="text-xs font-bold text-white">নাফিস ইকবাল</h5>
                            <p class="text-[10px] text-slate-400">জিইসি, চট্টগ্রাম (ভেরিফাইড ক্রেতা)</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-slate-900/80 p-6 rounded-2xl border border-slate-800 shadow-md flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-xs gap-1 mb-3">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-xs text-slate-300 leading-relaxed italic">
                            “আমি আলটিমেট কম্বো নিয়েছিলাম যেখানে এয়ারবাডসও ছিল। ২ দিনের মধ্যে ডেলিভারি পেয়েছি। ডেলিভারি ম্যানের সামনে ঘড়ি অন করে চেক করতে দিয়েছিল। ১ বছরের ওয়ারেন্টি কার্ডও বক্সে পেয়েছি।”
                        </p>
                    </div>
                    <div class="flex items-center gap-3 mt-4 pt-4 border-t border-slate-800">
                        <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold text-xs border border-cyan-500/30">
                            মাহ
                        </div>
                        <div>
                            <h5 class="text-xs font-bold text-white">মাহিন চৌধুরী</h5>
                            <p class="text-[10px] text-slate-400">উপশহর, সিলেট (ভেরিফাইড ক্রেতা)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Accordion Section -->
    <section class="py-12 md:py-16 bg-[#030712]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-xl mx-auto mb-10">
                <span class="text-xs font-bold text-cyan-400 bg-cyan-950 px-3 py-1 rounded-full uppercase tracking-wider border border-cyan-800">প্রশ্ন ও উত্তর</span>
                <h3 class="text-2xl md:text-3xl font-black text-white mt-2">
                    সাধারণ কিছু জিজ্ঞাসা (FAQ)
                </h3>
            </div>

            <div class="space-y-4">
                <details class="group bg-slate-900/80 p-5 rounded-2xl border border-slate-800 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm text-white">
                        <span>ঘড়িটি কি আইফোন (iOS) এবং অ্যান্ড্রয়েড উভয় ফোনেই চলবে?</span>
                        <i class="fa-solid fa-chevron-down text-xs text-cyan-400 group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-xs text-slate-400 mt-3 leading-relaxed border-t border-slate-800 pt-3">
                        হ্যাঁ! ঘড়িটি যেকোনো অ্যান্ড্রয়েড স্মার্টফোন এবং অ্যাপল আইফোনের সাথে সহজে ব্লুটুথ ও সাপোর্টেড অ্যাপসের মাধ্যমে কানেক্ট হয়।
                    </p>
                </details>

                <details class="group bg-slate-900/80 p-5 rounded-2xl border border-slate-800 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm text-white">
                        <span>পানিতে ভিজলে কি ঘড়িটি নষ্ট হবে?</span>
                        <i class="fa-solid fa-chevron-down text-xs text-cyan-400 group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-xs text-slate-400 mt-3 leading-relaxed border-t border-slate-800 pt-3">
                        ঘড়িটিতে রয়েছে IP68 ওয়াটার রেজিস্ট্যান্স সুরক্ষা। ফলে বৃষ্টি, ঘাম বা হাত ধোয়ার পানিতে এটি সম্পূর্ণ সুরক্ষিত। তবে গরম পানি বা গভীর সাগরে সাঁতার কাটার সময় না পরাই শ্রেয়।
                    </p>
                </details>

                <details class="group bg-slate-900/80 p-5 rounded-2xl border border-slate-800 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm text-white">
                        <span>১ বছরের রিপ্লেসমেন্ট ওয়ারেন্টি কীভাবে পাবো?</span>
                        <i class="fa-solid fa-chevron-down text-xs text-cyan-400 group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-xs text-slate-400 mt-3 leading-relaxed border-t border-slate-800 pt-3">
                        প্রতিটি ঘড়ির সাথেই আমাদের প্রতিষ্ঠানের অফিসিয়াল সিলযুক্ত ওয়ারেন্টি কার্ড দেওয়া থাকে। যেকোনো সমস্যা হলে আমাদের হটলাইনে কল করলেই ফ্রিতে পার্টস বা রিপ্লেসমেন্ট সুবিধা পাবেন।
                    </p>
                </details>

                <details class="group bg-slate-900/80 p-5 rounded-2xl border border-slate-800 [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between cursor-pointer font-bold text-sm text-white">
                        <span>ডেলিভারি ম্যানের সামনে কি পার্সেল চেক করা যাবে?</span>
                        <i class="fa-solid fa-chevron-down text-xs text-cyan-400 group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="text-xs text-slate-400 mt-3 leading-relaxed border-t border-slate-800 pt-3">
                        অবশ্যই! পার্সেল হাতে পেয়ে ডেলিভারি ম্যানের উপস্থিতিতে বক্স খুলে ঘড়ি অন করে চেক করে এরপর ক্যাশ অন ডেলিভারিতে মূল্য পরিশোধ করবেন। পছন্দ না হলে কোনো চার্জ ছাড়াই ফেরত দিতে পারবেন।
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-slate-950 text-white pt-12 pb-24 md:pb-12 border-t border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-8 border-b border-slate-900">
                <div class="md:col-span-2 space-y-3">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h4 class="text-lg font-black text-white">আল্ট্রা-২ প্রো স্মার্টওয়াচ (Ultra-2 Pro)</h4>
                    </div>
                    <p class="text-xs text-slate-400 max-w-sm leading-relaxed">
                        ২.০৪ ইঞ্চি সুপার অ্যামোলেড ডিসপ্লে, এইচডি ব্লুটুথ কলিং ও ১ বছরের অফিসিয়াল রিপ্লেসমেন্ট ওয়ারেন্টিযুক্ত প্রিমিয়াম স্মার্টওয়াচ।
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="text-xs font-semibold text-cyan-400">হটলাইন:</span>
                        <a href="tel:01908121146" class="text-sm font-bold text-white hover:text-cyan-400 font-mono">০১৯০৮-১২১১৪৬</a>
                    </div>
                </div>

                <div>
                    <h5 class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-3">জরুরি লিংক</h5>
                    <ul class="text-xs space-y-2 text-slate-400">
                        <li><a href="#order-form-section" class="hover:text-white transition">অনলাইন অর্ডার</a></li>
                        <li><a href="admin.php" class="hover:text-white transition">অর্ডার ট্র্যাকিং / অ্যাডমিন</a></li>
                        <li><a href="https://wa.me/8801908121146" target="_blank" class="hover:text-white transition">হোয়াটসঅ্যাপ সাপোর্ট</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="text-xs font-bold text-cyan-400 uppercase tracking-wider mb-3">নিরাপত্তা ও ওয়ারেন্টি</h5>
                    <ul class="text-xs space-y-2 text-slate-400">
                        <li><i class="fa-solid fa-check text-cyan-400 mr-1.5"></i>ক্যাশ অন ডেলিভারি (COD)</li>
                        <li><i class="fa-solid fa-check text-cyan-400 mr-1.5"></i>চেক করে মূল্য পরিশোধ</li>
                        <li><i class="fa-solid fa-check text-cyan-400 mr-1.5"></i>১ বছর অফিসিয়াল রিপ্লেসমেন্ট</li>
                    </ul>
                </div>
            </div>

            <div class="pt-6 flex flex-col sm:flex-row items-center justify-between text-[11px] text-slate-500 gap-3">
                <p>© <?= date('Y') ?> আল্ট্রা-২ প্রো স্মার্টওয়াচ। সর্বস্বত্ব সংরক্ষিত।</p>
                <p>Designed & Developed with ❤️ by <a href="https://codingburg.com" target="_blank" class="text-cyan-400 font-semibold hover:underline">CodingBurg</a></p>
            </div>
        </div>
    </footer>

    <!-- Mobile Bottom Sticky CTA -->
    <div class="mobile-sticky-bar md:hidden px-4 py-3 shadow-2xl">
        <div class="flex items-center justify-between gap-3">
            <div>
                <span class="text-[10px] text-slate-400 block leading-tight">সর্বমোট (COD)</span>
                <span class="text-lg font-black text-cyan-400 font-en leading-none">৳১,৮৯০</span>
            </div>
            <a href="#order-form-section" class="btn-cyber-cta flex-1 py-3 px-4 rounded-xl text-xs font-extrabold flex items-center justify-center gap-2 shadow-lg">
                <i class="fa-solid fa-bag-shopping"></i>
                <span>এখনই অর্ডার করুন</span>
            </a>
            <a href="tel:01908121146" class="w-10 h-10 rounded-xl bg-slate-800 text-cyan-400 flex items-center justify-center shrink-0 border border-slate-700">
                <i class="fa-solid fa-phone text-xs"></i>
            </a>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/8801908121146?text=হ্যালো,%20আমি%20আল্ট্রা-২%20প্রো%20স্মার্টওয়াচ%20সম্পর্কে%20জানতে%20চাই" 
       target="_blank" 
       class="fixed bottom-20 md:bottom-6 right-4 z-40 w-13 h-13 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white flex items-center justify-center text-2xl shadow-xl hover:scale-110 transition duration-300"
       title="WhatsApp Chat">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <!-- Social Proof Toast Popup Container -->
    <div id="live-order-toast" class="fixed bottom-24 md:bottom-6 left-4 z-40 transform translate-y-32 opacity-0 transition duration-500 bg-slate-900 border border-slate-700 rounded-2xl p-3 shadow-2xl flex items-center gap-3 max-w-xs pointer-events-none">
        <div class="w-9 h-9 rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center text-sm font-bold shrink-0 border border-cyan-500/30">
            <i class="fa-solid fa-clock"></i>
        </div>
        <div class="text-left leading-tight">
            <h5 class="text-xs font-bold text-white"><span id="toast-customer-name">তানভীর আহমেদ</span> (<span id="toast-customer-area">উত্তরা</span>)</h5>
            <p class="text-[10px] text-cyan-300 font-medium">একটু আগে <span id="toast-product-name" class="font-bold">আল্ট্রা প্রো কম্বো</span> অর্ডার করেছেন!</p>
        </div>
    </div>

    <!-- Custom Main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
