@extends('website.layouts.master')
@section('title', 'من نحن')
@section('active-abouts', 'active')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/about.css">
@endpush
@section('content')
    <!-- ==================== Page Header ==================== -->

    @include('website.layouts.page-header', [
        'pageTitle' => 'اكتشف قصتنا',
        'homePage' => 'الرئيسية',
        'currentPage' => 'من نحن',
    ])


    <main class="py-5">

        <div class="container px-lg-5">
            <div class="row align-items-center g-5">
                <!-- صورة القسم -->
                <div class="col-lg-6">
                    <div class="about-img-wrapper">
                        <!-- يمكنك تغيير رابط الصورة بصورة من معرضكم الخاص مستقبلاً -->
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=800&q=80"
                            alt="ورشة الأثاث الفاخر" class="about-img">
                    </div>
                </div>

                <!-- نصوص القسم -->
                <div class="col-lg-6">
                    <h2 class="about-title mb-4">التميز في صناعة الأثاث منذ عام 1995</h2>
                    <p class="about-text">
                        نحن في <strong>دار الأثاث الفاخر</strong> نؤمن بأن الأثاث ليس مجرد قطع خشبية صماء، بل هو فن يعكس
                        شخصيتك، ويضفي الدفء والروح على منزلك. بدأنا رحلتنا بشغف كبير لتحويل المساحات العادية إلى لوحات
                        فنية تنبض بالحياة.
                    </p>
                    <p class="about-text">
                        على مدار عقود، حرصنا على استخدام أجود أنواع الأخشاب الطبيعية، والأقمشة المخملية الراقية، لنقدم
                        لك تصاميم تجمع بين أصالة الماضي وعصرية الحاضر. كل قطعة تُصنع في ورشنا تمر بمراحل دقيقة من
                        العناية الفائقة لتضمن لك الراحة والمتانة التي تدوم لأجيال.
                    </p>
                    <div class="d-flex align-items-center gap-3 mt-4">
                        <i class="fa-solid fa-check-circle fs-4" style="color: var(--theme-yellow)"></i>
                        <span class="fw-bold fs-5 text-dark">نصنع لك مساحة تعبر عن هويتك.</span>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- ==================== Features Section ==================== -->
    <section class="features-section">
        <div class="container px-lg-5">
            <div class="text-center mb-5 pb-3">
                <h2 class="fw-bold" style="color: var(--theme-dark);">لماذا تختار دار الأثاث الفاخر؟</h2>
                <p class="text-muted">نقدم لك تجربة تسوق متكاملة تضع جودة المنتج وراحتك في المقام الأول.</p>
            </div>

            <div class="row g-4">
                <!-- الميزة 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-crown feature-icon"></i>
                        <h4 class="feature-title">جودة لا تضاهى</h4>
                        <p class="feature-text">نستخدم أفضل الخامات العالمية والأخشاب الصلبة لضمان متانة وأناقة تدوم
                            طويلاً.</p>
                    </div>
                </div>
                <!-- الميزة 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-paintbrush feature-icon"></i>
                        <h4 class="feature-title">تصاميم فريدة</h4>
                        <p class="feature-text">فريق من أمهر المصممين لابتكار قطع أثاث تناسب الذوق الكلاسيكي والمودرن.
                        </p>
                    </div>
                </div>
                <!-- الميزة 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-truck-fast feature-icon"></i>
                        <h4 class="feature-title">شحن وتوصيل آمن</h4>
                        <p class="feature-text">خدمة توصيل سريعة وآمنة لجميع المحافظات مع فريق متخصص في الفك والتركيب.
                        </p>
                    </div>
                </div>
                <!-- الميزة 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <i class="fa-solid fa-headset feature-icon"></i>
                        <h4 class="feature-title">خدمة عملاء ممتازة</h4>
                        <p class="feature-text">فريق دعم متواجد على مدار الساعة للرد على استفساراتكم ومساعدتكم في
                            اختياراتكم.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== Stats Section ==================== -->
    <section class="stats-section">
        <div class="container px-lg-5">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">+25</div>
                        <div class="stat-text">عام من الخبرة</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">+10K</div>
                        <div class="stat-text">عميل سعيد</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">+500</div>
                        <div class="stat-text">تصميم حصري</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-text">فروع رئيسية</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
