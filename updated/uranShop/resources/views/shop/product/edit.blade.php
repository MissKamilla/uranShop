@extends('layouts.app')

@section('title', 'Edit product')


@section('content')
@include('shop._message')
    <div class="justify-content-center row">
        <form action="{{route('product.update',['product'=>$product->id])}}" method="POST" class='form col-4' enctype="multipart/form-data">
            @method('PUT')
            <div class="logo">Edit product</div>
            @include('shop.product._form')
        </form>
    </div>
@stop
