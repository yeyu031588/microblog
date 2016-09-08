@extends('layout.admin')
@section('extendCss')
    <link rel="stylesheet" href="/assets/css/compiled/user-profile.css" type="text/css" media="screen" />
@show
@section('title', '后台首页')
@section('content')
    <div class="container-fluid">
        <div id="pad-wrapper" class="user-profile">
            <!-- header -->
            <div class="row-fluid header">
                <div class="span8">
                    <img src="img/contact-profile.png" class="avatar img-circle" />
                    <h3 class="name"><?php echo $data['username'];?></h3>
                    <span class="area"><?php echo $data['address'];?></span>
                </div>
                <a class="btn-flat icon pull-right delete-user" data-toggle="tooltip" title="Delete user" data-placement="top" >
                    <i class="icon-trash"></i>
                </a>
                <a class="btn-flat icon large pull-right edit" href="<?php echo URL::action('Admin\UserController@modify',['id'=>$_GET['id']]);?>">
                    编辑用户
                </a>
            </div>

            <div class="row-fluid profile">
                <!-- bio, new note & orders column -->
                <div class="span9 bio">
                    <div class="profile-box">
                        <!-- biography -->
                        <div class="span12 section">
                            <h6>Biography</h6>
                            <p>There are many variations of passages of Lorem Ipsum available but the majority have humour suffered alteration in believable some formhumour , by injected humour, or randomised words which don't look even slightly believable. </p>
                        </div>

                        <h6>Recent orders</h6>
                        <br />
                        <!-- recent orders table -->
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="span2">
                                    Order ID
                                </th>
                                <th class="span3">
                                    <span class="line"></span>
                                    Date
                                </th>
                                <th class="span3">
                                    <span class="line"></span>
                                    Items
                                </th>
                                <th class="span3">
                                    <span class="line"></span>
                                    Total amount
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- row -->
                            <tr class="first">
                                <td>
                                    <a href="#">#459</a>
                                </td>
                                <td>
                                    Jan 03, 2014
                                </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    $ 3,500.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">#510</a>
                                </td>
                                <td>
                                    Feb 22, 2014
                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    $ 800.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#">#618</a>
                                </td>
                                <td>
                                    Jan 03, 2014
                                </td>
                                <td>
                                    8
                                </td>
                                <td>
                                    $ 3,499.99
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- new comment form -->
                        <div class="span12 section comment">
                            <h6>Add a quick note</h6>
                            <p>Add a note about this user to keep a history of your interactions.</p>
                            <textarea></textarea>
                            <a href="#">Attach files</a>
                            <div class="span12 submit-box pull-right">
                                <input type="submit" class="btn-glow primary" value="Add Note" />
                                <span>OR</span>
                                <input type="reset" value="Cancel" class="reset" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- side address column -->
                <div class="span3 address pull-right">
                    <h6><?php echo $data['address'];?></h6>
                    <iframe width="300" height="133" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=""></iframe>
                    <ul>
                        <li>2301 East Lamar Blvd. Suite 140. </li>
                        <li><?php echo $data['province'];?>, <?php echo $data['city'];?>. <?php echo $data['area'];?>,</li>
                        <li>Zip Code, TX 76006.</li>
                        <li class="ico-li">
                            <i class="ico-phone"></i>
                            <?php echo $data['mobile'];?>
                        </li>
                        <li class="ico-li">
                            <i class="ico-mail"></i>
                            <a href="#"><?php echo $data['email'];?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extendJs')
    <script>
        $('.delete-user').click(function(){
            alert(<?php echo $_GET['id'];?>);
        })
    </script>
@endsection