@extends('layout.home')
@section('extendCss')

@show
@section('title', '我的微博首页')
@section('content')
    <div class="container-fluid bg-image-1 login_home">
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

                <div class="col-xs-7 col-md-7 twice weibo">
                    <div class="list-group">

                        <!--发布-->
                        <div class="list-group-item">
                            <div><span>有什么新鲜事想告诉大家?</span></div>
                            <div><textarea class="form-control textword" rows="5 "></textarea></div>
                            <div class="home_send">
                                <a href="#" class="bg-color-fff"><i class="glyphicon glyphicon-star">表情</i></a>
                                <a href="#" class="bg-color-fff left-5"><i class="glyphicon glyphicon-picture">图片</i></a>
                                <a href="#" class="bg-color-fff left-5"><i class="glyphicon glyphicon-retweet">话题</i></a>
                                <button type="button" class="btn btn-primary pull-right left-5">发布</button>
                                <span class="pull-right">
                                     <a href="" class="bg-color-fff dropdown-toggle" data-toggle="dropdown">公开<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><i class="glyphicon glyphicon-globe"></i>公开</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-heart"></i>好友圈</a></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-lock"></i>仅自己可见</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="glyphicon glyphicon-home"></i>群可见</a></li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <!--发布-->

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

                <div class="col-xs-2 col-md-3 third">
                    <!--登录-->
                    <div class="bg-color-fff ">
                        <div class="haslogin">
                            <div class="text-center bg-image-2 bg_user">
                                <img src="/assets/img/gallery1.jpg" alt="..." class="img-circle">
                            </div>
                            <div class=" text-center">
                                雨落夜未眠 <i class="glyphicon glyphicon-star-empty"></i>11级
                            </div>
                            <div class="text-center count">
                                <div class="pull-left col-md-4 col-xs-4"><a href="#" class="bg-color-fff"><strong node-type="follow">62229</strong></a><br><span>粉丝</span></div>
                                <div class="pull-left col-md-4 col-xs-4"><a href="#" class="bg-color-fff"><strong node-type="follow">62222</strong></a><br><span>关注</span></div>
                                <div class="pull-left col-md-4 col-xs-4"><a href="#" class="bg-color-fff"><strong node-type="follow">62229</strong></a><br><span>微博</span></div>
                            </div>
                            <div class="clearfix"></div>
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
@endsection

