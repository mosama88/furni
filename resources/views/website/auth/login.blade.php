

@extends('website.layouts.master')
@section('title', 'الدخول')
@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/login.css">
@endpush
@section('content')
    <!-- ==================== Main Auth Section ==================== -->
    <main>
        <div class="container auth-container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5">

                    <div class="auth-card">
                        <div class="auth-header">
                            <h2 class="auth-title">تسجيل الدخول</h2>
                            <p class="auth-subtitle">مرحباً بك مجدداً في دار الأثاث الفاخر</p>
                        </div>

                        <div class="auth-body">
                            <!-- الفورم الخاص بـ Laravel -->
                            <!-- action="{{ route('login') }}" -->
                            <form action="#" method="POST">
                                <!-- @csrf هنا في بليد -->

                                <div class="mb-4">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted"><i
                                                class="fa-regular fa-envelope"></i></span>
                                        <input type="email" class="form-control border-start-0" id="email"
                                            name="email" placeholder="example@email.com" required autofocus>
                                    </div>
                                    <!-- مكان رسالة الخطأ (لارافل) -->
                                    <!-- @error('email')
        <span class="text-danger small mt-1">{{ $message }}</span>
    @enderror -->
                                </div>

                                <div class="mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <label for="password" class="form-label mb-0">كلمة المرور</label>
                                        <!-- رابط نسيت كلمة المرور -->
                                        <a href="reset-password.html" class="forgot-password">نسيت كلمة المرور؟</a>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white border-end-0 text-muted"><i
                                                class="fa-solid fa-lock"></i></span>
                                        <input type="password" class="form-control border-start-0" id="password"
                                            name="password" placeholder="••••••••" required>
                                    </div>
                                </div>

                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label text-muted ms-2" for="remember">تذكرني على هذا
                                        الجهاز</label>
                                </div>

                                <button type="submit" class="btn-auth">
                                    دخول <i class="fa-solid fa-arrow-right-to-bracket ms-2"></i>
                                </button>

                                <div class="register-link">
                                    <span class="text-muted">ليس لديك حساب؟</span>
                                    <a href="{{route('register')}}">إنشاء حساب جديد</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection
