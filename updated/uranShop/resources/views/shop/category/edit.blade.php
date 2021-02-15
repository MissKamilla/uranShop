@extends('layouts.app')

@section('title', 'Edit category')

@section('content')
@include('shop._message')
<div class="justify-content-center row">
    <form action="{{route('category.update',['category'=>$category->id])}}" method="POST" class='form col-4' enctype="multipart/form-data">
        @method('PUT')
        <div class="logo">Edit category</div>
        @include('shop.category._form')
    </form>
</div>
@stop
