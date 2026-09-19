    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('web-sites') }}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- سكريبت بسيط لتشغيل عداد الفلاش سيل (البيانات مرئية فقط ليتم ربطها بـ Laravel لاحقاً) -->
    <script>
        // في لارافل، يمكنك استبدال هذا التاريخ بتاريخ نهاية العرض من الـ Database

        // سنضع تاريخ تجريبي بعد 3 أيام من الآن
        var countDownDate = new Date();
        countDownDate.setDate(countDownDate.getDate() + 3);
        countDownDate.setHours(countDownDate.getHours() + 5);
        countDownDate = countDownDate.getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // إضافة صفر على اليسار إذا كان الرقم أقل من 10
            document.getElementById("cd-days").innerHTML = days < 10 ? '0' + days : days;
            document.getElementById("cd-hours").innerHTML = hours < 10 ? '0' + hours : hours;
            document.getElementById("cd-mins").innerHTML = minutes < 10 ? '0' + minutes : minutes;
            document.getElementById("cd-secs").innerHTML = seconds < 10 ? '0' + seconds : seconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("flash-countdown").innerHTML =
                    "<div class='text-danger fw-bold'>انتهى العرض</div>";
            }
        }, 1000);
    </script>


    @stack('js')
