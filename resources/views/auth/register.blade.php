@extends('layout.header')
@section('body')
    <div class="row">
        <div class="col-lg-8" style="border:2px solid dimgray;background:white;">
            <div style="clear:both;margin-top:40px;"></div>
            <h3>免费注册<em style="color:red;">51BABY</em>会员！
                <span style="font-size:15px;">已有账号？现在就<a href="{{URL::to('/login')}}" style="color:red;">登录</a></span>
            </h3>
            <div class="col-lg-8">
                <div>
                    <form method="POST" action="{{URL::to('register')}}" accept-charset="UTF-8">
                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</label>
                            <input type="text" name="email" value="" class="form-control">
                            <!-- <em>用户名不存在</em> -->
                            <div style="color:red;">
                                @if(count($errors))
                                    @if($errors->has('email'))
                                        {{$errors->first('email')}}
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                            <input type="password" name="password" value="" class="form-control">
                            <div style="color:red;">
                                @if(count($errors))
                                    @if($errors->has('password'))
                                        {{$errors->first('password')}}
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="fs16">确定密码</label>
                            <input type="password" name="password_confirmation" value="" class="form-control">
                            <div style="color:red;">
                                @if(count($errors))
                                    @if($errors->has('password_confirmation'))
                                        {{$errors->first('password_confirmation')}}
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" value="免费注册">
                        </div>
                    </form>
                    <div style="clear:both;margin-bottom:60px;"></div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
@endsection