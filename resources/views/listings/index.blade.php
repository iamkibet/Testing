@extends('layout')
@section('content')
    @unless (count($listings) === 0)
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
            <div class="flex w-full mt-4 p-4 ">{{ $listings->links() }}</div>
        </div>
    @else
        <p>No Listings Found</p>
    @endunless

@endsection
