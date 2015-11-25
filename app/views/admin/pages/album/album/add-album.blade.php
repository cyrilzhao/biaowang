@extends( 'admin.template.master' )

@section( 'styles' )
@parent
<link rel="stylesheet" href="/dist/admin/css/common/edit-area-list.css">
@stop

@section( 'edit-area' )

<!-- 相册新建 start -->
<div class="edit-area-container album-edit-area-wrap">

<div class="edit-area-top clearfix">
    <h3 class="edit-area-title">活动相册</h3>
</div>

<form action="/admin/album/album/cretae-edit" method="POST" enctype="multipart/form-data" target="form-target" class="edit-area-form">

<ul class="edit-area-body">

    <li class="edit-area-row">
        <label class="edit-area-label">标题</label>
        <input name="title" type="text" class="edit-area-input">
    </li>

    <li class="edit-area-row">
        <label class="edit-area-label">栏目</label>
        <input type="text" class="edit-area-input" value="标王相册">
    </li>
    
    <li class="edit-area-picture-row">
        <label class="edit-area-label">图片</label>
        <div class="picture-input-wrap">
            <input name="image" type="file" class="picture-input-btn">
            <div class="picture-input-holder">
                <div class="picture-input-icon">+</div>
                <div>添加图片</div>
            </div>
         </div>
    </li>
    
    <button class="operation-confirm btn">发布</button>
</ul>

<iframe name="form-target" id="form-target" redirect-url="/admin/album/album/manage"></iframe>

</form>

</div>
<!-- 相册新建 end -->

@stop

@section( 'scripts' )
@parent
@stop