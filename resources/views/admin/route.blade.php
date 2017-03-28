@extends('layout.admin')
@section('extendCss')
    <link rel="stylesheet" href="/assets/css/compiled/user-list.css" type="text/css" media="screen" />
@show
@section('title', '后台首页')
@section('content')
    <div class="container-fluid">
        <div id="pad-wrapper" class="users-list">
            <div class="row-fluid header">
                <h3>路由列表</h3>
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
                    <?php foreach($data as $val):?>
                    <tr class="first">
                        <td>
                            <?php echo $val['role_id'];?>
                        </td>
                        <td>
                            <?php echo $val['role_name'];?>
                        </td>
                        <td>
                            <?php echo $val['status'];?>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="del_role" id="<?php echo $val['role_id'];?>">删除</a> |
                            <a href="#">编辑权限</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
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

        $('.del_role').click(function(){
            var role_id = $(this).attr('id');
            $.post('{{url("/Admin/grant/dropRole")}}',{role_id:role_id},function(data){

            },'json')
        })

    </script>
@endsection