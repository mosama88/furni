<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="light">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>دار الأثاث الفاخر | تسجيل الدخول</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="دار الأثاث الفاخر - لوحة التحكم" />
    <meta name="author" content="ColorlibHQ" />
    <!--end::Primary Meta Tags-->

    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      crossorigin="anonymous"
      media="print"
      onload="this.media = 'all'"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- Google Fonts (Tajawal) -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <style>
      /* تنسيق عام للخلفية وتوسيط الكارت الوحيد */
      body.login-page {
        font-family: 'Tajawal', sans-serif !important;
        background: linear-gradient(rgba(20, 19, 17, 0.75), rgba(20, 19, 17, 0.75)),
                    url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat !important;
        min-height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .login-box {
        width: 100%;
        max-width: 420px;
        padding: 15px;
      }

      .card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3) !important;
      }

      /* تنسيق الأيقونات في الحقول لتتلاءم مع الـ RTL */
      .input-group .form-control {
        border-start-start-radius: 0;
        border-end-start-radius: 0;
        border-start-end-radius: 6px;
        border-end-end-radius: 6px;
      }
      .input-group .input-group-text {
        border-start-start-radius: 6px;
        border-end-start-radius: 6px;
        border-start-end-radius: 0;
        border-end-end-radius: 0;
      }
    </style>
  </head>
  <!--end::Head-->

  <!--begin::Body-->
  <body class="login-page">
    <main class="login-box">
      <div class="card card-outline border-0">

        <div class="card-header bg-transparent text-center py-4 border-0">
          <a href="#" class="link-dark text-decoration-none">
            <h2 class="mb-0 fw-bold" style="color: #141311;">دار الأثاث الفاخر</h2>
            <span class="text-muted small">لوحة التحكم الإدارية</span>
          </a>
        </div>

        <div class="card-body login-card-body px-4 pb-4">
          <p class="login-box-msg text-muted mb-4 text-center">قم بتسجيل الدخول لبدء الجلسة</p>

          <form action="#" method="post">
            @csrf

            <!-- حقل البريد الإلكتروني -->
            <div class="input-group mb-3">
              <div class="input-group-text bg-light text-muted">
                <span class="bi bi-envelope"></span>
              </div>
              <div class="form-floating">
                <input id="loginEmail" type="email" name="email" class="form-control" placeholder="name@example.com" required />
                <label for="loginEmail">البريد الإلكتروني</label>
              </div>
            </div>

            <!-- حقل كلمة المرور -->
            <div class="input-group mb-3">
              <div class="input-group-text bg-light text-muted">
                <span class="bi bi-lock-fill"></span>
              </div>
              <div class="form-floating">
                <input id="loginPassword" type="password" name="password" class="form-control" placeholder="Password" required />
                <label for="loginPassword">كلمة المرور</label>
              </div>
            </div>

            <!-- خانة تذكرني -->
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" />
                <label class="form-check-label text-secondary" for="rememberMe"> تذكرني </label>
              </div>
            </div>

            <!-- زر تسجيل الدخول (عرض كامل وتحت تذكرني مباشرة) -->
            <div class="mb-3">
              <button type="submit" class="btn w-100 py-2 fw-bold text-dark" style="background-color: #e5b940; border-color: #e5b940;">تسجيل الدخول</button>
            </div>
          </form>

          <hr class="text-muted my-4">

          <div class="text-center">
            <p class="mb-2">
              <a href="#" class="text-decoration-none text-dark fw-bold">هل نسيت كلمة المرور؟</a>
            </p>
            <p class="mb-0">
              <a href="#" class="text-decoration-none text-muted">تسجيل حساب إداري جديد</a>
            </p>
          </div>
        </div>
        <!-- /.login-card-body -->
      </div>
    </main>
    <!-- /.login-box -->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('admin')}}/assets/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)-->
  </body>
  <!--end::Body-->
</html>
