@extends('website.layouts.master')
@section('title', 'تصفح المنتجات')
@section('active-products', 'active')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/products.css">
@endpush
@section('content')
    <!-- ==================== Page Header ==================== -->

    @include('website.layouts.page-header', [
        'pageTitle' => 'تصفح المنتجات',
        'homePage' => 'الرئيسية',
        'currentPage' => 'تصفح المنتجات',
    ])

    <!-- ==================== Shop Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">
            <div class="row g-4">

                <!-- زر إظهار الفلتر في الموبايل -->
                <button class="btn btn-dark mobile-filter-btn fw-bold py-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarFilter">
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
                                <input class="form-check-input" type="checkbox" name="in_stock" id="stock1"
                                    value="1">
                                <label class="form-check-label" for="stock1">متوفر في المخزون</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="on_sale" id="stock2"
                                    value="1">
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
                            <select class="sort-select"
                                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
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
                                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=500&q=80"
                                        alt="كرسي مفرد">
                                    <div class="action-btns">
                                        <button class="action-btn" title="إضافة للمفضلة"><i
                                                class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn" title="معاينة سريعة"><i
                                                class="fa-regular fa-eye"></i></button>
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

                        <!-- المنتج الثاني -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <span class="badge-new">جديد</span>
                                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&q=80"
                                        alt="أريكة">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
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

                        <!-- المنتج الثالث -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card h-100">
                                <div class="product-img-box">
                                    <img src="https://images.unsplash.com/photo-1577140917170-285929fb55b7?w=500&q=80"
                                        alt="طاولة طعام">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                        السلة</button>
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
                                    <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=500&q=80"
                                        alt="سرير">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                        السلة</button>
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
                                    <img src="https://images.unsplash.com/photo-1604578762246-41134e00fbd2?w=500&q=80"
                                        alt="خزانة">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                        السلة</button>
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
                                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500&q=80"
                                        alt="مكتب">
                                    <div class="action-btns">
                                        <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                                        <button class="action-btn"><i class="fa-regular fa-eye"></i></button>
                                    </div>
                                    <button class="add-to-cart-btn"><i class="fa fa-cart-plus me-2"></i> أضف إلى
                                        السلة</button>
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
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                        class="fa-solid fa-angle-right"></i></a>
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
@endsection
