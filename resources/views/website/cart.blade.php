<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - عربة التسوق</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts (Cairo & Tajawal) -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            var(--theme-dark): #141311;
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

        /* ==================== Navbar Styles (نفس الرئيسية) ==================== */
        .custom-navbar {
            background-color: var(--theme-dark);
            border-bottom: 2px solid #2a2825;
            padding: 12px 0;
        }
        .navbar-brand { color: #fff !important; font-weight: 800; font-size: 1.6rem; display: flex; align-items: center; gap: 10px; }
        .navbar-brand .logo-icon { color: var(--theme-yellow); font-size: 1.4rem; }

        .navbar-nav .nav-link { color: #ccc; font-weight: 500; font-size: 1.05rem; margin: 0 12px; padding: 10px 5px !important; transition: all 0.3s ease; position: relative; }
        .navbar-nav .nav-link:hover { color: var(--theme-yellow); }

        .header-actions { display: flex; align-items: center; gap: 10px; }
        .icon-btn { background: transparent; border: 1px solid #555; color: #fff; width: 42px; height: 42px; display: flex; align-items: center; justify-content: center; text-decoration: none; position: relative; transition: 0.3s; }
        .icon-btn:hover, .icon-btn.active { border-color: var(--theme-yellow); color: var(--theme-yellow); }
        .icon-btn .badge-count { position: absolute; top: -10px; right: -10px; background-color: var(--theme-yellow); color: #000; font-size: 0.75rem; font-weight: 700; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center; border-radius: 50%; border: 2px solid var(--theme-dark); }

        .btn-login { background-color: var(--theme-yellow); color: #000; font-weight: 700; border: none; padding: 8px 24px; display: flex; align-items: center; gap: 8px; transition: 0.3s; text-decoration: none; }
        .btn-login:hover { background-color: #d1a636; color: #000; }

        /* ==================== Cart Page Specific Styles ==================== */
        .page-header {
            background-color: var(--theme-dark);
            padding: 40px 0;
            border-bottom: 4px solid var(--theme-yellow);
            text-align: center;
        }
        .page-title {
            color: #fff;
            font-weight: 800;
            margin: 0;
            font-size: 2.2rem;
        }
        .breadcrumb {
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 0;
        }
        .breadcrumb a { color: var(--theme-yellow); text-decoration: none; }
        .breadcrumb-item.active { color: #aaa; }
        .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

        .cart-table th {
            background-color: #fff;
            color: var(--theme-dark);
            font-weight: 700;
            border-bottom: 2px solid #eee;
            padding: 15px;
        }
        .cart-table td {
            vertical-align: middle;
            padding: 15px;
            border-bottom: 1px solid #eee;
            background-color: #fff;
        }

        .product-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #eee;
        }
        .product-name-cart {
            color: var(--theme-dark);
            font-weight: 700;
            text-decoration: none;
            font-size: 1.1rem;
            transition: 0.3s;
        }
        .product-name-cart:hover { color: var(--theme-yellow); }

        .qty-input {
            width: 70px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px;
            font-weight: 600;
        }
        .btn-remove {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            transition: 0.3s;
        }
        .btn-remove:hover { background: #dc3545; color: #fff; }

        .summary-card {
            background: #fff;
            border: none;
            border-top: 4px solid var(--theme-yellow);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        .summary-title { font-weight: 800; color: var(--theme-dark); margin-bottom: 25px; }
        .summary-row { display: flex; justify-content: space-between; margin-bottom: 15px; font-weight: 600; color: #555; }
        .summary-total { display: flex; justify-content: space-between; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; font-weight: 800; font-size: 1.3rem; color: var(--theme-dark); }

        .btn-checkout {
            background-color: var(--theme-yellow);
            color: #000;
            font-weight: 700;
            width: 100%;
            padding: 12px;
            border: none;
            margin-top: 25px;
            transition: 0.3s;
            font-size: 1.1rem;
        }
        .btn-checkout:hover { background-color: var(--theme-dark); color: var(--theme-yellow); }

        /* Footer (نفس الرئيسية) */
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
                    <li class="nav-item"><a class="nav-link" href="#">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">تصفح المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">
                    <a href="#" class="icon-btn"><i class="fa-solid fa-heart"></i><span class="badge-count">0</span></a>
                    <a href="#" class="icon-btn active"><i class="fa-solid fa-cart-shopping"></i><span class="badge-count">2</span></a>
                    <a href="#" class="btn-login ms-3"><i class="fa-solid fa-user"></i> تسجيل الدخول</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================== END HEADER ==================== -->

    <!-- ==================== Page Header ==================== -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">عربة التسوق</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">عربة التسوق</li>
                </ol>
            </nav>
        </div>
    </header>

    <!-- ==================== Main Cart Content ==================== -->
    <main class="py-5 my-3">
        <div class="container px-lg-5">
            <div class="row g-5">

                <!-- سلة المنتجات (الجانب الأيمن) -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="table-responsive">
                            <table class="table cart-table mb-0 text-center">
                                <thead>
                                    <tr>
                                        <th class="text-start pe-4">المنتج</th>
                                        <th>السعر</th>
                                        <th>الكمية</th>
                                        <th>المجموع</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-start d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=150&q=80" alt="كرسي" class="product-img">
                                            <div>
                                                <a href="#" class="product-name-cart d-block mb-1">كرسي استرخاء مخملي فاخر</a>
                                                <small class="text-muted">اللون: أزرق داكن</small>
                                            </div>
                                        </td>
                                        <td class="fw-bold">4,500 ج.م</td>
                                        <td>
                                            <!-- يمكنك استبدال الـ input بـ form كامل لتحديث الكمية -->
                                            <input type="number" class="qty-input" value="1" min="1">
                                        </td>
                                        <td class="fw-bold" style="color: var(--theme-yellow)">4,500 ج.م</td>
                                        <td>
                                            <!-- Form الحذف في لارافل سيوضع هنا -->
                                            <button type="button" class="btn-remove" title="حذف المنتج">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- العنصر الثاني -->
                                    <tr>
                                        <td class="text-start d-flex align-items-center gap-3">
                                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=150&q=80" alt="أريكة" class="product-img">
                                            <div>
                                                <a href="#" class="product-name-cart d-block mb-1">أريكة كلاسيكية بخشب الجوز</a>
                                                <small class="text-muted">اللون: بيج</small>
                                            </div>
                                        </td>
                                        <td class="fw-bold">12,000 ج.م</td>
                                        <td>
                                            <input type="number" class="qty-input" value="2" min="1">
                                        </td>
                                        <td class="fw-bold" style="color: var(--theme-yellow)">24,000 ج.م</td>
                                        <td>
                                            <button type="button" class="btn-remove" title="حذف المنتج">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- أزرار تحديث السلة والعودة للتسوق -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <a href="#" class="text-decoration-none text-dark fw-bold">
                            <i class="fa fa-arrow-right ms-2"></i> متابعة التسوق
                        </a>
                        <button class="btn btn-outline-dark fw-bold px-4 py-2">تحديث السلة</button>
                    </div>
                </div>

                <!-- ملخص الطلب (الجانب الأيسر) -->
                <div class="col-lg-4">
                    <div class="card summary-card p-4">
                        <h4 class="summary-title">ملخص الطلب</h4>

                        <div class="summary-row">
                            <span>المجموع الفرعي:</span>
                            <span>28,500 ج.م</span>
                        </div>
                        <div class="summary-row">
                            <span>الضرائب (14%):</span>
                            <span>3,990 ج.م</span>
                        </div>
                        <div class="summary-row">
                            <span>مصاريف الشحن:</span>
                            <span class="text-success">مجاني</span>
                        </div>

                        <div class="summary-total">
                            <span>الإجمالي:</span>
                            <span style="color: var(--theme-yellow)">32,490 ج.م</span>
                        </div>

                        <button class="btn-checkout">
                            متابعة الدفع <i class="fa-solid fa-lock ms-2"></i>
                        </button>

                        <!-- وسائل الدفع المدعومة -->
                        <div class="text-center mt-4 pt-3 border-top">
                            <small class="text-muted d-block mb-2">دفع آمن ومضمون 100%</small>
                            <div class="d-flex justify-content-center gap-2 text-muted fs-4">
                                <i class="fa-brands fa-cc-visa"></i>
                                <i class="fa-brands fa-cc-mastercard"></i>
                                <i class="fa-brands fa-cc-paypal"></i>
                                <i class="fa-brands fa-cc-apple-pay"></i>
                            </div>
                        </div>
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
