<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - استعادة كلمة المرور</title>

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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        /* ==================== Auth Page Styles ==================== */
        main {
            flex-grow: 1;
            display: flex;
            align-items: center;
            padding: 60px 0;
            background: url('https://images.unsplash.com/photo-1616486029423-aaa4789e8c9a?auto=format&fit=crop&w=1920&q=80') center/cover;
            position: relative;
        }
        main::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(20, 19, 17, 0.75);
            z-index: 1;
        }

        .auth-container { position: relative; z-index: 2; }

        .auth-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            overflow: hidden;
            border-top: 5px solid var(--theme-yellow);
        }

        .auth-icon-box {
            width: 70px;
            height: 70px;
            background-color: rgba(229, 185, 64, 0.15);
            color: var(--theme-yellow);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 2rem;
            margin: 0 auto 20px;
        }

        .auth-header { text-align: center; padding: 40px 30px 20px; }
        .auth-title { font-weight: 800; color: var(--theme-dark); margin-bottom: 15px; font-size: 1.8rem; }
        .auth-subtitle { color: #666; font-size: 0.95rem; line-height: 1.6; padding: 0 15px; }

        .auth-body { padding: 0 40px 40px; }

        /* Form Inputs */
        .form-label { font-weight: 700; color: var(--theme-dark); font-size: 0.95rem; }
        .form-control { padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; background-color: #fafafa; transition: 0.3s; }
        .form-control:focus { border-color: var(--theme-yellow); box-shadow: 0 0 0 0.25rem rgba(229, 185, 64, 0.25); background-color: #fff; }

        /* Buttons */
        .btn-auth {
            background-color: var(--theme-dark);
            color: #fff;
            font-weight: 700;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 1.1rem;
            transition: 0.3s;
            margin-top: 10px;
        }
        .btn-auth:hover { background-color: var(--theme-yellow); color: #000; }

        .back-link { text-align: center; margin-top: 25px; padding-top: 20px; border-top: 1px solid #eee; }
        .back-link a { color: var(--theme-dark); font-weight: 700; text-decoration: none; transition: 0.3s; }
        .back-link a:hover { color: var(--theme-yellow); }

        /* Footer */
        footer { background-color: var(--theme-dark); color: #fff; padding: 40px 0 20px; border-top: 5px solid var(--theme-yellow); }
        .footer-title { color: var(--theme-yellow); font-weight: 700; margin-bottom: 20px; font-size: 1.2rem;}
        footer a { color: #aaa; text-decoration: none; transition: 0.3s; }
        footer a:hover { color: var(--theme-yellow); padding-right: 8px; }
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
                    <li class="nav-item"><a class="nav-link" href="about.html">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">
                    <a href="wishlist.html" class="icon-btn"><i class="fa-solid fa-heart"></i><span class="badge-count">0</span></a>
                    <a href="cart.html" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i><span class="badge-count">2</span></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================== END HEADER ==================== -->

    <!-- ==================== Main Auth Section ==================== -->
    <main>
        <div class="container auth-container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">

                    <div class="auth-card">
                        <div class="auth-header">
                            <!-- أيقونة تعبر عن الأمان واستعادة كلمة المرور -->
                            <div class="auth-icon-box">
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <h2 class="auth-title">نسيت كلمة المرور؟</h2>
                            <p class="auth-subtitle">لا تقلق! فقط أدخل بريدك الإلكتروني المسجل لدينا، وسنرسل لك رابطاً لإعادة تعيين كلمة المرور الخاصة بك.</p>
                        </div>

                        <div class="auth-body">
                            <!-- رسالة نجاح الإرسال (تظهر من لارافل) -->
                            <!-- @if (session('status'))
                                <div class="alert alert-success small fw-bold text-center mb-4">
                                    {{ session('status') }}
                                </div>
                            @endif -->

                            <!-- الفورم الخاص بـ Laravel -->
                            <form action="#" method="POST">
                                <!-- @csrf هنا في بليد -->

                                <div class="mb-4">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted"><i class="fa-regular fa-envelope"></i></span>
                                        <input type="email" class="form-control border-start-0" id="email" name="email" placeholder="example@email.com" required autofocus>
                                    </div>
                                    <!-- مكان رسالة الخطأ (لارافل) -->
                                    <!-- @error('email') <span class="text-danger small mt-1">{{ $message }}</span> @enderror -->
                                </div>

                                <button type="submit" class="btn-auth">
                                    إرسال رابط الاستعادة <i class="fa-regular fa-paper-plane ms-2"></i>
                                </button>

                                <div class="back-link">
                                    <a href="login.html"><i class="fa-solid fa-arrow-right ms-2"></i> العودة لتسجيل الدخول</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer>
        <div class="container px-lg-5">
            <div class="row g-4 mb-3">
                <div class="col-lg-5 col-md-6">
                    <h3 class="footer-title">دار الأثاث الفاخر <i class="fa-solid fa-couch ms-2 text-white"></i></h3>
                    <p class="text-white-50 lh-lg pe-lg-4">ارتق بجمال منزلك مع أرقى تصاميم الأثاث العالمي. نحن نقدم أفضل حلول الأثاث الفاخر الذي يجمع بين التصميم العصري والجودة الاستثنائية.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">روابط هامة</h4>
                    <ul class="list-unstyled lh-lg">
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><a href="shop.html">تصفح المجموعة</a></li>
                        <li><a href="contact.html">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="footer-title">تواصل معنا</h4>
                    <ul class="list-unstyled lh-lg text-white-50">
                        <li><i class="fa fa-location-dot ms-2" style="color: var(--theme-yellow)"></i> القاهرة، مصر</li>
                        <li><i class="fa fa-phone ms-2" style="color: var(--theme-yellow)"></i> +20 123 456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="border-top pt-3 text-center text-white-50 small" style="border-color: #2a2825 !important;">
                &copy; 2026 جميع الحقوق محفوظة لـ دار الأثاث الفاخر.
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
