@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp


<ul class="px-6 pt-4 pb-2">
    @foreach ($tags as $tag)
        <li class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a
                href="/?tag={{ $tag }}">{{ $tag }}</a></li>
    @endforeach
</ul>
