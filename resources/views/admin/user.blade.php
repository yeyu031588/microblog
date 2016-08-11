@extends('layout.admin')
@section('extendCss')
    <link rel="stylesheet" href="/assets/css/compiled/user-list.css" type="text/css" media="screen" />
@show
@section('title', '后台首页')
@section('content')
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>Users</h3>
                <div class="span10 pull-right">
                    <input type="text" class="span5 search" placeholder="Type a user's name..." />

                    <!-- custom popup filter -->
                    <!-- styles are located in css/elements.css -->
                    <!-- script that enables this dropdown is located in js/theme.js -->
                    <div class="ui-dropdown">
                        <div class="head" data-toggle="tooltip" title="Click me!">
                            Filter users
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
                        NEW USER
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
                    <tr class="first">
                        <td>
                            <img src="img/contact-img.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Mar 13, 2012
                        </td>
                        <td>
                            $ 4,500.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img2.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Jun 03, 2012
                        </td>
                        <td>
                            $ 549.99
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Mar 01, 2014
                        </td>
                        <td>
                            $ 30.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img2.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Jan 28, 2012
                        </td>
                        <td>
                            $ 1,320.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            May 16, 2012
                        </td>
                        <td>
                            $ 89.99
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img2.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Sep 06, 2012
                        </td>
                        <td>
                            $ 344.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Jul 13, 2012
                        </td>
                        <td>
                            $ 800.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img2.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Feb 13, 2014
                        </td>
                        <td>
                            $ 250.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    <!-- row -->
                    <tr>
                        <td>
                            <img src="img/contact-img.png" class="img-circle avatar hidden-phone" />
                            <a href="user-profile.html" class="name">Alejandra Galvan Castillo</a>
                            <span class="subtext">Graphic Design</span>
                        </td>
                        <td>
                            Feb 27, 2014
                        </td>
                        <td>
                            $ 1,300.00
                        </td>
                        <td class="align-right">
                            <a href="#">alejandra@canvas.com</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination pull-right">
                <ul>
                    <li><a href="#">&#8249;</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&#8250;</a></li>
                </ul>
            </div>
            <!-- end users table -->
        </div>
    </div>
@endsection