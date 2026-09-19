<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - الرئيسية</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts (Cairo & Tajawal) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/rtl.css">
    {{-- <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/ltr.css"> --}}

</head>

<body>

    <!-- ==================== HEADER ==================== -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="#">
                دار الأثاث الفاخر <i class="fa-solid fa-couch logo-icon"></i>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">تصفح المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">

                    <!-- زر تغيير اللغة -->
                    <a href="#" class="lang-switcher-btn mx-2">
                        <i class="fa-solid fa-globe"></i>
                        <span class="lang-text">AR</span>
                    </a>


                    {{-- @if (app()->getLocale() == 'ar')
                        <a href="{{ route('lang.switch', 'en') }}" class="lang-switcher-btn mx-2">
                            <i class="fa-solid fa-globe"></i>
                            <span>EN</span>
                        </a>
                    @else
                        <a href="{{ route('lang.switch', 'ar') }}" class="lang-switcher-btn mx-2">
                            <i class="fa-solid fa-globe"></i>
                            <span>AR</span>
                        </a>
                    @endif --}}


                    <a href="#" class="icon-btn"><i class="fa-solid fa-heart"></i><span
                            class="badge-count">0</span></a>
                    <a href="#" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i><span
                            class="badge-count">2</span></a>
                    <a href="#" class="btn-login ms-3"><i class="fa-solid fa-user"></i> تسجيل الدخول</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- ==================== Hero Section ==================== -->
        <section class="hero-section">
            <div class="container px-lg-5">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <div class="hero-badge">مفروشات ملكية فاخرة</div>
                        <h1 class="hero-title">ارتق بجمال منزلك مع أرقى<br>تصاميم الأثاث العالمي</h1>
                        <p class="hero-subtitle">صناعة يدوية فائقة الجودة من خشب الجوز الأصيل والأقمشة المخملية الفاخرة
                            لتلائم أصحاب الذوق الرفيع.</p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#" class="btn-hero-solid">تصفح المجموعة</a>
                            <a href="#" class="btn-hero-outline">اكتشف قصتنا</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== قسم الفلاش سيل (Flash Sale) ==================== -->
        <section class="flash-sale-section mt-5">
            <div class="container px-lg-5">
                <!-- هيدر الفلاش سيل مع العداد التنازلي -->
                <div class="flash-header">
                    <div class="flash-title-box">
                        <i class="fa-solid fa-bolt flash-icon"></i>
                        <h2 class="flash-title">عروض الحرق السريعة</h2>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-bold text-muted d-none d-md-block">تنتهي العروض خلال:</span>
                        <div class="countdown-timer" id="flash-countdown">
                            <div class="countdown-item"><span class="countdown-number" id="cd-days">02</span><span
                                    class="countdown-label">أيام</span></div>
                            <div class="countdown-item"><span class="countdown-number" id="cd-hours">14</span><span
                                    class="countdown-label">ساعات</span></div>
                            <div class="countdown-item"><span class="countdown-number" id="cd-mins">45</span><span
                                    class="countdown-label">دقائق</span></div>
                            <div class="countdown-item"><span class="countdown-number" id="cd-secs">30</span><span
                                    class="countdown-label">ثانية</span></div>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- منتج فلاش سيل 1 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card h-100 border-danger border-opacity-25">
                            <div class="product-img-box">
                                <span class="badge-discount">-30%</span>
                                <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=500&q=80"
                                    alt="كرسي">
                                <div class="action-btns">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                    السلة</button>
                            </div>
                            <div class="product-info">
                                <span class="product-category">غرف المعيشة</span>
                                <a href="#" class="product-name">كرسي بذراعين (تصميم إيطالي)</a>
                                <div class="price-box">
                                    <span class="flash-price">4,200 ج.م</span>
                                    <span class="old-price">6,000 ج.م</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- منتج فلاش سيل 2 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card h-100 border-danger border-opacity-25">
                            <div class="product-img-box">
                                <span class="badge-discount">-40%</span>
                                <img src="https://images.unsplash.com/photo-1538688525198-9b88f6f53126?w=500&q=80"
                                    alt="تسريحة">
                                <div class="action-btns">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                    السلة</button>
                            </div>
                            <div class="product-info">
                                <span class="product-category">غرف النوم</span>
                                <a href="#" class="product-name">تسريحة خشبية مع مرآة دائرية</a>
                                <div class="price-box">
                                    <span class="flash-price">7,500 ج.م</span>
                                    <span class="old-price">12,500 ج.م</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- منتج فلاش سيل 3 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card h-100 border-danger border-opacity-25">
                            <div class="product-img-box">
                                <span class="badge-discount">-25%</span>
                                <img src="https://images.unsplash.com/photo-1567016432779-094069806ea4?w=500&q=80"
                                    alt="طاولة قهوة">
                                <div class="action-btns">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                    السلة</button>
                            </div>
                            <div class="product-info">
                                <span class="product-category">طاولات</span>
                                <a href="#" class="product-name">طاولة قهوة بسطح زجاجي</a>
                                <div class="price-box">
                                    <span class="flash-price">2,625 ج.م</span>
                                    <span class="old-price">3,500 ج.م</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- منتج فلاش سيل 4 -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card h-100 border-danger border-opacity-25">
                            <div class="product-img-box">
                                <span class="badge-discount">-50%</span>
                                <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=500&q=80"
                                    alt="مكتبة">
                                <div class="action-btns">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                    السلة</button>
                            </div>
                            <div class="product-info">
                                <span class="product-category">تخزين ومكتبات</span>
                                <a href="#" class="product-name">مكتبة حائط مودرن</a>
                                <div class="price-box">
                                    <span class="flash-price">5,000 ج.م</span>
                                    <span class="old-price">10,000 ج.م</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== بانر التخفيضات (Discount Banner) ==================== -->
        <section class="discount-banner">
            <div class="container">
                <h2 class="discount-title">تخفيضات نهاية الموسم تصل إلى <span>50%</span></h2>
                <p class="discount-desc">جدد أثاث منزلك الآن بأفخم الموديلات وبأسعار لا تقبل المنافسة لفترة محدودة
                    جداً.</p>
                <a href="#" class="btn-discount">تسوق العروض الآن <i
                        class="fa-solid fa-arrow-left ms-2"></i></a>
            </div>
        </section>


        <!-- ==================== قسم: الأكثر مبيعاً (Best Sellers) ==================== -->
        <section class="py-5">
            <div class="container px-lg-5">
                <div class="section-header">
                    <h2 class="section-title">الأكثر مبيعاً</h2>
                    <a href="#" class="text-dark text-decoration-none fw-bold" style="font-size: 1.1rem;">عرض
                        الكل <i class="fa fa-arrow-left ms-1" style="color: var(--theme-yellow)"></i></a>
                </div>

                <div class="row g-4">
                    <!-- المنتج العادي (بدون خصم) -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card h-100">
                            <div class="product-img-box">
                                <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=500&q=80"
                                    alt="كرسي مفرد">
                                <div class="action-btns">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                    السلة</button>
                            </div>
                            <div class="product-info">
                                <span class="product-category">غرف المعيشة</span>
                                <a href="#" class="product-name">كرسي استرخاء مخملي فاخر</a>
                                <div class="product-price">4,500 ج.م</div>
                            </div>
                        </div>
                    </div>

                    <!-- منتج آخر -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-card h-100">
                            <div class="product-img-box">
                                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&q=80"
                                    alt="أريكة">
                                <div class="action-btns">
                                    <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                    السلة</button>
                            </div>
                            <div class="product-info">
                                <span class="product-category">غرف المعيشة</span>
                                <a href="#" class="product-name">أريكة كلاسيكية بخشب الجوز</a>
                                <div class="product-price">12,000 ج.م</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer>
        <div class="container px-lg-5">
            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-title">دار الأثاث الفاخر <i class="fa-solid fa-couch ms-2 text-white"></i></h3>
                    <p class="text-white-50 lh-lg pe-lg-4">ارتق بجمال منزلك مع أرقى تصاميم الأثاث العالمي. نحن نقدم
                        أفضل حلول الأثاث الفاخر الذي يجمع بين التصميم العصري والجودة الاستثنائية.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="footer-title">روابط هامة</h4>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="#">الرئيسية</a></li>
                        <li><a href="#">تصفح المجموعة</a></li>
                        <li><a href="#">من نحن</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">حسابي</h4>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="#">تسجيل الدخول</a></li>
                        <li><a href="#">عربة التسوق</a></li>
                        <li><a href="#">قائمة المفضلة</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">تواصل معنا</h4>
                    <ul class="list-unstyled lh-lg text-white-50">
                        <li><i class="fa fa-location-dot ms-2" style="color: var(--theme-yellow)"></i> القاهرة، مصر
                        </li>
                        <li><i class="fa fa-phone ms-2" style="color: var(--theme-yellow)"></i> +20 123 456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="border-top pt-4 mt-4 text-center text-white-50 small"
                style="border-color: #2a2825 !important;">
                &copy; 2026 جميع الحقوق محفوظة لـ دار الأثاث الفاخر.
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('web-sites') }}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- سكريبت بسيط لتشغيل عداد الفلاش سيل (البيانات مرئية فقط ليتم ربطها بـ Laravel لاحقاً) -->
    <script>
        // في لارافل، يمكنك استبدال هذا التاريخ بتاريخ نهاية العرض من الـ Database

        // سنضع تاريخ تجريبي بعد 3 أيام من الآن
        var countDownDate = new Date();
        countDownDate.setDate(countDownDate.getDate() + 3);
        countDownDate.setHours(countDownDate.getHours() + 5);
        countDownDate = countDownDate.getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // إضافة صفر على اليسار إذا كان الرقم أقل من 10
            document.getElementById("cd-days").innerHTML = days < 10 ? '0' + days : days;
            document.getElementById("cd-hours").innerHTML = hours < 10 ? '0' + hours : hours;
            document.getElementById("cd-mins").innerHTML = minutes < 10 ? '0' + minutes : minutes;
            document.getElementById("cd-secs").innerHTML = seconds < 10 ? '0' + seconds : seconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("flash-countdown").innerHTML =
                    "<div class='text-danger fw-bold'>انتهى العرض</div>";
            }
        }, 1000);
    </script>
</body>

</html>
