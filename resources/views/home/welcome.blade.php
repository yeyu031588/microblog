@extends('layout.home')
@section('body')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="" >
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
                    <li><a href="{{url('/register')}}">注册</a></li>
                    <li><a href="javascript:void(0);">|</a></li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">登录</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--content-->
    <div class="container-fluid bg-image-1 home">
        <div class="container">
            <div class="row bg-color-e0f0e9">
                <div class="col-xs-3 col-md-2 first">
                    <ul class="list-group bg-color-e0f0e9 text-center">
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            美食
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            电影
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            动漫
                        </li>
                        <li class="list-group-item active">
                            <span class="badge">14</span>
                            热门
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            校园
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            美图
                        </li>

                    </ul>
                </div>

                <div class="col-xs-6 col-md-7 twice weibo">
                    <div class="list-group">
                        <!--新闻-->
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2"><img src="/assets/img/contact-img2.png" alt=""/></div>
                                <div class="col-xs-10 col-md-10">
                                    <div class="col-md-12 col-sm-12">
                                        #我是专注#
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        9月6日，武隆县浩口苗族仡佬族自治乡何家村。
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                    <span class="">
                                    @新华日报新华日报新 今日13点
                                    </span>
                                    <span class="pull-right">
                                        <i class="glyphicon glyphicon-share"></i>18 |
                                        <i class="glyphicon glyphicon-thumbs-up"></i>14 |
                                        <i class="glyphicon glyphicon-comment"></i>160
                                    </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--新闻-->
                        <!--说说-->
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2"><img src="/assets/img/contact-img2.png" alt=""/></div>
                                <div class="col-xs-10 col-md-10">
                                    <div class="col-md-12 col-sm-12">
                                        #我是专注#
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        9月6日，武隆县浩口苗族仡佬族自治乡何家村。
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                    <span class="">
                                    @新华日报新华日报新 今日13点
                                    </span>
                                    <span class="pull-right">
                                        <i class="glyphicon glyphicon-share"></i>18 |
                                        <i class="glyphicon glyphicon-thumbs-up"></i>14 |
                                        <i class="glyphicon glyphicon-comment"></i>160
                                    </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-2"><img src="/assets/img/contact-img2.png" alt=""/></div>
                                <div class="col-xs-10 col-md-10">
                                    <div class="col-md-12 col-sm-12">
                                        #我是专注#
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        9月6日，武隆县浩口苗族仡佬族自治乡何家村。
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                    <span class="">
                                    @新华日报新华日报新 今日13点
                                    </span>
                                    <span class="pull-right">
                                        <i class="glyphicon glyphicon-share"></i>18 |
                                        <i class="glyphicon glyphicon-thumbs-up"></i>14 |
                                        <i class="glyphicon glyphicon-comment"></i>160
                                    </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--说说-->
                    </div>

                </div>

                <div class="col-xs-3 col-md-3 third">
                    <!--登录-->
                    <div class="bg-color-fff login">
                        <div class="col-sm-10 col-md-offset-1">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        账号登录
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 ">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12">
                                        <label><input type="checkbox"> 记住我</label>
                                        <label class="pull-right">忘记密码</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" class="form-control btn-primary" value="登录">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        还没有微博？立即注册
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--热门话题-->
                    <div class="list-group topic">
                        <div class="list-group-item">
                            热门话题
                        </div>
                        <div class="list-group-item">
                            #开车不能喷香水#423.2万
                        </div>
                        <div class="list-group-item">
                            #开车不能喷香水#423.2万
                        </div>
                        <div class="list-group-item">
                            #开车不能喷香水#423.2万
                        </div>
                    </div>
                    <!--热门话题-->
                </div>
            </div>
        </div>
    </div>
    <!--endcontent-->

    <!--登录框-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">账号登录</h4>
                </div>
                <div class="modal-body ">

                    <div class="bg-color-fff login">
                        <div class="col-sm-6 col-md-offset-3">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        账号登录
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 ">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 checkbox">
                                        <label><input type="checkbox"> 下次自动登录</label>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        忘记密码
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" class="form-control btn-primary" value="登录">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        还没有微博？立即注册
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
