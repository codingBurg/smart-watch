/**
 * Ultra-2 Pro Smartwatch - Interactive Script
 * Developed by CodingBurg (codingburg.com)
 * Hotline: 01908121146
 */

document.addEventListener('DOMContentLoaded', function () {
    const packages = {
        'standard_edition': {
            id: 'standard_edition',
            name: 'স্ট্যান্ডার্ড এডিশন (স্মার্টওয়াচ + ১টি স্ট্র্যাপ)',
            price: 1550,
            unitLabel: 'পিস',
            freeDeliveryMinQty: 2,
            bulkDiscountMinQty: 2,
            bulkDiscountAmount: 100
        },
        'pro_combo': {
            id: 'pro_combo',
            name: 'আল্ট্রা প্রো কম্বো (স্মার্টওয়াচ + ২টি স্ট্র্যাপ + স্ক্রিন প্রোটেক্টর)',
            price: 1890,
            unitLabel: 'কম্বো',
            freeDeliveryMinQty: 1, // Free Delivery on Pro Combo
            bulkDiscountMinQty: 2,
            bulkDiscountAmount: 150
        },
        'ultimate_gadget_combo': {
            id: 'ultimate_gadget_combo',
            name: 'আলটিমেট গ্যাজেট কম্বো (স্মার্টওয়াচ + TWS এয়ারবাডস + ৩টি স্ট্র্যাপ)',
            price: 2650,
            unitLabel: 'কম্বো',
            freeDeliveryMinQty: 1,
            bulkDiscountMinQty: 2,
            bulkDiscountAmount: 250
        }
    };

    const deliveryRates = {
        'inside_dhaka': 70,
        'outside_dhaka': 130
    };

    let currentVariety = 'pro_combo';
    let currentQuantity = 1;
    let currentDeliveryArea = 'inside_dhaka';

    const qtyInput = document.getElementById('quantity-input');
    const btnQtyMinus = document.getElementById('btn-qty-minus');
    const btnQtyPlus = document.getElementById('btn-qty-plus');
    const varietyRadios = document.querySelectorAll('input[name="variety_id"]');
    const deliveryRadios = document.querySelectorAll('input[name="delivery_area"]');

    const summaryVarietyName = document.getElementById('summary-variety-name');
    const summaryQtyDisplay = document.getElementById('summary-qty-display');
    const summarySubtotal = document.getElementById('summary-subtotal');
    const summaryDiscountRow = document.getElementById('summary-discount-row');
    const summaryDiscount = document.getElementById('summary-discount');
    const summaryDelivery = document.getElementById('summary-delivery');
    const summaryTotal = document.getElementById('summary-total');
    const submitBtnTotal = document.getElementById('submit-btn-total');
    const bulkDiscountBanner = document.getElementById('bulk-discount-banner');

    const hiddenTotal = document.getElementById('hidden_total_price');
    const hiddenDelivery = document.getElementById('hidden_delivery_charge');
    const hiddenDiscount = document.getElementById('hidden_discount');
    const hiddenQuantity = document.getElementById('hidden_quantity');

    const orderForm = document.getElementById('order-form');
    const phoneInput = document.getElementById('customer_phone');
    const phoneError = document.getElementById('phone-error');

    function toBengaliNumber(num) {
        const bnDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return num.toString().replace(/\d/g, d => bnDigits[d]);
    }

    function formatTaka(amount) {
        return '৳' + toBengaliNumber(amount.toLocaleString('en-US'));
    }

    function recalculateOrder() {
        const pack = packages[currentVariety];
        if (!pack) return;

        const subtotal = pack.price * currentQuantity;
        let deliveryCharge = deliveryRates[currentDeliveryArea] || 70;
        let discount = 0;
        let isFreeDelivery = false;

        if (currentQuantity >= pack.freeDeliveryMinQty) {
            isFreeDelivery = true;
            deliveryCharge = 0;
        }

        if (currentQuantity >= pack.bulkDiscountMinQty) {
            discount = pack.bulkDiscountAmount * (currentQuantity - 1);
        }

        const grandTotal = Math.max(0, subtotal - discount + deliveryCharge);

        if (summaryVarietyName) summaryVarietyName.textContent = pack.name;
        if (summaryQtyDisplay) summaryQtyDisplay.textContent = `${toBengaliNumber(currentQuantity)} ${pack.unitLabel}`;
        if (summarySubtotal) summarySubtotal.textContent = formatTaka(subtotal);

        if (summaryDiscountRow && summaryDiscount) {
            if (discount > 0) {
                summaryDiscountRow.classList.remove('hidden');
                summaryDiscount.textContent = `- ${formatTaka(discount)}`;
            } else {
                summaryDiscountRow.classList.add('hidden');
            }
        }

        if (summaryDelivery) {
            if (isFreeDelivery) {
                summaryDelivery.innerHTML = '<span class="text-emerald-400 font-bold">ফ্রি হোম ডেলিভারি (৳০)</span>';
            } else {
                summaryDelivery.textContent = formatTaka(deliveryCharge);
            }
        }

        if (summaryTotal) summaryTotal.textContent = formatTaka(grandTotal);
        if (submitBtnTotal) submitBtnTotal.textContent = formatTaka(grandTotal);

        if (bulkDiscountBanner) {
            if (isFreeDelivery || discount > 0) {
                bulkDiscountBanner.classList.remove('hidden');
                bulkDiscountBanner.classList.add('flex');
            } else {
                bulkDiscountBanner.classList.add('hidden');
                bulkDiscountBanner.classList.remove('flex');
            }
        }

        if (hiddenTotal) hiddenTotal.value = grandTotal;
        if (hiddenDelivery) hiddenDelivery.value = deliveryCharge;
        if (hiddenDiscount) hiddenDiscount.value = discount;
        if (hiddenQuantity) hiddenQuantity.value = currentQuantity;
    }

    varietyRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.checked) {
                currentVariety = this.value;
                recalculateOrder();
            }
        });
    });

    deliveryRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            if (this.checked) {
                currentDeliveryArea = this.value;
                recalculateOrder();
            }
        });
    });

    if (btnQtyMinus) {
        btnQtyMinus.addEventListener('click', function () {
            if (currentQuantity > 1) {
                currentQuantity--;
                if (qtyInput) qtyInput.value = currentQuantity;
                recalculateOrder();
            }
        });
    }

    if (btnQtyPlus) {
        btnQtyPlus.addEventListener('click', function () {
            if (currentQuantity < 10) {
                currentQuantity++;
                if (qtyInput) qtyInput.value = currentQuantity;
                recalculateOrder();
            }
        });
    }

    if (qtyInput) {
        qtyInput.addEventListener('change', function () {
            let val = parseInt(this.value, 10);
            if (isNaN(val) || val < 1) val = 1;
            if (val > 10) val = 10;
            currentQuantity = val;
            this.value = val;
            recalculateOrder();
        });
    }

    window.selectPackageFromCard = function (varietyId, defaultQty = 1) {
        const targetRadio = document.querySelector(`input[name="variety_id"][value="${varietyId}"]`);
        if (targetRadio) {
            targetRadio.checked = true;
            currentVariety = varietyId;
            currentQuantity = defaultQty;
            if (qtyInput) qtyInput.value = defaultQty;
            recalculateOrder();

            const formSection = document.getElementById('order-form-section');
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth' });
                formSection.classList.add('ring-4', 'ring-cyan-500', 'ring-opacity-50');
                setTimeout(() => {
                    formSection.classList.remove('ring-4', 'ring-cyan-500', 'ring-opacity-50');
                }, 1200);
            }
        }
    };

    // Color Swatch Switcher for Hero Watch Visual
    const heroWatchImage = document.getElementById('hero-watch-image');
    const colorSwatches = document.querySelectorAll('.color-swatch-btn');
    const selectedColorName = document.getElementById('selected-color-name');
    const hiddenColorInput = document.getElementById('hidden_selected_color');

    colorSwatches.forEach(swatch => {
        swatch.addEventListener('click', function () {
            const colorName = this.getAttribute('data-color-name');
            const imgSrc = this.getAttribute('data-img-src');

            colorSwatches.forEach(s => s.classList.remove('ring-4', 'ring-cyan-400', 'scale-110'));
            this.classList.add('ring-4', 'ring-cyan-400', 'scale-110');

            if (heroWatchImage && imgSrc) {
                heroWatchImage.classList.add('opacity-40');
                setTimeout(() => {
                    heroWatchImage.src = imgSrc;
                    heroWatchImage.classList.remove('opacity-40');
                }, 200);
            }

            if (selectedColorName) selectedColorName.textContent = colorName;
            if (hiddenColorInput) hiddenColorInput.value = colorName;
        });
    });

    function validateBDPhone(phone) {
        const clean = phone.replace(/[\s\-\+]/g, '');
        const regex = /^(?:\+?88)?01[3-9]\d{8}$/;
        return regex.test(clean);
    }

    if (phoneInput) {
        phoneInput.addEventListener('input', function () {
            if (this.value.trim().length >= 11) {
                if (validateBDPhone(this.value.trim())) {
                    if (phoneError) phoneError.classList.add('hidden');
                    this.classList.remove('border-red-500');
                    this.classList.add('border-cyan-500');
                } else {
                    if (phoneError) phoneError.classList.remove('hidden');
                    this.classList.add('border-red-500');
                    this.classList.remove('border-cyan-500');
                }
            } else {
                if (phoneError) phoneError.classList.add('hidden');
                this.classList.remove('border-red-500', 'border-cyan-500');
            }
        });
    }

    if (orderForm) {
        orderForm.addEventListener('submit', function (e) {
            const phoneVal = phoneInput ? phoneInput.value.trim() : '';
            if (!validateBDPhone(phoneVal)) {
                e.preventDefault();
                if (phoneError) phoneError.classList.remove('hidden');
                if (phoneInput) {
                    phoneInput.classList.add('border-red-500');
                    phoneInput.focus();
                }
                alert('দয়া করে সঠিক ১১ ডিজিটের বাংলাদেশি মোবাইল নম্বর দিন (যেমন: 017XXXXXXXX)');
                return false;
            }

            const submitBtn = document.getElementById('submit-order-btn');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin text-xl"></i> <span>অর্ডার প্রসেস হচ্ছে... অপেক্ষা করুন</span>';
            }
        });
    }

    // Countdown Timer
    let totalSeconds = 8 * 3600 + 35 * 60 + 10;
    function updateCountdown() {
        const hours = Math.floor(totalSeconds / 3600);
        const mins = Math.floor((totalSeconds % 3600) / 60);
        const secs = totalSeconds % 60;

        const hEl = document.getElementById('cd-hours');
        const mEl = document.getElementById('cd-mins');
        const sEl = document.getElementById('cd-secs');

        if (hEl) hEl.textContent = hours.toString().padStart(2, '0');
        if (mEl) mEl.textContent = mins.toString().padStart(2, '0');
        if (sEl) sEl.textContent = secs.toString().padStart(2, '0');

        if (totalSeconds > 0) {
            totalSeconds--;
        } else {
            totalSeconds = 12 * 3600;
        }
    }
    setInterval(updateCountdown, 1000);
    updateCountdown();

    recalculateOrder();

    // Social Proof Toast
    const recentOrders = [
        { name: 'তানভীর আহমেদ', area: 'উত্তরা, ঢাকা', pack: 'আল্ট্রা প্রো কম্বো' },
        { name: 'নাফিস ইকবাল', area: 'জিইসি, চট্টগ্রাম', pack: 'আলটিমেট গ্যাজেট কম্বো' },
        { name: 'সাকিব মাহমুদ', area: 'ধানমন্ডি, ঢাকা', pack: 'আল্ট্রা প্রো কম্বো' },
        { name: 'মাহিন চৌধুরী', area: 'উপশহর, সিলেট', pack: 'আলটিমেট গ্যাজেট কম্বো' },
        { name: 'রায়হান কবির', area: 'টঙ্গী, গাজীপুর', pack: 'স্ট্যান্ডার্ড এডিশন' }
    ];

    let orderIndex = 0;
    function showOrderPopup() {
        const container = document.getElementById('live-order-toast');
        if (!container) return;

        const order = recentOrders[orderIndex];
        orderIndex = (orderIndex + 1) % recentOrders.length;

        document.getElementById('toast-customer-name').textContent = order.name;
        document.getElementById('toast-customer-area').textContent = order.area;
        document.getElementById('toast-product-name').textContent = order.pack;

        container.classList.remove('translate-y-32', 'opacity-0');
        container.classList.add('translate-y-0', 'opacity-100');

        setTimeout(() => {
            container.classList.remove('translate-y-0', 'opacity-100');
            container.classList.add('translate-y-32', 'opacity-0');
        }, 5000);
    }

    setTimeout(() => {
        showOrderPopup();
        setInterval(showOrderPopup, 16000);
    }, 4000);
});
