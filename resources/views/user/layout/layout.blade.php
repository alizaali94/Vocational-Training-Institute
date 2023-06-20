<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("user.include.links")
    <title>@yield('title') | VTI-RYK</title>
    <script>
        $(window).on('load', function() {
            $('#preloader-active').delay(450).fadeOut('slow');
            $('body').delay(450).css({
                'overflow': 'visible'
            });
        });
    </script>
</head>

<body>
    @include('user.include.preloader')
    @include("user.include.header")
    <!-- Banner Start -->
    <section class="w-100 banner text-white align-items-center d-flex justify-content-center fw-bolder fs-1">
        <h1>@yield('title')</h1>
    </section>
    <!-- Banner End -->
    @yield('content')
    @include("user.include.footer")
</body>

</html>