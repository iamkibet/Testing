<header class="flex flex-wrap  md:justify-start md:flex-nowrap z-50 w-full sticky top-0 bg-gray-900">
    <nav
        class="relative max-w-[85rem] w-full mx-auto mt-4 md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center gap-x-1">
            <a class="flex-none font-bold text-xl focus:outline-none focus:opacity-80 text-white italic" href="#"
                aria-label="Brand">L-Shop</a>
        </div>

        <div class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block ">
            <div class="overflow-hidden overflow-y-auto max-h-[75vh]">
                <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
                    <div class="grow">
                        <div class="flex flex-col md:flex-row  md:items-center gap-0.5 md:gap-1">
                            <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                href="/listings">
                                Listings
                            </a>

                            <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                href="/about">

                                About Us
                            </a>

                            <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                href="/">
                                Blog
                            </a>
                        </div>
                    </div>
                    <div class="md:ms-auto mt-2 md:mt-0 flex flex-wrap items-center gap-x-1.5">
                        @auth
                            <a href="/" class="mr-4">Welcome <span
                                    class="italic">{{ auth()->user()->name }}</span></a>
                            <a class="py-[7px] px-2.5 font-medium dark-button" href="/dashboard">
                                Manage Listings
                                <span>
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M18 3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1V9a4 4 0 0 0-4-4h-3a1.99 1.99 0 0 0-1 .267V5a2 2 0 0 1 2-2h7Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M8 7.054V11H4.2a2 2 0 0 1 .281-.432l2.46-2.87A2 2 0 0 1 8 7.054ZM10 7v4a2 2 0 0 1-2 2H4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </span>
                            </a>
                            <form class="inline" method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="py-[7px] px-2.5 font-medium dark-button">
                                    <span>Logout</span>
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        @else
                            <a class="py-[7px] px-2.5 font-medium dark-button" href="/login">
                                Sign in
                            </a>
                            <a class="py-2 px-2.5 font-medium button" href="/register">
                                Get started
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
