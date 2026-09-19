<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دار الأثاث الفاخر - تصفح المنتجات</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --theme-dark: #141311;
            --theme-yellow: #e5b940;
            --theme-gray: #f8f9fa;
            --text-light: #e0e0e0;
            --danger-red: #e63946;
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

        /* زر تسجيل الدخول */
        .btn-login { background-color: var(--theme-yellow); color: #000; font-weight: 700; border: none; padding: 8px 24px; display: flex; align-items: center; gap: 8px; transition: 0.3s; text-decoration: none; border-radius: 4px; }
        .btn-login:hover { background-color: #d1a636; color: #000; }

        /* زر اللغة الجديد المخصص */
        .lang-switcher-btn {
            background-color: transparent;
            border: 1px solid #555555;
            color: #ffffff;
            border-radius: 6px;
            padding: 6px 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .lang-switcher-btn i { font-size: 1.1rem; }
        .lang-switcher-btn:hover {
            border-color: var(--theme-yellow);
            color: var(--theme-yellow);
            background-color: rgba(229, 185, 64, 0.05);
        }

        /* ==================== Page Header ==================== */
        .page-header {
            background-color: var(--theme-dark);
            padding: 40px 0;
            border-bottom: 4px solid var(--theme-yellow);
            text-align: center;
        }
        .page-title { color: #fff; font-weight: 800; margin: 0; font-size: 2.2rem; }
        .breadcrumb { justify-content: center; margin-top: 15px; margin-bottom: 0; }
        .breadcrumb a { color: var(--theme-yellow); text-decoration: none; }
        .breadcrumb-item.active { color: #aaa; }
        .breadcrumb-item + .breadcrumb-item::before { color: #aaa; }

        /* ==================== Shop Sidebar (Filters) ==================== */
        .shop-sidebar {
            background-color: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            padding: 25px;
            position: sticky;
            top: 100px;
        }
        .filter-widget { margin-bottom: 30px; }
        .filter-widget:last-child { margin-bottom: 0; }
        .filter-title {
            font-weight: 800;
            color: var(--theme-dark);
            margin-bottom: 20px;
            font-size: 1.15rem;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        /* Category List */
        .category-list { list-style: none; padding: 0; margin: 0; }
        .category-list li { margin-bottom: 12px; }
        .category-list a {
            color: #555;
            text-decoration: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.3s;
            font-weight: 600;
        }
        .category-list a:hover, .category-list a.active { color: var(--theme-yellow); }
        .category-list .count { font-size: 0.85rem; background-color: var(--theme-gray); padding: 2px 8px; border-radius: 20px; color: #888; }

        /* Checkboxes */
        .form-check-input:checked { background-color: var(--theme-yellow); border-color: var(--theme-yellow); }
        .form-check-label { color: #555; font-weight: 600; cursor: pointer; }

        /* Price Filter Inputs */
        .price-inputs { display: flex; align-items: center; gap: 10px; }
        .price-inputs input { width: 100%; text-align: center; border: 1px solid #ddd; border-radius: 4px; padding: 8px; font-weight: 600; }
        .btn-filter { background-color: var(--theme-dark); color: #fff; width: 100%; border: none; padding: 10px; font-weight: 700; margin-top: 15px; border-radius: 4px; transition: 0.3s;}
        .btn-filter:hover { background-color: var(--theme-yellow); color: #000; }

        /* ==================== Shop Topbar ==================== */
        .shop-topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px solid #eaeaea;
            margin-bottom: 30px;
        }
        .sort-select {
            border: 1px solid #ddd;
            padding: 8px 15px;
            border-radius: 4px;
            font-weight: 600;
            color: #555;
            outline: none;
        }
        .sort-select:focus { border-color: var(--theme-yellow); }

        /* ==================== Product Cards (من الصفحة الرئيسية) ==================== */
        .product-card { background: #fff; border: 1px solid #f0f0f0; transition: all 0.3s ease; position: relative; }
        .product-card:hover { box-shadow: 0 10px 25px rgba(0,0,0,0.08); transform: translateY(-5px); }
        .product-img-box { position: relative; overflow: hidden; height: 280px; background-color: #fafafa; }
        .product-img-box img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .product-card:hover .product-img-box img { transform: scale(1.05); }

        .action-btns { position: absolute; top: 15px; right: 15px; display: flex; flex-direction: column; gap: 10px; opacity: 0; transform: translateX(20px); transition: all 0.3s ease; z-index: 3;}
        .product-card:hover .action-btns { opacity: 1; transform: translateX(0); }
        .action-btn { width: 40px; height: 40px; background: #fff; border: none; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #333; box-shadow: 0 2px 10px rgba(0,0,0,0.1); transition: 0.3s; }
        .action-btn:hover { background: var(--theme-yellow); color: #000; }

        .add-to-cart-btn { width: 100%; background-color: var(--theme-dark); color: #fff; border: none; padding: 12px; font-weight: 600; transition: 0.3s; opacity: 0; visibility: hidden; position: absolute; bottom: 0; left: 0; z-index: 3;}
        .product-card:hover .add-to-cart-btn { opacity: 1; visibility: visible; }
        .add-to-cart-btn:hover { background-color: var(--theme-yellow); color: #000; }

        .badge-new { position: absolute; top: 15px; left: 15px; background-color: #28a745; color: #fff; padding: 4px 10px; font-size: 0.8rem; font-weight: 700; z-index: 2; border-radius: 3px; }

        .product-info { padding: 20px; text-align: center; }
        .product-category { font-size: 0.85rem; color: #888; margin-bottom: 5px; display: block; }
        .product-name { font-weight: 700; font-size: 1.1rem; color: var(--theme-dark); text-decoration: none; display: block; margin-bottom: 10px; }
        .product-name:hover { color: var(--theme-yellow); }
        .product-price { font-weight: 800; font-size: 1.2rem; color: var(--theme-yellow); }

        /* ==================== Pagination ==================== */
        .pagination { justify-content: center; margin-top: 40px; }
        .page-link { color: var(--theme-dark); font-weight: 700; border-color: #eee; padding: 10px 18px; margin: 0 5px; border-radius: 4px; transition: 0.3s; }
        .page-link:hover { background-color: var(--theme-gray); color: var(--theme-dark); }
        .page-item.active .page-link { background-color: var(--theme-yellow); border-color: var(--theme-yellow); color: #000; }

        /* Footer */
        footer { background-color: var(--theme-dark); color: #fff; padding: 60px 0 20px; border-top: 5px solid var(--theme-yellow); margin-top: 60px;}
        .footer-title { color: var(--theme-yellow); font-weight: 700; margin-bottom: 20px; font-size: 1.2rem;}
        footer a { color: #aaa; text-decoration: none; transition: 0.3s; }
        footer a:hover { color: var(--theme-yellow); padding-right: 8px; }

        /* Mobile Toggle for Filter */
        .mobile-filter-btn { display: none; }
        @media (max-width: 991px) {
            .mobile-filter-btn { display: block; width: 100%; margin-bottom: 20px; }
            .shop-sidebar { display: none; margin-bottom: 30px; position: static; }
            .shop-sidebar.show { display: block; }
            .shop-topbar { flex-direction: column; gap: 15px; text-align: center; }
        }
    </style>
</head>
<body>

    <!-- ==================== HEADER ==================== -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="index.html">
                دار الأثاث الفاخر <i class="fa-solid fa-couch logo-icon"></i>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link active" href="shop.html">تصفح المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">من نحن</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">اتصل بنا</a></li>
                </ul>
                <div class="header-actions">
                    <!-- زر تغيير اللغة الجديد المطابق للصورة -->
                    <a href="#" class="lang-switcher-btn mx-2">
                        <i class="fa-solid fa-globe"></i>
                        <span>AR</span>
                    </a>

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
            <h1 class="page-title">تصفح المنتجات</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تصفح المنتجات</li>
                </ol>
            </nav>
        </div>
    </header>

    <!-- ==================== Shop Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">
            <div class="row g-4">

                <!-- زر إظهار الفلتر في الموبايل -->
                <button class="btn btn-dark mobile-filter-btn fw-bold py-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarFilter">
                    <i class="fa-solid fa-filter me-2"></i> إظهار الفلاتر
                </button>

                <!-- ==================== Sidebar (Filters) ==================== -->
                <!-- سيتحول إلى فورم في بليد: form action route('shop') method="GET" -->
                <div class="col-lg-3 collapse d-lg-block" id="sidebarFilter">
                    <form action="#" method="GET" class="shop-sidebar shadow-sm">

                        <!-- فلتر الأقسام -->
                        <div class="filter-widget">
                            <h4 class="filter-title">الأقسام</h4>
                            <ul class="category-list">
                                <li>
                                    <a href="#" class="active">جميع الأقسام <span class="count">45</span></a>
                                </li>
                                <li>
                                    <a href="#">غرف المعيشة <span class="count">12</span></a>
                                </li>
                                <li>
                                    <a href="#">غرف النوم <span class="count">8</span></a>
                                </li>
                                <li>
                                    <a href="#">غرف الطعام <span class="count">15</span></a>
                                </li>
                                <li>
                                    <a href="#">مساحات العمل <span class="count">5</span></a>
                                </li>
                                <li>
                                    <a href="#">ديكور وإضاءة <span class="count">5</span></a>
                                </li>
                            </ul>
                        </div>

                        <!-- فلتر السعر -->
                        <div class="filter-widget">
                            <h4 class="filter-title">تصفية بالسعر</h4>
                            <div class="price-inputs">
                                <input type="number" name="min_price" placeholder="من (ج.م)" min="0">
                                <span>-</span>
                                <input type="number" name="max_price" placeholder="إلى (ج.م)" min="0">
                            </div>
                        </div>

                        <!-- فلتر حالة المخزون -->
                        <div class="filter-widget">
                            <h4 class="filter-title">حالة المخزون</h4>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="in_stock" id="stock1" value="1">
                                <label class="form-check-label" for="stock1">متوفر في المخزون</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="on_sale" id="stock2" value="1">
                                <label class="form-check-label" for="stock2">منتجات مخفضة (Sale)</label>
                            </div>
                        </div>

                        <!-- زر تطبيق الفلتر -->
                        <button type="submit" class="btn-filter">تطبيق الفلاتر</button>
                    </form>
                </div>

                <!-- ==================== Products Area ==================== -->
                <div class="col-lg-9">

                    <!-- شريط الترتيب (Topbar) -->
                    <div class="shop-topbar">
                        <div class="text-muted fw-bold">
                            عرض 1-9 من أصل 45 نتيجة
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="fw-bold text-dark text-nowrap">الترتيب حسب:</span>
                            <select class="sort-select" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="?sort=latest" selected>الأحدث أولاً</option>
                                <option value="?sort=price_low">السعر: من الأقل للأعلى</option>
                                <option value="?sort=price_high">السعر: من الأعلى للأقل</option>
                                <option value="?sort=popular">الأكثر شهرة</option>
                            </select>
                        </div>
                    </div>

                    <!-- شبكة المنتجات (Grid) -->
                    <div class="row g-4">

                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=500&q=80" alt="كرسي مفرد">
                                    <div class="action-btns">
                                        <button class="action-btn" title="إضافة للمفضلة"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn" title="معاينة سريعة"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى السلة</button>
                                </div>
                                <div class="product-info">
                                    <span class="product-category">غرف المعيشة</span>
                                    <a href="#" class="product-name">كرسي استرخاء مخملي فاخر</a>
                                    <div class="product-price">4,500 ج.م</div>
                                </div>
                            </div>
                        </div>

                        <!-- المنتج الثاني -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <span class="badge-new">جديد</span>
                                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&q=80" alt="أريكة">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى السلة</button>
                                </div>
                                <div class="product-info">
                                    <span class="product-category">غرف المعيشة</span>
                                    <a href="#" class="product-name">أريكة كلاسيكية بخشب الجوز</a>
                                    <div class="product-price">12,000 ج.م</div>
                                </div>
                            </div>
                        </div>

                        <!-- المنتج الثالث -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <img src="https://images.unsplash.com/photo-1577140917170-285929fb55b7?w=500&q=80" alt="طاولة طعام">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى السلة</button>
                                </div>
                                <div class="product-info">
                                    <span class="product-category">غرف الطعام</span>
                                    <a href="#" class="product-name">طاولة طعام بلمسات ذهبية</a>
                                    <div class="product-price">18,500 ج.م</div>
                                </div>
                            </div>
                        </div>

                        <!-- المنتج الرابع -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=500&q=80" alt="سرير">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى السلة</button>
                                </div>
                                <div class="product-info">
                                    <span class="product-category">غرف النوم</span>
                                    <a href="#" class="product-name">سرير مزدوج بتصميم ملكي</a>
                                    <div class="product-price">22,000 ج.م</div>
                                </div>
                            </div>
                        </div>

                        <!-- المنتج الخامس -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <img src="https://images.unsplash.com/photo-1604578762246-41134e00fbd2?w=500&q=80" alt="خزانة">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى السلة</button>
                                </div>
                                <div class="product-info">
                                    <span class="product-category">تخزين</span>
                                    <a href="#" class="product-name">خزانة ملابس بأبواب زجاجية</a>
                                    <div class="product-price">14,300 ج.م</div>
                                </div>
                            </div>
                        </div>

                        <!-- المنتج السادس -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <span class="badge-new" style="background: var(--danger-red)">-15%</span>
                                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500&q=80" alt="مكتب">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى السلة</button>
                                </div>
                                <div class="product-info">
                                    <span class="product-category">مساحة العمل</span>
                                    <a href="#" class="product-name">مكتب إدارة خشبي فاخر</a>
                                    <div class="product-price">6,800 ج.م</div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End Row -->

                    <!-- الترقيم (Pagination) -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-angle-right"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                            </li>
                        </ul>
                    </nav>

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
