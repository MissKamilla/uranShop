@extends('layouts.app')

@section('title', 'Edit product')


@section('content')
@include('shop._message')
    <form action="{{route('product.update',['product'=>$product->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('shop.product._form')
    </form>
@stop
