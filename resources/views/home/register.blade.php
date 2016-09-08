@extends('layout.home')
<!--body-->
@section('body')
    <div class="container-fluid bg-image-1 register">
        <div class="container">
            <!--注册-->
            <div class="main bg-color-fff">

                <div class="col-md-8 col-xs-8 col-md-offset-1 col-xs-offset-1" >
                    <h4>账号注册</h4>
                </div>

                <div class="row">
                    <div class="col-md-8 col-xs-8 one" >
                        <div class="col-md-offset-2 col-md-offset-4">
                            <div class="col-xs-9 col-md-8">
                                <form class="form-horizontal" role="form" method="post" id="registerForm">
                                    <div class="form-group">
                                        <label for="Username" class="col-md-3 col-xs-3 control-label">账号</label>
                                        <div class="col-md-9 col-xs-9">
                                            <input type="text" class="form-control" id="Username" placeholder="Username" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Password" class="col-md-3 col-xs-3 control-label">密码</label>
                                        <div class="col-md-9 col-xs-9">
                                            <input type="text" class="form-control" id="Password" placeholder="Password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-xs-9 col-md-offset-3 col-xs-offset-3">
                                            <input type="submit" class="form-control btn-primary" value="立即注册">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-xs-9 col-md-offset-3 col-xs-offset-3">
                                            <p>微博服务使用协议</p>
                                            <p>微博个人信息保护政策</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <ul class="list-group bg-color-e0f0e9 text-center">
                            <li class="list-group-item">
                                已有账号 <a href="{{url('/')}}">直接登录</a>
                            </li>
                            <li class="list-group-item">
                                微博注册帮助
                            </li>
                            <li class="list-group-item">
                                微博操作指南
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--注册-->
    </div>
    </div>
@endsection
<!--endbody-->
@section('extendJs')
    <script>
        $(document).ready(function() {
            $('#registerForm')
                    .bootstrapValidator({
                        excluded: [':disabled'],
                        message: 'This value is not valid',
                        feedbackIcons: {
                            valid: 'glyphicon glyphicon-ok',
                            invalid: 'glyphicon glyphicon-remove',
                            validating: 'glyphicon glyphicon-refresh'
                        },

                        fields: {
                            username: {
                                validators: {
                                    notEmpty: {
                                        message: '用户名不能为空'
                                    },
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_]{6,18}$/,
                                        message: '用户名只能包含大写、小写、数字和下划线、且长度6到18位'
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: '密码不能为空'
                                    }
                                }
                            }
                        }
                    })
//                    .on('success.form.bv', function(e) {
//                        e.preventDefault();
//                        alert("验证通过");
//                    });

        });
    </script>
@endsection
