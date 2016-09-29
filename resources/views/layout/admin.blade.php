<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap -->
    <link href="/assets/css/bootstrap/bootstrap.css" rel="stylesheet" />
    {{--<link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />--}}
    <link href="/assets/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/assets/css/layout.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/elements.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/admin/admin.css" />

    <!-- libraries -->
    <link href="/assets/css/lib/font-awesome.css" type="text/css" rel="stylesheet" />

    <!-- this page specific styles -->

    <!-- open sans font -->
    {{--<link href='/assets/css/font.css' rel='stylesheet' type='text/css' />--}}
    <!--self plug-->
    <link rel="stylesheet" href="/plug/bootstrapValid/bootstrapValidator.css"/>
    <!--[if lt IE 9]>
    <!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    <![endif]-->
    @yield('extendCss')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!-- navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <button type="button" class="btn btn-navbar visible-phone" id="menu-toggler">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="brand" href="index.html"><img src="/assets/img/logo.png" /></a>

        <ul class="nav pull-right">
            <li class="hidden-phone">
                <input class="search" type="text" />
            </li>
            <li class="notification-dropdown hidden-phone">
                <a href="#" class="trigger">
                    <i class="icon-warning-sign"></i>
                    <span class="count">8</span>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="notifications">
                            <h3>You have 6 new notifications</h3>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 18 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-envelope-alt"></i> New message from Alejandra
                                <span class="time"><i class="icon-time"></i> 28 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-signin"></i> New user registration
                                <span class="time"><i class="icon-time"></i> 49 min.</span>
                            </a>
                            <a href="#" class="item">
                                <i class="icon-download-alt"></i> New order placed
                                <span class="time"><i class="icon-time"></i> 1 day.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="notification-dropdown hidden-phone">
                <a href="#" class="trigger">
                    <i class="icon-envelope-alt"></i>
                </a>
                <div class="pop-dialog">
                    <div class="pointer right">
                        <div class="arrow"></div>
                        <div class="arrow_border"></div>
                    </div>
                    <div class="body">
                        <a href="#" class="close-icon"><i class="icon-remove-sign"></i></a>
                        <div class="messages">
                            <a href="#" class="item">
                                <img src="/assets/img/contact-img.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 13 min.</span>
                            </a>
                            <a href="#" class="item">
                                <img src="/assets/img/contact-img2.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 26 min.</span>
                            </a>
                            <a href="#" class="item last">
                                <img src="/assets/img/contact-img.png" class="display" />
                                <div class="name">Alejandra Galván</div>
                                <div class="msg">
                                    There are many variations of available, but the majority have suffered alterations.
                                </div>
                                <span class="time"><i class="icon-time"></i> 48 min.</span>
                            </a>
                            <div class="footer">
                                <a href="#" class="logout">View all messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                    Your account
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="personal-info.html">Personal info</a></li>
                    <li><a href="#">Account settings</a></li>
                    <li><a href="#">Billing</a></li>
                    <li><a href="#">Export your data</a></li>
                    <li><a href="#">Send feedback</a></li>
                </ul>
            </li>
            <li class="settings hidden-phone">
                <a href="personal-info.html" role="button">
                    <i class="icon-cog"></i>
                </a>
            </li>
            <li class="settings hidden-phone">
                <a href="{{ url('/Admin/layout')}}" role="button">
                    <i class="icon-share-alt"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end navbar -->

<!-- sidebar -->

<div id="sidebar-nav">
    <ul id="dashboard-menu">
        <li>
            <a href="{{url('/Admin')}}">
                <i class="icon-home"></i>
                <span>主页</span>
            </a>
        </li>
        <li>
            <a href="chart-showcase.html">
                <i class="icon-signal"></i>
                <span>Charts</span>
            </a>
        </li>
        <li class="">
            <div class="pointer">
                <div class="arrow"></div>
                <div class="arrow_border"></div>
            </div>
            <a class="dropdown-toggle" href="#">
                <i class="icon-group"></i>
                <span>用户</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="{{url('Admin/user')}}" class="">用户列表</a></li>
                <li><a href="{{url('Admin/newuser')}}">创建用户</a></li>
            </ul>
        </li>
        <li>
            <a class="dropdown-toggle" href="#">
                <i class="icon-edit"></i>
                <span>权限管理</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="{{url('/Admin/grant/role')}}">角色</a></li>
                <li><a href="{{url('/Admin/grant/route')}}">路由</a></li>
            </ul>
        </li>
        <li>
            <a href="gallery.html">
                <i class="icon-picture"></i>
                <span>Gallery</span>
            </a>
        </li>
        <li>
            <a href="calendar.html">
                <i class="icon-calendar-empty"></i>
                <span>Calendar</span>
            </a>
        </li>
        <li>
            <a href="tables.html">
                <i class="icon-th-large"></i>
                <span>Tables</span>
            </a>
        </li>
        <li>
            <a class="dropdown-toggle ui-elements" href="#">
                <i class="icon-code-fork"></i>
                <span>UI Elements</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="ui-elements.html">UI Elements</a></li>
                <li><a href="icons.html">Icons</a></li>
            </ul>
        </li>
        <li>
            <a href="personal-info.html">
                <i class="icon-cog"></i>
                <span>My Info</span>
            </a>
        </li>
        <li>
            <a class="dropdown-toggle" href="#">
                <i class="icon-share-alt"></i>
                <span>Extras</span>
                <i class="icon-chevron-down"></i>
            </a>
            <ul class="submenu">
                <li><a href="code-editor.html">Code editor</a></li>
                <li><a href="grids.html">Grids</a></li>
                <li><a href="signin.html">Sign in</a></li>
                <li><a href="signup.html">Sign up</a></li>
            </ul>
        </li>
    </ul>
</div>

<!-- end sidebar -->


<!-- main container -->
@section('contenter')
    <div class="content">
    <!-- settings changer -->
    {{--<div class="skins-nav">--}}
        {{--<a href="#" class="skin first_nav selected">--}}
            {{--<span class="icon"></span><span class="text">Default</span>--}}
        {{--</a>--}}
        {{--<a href="#" class="skin second_nav" data-file="css/skins/dark.css">--}}
            {{--<span class="icon"></span><span class="text">Dark skin</span>--}}
        {{--</a>--}}
    {{--</div>--}}
        @yield('content')
</div>


<!-- end main container -->
@show

<!-- scripts -->
<script src="/assets/js/jquery.min.js"></script>
<!-- scripts -->
<script src="/assets/js/jquery-latest.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
<!-- knob -->
<script src="/assets/js/jquery.knob.js"></script>
<!-- flot charts -->
<script src="/assets/js/jquery.flot.js"></script>
<script src="/assets/js/jquery.flot.stack.js"></script>
<script src="/assets/js/jquery.flot.resize.js"></script>
<script src="/assets/js/theme.js"></script>
<!--插件-->
<script src="/plug/bootstrapValid/bootstrapValidator.js"></script>
<script src="/plug/selectCity/jquery.cityselect.js"></script>
@yield('extendJs')
</body>
</html>
