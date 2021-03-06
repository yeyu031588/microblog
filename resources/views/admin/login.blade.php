<!DOCTYPE html>
<html class="login-bg">
<head>
    <title>Detail Admin - Sign in</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="./assets/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="./assets/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="./assets/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="./assets/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="./assets/css/lib/font-awesome.css" />

    <!-- this page specific styles -->
    <link rel="stylesheet" href="./assets/css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    {{--<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />--}}

    <!--[if lt IE 9]>
    <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


<!-- background switcher -->
{{--<div class="bg-switch visible-desktop">--}}
    {{--<div class="bgs">--}}
        {{--<a href="#" data-img="landscape.jpg" class="bg active">--}}
            {{--<img src="./assets/img/bgs/landscape.jpg" />--}}
        {{--</a>--}}
        {{--<a href="#" data-img="blueish.jpg" class="bg">--}}
            {{--<img src="./assets/img/bgs/blueish.jpg" />--}}
        {{--</a>--}}
        {{--<a href="#" data-img="7.jpg" class="bg">--}}
            {{--<img src="./assets/img/bgs/7.jpg" />--}}
        {{--</a>--}}
        {{--<a href="#" data-img="8.jpg" class="bg">--}}
            {{--<img src="./assets/img/bgs/8.jpg" />--}}
        {{--</a>--}}
        {{--<a href="#" data-img="9.jpg" class="bg">--}}
            {{--<img src="./assets/img/bgs/9.jpg" />--}}
        {{--</a>--}}
        {{--<a href="#" data-img="10.jpg" class="bg">--}}
            {{--<img src="./assets/img/bgs/10.jpg" />--}}
        {{--</a>--}}
        {{--<a href="#" data-img="11.jpg" class="bg">--}}
            {{--<img src="./assets/img/bgs/11.jpg" />--}}
        {{--</a>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="row-fluid login-wrapper">
    <a href="index.html">
        <img class="logo" src="./assets/img/logo-white.png" />
    </a>
    <div class="span4 box">
        <form action="{{ url('/AdminLogin') }}" method="post">
            <div class="content-wrap">
                <h6>登录</h6>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                           {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
                <input class="span12" type="text" placeholder="账户" name="name"/>
                <input class="span12" type="password" placeholder="密码"  name="password"/>
                <a href="#" class="forgot">Forgot password?</a>
                <div class="remember">
                    <input id="remember-me" type="checkbox" />
                    <label for="remember-me">Remember me</label>
                </div>
                <button class="btn-glow primary login button">登录</button>
            </div>
        </form>
    </div>

    <div class="span4 no-account">
        <p>Don't have an account?</p>
        <a href="signup.html">Sign up</a>
    </div>
</div>

<!-- scripts -->
<script src="./assets/js/jquery-latest.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/theme.js"></script>

<!-- pre load bg imgs -->
<script type="text/javascript">
    $("html").css("background-image", "url('./assets/img/bgs/blueish.jpg')");
    $(function () {
        // bg switcher
        var $btns = $(".bg-switch .bg");
        $btns.click(function (e) {
            e.preventDefault();
            $btns.removeClass("active");
            $(this).addClass("active");
            var bg = $(this).data("img");

            $("html").css("background-image", "url('./assets/img/bgs/" + bg + "')");
        });

    });
</script>

</body>
</html>