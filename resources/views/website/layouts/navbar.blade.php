    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-lg-5">
            <a class="navbar-brand" href="{{ url('/') }}">
                دار الأثاث الفاخر <i class="fa-solid fa-couch logo-icon"></i>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link @yield('active-home')" href="{{ route('home') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item"><a class="nav-link @yield('active-products')" href="{{ route('products') }}">تصفح
                            المنتجات</a></li>
                    <li class="nav-item"><a class="nav-link @yield('active-abouts')" href="{{ route('abouts') }}">من نحن</a>
                    </li>
                    <li class="nav-item"><a class="nav-link @yield('active-contacts')" href="{{ route('contacts') }}">اتصل
                            بنا</a></li>
                </ul>
                <div class="header-actions">

                    <!-- زر تغيير اللغة -->
                    <a href="#" class="lang-switcher-btn mx-2">
                        <i class="fa-solid fa-globe"></i>
                        <span class="lang-text">AR</span>
                    </a>


                    {{-- @if (app()->getLocale() == 'ar')
                        <a href="{{ route('lang.switch', 'en') }}" class="lang-switcher-btn mx-2">
                            <i class="fa-solid fa-globe"></i>
                            <span>EN</span>
                        </a>
                    @else
                        <a href="{{ route('lang.switch', 'ar') }}" class="lang-switcher-btn mx-2">
                            <i class="fa-solid fa-globe"></i>
                            <span>AR</span>
                        </a>
                    @endif --}}


                    <a href="{{ route('wishlist') }}" class="icon-btn"><i class="fa-solid fa-heart"></i><span
                            class="badge-count">0</span></a>
                    <a href="{{ route('carts') }}" class="icon-btn"><i class="fa-solid fa-cart-shopping"></i><span
                            class="badge-count">2</span></a>
                    <a href="{{ route('login') }}" class="btn-login ms-3"><i class="fa-solid fa-user"></i> تسجيل
                        الدخول</a>
                </div>
            </div>
        </div>
    </nav>
