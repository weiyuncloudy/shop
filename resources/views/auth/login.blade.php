@extends('layout.header')
@section('body')
    <div class="row">
        <div class="col-xs-5" style="float:right;border:2px solid dimgray;background:white;">
            <div style="clear:both;margin-top:40px;"></div>
            <h3>欢迎登录<em style="color:red;">51BABY！</em></h3>
            <form method="POST" action="{{URL::to('/login')}}" accept-charset="UTF-8">
                <input name="_token" type="hidden" value="{{csrf_token()}}">
                <div class="form-group">
                    <input name="email" type="text" value="" class="form-control" placeholder="请填写您的邮箱">
                    <div style="color:red;">
                        @if(count($errors)>0)
                            @if($errors->has('email'))
                                {{$errors->first('email')}}
                            @endif
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" value="" class="form-control" placeholder="请填写您的密码">
                    <div style="color:red;">
                        @if(count($errors)>0)
                            @if($errors->has('password'))
                                {{$errors->first('password')}}
                            @endif
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <span class="checkbox-inline">
                        <input type="checkbox" name="remember">记住用户名
                    </span>
            <span style="float:right;">
              <a href="{{URL::to('/forgetPassword')}}"  style="color:black;">忘记密码</a> |
               <a href="{{URL::to('/register')}}" style="color:red;">立即注册</a>
            </span>
                </div>
                <div class="form-group">
                    <input type="submit" id="submit" class="btn" value="立即登录">
                </div>
            </form>
            <div style="clear:both;margin-bottom:60px;"></div>
        </div>
    </div>
    <div style="clear:both;">
    </div>
@endsection