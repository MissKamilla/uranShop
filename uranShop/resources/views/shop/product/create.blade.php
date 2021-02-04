@extends('layouts.app')

@section('title', 'Products')

@section('content')
@include('shop._message')
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @include('shop.product._form')
    </form>
@stop


