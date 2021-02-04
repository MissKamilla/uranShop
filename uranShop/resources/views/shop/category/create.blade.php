@extends('layouts.app')

@section('title', 'Category')

@section('content')
@include('shop._message')
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @include('shop.category._form')
    </form>
@stop


