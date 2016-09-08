@extends('layout.admin')
@section('extendCss')
    <link rel="stylesheet" href="/assets/css/compiled/user-list.css" type="text/css" media="screen" />
@show
@section('title', '后台首页')
@section('content')
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>用户列表</h3>
                <div class="span10 pull-right">
                    <input type="text" class="span5 search" placeholder="Type a user's name..." />

                    <!-- custom popup filter -->
                    <!-- styles are located in css/elements.css -->
                    <!-- script that enables this dropdown is located in js/theme.js -->
                    <div class="ui-dropdown">
                        <div class="head" data-toggle="tooltip" title="Click me!">
                            查询用户
                            <i class="arrow-down"></i>
                        </div>
                        <div class="dialog">
                            <div class="pointer">
                                <div class="arrow"></div>
                                <div class="arrow_border"></div>
                            </div>
                            <div class="body">
                                <p class="title">
                                    Show users where:
                                </p>
                                <div class="form">
                                    <select>
                                        <option />Name
                                        <option />Email
                                        <option />Number of orders
                                        <option />Signed up
                                        <option />Last seen
                                    </select>
                                    <select>
                                        <option />is equal to
                                        <option />is not equal to
                                        <option />is greater than
                                        <option />starts with
                                        <option />contains
                                    </select>
                                    <input type="text" />
                                    <a class="btn-flat small">Add filter</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{url('Admin/newuser')}}" class="btn-flat success pull-right">
                        <span>&#43;</span>
                       新建用户
                    </a>
                </div>
            </div>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span4 sortable">
                            Name
                        </th>
                        <th class="span3 sortable">
                            <span class="line"></span>Signed up
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>Total spent
                        </th>
                        <th class="span3 sortable align-right">
                            <span class="line"></span>Email
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row -->
                    <?php foreach ($user as $val): ?>
                    <tr class="first">
                        <td>
                            <img src="/assets/img/contact-img.png" class="img-circle avatar hidden-phone" />
                            <a href="<?php echo URL::action('Admin\UserController@profile',['id'=>$val['userid']]);?>" class="name"><?php echo $val['username'];?></a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Mar 13, 2012
                        </td>
                        <td>
                            $ 4,500.00
                        </td>
                        <td class="align-right">
                            <a href="#"><?php echo $val['email'];?></a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="pagination pull-right">
                <?php echo $user->render(); ?>
            </div>
            <!-- end users table -->
        </div>
    </div>
@endsection