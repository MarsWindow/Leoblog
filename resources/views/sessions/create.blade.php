@extends('layouts.default')
@section('content')
<div class="container">
     <!-- start register -->
    <div class="row">
         <div class="col-lg-12 col-md-12"><!--right content-->
            <div class="wrap-col">
                @include('shared._errors')
                <form id="login" action="{{ route('login') }}" method="post" novalidate="novalidate" form-horizontal>
                    {{ csrf_field() }}

                    <h4 class="modal-title" id="myModalLabel">登录</h4>
                    <div class="form-group">
                        <label class="icon" for="email">
                            <i class="fa fa-user"></i>
                        </label>
                        <input class="form-control" id="email" type="text" placeholder="请输入邮箱" name="email" required="" aria-required="true" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label class="icon" for="password">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input class="form-control" id="password" type="password" placeholder="请输入密码" name="password" required="" aria-required="true" value="{{ old('password') }}">
                    </div>
                    <!-- <div class="form-group">
                        <label class="icon" for="code">
                            <i class="fa fa-image"></i>
                            <img class="change_imgyzm" src=""  onclick="captcha_done()" alt="点击更改校验码" id="captcha_image">
                        </label>
                        <input class="form-control" id="code" type="text" placeholder="请输入验证码" name="code" required="" aria-required="true">
                    </div> -->
                    <div class="form-group">
                        <label class="remembermetext" for="rememberme"><input name="remember" type="checkbox" checked="checked" id="rememberme" class="rememberme" value="forever">记住我的登录</label>
                        还没账号？<a class="lost" href="{{ route('signup') }}">现在注册!</a>
                    </div>
                    <p>
                    <input class="btn btn-info btn-submit" type="submit" value="登录" name="submit">
                    </p>
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
            <!--End-->
        </div>
    </div>
</div>
@include('shared._index_foot')
@stop