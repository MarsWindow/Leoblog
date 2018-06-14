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
                <li class="nav-login"><!-- <span>小李-欢迎登录-<a href="">退出登录</a></span> -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myLogin" id="refresh_code">登录</button>
                    <button class="btn btn-success"><a href="{{ route('signup') }}">现在注册</a></button>
                    <!-- Modal Login -->
                    <div class="modal fade" id="myLogin" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form id="login" action="/login" method="post" novalidate="novalidate" form-horizontal>
                                        <h4 class="modal-title" id="myModalLabel">登录</h4>
                                        <div class="form-group">
                                            <label class="icon" for="username">
                                                <i class="fa fa-user"></i>
                                            </label>
                                            <input class="form-control" id="username" type="text" placeholder="请输入用户名" name="username" required="" aria-required="true">
                                        </div>
                                        <div class="form-group">
                                            <label class="icon" for="username">
                                                <i class="fa fa-lock"></i>
                                            </label>
                                            <input class="form-control" id="password" type="password" placeholder="请输入密码" name="password" required="" aria-required="true">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="icon" for="code">
                                                <i class="fa fa-image"></i>
                                                <img class="change_imgyzm" src=""  onclick="captcha_done()" alt="点击更改校验码" id="captcha_image">
                                            </label>
                                            <input class="form-control" id="code" type="text" placeholder="请输入验证码" name="code" required="" aria-required="true">
                                        </div> -->
                                        <div class="form-group">
                                            <label class="remembermetext" for="rememberme"><input name="rememberme" type="checkbox" checked="checked" id="rememberme" class="rememberme" value="forever">记住我的登录</label>
                                            <a class="lost" href="http://wangbaiyuan.cn/wp-login.php?action=lostpassword">忘记密码 ?</a>
                                        </div>
                                        <p>
                                        <input class="btn btn-info btn-submit" type="submit" value="登录" name="submit">
                                        </p>
                                        <a class="close"><i class="fa fa-times"></i></a>
                                        <input type="hidden" id="security" name="security" value="29167921a8">
                                        <input type="hidden" name="_wp_http_referer" value="/?layout=cms">
                                    </form>
                                    <div class="other-sign">
                                        <p>您也可以使用第三方帐号快捷登录</p>
                                        <div class="text-center">
                                            <button class="btn btn-info">
                                                <a class="qqlogin"  href="http://wangbaiyuan.cn/?connect=qq&amp;action=login&amp;redirect=http%3A%2F%2Fwangbaiyuan.cn%2F"><i class="fa fa-qq"></i>Q Q 登 录</a>
                                            </button>
                                            <button class="btn btn-danger">
                                                <a class="weibologin" href="http://wangbaiyuan.cn/?connect=weibo&amp;action=login&amp;redirect=http%3A%2F%2Fwangbaiyuan.cn%2F"><i class="fa fa-weibo"></i>微 博 登 录</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End-->
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <!-- End Header -->