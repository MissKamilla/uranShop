@extends('layouts.app')

@section('title', 'Edit category')


@section('content')
@include('shop._message')
    <form action="{{route('category.update',['category'=>$category->id])}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('shop.category._form')
    </form>
@stop
