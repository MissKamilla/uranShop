@extends('adminlte::page')

@section('title', 'Categories')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
    <table class="table" >
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>slug</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item) 
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->slug}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
