<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    @include('website.layouts.head')
</head>

<body>

    <!-- ==================== HEADER ==================== -->
    @include('website.layouts.navbar')
    <main>
        @yield('content')

    </main>

    <!-- ==================== FOOTER ==================== -->
    @include('website.layouts.footer')

    @include('website.layouts.scripts')
</body>

</html>
