@extends('layouts.default')
@section('content')
<div class="container">
     <!-- start register -->
    <div class="row">
         <div class="col-lg-12 col-md-12"><!--right content-->
            <div class="wrap-col">
                @include('shared._errors')
                <form id="login" action="{{ route('users.store') }}" method="post" novalidate="novalidate" form-horizontal>
                    {{ csrf_field() }}
                    <h4 class="modal-title" id="myModalLabel">注册</h4>
                    <div class="form-group">
                        <label class="icon" for="username">
                            <i class="fa fa-user"></i>
                        </label>
                        <input class="form-control" id="username" type="text" placeholder="请输入用户名" name="username" required="" aria-required="true" value="{{ old('username') }}">
                    </div>
                    <div class="form-group">
                        <label class="icon" for="email">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input class="form-control" id="email" type="text" placeholder="输入邮箱" name="email" required="" aria-required="true" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label class="icon" for="password">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input class="form-control" id="password" type="password" placeholder="输入密码" name="password" required="" aria-required="true" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label class="icon" for="password_confirmation">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input class="form-control" id="password" type="password" placeholder="重复密码" name="password_confirmation" required="" aria-required="true" value="{{ old('password_confirmation') }}">
                    </div>
                    <!-- <div class="form-group">
                        <label class="icon" for="code">
                            <i class="fa fa-image"></i>
                            <img class="change_imgyzm" src=""  onclick="captcha_done()" alt="点击更改校验码" id="captcha_image">
                        </label>
                        <input class="form-control" id="code" type="text" placeholder="请输入验证码" name="code" required="" aria-required="true">
                    </div> -->
                    <div class="form-group">
                        <input class="btn btn-info btn-submit" type="submit" value="注册" name="submit">
                    </div>
                </form>
                <!-- <div class="other-sign">
                    <p>您也可以使用第三方帐号快捷登录</p>
                    <div class="text-center">
                        <button class="btn btn-info">
                            <a class="qqlogin"  href="http://wangbaiyuan.cn/?connect=qq&amp;action=login&amp;redirect=http%3A%2F%2Fwangbaiyuan.cn%2F"><i class="fa fa-qq"></i>Q Q 登 录</a>
                        </button>
                        <button class="btn btn-danger">
                            <a class="weibologin" href="http://wangbaiyuan.cn/?connect=weibo&amp;action=login&amp;redirect=http%3A%2F%2Fwangbaiyuan.cn%2F"><i class="fa fa-weibo"></i>微 博 登 录</a>
                        </button>
                    </div>
                </div> -->
            </div>
            <!--End-->
        </div>
    </div>
</div>
@include('shared._index_foot')
@stop