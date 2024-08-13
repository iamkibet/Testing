@props(['listing'])

<div
    class="max-w-sm bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 ease-in-out">
    <img class="w-full h-48 object-cover"
        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-logo-image.jpg') }}"
        alt="logo" />
    <div class="p-6">
        <a href="/listings/{{ $listing['id'] }}"
            class="block text-lg font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300">
            {{ $listing['title'] }}
        </a>
        <p class="mt-2 text-gray-600 text-sm">
            {{ Str::limit($listing['description'], 100) }}
        </p>
        <x-listing-tags :tagsCsv="$listing->tags" />
    </div>
</div>
