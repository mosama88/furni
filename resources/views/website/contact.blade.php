<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - اتصل بنا</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts (Cairo & Tajawal) -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

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
        .custom-navbar { background-color: var(--theme-dark); border-bottom: 2px solid #2a2825; padding: 12px 0; }
        .navbar-brand { color: #fff !important; font-weight: 800; font-size: 1.6rem; display: flex; align-items: center; gap: 10px; }
        .navbar-brand .logo-icon { color: var(--theme-yellow); font-size: 1.4rem; }
        .navbar-nav .nav-link { color: #ccc; font-weight: 500; font-size: 1.05rem; margin: 0 12px; padding: 10px 5px !important; transition: all 0.3s ease; position: relative; }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { color: var(--theme-yellow); }
        .navbar-nav .nav-link.active::after { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 2px; background-color: var(--theme-yellow); }

        .header-actions { display: flex; align-items: center; gap: 10px; }
        .icon-btn { background: transparent; border: 1px solid #555; color: #fff; width: 42px; height: 42px; display: flex; align-items: center; justify-content: center; text-decoration: none; position: relative; transition: 0.3s; }
        .icon-btn:hover { border-color: var(--theme-yellow); color: var(--theme-yellow); }
        .icon-btn .badge-count { position: absolute; top: -10px; right: -10px; background-color: var(--theme-yellow); color: #000; font-size: 0.75rem; font-weight: 700; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center; border-radius: 50%; border: 2px solid var(--theme-dark); }
        .btn-login { background-color: var(--theme-yellow); color: #000; font-weight: 700; border: none; padding: 8px 24px; display: flex; align-items: center; gap: 8px; transition: 0.3s; text-decoration: none; }
        .btn-login:hover { background-color: #d1a636; color: #000; }

        /* ==================== Page Header ==================== */
        .page-header {
            background: linear-gradient(rgba(20, 19, 17, 0.85), rgba(20, 19, 17, 0.85)), url('https://images.unsplash.com/photo-1618221195710-dd6b142db2df?auto=format&fit=crop&w=1920&q=80') center/cover;
            padding: 70px 0;
            border-bottom: 4px solid var(--theme-yellow);
            text-align: center;
        }
        .page-title { color: #fff; font-weight: 800; margin: 0; font-size: 2.5rem; }
        .breadcrumb { justify-content: center; margin-top: 15px; margin-bottom: 0; }
        .breadcrumb a { color: var(--theme-yellow); text-decoration: none; }
        .breadcrumb-item.active { color: #aaa; }
        .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

        /* ==================== Contact Page Specific Styles ==================== */
        .contact-info-card {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.03);
            height: 100%;
            border-top: 3px solid var(--theme-yellow);
        }
        .contact-icon-box {
            width: 50px;
            height: 50px;
            background-color: rgba(229, 185, 64, 0.15);
            color: var(--theme-yellow);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.3rem;
            margin-left: 15px;
        }
        .contact-item {
            display: flex;
            margin-bottom: 30px;
            align-items: flex-start;
        }
        .contact-item:last-child { margin-bottom: 0; }
        .contact-title { font-weight: 700; color: var(--theme-dark); margin-bottom: 5px; font-size: 1.1rem; }
        .contact-text { color: #666; line-height: 1.6; margin: 0; }

        /* Form Styles */
        .form-control {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
        }
        .form-control:focus {
            border-color: var(--theme-yellow);
            box-shadow: 0 0 0 0.25rem rgba(229, 185, 64, 0.25);
            background-color: #fff;
        }
        .form-label { font-weight: 600; color: var(--theme-dark); }
        .btn-submit {
            background-color: var(--theme-dark);
            color: #fff;
            font-weight: 700;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
            width: 100%;
            font-size: 1.1rem;
        }
        .btn-submit:hover { background-color: var(--theme-yellow); color: #000; }

        /* Map Container */
        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            height: 450px;
            border: 1px solid #eee;
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Footer */
        footer { background-color: var(--theme-dark); color: #fff; padding: 60px 0 20px; border-top: 5px solid var(--theme-yellow); }
        .footer-title { color: var(--theme-yellow); font-weight: 700; margin-bottom: 20px; font-size: 1.2rem;}
        footer a { color: #aaa; text-decoration: none; transition: 0.3s; }
        footer a:hover { color: var(--theme-yellow); padding-right: 8px; }
    </style>
</head>
<body>

    <!-- ==================== HEADER ==================== -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="#">دار الأثاث الفاخر <i class="fa-solid fa-couch logo-icon"></i></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.html">تصفح المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.html">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">
                    <a href="wishlist.html" class="icon-btn"><i class="fa-solid fa-heart"></i><span class="badge-count">0</span></a>
                    <a href="cart.html" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i><span class="badge-count">2</span></a>
                    <a href="login.html" class="btn-login ms-3"><i class="fa-solid fa-user"></i> تسجيل الدخول</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================== END HEADER ==================== -->

    <!-- ==================== Page Header ==================== -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">تواصل معنا</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
                </ol>
            </nav>
        </div>
    </header>

    <!-- ==================== Main Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">
            <div class="row g-5">

                <!-- القسم الأيمن: معلومات التواصل -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <h3 class="fw-bold mb-4" style="color: var(--theme-dark);">معلومات التواصل</h3>
                        <p class="text-muted mb-5">نحن هنا لمساعدتك والإجابة على كافة استفساراتك. لا تتردد في التواصل معنا عبر القنوات التالية أو من خلال زيارة معرضنا.</p>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">عنوان المعرض</h4>
                                <p class="contact-text">شارع التسعين الجنوبي، التجمع الخامس<br>القاهرة، جمهورية مصر العربية</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">أرقام الهواتف</h4>
                                <p class="contact-text" dir="ltr">+20 123 456 7890</p>
                                <p class="contact-text" dir="ltr">+20 22 345 6789</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">البريد الإلكتروني</h4>
                                <p class="contact-text">info@dar-alathath.com</p>
                                <p class="contact-text">support@dar-alathath.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">ساعات العمل</h4>
                                <p class="contact-text">السبت - الخميس: 10:00 صباحاً - 10:00 مساءً</p>
                                <p class="contact-text">الجمعة: 02:00 ظهراً - 11:00 مساءً</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- القسم الأيسر: نموذج المراسلة -->
                <div class="col-lg-7">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm border" style="border-color: #eee !important;">
                        <h3 class="fw-bold mb-4" style="color: var(--theme-dark);">أرسل لنا رسالة</h3>

                        <!-- Form ready for Laravel: action route() -->
                        <form action="#" method="POST">
                            <!-- @csrf (سيتم إضافتها في بليد) -->

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">الاسم بالكامل</label>
                                    <input type="text" class="form-control" name="name" placeholder="أدخل اسمك" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="أدخل رقم هاتفك">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">الموضوع</label>
                                    <input type="text" class="form-control" name="subject" placeholder="موضوع الرسالة" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">تفاصيل الرسالة</label>
                                    <textarea class="form-control" name="message" rows="5" placeholder="اكتب رسالتك هنا..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-submit">
                                        إرسال الرسالة <i class="fa-regular fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- قسم الخريطة -->
            <div class="row mt-5 pt-4">
                <div class="col-12">
                    <div class="map-container">
                        <!-- تضمين خريطة جوجل (Google Maps Iframe) - تم ضبطها على التجمع الخامس كمثال -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.6118503819!2d31.3323063548974!3d30.015273397368625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145822c95e1610e7%3A0xc38d9bb0849688bc!2sNew%20Cairo%20City%2C%20Cairo%20Governorate%2C%20Egypt!5e0!3m2!1sen!2s!4v1698246824987!5m2!1sen!2s"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer>
        <div class="container px-lg-5">
            <div class="row g-4 mb-4">
                <div class="col-lg-4 col-md-6">
                    <h3 class="footer-title">دار الأثاث الفاخر <i class="fa-solid fa-couch ms-2 text-white"></i></h3>
                    <p class="text-white-50 lh-lg pe-lg-4">ارتق بجمال منزلك مع أرقى تصاميم الأثاث العالمي. نحن نقدم أفضل حلول الأثاث الفاخر الذي يجمع بين التصميم العصري والجودة الاستثنائية.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4 class="footer-title">روابط هامة</h4>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><a href="shop.html">تصفح المجموعة</a></li>
                        <li><a href="about.html">من نحن</a></li>
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
                        <li><i class="fa fa-location-dot ms-2" style="color: var(--theme-yellow)"></i> القاهرة، مصر</li>
                        <li><i class="fa fa-phone ms-2" style="color: var(--theme-yellow)"></i> +20 123 456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="border-top pt-4 mt-4 text-center text-white-50 small" style="border-color: #2a2825 !important;">
                &copy; 2026 جميع الحقوق محفوظة لـ دار الأثاث الفاخر.
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
