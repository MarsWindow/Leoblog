<!DOCTYPE html lang="zh-cn">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <title>@yield('title','Leo-Blog 博学 慎思 明辨 笃行')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flat-ui.css">
    <link rel="stylesheet" href="/css/font/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="/assets/owl-carousel/custom.css">
    <link rel="stylesheet" href="/css/validator/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/vendor/jquery-2.0.3.min.js"></script>
    <!-- <script src="/front_v1/js/flat-ui.js"></script> -->
    <script src="/js/bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        @include('layouts._header')
        @include('shared._messages')

        @yield('content')
    </div>

@include('layouts._dump')
@include('layouts._footer')
</script>
</body>
</html>