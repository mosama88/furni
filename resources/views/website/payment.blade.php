<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - إتمام الطلب والدفع</title>

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

        /* ==================== Checkout Form Styles ==================== */
        .checkout-section-title {
            font-weight: 800;
            color: var(--theme-dark);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #eee;
            font-size: 1.5rem;
        }

        .form-label {
            font-weight: 700;
            color: var(--theme-dark);
            font-size: 0.95rem;
        }

        .form-control,
        .form-select {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fafafa;
            transition: 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--theme-yellow);
            box-shadow: 0 0 0 0.25rem rgba(229, 185, 64, 0.25);
            background-color: #fff;
        }

        /* Payment Methods */
        .payment-method-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            background-color: #fff;
            cursor: pointer;
            transition: 0.3s;
            display: flex;
            align-items: center;
        }

        .payment-method-card:hover {
            border-color: var(--theme-yellow);
        }

        .form-check-input:checked+.form-check-label {
            font-weight: 700;
            color: var(--theme-dark);
        }

        .form-check-input:checked {
            background-color: var(--theme-yellow);
            border-color: var(--theme-yellow);
        }

        .payment-icon {
            font-size: 1.5rem;
            color: #555;
            margin-right: auto;
        }

        /* Order Summary Box */
        .summary-card {
            background: #fff;
            border: none;
            border-top: 4px solid var(--theme-yellow);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 100px;
        }

        .summary-title {
            font-weight: 800;
            color: var(--theme-dark);
            margin-bottom: 25px;
        }

        .mini-cart-item {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .mini-cart-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #eee;
        }

        .mini-cart-name {
            font-weight: 700;
            color: var(--theme-dark);
            font-size: 0.95rem;
            margin-bottom: 5px;
        }

        .mini-cart-price {
            color: var(--theme-yellow);
            font-weight: 800;
            font-size: 1rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-weight: 600;
            color: #555;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px dashed #ddd;
            font-weight: 800;
            font-size: 1.4rem;
            color: var(--theme-dark);
        }

        .btn-place-order {
            background-color: var(--theme-dark);
            color: #fff;
            font-weight: 800;
            width: 100%;
            padding: 15px;
            border: none;
            margin-top: 25px;
            transition: 0.3s;
            font-size: 1.2rem;
            border-radius: 5px;
        }

        .btn-place-order:hover {
            background-color: var(--theme-yellow);
            color: #000;
        }

        /* Footer */
        footer {
            background-color: var(--theme-dark);
            color: #fff;
            padding: 60px 0 20px;
            border-top: 5px solid var(--theme-yellow);
            margin-top: 50px;
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
                    <li class="nav-item"><a class="nav-link" href="about.html">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">
                    <a href="wishlist.html" class="icon-btn"><i class="fa-solid fa-heart"></i><span
                            class="badge-count">0</span></a>
                    <a href="cart.html" class="icon-btn active"><i class="fa-solid fa-cart-shopping"></i><span
                            class="badge-count">2</span></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ==================== END HEADER ==================== -->

    <!-- ==================== Page Header ==================== -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">إتمام الطلب والدفع</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="cart.html">عربة التسوق</a></li>
                    <li class="breadcrumb-item active" aria-current="page">الدفع</li>
                </ol>
            </nav>
        </div>
    </header>

    <!-- ==================== Checkout Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">

            <!-- فورم واحد يشمل تفاصيل الشحن وملخص الطلب معاً -->
            <form action="#" method="POST">
                <!-- @csrf هنا في بليد -->

                <div class="row g-5">

                    <!-- ================= الجانب الأيمن (تفاصيل الفاتورة والشحن) ================= -->
                    <div class="col-lg-7">

                        <!-- قسم تفاصيل الشحن -->
                        <h3 class="checkout-section-title">تفاصيل الفاتورة والشحن</h3>
                        <div class="row g-3 mb-5 bg-white p-4 rounded shadow-sm border border-light">
                            <div class="col-md-6">
                                <label class="form-label">الاسم الأول <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="first_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">اسم العائلة <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="last_name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">البريد الإلكتروني <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">رقم الهاتف <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" name="phone" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">الدولة / المنطقة <span class="text-danger">*</span></label>
                                <select class="form-select" name="country" required>
                                    <option value="" selected disabled>اختر الدولة...</option>
                                    <option value="EG">مصر</option>
                                    <option value="SA">السعودية</option>
                                    <option value="AE">الإمارات</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">المدينة / المحافظة <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="city" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">عنوان الشارع التفصيلي <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control mb-2" name="address_1"
                                    placeholder="اسم الشارع، رقم المبنى، الدور، الشقة" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">ملاحظات الطلب (اختياري)</label>
                                <textarea class="form-control" name="order_notes" rows="3"
                                    placeholder="ملاحظات حول التوصيل، مثلاً: يرجى التوصيل بعد الساعة 5 مساءً"></textarea>
                            </div>
                        </div>

                        <!-- قسم طرق الدفع -->
                        <h3 class="checkout-section-title mt-5">طريقة الدفع</h3>
                        <div class="bg-white p-4 rounded shadow-sm border border-light mb-4">

                            <!-- الدفع عند الاستلام -->
                            <label class="payment-method-card">
                                <input class="form-check-input me-3" type="radio" name="payment_method"
                                    value="cod" checked>
                                <span class="form-check-label ms-2">الدفع نقداً عند الاستلام (COD)</span>
                                <i class="fa-solid fa-money-bill-wave payment-icon"></i>
                            </label>

                            <!-- الدفع بالبطاقة (فيز/ماستركارد) -->
                            <label class="payment-method-card">
                                <input class="form-check-input me-3" type="radio" name="payment_method"
                                    value="credit_card">
                                <span class="form-check-label ms-2">البطاقة الائتمانية (Visa / Mastercard)</span>
                                <div class="payment-icon d-flex gap-2 text-primary">
                                    <i class="fa-brands fa-cc-visa"></i>
                                    <i class="fa-brands fa-cc-mastercard"></i>
                                </div>
                            </label>

                            <!-- نموذج بيانات البطاقة (يُظهر باستخدام جافاسكريبت لاحقاً أو يُربط ببوابة الدفع) -->
                            <div class="p-3 bg-light border rounded mb-3 d-none" id="credit_card_info">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="رقم البطاقة">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="MM/YY">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" placeholder="CVC">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ================= الجانب الأيسر (ملخص الطلب) ================= -->
                    <div class="col-lg-5">
                        <div class="card summary-card p-4">
                            <h4 class="summary-title">طلبك</h4>

                            <!-- قائمة المنتجات -->
                            <div class="order-items-list mb-4">
                                <div class="mini-cart-item">
                                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=100&q=80"
                                        alt="كرسي" class="mini-cart-img">
                                    <div class="flex-grow-1">
                                        <h6 class="mini-cart-name">كرسي استرخاء مخملي فاخر</h6>
                                        <small class="text-muted d-block">الكمية: 1</small>
                                    </div>
                                    <div class="mini-cart-price">4,500 ج.م</div>
                                </div>

                                <!-- منتج 2 -->
                                <div class="mini-cart-item border-bottom-0 pb-0">
                                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=100&q=80"
                                        alt="أريكة" class="mini-cart-img">
                                    <div class="flex-grow-1">
                                        <h6 class="mini-cart-name">أريكة كلاسيكية بخشب الجوز</h6>
                                        <small class="text-muted d-block">الكمية: 2</small>
                                    </div>
                                    <div class="mini-cart-price">24,000 ج.م</div>
                                </div>
                            </div>

                            <!-- الحسابات -->
                            <div class="summary-row mt-4">
                                <span>المجموع الفرعي:</span>
                                <span>28,500 ج.م</span>
                            </div>
                            <div class="summary-row">
                                <span>الضرائب (14%):</span>
                                <span>3,990 ج.م</span>
                            </div>
                            <div class="summary-row">
                                <span>مصاريف الشحن:</span>
                                <span class="text-success fw-bold">شحن مجاني</span>
                            </div>

                            <div class="summary-total">
                                <span>الإجمالي النهائي:</span>
                                <span style="color: var(--theme-yellow)">32,490 ج.م</span>
                            </div>

                            <!-- الموافقة على الشروط -->
                            <div class="form-check mt-4 mb-2">
                                <input class="form-check-input" type="checkbox" id="terms_agree" required>
                                <label class="form-check-label small text-muted ms-2" for="terms_agree">
                                    لقد قرأت وأوافق على <a href="#" class="text-dark fw-bold">شروط وأحكام
                                        الموقع</a>.
                                </label>
                            </div>

                            <!-- زر التأكيد (يقوم بعمل Submit للفورم كامل) -->
                            <button type="submit" class="btn-place-order">
                                تأكيد الطلب والدفع <i class="fa-solid fa-lock ms-2"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </form>

        </div>
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
