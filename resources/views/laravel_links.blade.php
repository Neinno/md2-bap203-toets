@extends('layouts.master')

@section('content')

    @foreach($links as $link)
    <p>This is {{ $link->title }}</p>
    <p>This is {{ $link->user }}</p>
    <p>This is {{ $link->description }}</p>
    @endforeach

@endsection