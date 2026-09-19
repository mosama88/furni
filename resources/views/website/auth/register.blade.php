@extends('website.layouts.master')
@section('title', 'إنشاء حساب جديد')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/register.css">
@endpush
@section('content')
    <!-- ==================== Main Auth Section ==================== -->
    <main>
        <div class="container auth-container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-6">

                    <div class="auth-card">
                        <div class="auth-header">
                            <h2 class="auth-title">إنشاء حساب جديد</h2>
                            <p class="auth-subtitle">انضم إلينا واكتشف عالم الأثاث الفاخر</p>
                        </div>

                        <div class="auth-body">
                            <!-- الفورم الخاص بـ Laravel -->
                            <form action="#" method="POST">
                                <!-- @csrf هنا في بليد -->

                                <div class="row">
                                    <!-- حقل الاسم -->
                                    <div class="col-md-12 mb-3">
                                        <label for="name" class="form-label">الاسم بالكامل</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 text-muted"><i
                                                    class="fa-regular fa-user"></i></span>
                                            <input type="text" class="form-control border-start-0" id="name"
                                                name="name" placeholder="أدخل اسمك بالكامل" required autofocus>
                                        </div>
                                        <!-- @error('name')
        <span class="text-danger small mt-1">{{ $message }}</span>
    @enderror -->
                                    </div>

                                    <!-- حقل البريد الإلكتروني -->
                                    <div class="col-md-12 mb-3">
                                        <label for="email" class="form-label">البريد الإلكتروني</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 text-muted"><i
                                                    class="fa-regular fa-envelope"></i></span>
                                            <input type="email" class="form-control border-start-0" id="email"
                                                name="email" placeholder="example@email.com" required>
                                        </div>

                                    </div>

                                    <!-- حقل كلمة المرور -->
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">كلمة المرور</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 text-muted"><i
                                                    class="fa-solid fa-lock"></i></span>
                                            <input type="password" class="form-control border-start-0" id="password"
                                                name="password" placeholder="••••••••" required>
                                        </div>

                                    </div>

                                    <!-- حقل تأكيد كلمة المرور -->
                                    <div class="col-md-6 mb-4">
                                        <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 text-muted"><i
                                                    class="fa-solid fa-check-double"></i></span>
                                            <input type="password" class="form-control border-start-0"
                                                id="password_confirmation" name="password_confirmation"
                                                placeholder="••••••••" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                    <label class="form-check-label text-muted ms-2 small" for="terms">
                                        أوافق على <a href="#" class="text-dark fw-bold text-decoration-none">الشروط
                                            والأحكام</a> و <a href="#"
                                            class="text-dark fw-bold text-decoration-none">سياسة
                                            الخصوصية</a>.
                                    </label>
                                </div>

                                <button type="submit" class="btn-auth">
                                    إنشاء الحساب <i class="fa-solid fa-user-plus ms-2"></i>
                                </button>

                                <div class="login-link">
                                    <span class="text-muted">لديك حساب بالفعل؟</span>
                                    <a href="{{route('login')}}">تسجيل الدخول</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
