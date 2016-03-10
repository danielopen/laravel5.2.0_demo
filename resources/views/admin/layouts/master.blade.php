@extends('admin.layouts.layout')


@section('master-css')
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/theme_styles.css"/>
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/font-awesome.css"/>

    {{--滚动条样式--}}
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/nanoscroller.css"/>
@endsection



@section('master-header-js')
<!--[if lt IE 9]>
<script src="/resources/admin/js/ie8/html5shiv.js"></script>
<script src="/resources/admin/js/ie8/respond.min.js"></script>
<![endif]-->
@endsection


@section('master-footer-js')
    <script src="/resources/admin/js/lib/jquery.js"></script>
    <script src="/resources/admin/js/lib/bootstrap.min.js"></script>

    {{--存储用户设置的主题等操作--}}
    <script src="/resources/admin/js/demo-skin-changer.js"></script>

    {{--控制设置主题等--}}
    <script src="/resources/admin/js/demo.js"></script>

    {{--滚动条js--}}
    <script src="/resources/admin/js/jquery.nanoscroller.min.js"></script>

    {{--折叠左边栏等操作--}}
    <script src="/resources/admin/js/scripts.js"></script>

    <script src="/resources/admin/js/pace.min.js"></script>
@endsection






