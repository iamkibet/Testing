@extends('layout')
@section('content')
    
<h1>This is my about page</h1>
    <p>here is all our available listings</p>
    @foreach ($listings as $listing)
        <h2><a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a></h2>
        <p>{{ $listing['description'] }}</p>
        <h1>{{ $listing['company'] }}</h1>
    @endforeach
@endsection
