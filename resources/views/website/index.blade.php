@extends('website.layouts.master')
@section('title', 'الرئيسية')

@section('content')
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
            <a href="#" class="btn-discount">تسوق العروض الآن <i class="fa-solid fa-arrow-left ms-2"></i></a>
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
@endsection
