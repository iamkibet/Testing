<x-layout>
    <section class="bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Register</h2>
            <form method="POST" action="/users" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-input" placeholder="Name"
                            value="{{ old('name') }}" />
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="item-weight"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" class="form-input" placeholder="example@gmail.com"
                            value="{{ old('email') }}" />
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-input" placeholder="Password"
                            value="{{ old('password') }}">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block mb-2 text-sm font-mediumtext-white">Confirm
                            password</label>
                        <input type="password" name="password_confirmation" class="form-input"
                            placeholder="confirm password">
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white  rounded-lg bg-blue-900">
                    Register
                </button>
            </form>
        </div>
    </section>

</x-layout>
