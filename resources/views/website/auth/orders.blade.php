@extends('website.layouts.master')
@section('title', 'طلباتى')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/orders.css">
@endpush
@section('content')
    <!-- ==================== Page Header ==================== -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">سجل الطلبات</h1>
        </div>
    </header>

    <!-- ==================== Main Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">

            <div class="orders-card p-4">
                <h3 class="fw-bold mb-4" style="color: var(--theme-dark);">طلباتي السابقة</h3>

                <div class="table-responsive">
                    <table class="table orders-table mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>رقم الطلب</th>
                                <th>تاريخ الطلب</th>
                                <th>عدد المنتجات</th>
                                <th>الإجمالي</th>
                                <th>حالة الطلب</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- طلب رقم 1 (قيد المعالجة) -->
                            <tr>
                                <td class="fw-bold">#ORD-9821</td>
                                <td>18 سبتمبر 2026</td>
                                <td>2 منتج</td>
                                <td style="color: var(--theme-yellow); font-weight: 800;">32,490 ج.م</td>
                                <td><span class="badge-status status-pending">قيد المعالجة</span></td>
                                <td>
                                    <a href="#" class="btn-view-details-orders">
                                        <i class="fa-solid fa-eye me-1"></i> التفاصيل
                                    </a>
                                </td>
                            </tr>

                            <!-- طلب رقم 2 (جاري الشحن) -->
                            <tr>
                                <td class="fw-bold">#ORD-9750</td>
                                <td>10 سبتمبر 2026</td>
                                <td>1 منتج</td>
                                <td style="color: var(--theme-yellow); font-weight: 800;">4,500 ج.م</td>
                                <td><span class="badge-status status-shipping">جاري الشحن</span></td>
                                <td>
                                    <a href="#" class="btn-view-details-orders">
                                        <i class="fa-solid fa-eye me-1"></i> التفاصيل
                                    </a>
                                </td>
                            </tr>

                            <!-- طلب رقم 3 (تم التوصيل) -->
                            <tr>
                                <td class="fw-bold">#ORD-9200</td>
                                <td>25 أغسطس 2026</td>
                                <div></div>
                                <td>3 منتج</td>
                                <td style="color: var(--theme-yellow); font-weight: 800;">18,500 ج.م</td>
                                <td><span class="badge-status status-completed">تم التوصيل</span></td>
                                <td>
                                    <a href="#" class="btn-view-details-orders">
                                        <i class="fa-solid fa-eye me-1"></i> التفاصيل
                                    </a>
                                </td>
                            </tr>




                        </tbody>
                    </table>
                </div>


                <div class="text-center py-5">
                    <i class="fa-solid fa-box-open text-muted" style="font-size: 4rem; margin-bottom: 15px;"></i>
                    <h4 class="fw-bold text-dark">لا توجد طلبات سابقة!</h4>
                    <p class="text-muted mb-4">لم تقم بإتمام أي طلب شراء حتى الآن.</p>
                    <a href="{{route('products')}}" class="btn btn-dark px-4 py-2 fw-bold"
                        style="background-color: var(--theme-yellow); color: #000; border: none;">ابدأ التسوق الآن</a>
                </div>


            </div>

        </div>
    </main>
@endsection
