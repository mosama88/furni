<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - من نحن</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts (Cairo & Tajawal) -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --theme-dark: #141311;
            --theme-yellow: #e5b940;
            --theme-gray: #f8f9fa;
            --text-light: #e0e0e0;
        }

        body {
            font-family: 'Tajawal', 'Cairo', sans-serif;
            background-color: var(--theme-gray);
            color: #333;
        }

        /* ==================== Navbar Styles ==================== */
        .custom-navbar {
            background-color: var(--theme-dark);
            border-bottom: 2px solid #2a2825;
            padding: 12px 0;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: 800;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand .logo-icon {
            color: var(--theme-yellow);
            font-size: 1.4rem;
        }

        .navbar-nav .nav-link {
            color: #ccc;
            font-weight: 500;
            font-size: 1.05rem;
            margin: 0 12px;
            padding: 10px 5px !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--theme-yellow);
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--theme-yellow);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .icon-btn {
            background: transparent;
            border: 1px solid #555;
            color: #fff;
            width: 42px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            position: relative;
            transition: 0.3s;
        }

        .icon-btn:hover {
            border-color: var(--theme-yellow);
            color: var(--theme-yellow);
        }

        .icon-btn .badge-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: var(--theme-yellow);
            color: #000;
            font-size: 0.75rem;
            font-weight: 700;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 2px solid var(--theme-dark);
        }

        .btn-login {
            background-color: var(--theme-yellow);
            color: #000;
            font-weight: 700;
            border: none;
            padding: 8px 24px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-login:hover {
            background-color: #d1a636;
            color: #000;
        }

        /* ==================== Page Header ==================== */
        .page-header {
            background: linear-gradient(rgba(20, 19, 17, 0.7), rgba(20, 19, 17, 0.8)), url('https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=1920&q=80') center/cover;
            padding: 80px 0;
            border-bottom: 4px solid var(--theme-yellow);
            text-align: center;
        }

        .page-title {
            color: #fff;
            font-weight: 800;
            margin: 0;
            font-size: 2.5rem;
        }

        .breadcrumb {
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 0;
        }

        .breadcrumb a {
            color: var(--theme-yellow);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #aaa;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: #aaa;
        }

        /* ==================== About Section ==================== */
        .about-title {
            font-weight: 800;
            font-size: 2.2rem;
            color: var(--theme-dark);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .about-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 60px;
            height: 4px;
            background-color: var(--theme-yellow);
        }

        .about-text {
            color: #555;
            line-height: 1.9;
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .about-img-wrapper {
            position: relative;
            padding-right: 20px;
            padding-top: 20px;
        }

        .about-img-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: 4px solid var(--theme-yellow);
            z-index: 1;
            border-radius: 8px;
        }

        .about-img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            position: relative;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* ==================== Features Section ==================== */
        .features-section {
            background-color: #fff;
            padding: 80px 0;
            border-top: 1px solid #eee;
        }

        .feature-card {
            text-align: center;
            padding: 40px 20px;
            background-color: var(--theme-gray);
            border-radius: 8px;
            transition: 0.3s;
            height: 100%;
            border: 1px solid #eee;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            border-bottom: 3px solid var(--theme-yellow);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--theme-yellow);
            margin-bottom: 20px;
        }

        .feature-title {
            font-weight: 700;
            color: var(--theme-dark);
            margin-bottom: 15px;
        }

        .feature-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        /* ==================== Stats Section ==================== */
        .stats-section {
            background-color: var(--theme-dark);
            padding: 60px 0;
            color: #fff;
            border-bottom: 4px solid var(--theme-yellow);
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--theme-yellow);
            margin-bottom: 10px;
            font-family: 'Cairo', sans-serif;
        }

        .stat-text {
            font-weight: 600;
            font-size: 1.1rem;
            color: #ccc;
        }

        /* Footer */
        footer {
            background-color: var(--theme-dark);
            color: #fff;
            padding: 60px 0 20px;
        }

        .footer-title {
            color: var(--theme-yellow);
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }

        footer a {
            color: #aaa;
            text-decoration: none;
            transition: 0.3s;
        }

        footer a:hover {
            color: var(--theme-yellow);
            padding-right: 8px;
        }
    </style>
</head>

<body>

    <!-- ==================== HEADER ==================== -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="index.html">دار الأثاث الفاخر <i class="fa-solid fa-couch logo-icon"></i></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.html">تصفح المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.html">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">
                    <a href="wishlist.html" class="icon-btn"><i class="fa-solid fa-heart"></i><span
                            class="badge-count">0</span></a>
                    <a href="cart.html" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i><span
                            class="badge-count">2</span></a>
                    <a href="login.html" class="btn-login ms-3"><i class="fa-solid fa-user"></i> تسجيل الدخول</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================== END HEADER ==================== -->

    <!-- ==================== Page Header ==================== -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">اكتشف قصتنا</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">من نحن</li>
                </ol>
            </nav>
        </div>
    </header>

    <!-- ==================== Main Content (Our Story) ==================== -->
    <main class="py-5 my-lg-4">
        <div class="container px-lg-5">
            <div class="row align-items-center g-5">
                <!-- صورة القسم -->
                <div class="col-lg-6">
                    <div class="about-img-wrapper">
                        <!-- يمكنك تغيير رابط الصورة بصورة من معرضكم الخاص مستقبلاً -->
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=800&q=80"
                            alt="ورشة الأثاث الفاخر" class="about-img">
                    </div>
                </div>

                <!-- نصوص القسم -->
                <div class="col-lg-6">
                    <h2 class="about-title mb-4">التميز في صناعة الأثاث منذ عام 1995</h2>
                    <p class="about-text">
                        نحن في <strong>دار الأثاث الفاخر</strong> نؤمن بأن الأثاث ليس مجرد قطع خشبية صماء، بل هو فن يعكس
                        شخصيتك، ويضفي الدفء والروح على منزلك. بدأنا رحلتنا بشغف كبير لتحويل المساحات العادية إلى لوحات
                        فنية تنبض بالحياة.
                    </p>
                    <p class="about-text">
                        على مدار عقود، حرصنا على استخدام أجود أنواع الأخشاب الطبيعية، والأقمشة المخملية الراقية، لنقدم
                        لك تصاميم تجمع بين أصالة الماضي وعصرية الحاضر. كل قطعة تُصنع في ورشنا تمر بمراحل دقيقة من
                        العناية الفائقة لتضمن لك الراحة والمتانة التي تدوم لأجيال.
                    </p>
                    <div class="d-flex align-items-center gap-3 mt-4">
                        <i class="fa-solid fa-check-circle fs-4" style="color: var(--theme-yellow)"></i>
                        <span class="fw-bold fs-5 text-dark">نصنع لك مساحة تعبر عن هويتك.</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ==================== Features Section ==================== -->
    <section class="features-section">
        <div class="container px-lg-5">
            <div class="text-center mb-5 pb-3">
                <h2 class="fw-bold" style="color: var(--theme-dark);">لماذا تختار دار الأثاث الفاخر؟</h2>
                <p class="text-muted">نقدم لك تجربة تسوق متكاملة تضع جودة المنتج وراحتك في المقام الأول.</p>
            </div>

            <div class="row g-4">
                <!-- الميزة 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-crown feature-icon"></i>
                        <h4 class="feature-title">جودة لا تضاهى</h4>
                        <p class="feature-text">نستخدم أفضل الخامات العالمية والأخشاب الصلبة لضمان متانة وأناقة تدوم
                            طويلاً.</p>
                    </div>
                </div>
                <!-- الميزة 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-paintbrush feature-icon"></i>
                        <h4 class="feature-title">تصاميم فريدة</h4>
                        <p class="feature-text">فريق من أمهر المصممين لابتكار قطع أثاث تناسب الذوق الكلاسيكي والمودرن.
                        </p>
                    </div>
                </div>
                <!-- الميزة 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-truck-fast feature-icon"></i>
                        <h4 class="feature-title">شحن وتوصيل آمن</h4>
                        <p class="feature-text">خدمة توصيل سريعة وآمنة لجميع المحافظات مع فريق متخصص في الفك والتركيب.
                        </p>
                    </div>
                </div>
                <!-- الميزة 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-headset feature-icon"></i>
                        <h4 class="feature-title">خدمة عملاء ممتازة</h4>
                        <p class="feature-text">فريق دعم متواجد على مدار الساعة للرد على استفساراتكم ومساعدتكم في
                            اختياراتكم.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Stats Section ==================== -->
    <section class="stats-section">
        <div class="container px-lg-5">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">+25</div>
                        <div class="stat-text">عام من الخبرة</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">+10K</div>
                        <div class="stat-text">عميل سعيد</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">+500</div>
                        <div class="stat-text">تصميم حصري</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-text">فروع رئيسية</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><a href="shop.html">تصفح المجموعة</a></li>
                        <li><a href="contact.html">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">حسابي</h4>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="login.html">تسجيل الدخول</a></li>
                        <li><a href="cart.html">عربة التسوق</a></li>
                        <li><a href="wishlist.html">قائمة المفضلة</a></li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
