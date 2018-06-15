@extends('layouts.default')
@section('content')
<div class="container">
     <!-- start register -->
    <div class="row">
         <div class="col-lg-12 col-md-12"><!--right content-->
            <div class="wrap-col">
                @include('shared._errors')
                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
                    </a>
                </div>

                <form id="login" action="{{ route('users.update', $user->id) }}" method="post" novalidate="novalidate" form-horizontal>
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <h4 class="modal-title" id="myModalLabel">更新个人资料</h4>
                    <div class="form-group">
                        <label class="icon" for="username">
                            <i class="fa fa-user"></i>
                        </label>
                        <input class="form-control" id="username" type="text" placeholder="请输入用户名" name="username" required="" aria-required="true" value="{{ $user->username }}">
                    </div>
                    <div class="form-group">
                        <label class="icon" for="email">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input class="form-control" id="email" type="text" placeholder="输入邮箱" name="email" required="" aria-required="true" value="{{ $user->email }}" disabled>
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
                    <div class="form-group">
                        <input class="btn btn-info btn-submit" type="submit" value="更新" name="submit">
                    </div>
                </form>
            </div>
            <!--End-->
        </div>
    </div>
</div>
@include('shared._index_foot')
@stop