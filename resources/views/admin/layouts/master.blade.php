<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    {{--让 IE 浏览器运行最新的渲染模式--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    {{--可以让国内浏览器采用高速浏览模式加载，目前只对360浏览器有效--}}
    <meta name="renderer" content="webkit">


    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/theme_styles.css"/>
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/font-awesome.css"/>

    {{--滚动条样式--}}
    <link rel="stylesheet" type="text/css" href="/resources/admin/css/lib/nanoscroller.css"/>

    {{--<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>--}}

    <!--[if lt IE 9]>
    <script src="/resources/admin/js/ie8/html5shiv.js"></script>
    <script src="/resources/admin/js/ie8/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="theme-wrapper">
    <header class="navbar" id="header-navbar">
        <div class="container">
            <a href="index.html" id="logo" class="navbar-brand">
                <img src="/resources/admin/img/logo.png" alt="" class="normal-logo logo-white"/>
                <img src="/resources/admin/img/logo-black.png" alt="" class="normal-logo logo-black"/>
                <img src="/resources/admin/img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
            </a>

            <div class="clearfix">
                <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a class="btn" id="make-small-nav">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-no-collapse pull-right" id="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="mobile-search">
                            <a class="btn">
                                <i class="fa fa-search"></i>
                            </a>

                            <div class="drowdown-search">
                                <form role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="fa fa-search nav-search-icon"></i>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="count">8</span>
                            </a>
                            <ul class="dropdown-menu notifications-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item-header">You have 6 new notifications</li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-comment"></i>
                                        <span class="content">New comment on ‘Awesome P...</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-plus"></i>
                                        <span class="content">New user registration</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                        <span class="content">New Message from George</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="content">New purchase</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                        <span class="content">New order</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="count">16</span>
                            </a>
                            <ul class="dropdown-menu notifications-list messages-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item first-item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-1.png" alt=""/>
<span class="content">
<span class="content-headline">
George Clooney
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-2.png" alt=""/>
<span class="content">
<span class="content-headline">
Emma Watson
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-3.png" alt=""/>
<span class="content">
<span class="content-headline">
Robert Downey Jr.
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </li>
                        <li class="dropdown profile-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/resources/admin/img/avatar/scarlet-159.png" alt=""/>
                                <span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xxs">
                            <a class="btn">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>








    <div id="page-wrapper" class="container">
        <div class="row">
            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        <div id="user-left-box" class="clearfix hidden-sm hidden-xs">
                            <img alt="" src="/resources/admin/img/avatar/scarlet-159.png"/>

                            <div class="user-box">
<span class="name">
Welcome<br/>
Scarlett
</span>
<span class="status">
<i class="fa fa-circle"></i> Online
</span>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Dashboard</span>
                                        <span class="label label-info label-circle pull-right">28</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-table"></i>
                                        <span>Tables</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="tables.html">
                                                Simple
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tables-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Users
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-envelope"></i>
                                        <span>Email</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="email-inbox.html">
                                                Inbox
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-detail.html">
                                                Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-compose.html">
                                                Compose
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>Graphs</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="graphs-morris.html">
                                                Morris &amp; Mixed
                                            </a>
                                        </li>
                                        <li>
                                            <a href="graphs-flot.html">
                                                Flot
                                            </a>
                                        </li>
                                        <li>
                                            <a href="graphs-dygraphs.html">
                                                Dygraphs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="graphs-xcharts.html">
                                                xCharts
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="widgets.html">
                                        <i class="fa fa-th-large"></i>
                                        <span>Widgets</span>
                                        <span class="label label-success pull-right">New</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-desktop"></i>
                                        <span>Pages</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="calendar.html">
                                                Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">
                                                Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href="gallery-v2.html">
                                                Gallery v2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pricing.html">
                                                Pricing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="projects.html">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a href="team-members.html">
                                                Team Members
                                            </a>
                                        </li>
                                        <li>
                                            <a href="timeline.html">
                                                Timeline
                                            </a>
                                        </li>
                                        <li>
                                            <a href="timeline-grid.html">
                                                Timeline Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                User Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="search.html">
                                                Search Results
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                Invoice
                                            </a>
                                        </li>
                                        <li>
                                            <a href="intro.html">
                                                Tour Layout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-edit"></i>
                                        <span>Forms</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="form-elements.html">
                                                Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="x-editable.html">
                                                X-Editable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-wizard.html">
                                                Wizard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-wizard-popup.html">
                                                Wizard popup
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-wysiwyg.html">
                                                WYSIWYG
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-summernote.html">
                                                WYSIWYG Summernote
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-ckeditor.html">
                                                WYSIWYG CKEditor
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-dropzone.html">
                                                Multiple File Upload
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-desktop"></i>
                                        <span>UI Kit</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="ui-elements.html">
                                                Elements
                                            </a>
                                        </li>
                                        <li>
                                            <a href="notifications.html">
                                                Notifications &amp; Alerts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="modals.html">
                                                Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="video.html">
                                                Video
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                Icons
                                                <i class="fa fa-chevron-circle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="icons-awesome.html">
                                                        Awesome Icons
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="icons-halflings.html">
                                                        Halflings Icons
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="ui-nestable.html">
                                                Nestable List
                                            </a>
                                        </li>
                                        <li>
                                            <a href="typography.html">
                                                Typography
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown-toggle">
                                                3 Level Menu
                                                <i class="fa fa-chevron-circle-right drop-icon"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="#">
                                                        3rd Level
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        3rd Level
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        3rd Level
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="maps.html">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Google Maps</span>
                                        <span class="label label-danger pull-right">Updated</span>
                                    </a>
                                </li>
                                <li class="open active">
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-file-text-o"></i>
                                        <span>Extra pages</span>
                                        <i class="fa fa-chevron-circle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="faq.html" class="active">
                                                FAQ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="emails.html">
                                                Email Templates
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login.html">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-full.html">
                                                Login Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="registration.html">
                                                Registration
                                            </a>
                                        </li>
                                        <li>
                                            <a href="registration-full.html">
                                                Registration Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forgot-password.html">
                                                Forgot Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forgot-password-full.html">
                                                Forgot Password Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="lock-screen.html">
                                                Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="lock-screen-full.html">
                                                Lock Screen Full
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-404.html">
                                                Error 404
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-404-v2.html">
                                                Error 404 Nested
                                            </a>
                                        </li>
                                        <li>
                                            <a href="error-500.html">
                                                Error 500
                                            </a>
                                        </li>
                                        <li>
                                            <a href="extra-grid.html">
                                                Grid
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div id="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><span>FAQ</span></li>
                                </ol>
                                <h1>FAQ</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box clearfix" style="min-height: 1100px;">
                                    <div class="tabs-wrapper tabs-no-header">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-home" data-toggle="tab">General</a></li>
                                            <li><a href="#tab-accounts" data-toggle="tab">Accounts</a></li>
                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    Technical <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#tab-configuration" data-toggle="tab">Configuration</a>
                                                    </li>
                                                    <li><a href="#tab-configuration" data-toggle="tab">Voice</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#tab-configuration" data-toggle="tab">Messaging</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab-home">
                                                <h3><span>General information</span></h3>

                                                <div class="panel-group accordion" id="accordion">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseOne">
                                                                    <i class="fa fa-cloud"></i> What is a good example
                                                                    of a Centaurus application?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam ut porta massa, sit amet maximus odio. Nulla vel
                                                                sagittis tellus. Nulla tristique nisi vitae blandit
                                                                vehicula. Sed nunc ex, auctor id semper a, lacinia eu
                                                                turpis. Maecenas eu mauris vehicula, blandit mauris nec,
                                                                commodo magna. Nam commodo ultrices placerat. Vivamus
                                                                suscipit vulputate lacinia. Vestibulum et nisi vel odio
                                                                dignissim sagittis ut suscipit felis. Vestibulum
                                                                convallis turpis lectus, a porta est facilisis id.
                                                                <br/>
                                                                <br/>
                                                                Ut tincidunt elit vitae eleifend blandit. Aenean
                                                                condimentum neque libero, vehicula sodales massa porta
                                                                tincidunt. Vestibulum quis felis eget ante fringilla
                                                                interdum. Pellentesque vehicula neque a libero porta
                                                                cursus a a neque. Sed vitae lectus urna. Vivamus rutrum
                                                                ex in purus lacinia vehicula. Fusce mollis sapien sit
                                                                amet ipsum blandit, ac tristique erat aliquam.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseTwo">
                                                                    <i class="fa fa-gavel"></i> What can I build with
                                                                    Centaurus?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Mauris eu ultrices metus. Nam blandit malesuada metus a
                                                                laoreet. Maecenas nec dolor at purus elementum aliquam.
                                                                Sed id risus at elit facilisis laoreet. Duis mollis ac
                                                                justo sed varius. Duis non dolor non tellus tincidunt
                                                                vestibulum at ac velit. Ut quis urna erat. Duis turpis
                                                                est, egestas sed pellentesque fringilla, mattis eu
                                                                augue.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseThree">
                                                                    <i class="fa fa-building-o"></i> Do you have any
                                                                    pre-built applications using Centaurus?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Sed lobortis non mi et elementum. Quisque in ex dictum,
                                                                lacinia augue sit amet, commodo quam. Curabitur sit amet
                                                                auctor nisi. Aenean viverra elit quam, eget efficitur
                                                                turpis tincidunt vitae. Pellentesque a velit vitae neque
                                                                tincidunt pharetra eu vel nisl. Integer ac ipsum sed
                                                                ligula bibendum molestie vel sed sem. Pellentesque a
                                                                vehicula ante. Fusce commodo sodales purus eget
                                                                interdum. Pellentesque id aliquam quam.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3><span>Billing information</span></h3>

                                                <div class="panel-group accordion" id="accordion4">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion4"
                                                                   href="#collapseOne4">
                                                                    <i class="fa fa-btc"></i> How does Centaurus’s
                                                                    pricing work?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Fusce quis luctus eros, sed bibendum dolor. Nullam eget
                                                                felis libero. Morbi orci est, tempus suscipit imperdiet
                                                                a, sollicitudin at elit. Ut a convallis odio, quis
                                                                rutrum felis. Nullam maximus tellus velit, eu eleifend
                                                                odio finibus nec. Integer porttitor a enim sed congue.
                                                                Cras interdum erat non pharetra consectetur.
                                                                <br/>
                                                                <br/>
                                                                In fermentum ullamcorper dapibus. Ut eleifend tellus
                                                                ullamcorper, hendrerit mi at, pharetra nulla. Donec
                                                                condimentum egestas elementum. Integer sed vehicula
                                                                tortor, a porta neque. Nullam posuere non enim et
                                                                accumsan. Duis volutpat blandit orci, id interdum leo
                                                                pulvinar vel. Morbi consequat viverra mi a tincidunt.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion4"
                                                                   href="#collapseTwo4">
                                                                    <i class="fa fa-coffee"></i> What happens if my
                                                                    Centaurus account balance reaches zero?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Integer ut tellus nisi. Mauris libero velit, ornare
                                                                cursus tincidunt non, mollis sit amet libero. Donec nec
                                                                vehicula turpis, vel faucibus tortor. Quisque quis
                                                                viverra risus, congue hendrerit lorem. Fusce quis
                                                                molestie ipsum, vitae imperdiet mauris. Fusce non
                                                                fringilla nisl. Interdum et malesuada fames ac ante
                                                                ipsum primis in faucibus. Aliquam fringilla dictum dolor
                                                                sed tincidunt. In interdum nisi sem, eu gravida urna
                                                                venenatis sit amet. Cras tristique cursus lacinia.
                                                                Phasellus nec est fermentum, porta leo in, accumsan
                                                                nisl. Duis iaculis eu nulla sit amet ultrices. Nunc vel
                                                                volutpat ex.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion4"
                                                                   href="#collapseThree4">
                                                                    <i class="fa fa-credit-card"></i> When does volume
                                                                    pricing kick in?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Mauris vitae ligula sit amet felis imperdiet vestibulum.
                                                                Sed id tincidunt dolor, id sagittis ipsum. Proin
                                                                fermentum imperdiet ante quis convallis. Sed facilisis
                                                                diam id sapien eleifend, vel vulputate ante maximus. In
                                                                ligula turpis, porttitor eget imperdiet id, consectetur
                                                                et nibh. Ut eu facilisis justo, vel mollis mi. Aenean
                                                                ipsum massa, egestas id risus a, ullamcorper condimentum
                                                                diam. Nulla non nibh ac purus cursus convallis. Ut nibh
                                                                lacus, vestibulum et pulvinar ac, hendrerit sed nisi.
                                                                Praesent eget justo lectus. Phasellus finibus tortor ut
                                                                dolor scelerisque, at tristique leo lobortis. Interdum
                                                                et malesuada fames ac ante ipsum primis in faucibus.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion4"
                                                                   href="#collapseFour4">
                                                                    <i class="fa fa-flask"></i> How do I set a recharge
                                                                    trigger?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFour4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Nam vel hendrerit eros. Nulla vitae cursus ante,
                                                                convallis fringilla ipsum. Vestibulum malesuada lacus ac
                                                                sapien vulputate, id aliquet velit pharetra. Donec quis
                                                                orci ac ante accumsan ultricies sit amet in quam. Sed
                                                                ligula arcu, aliquet sed tortor id, sodales sagittis
                                                                est. Praesent et egestas ligula. Aliquam vel nulla vitae
                                                                ligula blandit egestas. Nunc vel facilisis purus, et
                                                                hendrerit mauris. Nam elementum augue quis quam pharetra
                                                                gravida. Nullam in bibendum dui. Ut hendrerit porta
                                                                molestie. Ut ac sapien ut sem tempus interdum id quis
                                                                turpis. Sed suscipit ornare turpis in commodo. Donec
                                                                vitae dui ut neque feugiat placerat at non felis.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-accounts">
                                                <h3><span>Accounts information</span></h3>

                                                <div class="panel-group accordion" id="accordion2">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion2"
                                                                   href="#collapseOne2">
                                                                    What is a subaccount?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam ut porta massa, sit amet maximus odio. Nulla vel
                                                                sagittis tellus. Nulla tristique nisi vitae blandit
                                                                vehicula. Sed nunc ex, auctor id semper a, lacinia eu
                                                                turpis. Maecenas eu mauris vehicula, blandit mauris nec,
                                                                commodo magna. Nam commodo ultrices placerat. Vivamus
                                                                suscipit vulputate lacinia. Vestibulum et nisi vel odio
                                                                dignissim sagittis ut suscipit felis. Vestibulum
                                                                convallis turpis lectus, a porta est facilisis id.
                                                                <br/>
                                                                <br/>
                                                                Ut tincidunt elit vitae eleifend blandit. Aenean
                                                                condimentum neque libero, vehicula sodales massa porta
                                                                tincidunt. Vestibulum quis felis eget ante fringilla
                                                                interdum. Pellentesque vehicula neque a libero porta
                                                                cursus a a neque. Sed vitae lectus urna. Vivamus rutrum
                                                                ex in purus lacinia vehicula. Fusce mollis sapien sit
                                                                amet ipsum blandit, ac tristique erat aliquam.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion2"
                                                                   href="#collapseTwo2">
                                                                    How do I cancel my account?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Sed lobortis non mi et elementum. Quisque in ex dictum,
                                                                lacinia augue sit amet, commodo quam. Curabitur sit amet
                                                                auctor nisi. Aenean viverra elit quam, eget efficitur
                                                                turpis tincidunt vitae. Pellentesque a velit vitae neque
                                                                tincidunt pharetra eu vel nisl. Integer ac ipsum sed
                                                                ligula bibendum molestie vel sed sem. Pellentesque a
                                                                vehicula ante. Fusce commodo sodales purus eget
                                                                interdum. Pellentesque id aliquam quam.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion2"
                                                                   href="#collapseThree2">
                                                                    Where are my test credentials?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Fusce quis luctus eros, sed bibendum dolor. Nullam eget
                                                                felis libero. Morbi orci est, tempus suscipit imperdiet
                                                                a, sollicitudin at elit. Ut a convallis odio, quis
                                                                rutrum felis. Nullam maximus tellus velit, eu eleifend
                                                                odio finibus nec. Integer porttitor a enim sed congue.
                                                                Cras interdum erat non pharetra consectetur.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion2"
                                                                   href="#collapseFour2">
                                                                    Can I change the name of my account?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFour2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam ut porta massa, sit amet maximus odio. Nulla vel
                                                                sagittis tellus. Nulla tristique nisi vitae blandit
                                                                vehicula. Sed nunc ex, auctor id semper a, lacinia eu
                                                                turpis. Maecenas eu mauris vehicula, blandit mauris nec,
                                                                commodo magna. Nam commodo ultrices placerat. Vivamus
                                                                suscipit vulputate lacinia. Vestibulum et nisi vel odio
                                                                dignissim sagittis ut suscipit felis. Vestibulum
                                                                convallis turpis lectus, a porta est facilisis id.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-configuration">
                                                <h3><span>Technical information</span></h3>

                                                <div class="panel-group accordion" id="accordion3">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion3"
                                                                   href="#collapseOne3">
                                                                    How do I protect unauthorized access to my media on
                                                                    Centaurus?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Ut tincidunt elit vitae eleifend blandit. Aenean
                                                                condimentum neque libero, vehicula sodales massa porta
                                                                tincidunt. Vestibulum quis felis eget ante fringilla
                                                                interdum. Pellentesque vehicula neque a libero porta
                                                                cursus a a neque. Sed vitae lectus urna. Vivamus rutrum
                                                                ex in purus lacinia vehicula. Fusce mollis sapien sit
                                                                amet ipsum blandit, ac tristique erat aliquam.
                                                                <br/>
                                                                <br/>
                                                                Mauris eu ultrices metus. Nam blandit malesuada metus a
                                                                laoreet. Maecenas nec dolor at purus elementum aliquam.
                                                                Sed id risus at elit facilisis laoreet. Duis mollis ac
                                                                justo sed varius. Duis non dolor non tellus tincidunt
                                                                vestibulum at ac velit. Ut quis urna erat. Duis turpis
                                                                est, egestas sed pellentesque fringilla, mattis eu
                                                                augue.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion3"
                                                                   href="#collapseTwo3">
                                                                    Which IP addresses will Centaurus’s requests come
                                                                    from?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Sed lobortis non mi et elementum. Quisque in ex dictum,
                                                                lacinia augue sit amet, commodo quam. Curabitur sit amet
                                                                auctor nisi. Aenean viverra elit quam, eget efficitur
                                                                turpis tincidunt vitae. Pellentesque a velit vitae neque
                                                                tincidunt pharetra eu vel nisl. Integer ac ipsum sed
                                                                ligula bibendum molestie vel sed sem. Pellentesque a
                                                                vehicula ante. Fusce commodo sodales purus eget
                                                                interdum. Pellentesque id aliquam quam.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle collapsed"
                                                                   data-toggle="collapse" data-parent="#accordion3"
                                                                   href="#collapseThree3">
                                                                    What are Centaurus's business hours for support?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam ut porta massa, sit amet maximus odio. Nulla vel
                                                                sagittis tellus. Nulla tristique nisi vitae blandit
                                                                vehicula. Sed nunc ex, auctor id semper a, lacinia eu
                                                                turpis. Maecenas eu mauris vehicula, blandit mauris nec,
                                                                commodo magna. Nam commodo ultrices placerat. Vivamus
                                                                suscipit vulputate lacinia. Vestibulum et nisi vel odio
                                                                dignissim sagittis ut suscipit felis. Vestibulum
                                                                convallis turpis lectus, a porta est facilisis id.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer id="footer-bar" class="row">
                        <p id="footer-copyright" class="col-xs-12">
                            &copy; 2014 <a href="http://www.adbee.sk/" target="_blank">Adbee digital</a>. Powered by
                            Centaurus Theme.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>








    <div id="config-tool" class="closed">
        <a id="config-tool-cog">
            <i class="fa fa-cog"></i>
        </a>

        <div id="config-tool-options">
            <h4>Layout Options</h4>
            <ul>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-fixed-header"/>
                        <label for="config-fixed-header">
                            Fixed Header
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-fixed-sidebar"/>
                        <label for="config-fixed-sidebar">
                            Fixed Left Menu
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-fixed-footer"/>
                        <label for="config-fixed-footer">
                            Fixed Footer
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-boxed-layout"/>
                        <label for="config-boxed-layout">
                            Boxed Layout
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-rtl-layout"/>
                        <label for="config-rtl-layout">
                            Right-to-Left
                        </label>
                    </div>
                </li>
            </ul>
            <br/>
            <h4>Skin Color</h4>
            <ul id="skin-colors" class="clearfix">
                <li>
                    <a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default"
                       style="background-color: #34495e;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green"
                       style="background-color: #2ecc71;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip"
                       title="Gradient">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea"
                       style="background-color: #1abc9c;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst"
                       style="background-color: #9b59b6;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue"
                       style="background-color: #2980b9;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red"
                       style="background-color: #e74c3c;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue"
                       style="background-color: #3498db;">
                    </a>
                </li>
            </ul>
        </div>
    </div>




</div>











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



{{--<script src="/resources/admin/js/pace.min.js"></script>--}}



</body>

</html>