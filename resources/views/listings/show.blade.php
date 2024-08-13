@extends('layout')
@section('content')
    <div class="flex flex-col items-center justify-center">
        <h2 class="text-3xl my-4">{{ $listing['title'] }}</h2>
        <p class="p-2 bg-slate-800 text-white">{{ $listing['description'] }}</p>
        <img class="w-32"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-logo-image.jpg') }}"
            alt="logo" />

        <div class="flex"><a class="bg-red-500 px-5 py-2 rounded-lg mt-6" href="/listings/{{ $listing->id }}/edit">Edit </a>
        </div>
        <form method="POST" action="/listings/{{ $listing->id }}">
            @csrf
            @method('DELETE')
            <button class="text-red-500">Delete</button>
        </form>
    </div>
@endsection
