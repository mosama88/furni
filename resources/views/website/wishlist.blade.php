@extends('website.layouts.master')
@section('title', ' قائمة المفضلة')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/wishlist.css">
@endpush
@section('content')
    <!-- ==================== Page Header ==================== -->


    @include('website.layouts.page-header', [
        'pageTitle' => 'قائمة المفضلة',
        'homePage' => 'الرئيسية',
        'currentPage' => 'المفضلة',
    ])

    <!-- ==================== Wishlist Content ==================== -->
    <main class="py-5 min-vh-100">
        <div class="container px-lg-5">

            <div class="wishlist-header">
                <h4 class="fw-bold mb-0 text-dark">المنتجات المحفوظة (<span style="color: var(--theme-yellow)">3</span>)
                </h4>
                <!-- يمكنك إضافة فورم لتفريغ المفضلة بالكامل -->
                <button class="btn btn-outline-danger btn-sm fw-bold px-3 py-2">
                    <i class="fa-solid fa-trash-can ms-1"></i> مسح الكل
                </button>
            </div>

            <!-- شبكة المنتجات المفضلة -->
            <div class="row g-4">

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card h-100">
                        <div class="product-img-box">
                            <!-- الفورم الخاص بحذف المنتج من المفضلة في لارافل -->
                            <form action="#" method="POST" class="d-inline">
                                <!-- @csrf و @method('DELETE') توضع هنا -->
                                <button type="submit" class="btn-remove-wishlist" title="إزالة من المفضلة">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                            <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=500&q=80"
                                alt="كرسي مفرد">

                            <!-- زر الإضافة للسلة -->
                            <form action="#" method="POST">
                                <button type="submit" class="add-to-cart-btn">
                                    <i class="fa fa-cart-plus me-2"></i> أضف إلى السلة
                                </button>
                            </form>
                        </div>
                        <div class="product-info">
                            <div class="stock-status stock-in"><i class="fa-solid fa-check ms-1"></i> متوفر بالمخزون</div>
                            <a href="#" class="product-name">كرسي استرخاء مخملي فاخر</a>
                            <div class="product-price">4,500 ج.م</div>
                        </div>
                    </div>
                </div>

                <!-- المنتج الثاني -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card h-100">
                        <div class="product-img-box">
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn-remove-wishlist" title="إزالة من المفضلة">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&q=80" alt="أريكة">
                            <form action="#" method="POST">
                                <button type="submit" class="add-to-cart-btn">
                                    <i class="fa fa-cart-plus me-2"></i> أضف إلى السلة
                                </button>
                            </form>
                        </div>
                        <div class="product-info">
                            <div class="stock-status stock-in"><i class="fa-solid fa-check ms-1"></i> متوفر بالمخزون</div>
                            <a href="#" class="product-name">أريكة كلاسيكية بخشب الجوز</a>
                            <div class="product-price">12,000 ج.م</div>
                        </div>
                    </div>
                </div>

                <!-- المنتج الثالث (كمثال لمنتج غير متوفر) -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card h-100">
                        <div class="product-img-box">
                            <!-- تغميق الصورة لتدل على نفاد الكمية -->
                            <div
                                style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(255,255,255,0.5); z-index: 1; pointer-events: none;">
                            </div>

                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn-remove-wishlist" title="إزالة من المفضلة">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </form>
                            <img src="https://images.unsplash.com/photo-1540574163026-643ea20ade25?w=500&q=80"
                                alt="كنبة">

                            <!-- تعطيل زر السلة إذا كان غير متوفر -->
                            <button type="button" class="add-to-cart-btn"
                                style="background-color: #666; cursor: not-allowed;">
                                <i class="fa-solid fa-ban me-2"></i> نفدت الكمية
                            </button>
                        </div>
                        <div class="product-info">
                            <div class="stock-status stock-out"><i class="fa-solid fa-xmark ms-1"></i> نفدت الكمية</div>
                            <a href="#" class="product-name text-muted">طقم جلوس زاوية حرف L</a>
                            <div class="product-price text-muted">19,000 ج.م</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center py-5">
                <i class="fa-regular fa-heart" style="font-size: 5rem; color: #ddd; margin-bottom: 20px;"></i>
                <h3 class="fw-bold text-dark mb-3">قائمتك المفضلة فارغة!</h3>
                <p class="text-muted mb-4">لم تقم بإضافة أي منتجات إلى قائمة المفضلة الخاصة بك حتى الآن.</p>
                <a href="shop.html" class="btn btn-dark px-4 py-2 fw-bold"
                    style="background-color: var(--theme-yellow); color: #000; border: none;">ابدأ التسوق الآن</a>
            </div>
            -->

        </div>
    </main>
@endsection
