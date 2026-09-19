@extends('website.layouts.master')
@section('title', 'إتمام الطلب والدفع')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/payments.css">
@endpush
@section('content')
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
                                <label class="form-label">عنوان الشارع التفصيلي <span class="text-danger">*</span></label>
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
                                <input class="form-check-input me-3" type="radio" name="payment_method" value="cod"
                                    checked>
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
@endsection

