@extends('website.layouts.master')
@section('title', 'أتصل بنا')
@section('active-contacts', 'active')

@push('css')
    <link rel="stylesheet" href="{{ asset('web-sites') }}/assets/css/contact.css">
@endpush
@section('content')

    <!-- ==================== Page Header ==================== -->

    @include('website.layouts.page-header', [
        'pageTitle' => 'تواصل معنا',
        'homePage' => 'الرئيسية',
        'currentPage' => 'اتصل بنا',
    ])


    <!-- ==================== Main Content ==================== -->
    <main class="py-5">
        <div class="container px-lg-5">
            <div class="row g-5">

                <!-- القسم الأيمن: معلومات التواصل -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <h3 class="fw-bold mb-4" style="color: var(--theme-dark);">معلومات التواصل</h3>
                        <p class="text-muted mb-5">نحن هنا لمساعدتك والإجابة على كافة استفساراتك. لا تتردد في التواصل
                            معنا عبر القنوات التالية أو من خلال زيارة معرضنا.</p>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">عنوان المعرض</h4>
                                <p class="contact-text">شارع التسعين الجنوبي، التجمع الخامس<br>القاهرة، جمهورية مصر
                                    العربية</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">أرقام الهواتف</h4>
                                <p class="contact-text" dir="ltr">+20 123 456 7890</p>
                                <p class="contact-text" dir="ltr">+20 22 345 6789</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">البريد الإلكتروني</h4>
                                <p class="contact-text">info@dar-alathath.com</p>
                                <p class="contact-text">support@dar-alathath.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon-box">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="contact-title">ساعات العمل</h4>
                                <p class="contact-text">السبت - الخميس: 10:00 صباحاً - 10:00 مساءً</p>
                                <p class="contact-text">الجمعة: 02:00 ظهراً - 11:00 مساءً</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- القسم الأيسر: نموذج المراسلة -->
                <div class="col-lg-7">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm border" style="border-color: #eee !important;">
                        <h3 class="fw-bold mb-4" style="color: var(--theme-dark);">أرسل لنا رسالة</h3>

                        <!-- Form ready for Laravel: action route() -->
                        <form action="#" method="POST">
                            <!-- @csrf (سيتم إضافتها في بليد) -->

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">الاسم بالكامل</label>
                                    <input type="text" class="form-control" name="name" placeholder="أدخل اسمك"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="example@email.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">رقم الهاتف</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="أدخل رقم هاتفك">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">الموضوع</label>
                                    <input type="text" class="form-control" name="subject" placeholder="موضوع الرسالة"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">تفاصيل الرسالة</label>
                                    <textarea class="form-control" name="message" rows="5" placeholder="اكتب رسالتك هنا..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-submit">
                                        إرسال الرسالة <i class="fa-regular fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <!-- قسم الخريطة -->
            <div class="row mt-5 pt-4">
                <div class="col-12">
                    <div class="map-container">
                        <!-- تضمين خريطة جوجل (Google Maps Iframe) - تم ضبطها على التجمع الخامس كمثال -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.6118503819!2d31.3323063548974!3d30.015273397368625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145822c95e1610e7%3A0xc38d9bb0849688bc!2sNew%20Cairo%20City%2C%20Cairo%20Governorate%2C%20Egypt!5e0!3m2!1sen!2s!4v1698246824987!5m2!1sen!2s"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
