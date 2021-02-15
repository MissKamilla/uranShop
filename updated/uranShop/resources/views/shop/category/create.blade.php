@extends('layouts.app')

@section('title', 'Category')

@section('content')
@include('shop._message')
    <div class="justify-content-center row">
        <form action="{{route('category.store')}}" method="POST" class='form col-4' enctype="multipart/form-data">
            <div class="logo">Create category</div>
            @include('shop.category._form')
        </form>
    </div>
@stop


