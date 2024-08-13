<x-layout>
    <section class="bg-gray-900 container mx-auto max-w-lg ">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-white">Sign in</h1>
                <p class="mt-2 text-sm text-neutral-400">
                    Don't have an account yet?
                    <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                        href="/register">
                        Sign up here
                    </a>
                </p>
            </div>

            <form method="POST" action="/users/authenticate">
                @csrf
                <div class="gap-y-4">
                    <div>
                        <label for="email" class="block text-sm mb-2 text-white">Email address</label>
                        <div class="relative">
                            <input type="email" id="email" value="{{ old('email') }}" name="email"
                                class="form-input" aria-describedby="email-error" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center">
                            <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                            <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                href="/forgot-password">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <input type="password" id="password" value="{{ old('password') }}" name="password"
                                class="form-input">

                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex">
                            <input id="remember-me" name="remember-me" type="checkbox" class="form-input">
                        </div>
                        <div class="ms-3">
                            <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                        in</button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
