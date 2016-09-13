<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/home/base.css" rel="stylesheet" />
    <link href="/assets/css/home/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="/plug/bootstrapValid/bootstrapValidator.css"/>
    <link rel="stylesheet" href="/plug/SweetAlert/sweetalert.css"/>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.form.js"></script>
    <!--插件-->
    <script src="/plug/bootstrapValid/bootstrapValidator.js"></script>
    <script src="/plug/SweetAlert/sweetalert-dev.js"></script>
    <script src="/plug/SweetAlert/sweetalert.min.js"></script>
    @yield('extendCss')
</head>
<body>
@section('body')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    {{--<img alt="Brand" src="" >--}}
                    <i class="glyphicon glyphicon-leaf"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                    </div><!-- /input-group -->
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="">首页</a></li>
                    <li><a href="">好友</a></li>
                    <li><a href="">发现</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-user">{{Session::get('username')}}</i></a></li>
                    <li>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">修改资料</a></li>
                            <li><a href="#">修改密码</a></li>
                            <li><a href="{{url('/signOut')}}">退出登录</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--content-->
@section('content')
 @show
@show
<!--endcontent-->
@yield('extendJs')
</body>
</html>