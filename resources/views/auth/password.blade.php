@extends('layout.header')
@section('body')
    <div class="row">
        <div class="col-lg-5" style="border:2px solid dimgray;background:white;">
            <h3 style="color:red;">找回密码</h3>
            <form class="form-inline" action="{{URL::to('/forgetPassword')}}" method="post">
                <input type="hidden" value="{{csrf_token()}}" name="_token">
                <div class="form-group">
                    <span>邮箱账号</span>
                    <input type="text" placeholder="请填写您的邮箱" class="form-control">
                </div>
                <div class="form-group">
                    <span>验证码&nbsp;&nbsp;&nbsp;</span>
                    <input type="text" placeholder="验证码" class="form-control">
                </div>
                <div style="clear:both;"></div>
                <div class="form-group" style="width:68%;">
                    <input type="button" id="submit" value="提交">
                </div>
            </form>
            <div style="clear:both;margin-bottom:60px;"></div>
        </div>
    </div>
@endsection