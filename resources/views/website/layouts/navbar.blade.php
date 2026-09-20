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
             

                    @auth
                        <!-- القائمة المنسدلة للمستخدم المسجل -->
                        <div class="dropdown ms-3">
                            <button class="btn btn-login dropdown-toggle d-flex align-items-center gap-2" type="button"
                                id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                                <span>
                                    {{ Auth::user()->full_name }}
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="userDropdown"
                                style="background-color: var(--theme-dark, #141311); border: 1px solid #2a2825 !important;">

                                <!-- رابط الملف الشخصي أو لوحة التحكم -->
                                <li>
                                    <a class="dropdown-item text-white py-2 px-3 hover-gold" href="#">
                                        <i class="fa-solid fa-user-gear me-2"
                                            style="color: var(--theme-yellow, #e5b940);"></i> الملف الشخصي
                                    </a>
                                </li>

                                <!-- رابط الطلبات -->
                                <li>
                                    <a class="dropdown-item text-white py-2 px-3 hover-gold" href="#">
                                        <i class="fa-solid fa-bag-shopping me-2"
                                            style="color: var(--theme-yellow, #e5b940);"></i> طلباتي
                                    </a>
                                </li>

                                <li>
                                    <hr class="dropdown-divider bg-secondary opacity-25">
                                </li>

                                <!-- زر تسجيل الخروج (يجب أن يكون Form في Laravel لحماية الـ CSRF) -->
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit"
                                            class="dropdown-item text-danger py-2 px-3 fw-bold d-flex align-items-center">
                                            <i class="fa-solid fa-right-from-bracket me-2"></i> تسجيل الخروج
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <!-- زر تسجيل الدخول العادي إذا لم يكن المستخدم مسجلاً -->
                        <a href="{{ route('login') }}" class="btn-login ms-3">
                            <i class="fa-solid fa-user"></i> تسجيل الدخول
                        </a>
                    @endauth

                </div>
            </div>
        </div>
    </nav>
