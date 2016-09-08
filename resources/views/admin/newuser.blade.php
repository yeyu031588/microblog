@extends('layout.admin')
@section('extendCss')
<link rel="stylesheet" href="/assets/css/compiled/new-user.css" type="text/css" media="screen" />
@endsection
@section('title', '后台首页')
@section('content')
<div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row-fluid header">
                <h3><?php if(isset($data)){echo '编辑用户';}else{echo '创建用户';}?></h3>
            </div>

            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">

                        <form id="togglingForm" method="post" class="new_user_form inline-input">
                            <input type="hidden" name="userid" value="<?php if(isset($data)) echo $data['userid'];?>"/>
                            <div class="form-group span12 field-box">
                                <label>姓名:</label>
                                <input class="span9" type="text" name="username" value="<?php if(isset($data)) echo $data['username'];?>"/>
                            </div>
                            <div class="form-group span12 field-box">
                                <label>手机:</label>
                                <input class="span9" type="text" name="mobile" value="<?php if(isset($data)) echo $data['mobile'];?>"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>状态:</label>
                                <select name="status">
                                    <option value="0" />审核中
                                    <option value="1" />审核通过
                                    <option value="2" />未通过
                                    <option value="3" />冻结
                                </select>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>邮箱:</label>
                                <input class="span9" type="text" name="email" value="<?php if(isset($data)) echo $data['email'];?>"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>地址:</label>
                                <div class="selectCity" id="city_1">
                                    <select class="prov" name="prov"></select>
                                    <select class="city" disabled="disabled" name="city"></select>
                                    <select class="dist" disabled="disabled" name="area"></select>
                                </div>
                            </div>
                            <div class="form-group span12 field-box">
                                <label>详细地址:</label>
                                <div class="address-fields">
                                <input class="span12" type="text" placeholder="Street address" name="address" value="<?php if(isset($data)) echo $data['address'];?>"/>
                                </div>
                            </div>
                            <div class="form-group span12 field-box">
                                <label>职业:</label>
                                <input class="span9" type="text" name="job" value="<?php if(isset($data)) echo $data['job'];?>"/>

                            </div>
                            <div class="form-group span12 field-box">
                                <label>公司:</label>
                                <input class="span9" type="text" name="company" value="<?php if(isset($data)) echo $data['company'];?>"/>

                            </div>

                            <div class="form-group span11 field-box actions ">
                                <input type="submit" class="btn-glow primary" value="保存" />
                                <span>OR</span>
                                <input type="reset" value="取消" class="reset" />

                            </div>
                        </form>
                    </div>
                </div>

                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="btn-group toggle-inputs hidden-tablet">
                        <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                        <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                    </div>
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        Click above to see difference between inline and normal inputs on a form
                    </div>
                    <h6>Sidebar text for instructions</h6>
                    <p>Add multiple users at once</p>
                    <p>Choose one of the following file types:</p>
                    <ul>
                        <li><a href="#">Upload a vCard file</a></li>
                        <li><a href="#">Import from a CSV file</a></li>
                        <li><a href="#">Import from an Excel file</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extendJs')
    <script>
        $(document).ready(function() {
            $('#togglingForm')
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
                                        message: '姓名不能为空'
                                    },
                                    stringLength: {
                                        min: 6,
                                        max: 18,
                                        message: '用户名长度必须在6到18位之间'
                                    },
                                    regexp: {
                                        regexp: /^[a-zA-Z0-9_]+$/,
                                        message: '用户名只能包含大写、小写、数字和下划线'
                                    }
                                }
                            },
                            mobile: {
                                validators: {
                                    notEmpty: {
                                        message: '手机不能为空'
                                    }
                                }
                            },
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: '邮箱不能为空'
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

        $("#city_1").citySelect({prov:"<?php if(isset($data))echo $data['province']?>",city:"<?php if(isset($data)) echo $data['city']?>",dist:"<?php if(isset($data)) echo $data['area']?>",required:false,nodata:"none"});
    </script>
@endsection

