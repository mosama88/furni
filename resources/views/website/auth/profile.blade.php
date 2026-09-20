
@extends('website.layouts.master')
@section('title', 'الملف الشخصي')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/profile.css">
@endpush
@section('content')
    <!-- ==================== Page Header ==================== -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">الملف الشخصي</h1>
        </div>
    </header>

    <!-- ==================== Main Profile Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">

            <!-- رسالة النجاح (Laravel Flash Message) -->
            <!-- @if (session('success'))
    <div class="alert alert-success mb-4">{{ session('success') }}</div>
    @endif -->

            <div class="row g-4">

                <!-- الجانب الأيمن: إحصائيات سريعة وروابط سريعة -->
                <div class="col-lg-4">
                    <div class="profile-card p-4 text-center mb-4">
                        <!-- صورة البروفايل -->
                        <div class="profile-avatar-box">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&q=80"
                                alt="صورة المستخدم" class="profile-avatar">
                            <label for="avatar-upload" class="upload-avatar-btn" title="تغيير الصورة">
                                <i class="fa-solid fa-camera"></i>
                            </label>
                            <input type="file" id="avatar-upload" class="d-none">
                        </div>

                        <h4 class="fw-bold text-dark mb-1">سارة أحمد</h4>
                        <p class="text-muted small mb-3">sara.ahmed@example.com</p>
                        <span class="badge bg-warning text-dark px-3 py-2 fw-bold">عضو مميز</span>
                    </div>

                    <!-- إحصائيات سريعة -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="stat-box">
                                <div class="stat-number">5</div>
                                <p class="stat-text">الطلبات</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-box">
                                <div class="stat-number">3</div>
                                <p class="stat-text">المفضلة</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- الجانب الأيسر: نموذج تعديل البيانات (الاسم، الموبايل، العنوان) -->
                <div class="col-lg-8">
                    <div class="profile-card p-4 p-md-5">
                        <h3 class="fw-bold mb-4" style="color: var(--theme-dark);">تعديل المعلومات الشخصية</h3>

                        <!-- في لارافل: action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" -->
                        <form action="#" method="POST">
                            <!-- @csrf @method('PUT') -->

                            <div class="row g-3">
                                <!-- الاسم الأول -->
                                <div class="col-md-6">
                                    <label class="form-label">الاسم الأول</label>
                                    <input type="text" class="form-control" name="first_name" value="سارة"
                                        required>
                                </div>

                                <!-- الاسم الأخير -->
                                <div class="col-md-6">
                                    <label class="form-label">الاسم الأخير</label>
                                    <input type="text" class="form-control" name="last_name" value="أحمد" required>
                                </div>

                                <!-- البريد الإلكتروني -->
                                <div class="col-md-6">
                                    <label class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email"
                                        value="sara.ahmed@example.com" required>
                                </div>

                                <!-- الموبايل -->
                                <div class="col-md-6">
                                    <label class="form-label">رقم الموبايل</label>
                                    <input type="tel" class="form-control" name="phone" value="+20 101 234 5678"
                                        placeholder="أدخل رقم الهاتف" required>
                                </div>

                                <!-- العنوان -->
                                <div class="col-12">
                                    <label class="form-label">العنوان التفصيلي (للتوصيل)</label>
                                    <input type="text" class="form-control" name="address"
                                        value="شارع التسعين الشمالي، التجمع الخامس، القاهرة" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">المدينة / المحافظة</label>
                                    <input type="text" class="form-control" name="city" value="القاهرة" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">الرمز البريدي</label>
                                    <input type="text" class="form-control" name="postal_code" value="11835">
                                </div>

                                <hr class="my-4">

                                <h5 class="fw-bold mb-3" style="color: var(--theme-dark);">تغيير كلمة المرور (اختياري)
                                </h5>

                                <div class="col-md-6">
                                    <label class="form-label">كلمة المرور الجديدة</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="ترك فارغاً إذا لم ترد التغيير">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">تأكيد كلمة المرور الجديدة</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="تأكيد كلمة المرور">
                                </div>

                                <!-- زر الحفظ -->
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-save">
                                        <i class="fa-solid fa-floppy-disk me-2"></i> حفظ التعديلات
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
