<!DOCTYPE html>
<html lang="zh-CN">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>标王 --- 后台管理系统</title>

@section( 'styles' )
<link rel="stylesheet" href="/dist/admin/css/common/common.css">
@show

</head>

<body>

<div class="wrapper clearfix">

<!-- 侧边栏 start -->
@section( 'sidebar' )
@include( 'admin.components.sidebar' )
@show
<!-- 侧边栏 end -->

<!-- 右边主模块 start -->
<div class="main">

<!-- 头部logo start -->
@section( 'header' )
@include( 'admin.components.header' )
@show
<!-- 头部logo end -->

<!-- 编辑主模块 start -->
<div class="content">

</div>
<!-- 编辑主模块 end -->

</div>
<!-- 右边主模块 end -->

</div>

@section( 'scripts' )
@show

</body>

</html>