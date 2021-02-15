@extends('layouts.app')

@section('title', 'Products')

@section('content')
@include('shop._message')
    <div class="justify-content-center row">
        <form action="{{route('product.store')}}" method="POST" class='form col-4' enctype="multipart/form-data">
            <div class="logo">Create product</div>
            @include('shop.product._form')
        </form>
    </div>
@stop


