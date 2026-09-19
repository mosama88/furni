@extends('website.layouts.master')
@section('title', 'عربة التسوق')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/carts.css">
@endpush
@section('content')

    <!-- ==================== Page Header ==================== -->
    @include('website.layouts.page-header', [
        'pageTitle'=> 'عربة التسوق',
        'homePage' => 'الرئيسية',
        'currentPage' => 'عربة التسوق',
    ])


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
                                            <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=150&q=80"
                                                alt="كرسي" class="product-img">
                                            <div>
                                                <a href="#" class="product-name-cart d-block mb-1">كرسي استرخاء مخملي
                                                    فاخر</a>
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
                                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=150&q=80"
                                                alt="أريكة" class="product-img">
                                            <div>
                                                <a href="#" class="product-name-cart d-block mb-1">أريكة كلاسيكية
                                                    بخشب الجوز</a>
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
@endsection
