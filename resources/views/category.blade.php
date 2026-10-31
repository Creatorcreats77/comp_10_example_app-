@extends('layouts.app')

@section('title')
    Category
@endsection

@section('content')
    
    @foreach ($categories as $category)
        {{ $category }}
    @endforeach

@endsection