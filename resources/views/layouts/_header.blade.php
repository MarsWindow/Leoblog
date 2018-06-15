    <!-- Start Header -->
    <nav class="navbar navbar-inverse navbar-lg" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-4">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="/index">LeoBlog</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-4">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>首页</a></li>
                <li><a href=""><i class="fa fa-paper-plane"></i>业界快讯</a></li>
                <li><a href=""><i class="fa fa-shield"></i>技术博文</a></li>
                <!-- <li><a href="#"><i class="fa fa-slideshare"></i>感官世界</a></li>
                <li><a href="#"><i class="fa fa-hdd-o"></i>学习阅读</a></li> -->
                <li><a href="" target="_blank"><i class="fa fa-edge"></i>网址导航</a></li>

                <!-- <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info-circle"></i>关于 <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="http://hao.hililei.com" target="_blank">网址导航</a></li>
                                        </ul>
                                    </li> -->
                <!-- <li><a href="/Talk"><i class="fa fa-leaf"></i>说说</a></li> -->
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info-circle"></i>关于 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">微信公众号</a></li>
                        <li><a href="#">留言</a></li>
                    </ul>
                </li> -->
                @if (Auth::check())
                <li><a href="{{ route('users.index') }}">用户列表</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"></i>{{ Auth::user()->username }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('users.show', Auth::user()->id ) }}" target="_blank">个人中心</a></li>
                        <li><a href="{{ route('users.edit', Auth::user()->id ) }}" target="_blank">编辑资料</a></li>
                        <li>
                            <a id="logout" href="#">
                                <form action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                     {{ method_field('DELETE') }}
                                    <button class="btn btn-block btn-sm btn-danger" type="submit" name="button">退出</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-login"><!-- <span>小李-欢迎登录-<a href="">退出登录</a></span> -->
                    <button class="btn btn-primary"><a href="{{ route('login') }}">登录</a></button>
                    <button class="btn btn-success"><a href="{{ route('signup') }}">现在注册</a></button>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <!-- End Header -->