@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 活动现场标题编辑 start -->
<div class="edit-area-container edit-activity-title-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">活动现场</h3>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题1</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label"></label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">标题2</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label"></label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 活动现场标题编辑 end -->

<!-- 软文干货标题编辑 start -->
<div class="edit-area-container edit-resource-title-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">软文干货</h3>
</div>

<form action="" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">分类1</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">分类1</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">分类1</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">分类1</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    <li class="edit-area-row">
        <label class="edit-area-label">分类1</label>
        <input type="text" class="edit-area-input">
        <span class="operation-wrap">
            <button class="operation-edit operation-btn operation-blue-btn btn">编辑</button>
            <button class="operation-modify operation-btn operation-blue-btn btn">确认</button>
        </span>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

</form>

</div>
<!-- 栏目标题编辑 end -->

@stop

@section( 'scripts' )
@parent
@stop