@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 用户管理 start -->
<div class="edit-area-container vedio-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">修改密码</h3>
</div>

<div class="edit-area-body">

<ul>
    <li class="edit-area-row">
        <label class="edit-area-label">账号</label>
        <span class="edit-area-text">biaowangyihao</span>
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">密码</label>
        <span class="edit-area-text">*************</span>
    </li>
</ul>

<form action="" class="edit-area-form">
    <div class="edit-area-row">
        <label for="" class="edit-area-label">旧密码</label>
        <input type="password" class="edit-area-input">
    </div>
    <div class="edit-area-row">
        <label for="" class="edit-area-label">新密码</label>
        <input type="password" class="edit-area-input">
    </div>
    <div class="edit-area-row">
        <label for="" class="edit-area-label">确认</label>
        <input type="password" class="edit-area-input">
    </div>
    
    <input type="submit" class="operation-confirm btn" value="确认修改">
</form>

</div>

</form>

</div>
<!-- 用户管理 end -->

@stop

@section( 'scripts' )
@parent
@stop