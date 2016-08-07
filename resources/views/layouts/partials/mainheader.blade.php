<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Z</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Zheni</b> Corrugated</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="nav-item nav-link  sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="nav-link sr-only">{{ trans('adminlte_lang::message.togglenav') }}</span>
        </a>
        <!-- search form (Optional) -->
        <!--        <form action="#" method="get" class="navbar-form form-inline">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
                      <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                </form>-->
        <!-- /.search form -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="nav-item dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('adminlte_lang::message.tabmessages') }}</li>
                        <li class="">
                            <!-- inner menu: contains the messages -->
                            <ul class="dropdown-item menu">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <!-- User Image -->
                                            <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            {{ trans('adminlte_lang::message.supteam') }}
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>{{ trans('adminlte_lang::message.awesometheme') }}</p>
                                    </a>
                                </li><!-- end message -->
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a class="dropdown-item" href="#">c</a></li>
                    </ul>
                </li><!-- /.messages-menu -->
                <!-- Notifications Menu -->
                <li class="nav-item dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('adminlte_lang::message.notifications') }}</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="dropdown-item menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> {{ trans('adminlte_lang::message.newmembers') }}
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer"><a class="dropdown-item" href="#">{{ trans('adminlte_lang::message.viewall') }}</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="nav-item dropdown tasks-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">{{ trans('adminlte_lang::message.tasks') }}</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class="dropdown-item menu">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            {{ trans('adminlte_lang::message.tasks') }}
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <!-- The progress bar BS 4 -->
<!--                                        <progress class="progress xs" value="20" max="100">
                                            <div class="progress xs">
                                                <span class="progress-bar" style="width: 20%;">20% {{ trans('adminlte_lang::message.complete') }}</span>
                                            </div>
                                        </progress>-->
                                        <!-- The progress bar BS 3 -->
                                        <progress class="progress xs">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% {{ trans('adminlte_lang::message.complete') }}</span>
                                            </div>
                                        </progress>
                                    </a>
                                </li><!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a class="dropdown-item" href="#">{{ trans('adminlte_lang::message.alltasks') }}</a>
                        </li>
                    </ul>
                </li>
                @if (Auth::guest())
                <li class="nav-item"><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                <li class="nav-item"><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                @else
                <!-- User Account Menu -->
                <li class="nav-item dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{asset('/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                            <p>
                                {{ Auth::user()->name }}
                                <small>{{ trans('adminlte_lang::message.login') }} Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">{{ trans('adminlte_lang::message.followers') }}</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.signout') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif
                <!-- Control Sidebar Toggle Button -->
                <li class="nav-item">
                    <a class="nav-link " href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
