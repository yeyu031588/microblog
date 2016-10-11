@extends('layout.admin')
@section('extendCss')
    <link rel="stylesheet" href="/assets/css/compiled/user-list.css" type="text/css" media="screen" />
@show
@section('title', '后台首页')
@section('content')
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>角色列表</h3>
                <div class="span10 pull-right">
                    <input type="text" class="span5 search" placeholder="输入角色名" name="role_name"/>
                    <a href="javascript:void(0);" class="btn-flat success add_role">新建角色</a>
                </div>
            </div>

            <!-- Users table -->
            <div class="row-fluid table">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="span2 sortable">
                            角色id
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>角色
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>状态
                        </th>
                        <th class="span2 sortable">
                            <span class="line"></span>操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row -->

                    <tr class="first">
                        <td>
                            00001
                        </td>
                        <td>
                            老师
                        </td>
                        <td>
                            正常
                        </td>
                        <td>
                            <a href="#">删除</a> |
                            <a href="#">编辑权限</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="pagination pull-right">

            </div>
            <!-- end users table -->
        </div>
    </div>
@endsection
@section('extendJs')
    <script>
        $('.add_role').click(function(){
            var role = $('input[name="role_name"]').val();
            if(role){
                $.post('{{url("/Admin/grant/addRole")}}',{role:role},function(data){

                },'json')
            }
        })

    </script>
@endsection