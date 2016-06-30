<?php $category = Lang::get('category.category') ?>
@extends('layout.header')
@section('body')
    <div class="sidebar">
        <div class="first">
            <h2><a href="#">全部商品分类</a></h2>
            {{--<ul>--}}
            {{--<li>--}}
            {{--<a href="#">童装</a>--}}
            {{--<ul>--}}
            {{--<li><a href="#">裙子</a></li>--}}
            {{--<li><a href="#">衣服</a></li>--}}
            {{--<li><a href="#">裤子</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
        </div>
        @if(count($category)>0&&$category!='category.category')
            @foreach($category as $cate)
                @if($cate['parent_id']==0)
                    <div>
                        <h2><a href="{{URL::to('/'.$cate['id'])}}">{{$cate['name']}}</a></h2>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
    <div class="content">
        <div class="figure">
            <img src="{{asset('/shop/images/test/jewelry.jpg')}}" alt="">
        </div>
        <div class="products">
            {{--产品--}}
        </div>
    </div>
    <div style="clear:both;"></div>
@endsection