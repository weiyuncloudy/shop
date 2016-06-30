<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>51 Baby</title>
    <link rel="stylesheet" href="{{asset('/shop/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/shop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('shop/css/shop.css')}}">
    <link rel="stylesheet" href="{{asset('/shop/css/ie6.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('shop/css/ie7.css')}}" type="text/css"/>
    <script src="{{asset('shop/js/jquery.min.js')}}"></script>
</head>
<body>
<div class="header">
    <div>
        <a href="index.html" id="logo"><img src="{{asset('shop/images/logo.gif')}}" alt="logo"></a>
        <div class="navigation">
            <ul class="first">
                <li class="first">
                    <a href="jewelry.html">我的订单</a>
                </li>
                <li>
                    <a href="accessories.html">购物车</a>
                </li>
                @if(Auth::guest())
                    <li>
                        <a href="{{URL::to('/login')}}">登录</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/register')}}">注册</a>
                    </li>
                @else
                    <li>
                        <a href="javascript:void(0)">{{Auth::user()->email}}</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/logout')}}">退出</a>
                    </li>
                @endif
            </ul>
        </div>
        <form action="" class="search">
            <input type="text" value="搜索" onblur="this.value=!this.value?'搜索':this.value;"
                   onfocus="this.select()" onclick="this.value='';">
            <input type="submit" id="submit" value="">
        </form>
    </div>
    <?php $category = Lang::get('category.category') ?>
    <div id="navigation">
        <ul>
            <li class="selected"><a href="{{URL::to('/')}}">首页</a></li>
            @if(count($category)>0&&$category!='category.category')
                @foreach($category as $cate)
                    @if($cate['parent_id']==0)
                        <li><a href="{{URL::to('/'.$cate['id'])}}">{{$cate['name']}}</a></li>
                    @endif
                @endforeach
            @endif
        </ul>
    </div>
</div>
<div class="body">
    @yield('body')
</div>
<div class="footer">
    <p>© 2011 51Baby. All rights reserved.&nbsp;
        <a href="http://www.51Baby.site" title="51Baby" target="_blank">51Baby</a>
    </p>
</div>
</body>
</html>