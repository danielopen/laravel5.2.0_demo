<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{--让 IE 浏览器运行最新的渲染模式--}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        {{--可以让国内浏览器采用高速浏览模式加载，目前只对360浏览器有效--}}
        <meta name="renderer" content="webkit" />

        <title>@yield('title')</title>

        {{--<link type="image/x-icon" href="favicon.png" rel="shortcut icon" />--}}

        @yield('master-css')
        @yield('app-css')
        @yield('master-header-js')
    </head>

    <body>

        <div id="theme-wrapper">
            {{--头部html--}}
            @include('admin.layouts.common.header')

            <div id="page-wrapper" class="container">
                {{--左边栏html--}}
                @include('admin.layouts.common.nav_left')

                <div id="content-wrapper">
                    {{--面包屑--}}
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active"><span>Tables</span></li>
                    </ol>


                    @yield('content')

                </div>

            </div>

            {{--设置配置html--}}
            @include('admin.layouts.common.config_tool')
        </div>

        @yield('master-footer-js')
        @yield('app-js')

    </body>

</html>