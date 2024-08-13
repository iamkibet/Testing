<x-layout>
    <section class=" dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h1 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update Listing</h1>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Editing: {{ $listing->title }}</h2>
            <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" name="company" class="form-input" placeholder="Company Name"
                            value="{{ $listing->company }}">
                        @error('company')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="brand" class="form-label">Location</label>
                        <input type="text" name="locaation" class="form-input" placeholder="Location"
                            value="{{ $listing->locaation }}">
                        @error('locaation')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="price" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-input" placeholder="Laravel, php"
                            value="{{ $listing->tags }}">
                        @error('tags')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="item-weight"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" class="form-input" placeholder="example@gmail.com"
                            value="{{ $listing->email }}">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="item-weight"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" class="form-input" placeholder="Laravel Developer"
                            value="{{ $listing->title }}">
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Upload
                            logo</label>
                        <input class="form-input" name="logo" type="file">
                        <img class="w-32"
                            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-logo-image.jpg') }}"
                            alt="logo" />
                        @error('logo')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" rows="8" class="form-textarea" placeholder="Your description here">{{ $listing->description }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white  rounded-lg bg-blue-900">
                    Update Listing
                </button>
            </form>
        </div>

    </section>
</x-layout>
