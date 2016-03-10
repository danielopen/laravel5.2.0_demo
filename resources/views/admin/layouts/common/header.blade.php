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


            {{--堆叠效果--}}
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


                    {{--搜索--}}
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




                    {{--站内通告--}}
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


                            <li class="item-footer">
                                <a href="#">
                                    View all notifications
                                </a>
                            </li>

                        </ul>
                    </li>




                    {{--站内信--}}
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

                            <li class="item-footer">
                                <a href="#">
                                    View all messages
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{--设置图标--}}
                    <li class="hidden-xs">
                        <a class="btn">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>



                    {{--用户图标--}}
                    <li class="dropdown profile-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/resources/admin/img/avatar/scarlet-159.png" alt=""/>
                            <span class="hidden-xs">chencheng</span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                            <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>


                    {{--退出系统按钮--}}
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