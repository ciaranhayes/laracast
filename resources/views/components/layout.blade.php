<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="size-8" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQA3dFxKVwcagn44sdtbJVhtCRiACPTgG8O2zkmLiQGw-PvLfK6-kXY4OZwalY2ygO2cJwZVm_yvC_eS0rtYqtAlw" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                                <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="size-8 rounded-full" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRwocjdpr-kwdl6ctU9KXaNUCdmUfkT0oXlqJwGxuDtOfbKmKty" alt="">
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
                    <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full" src="data:image/jpeg;base64,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" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Ciaran Hayes</div>
                            <div class="text-sm font-medium text-gray-400">hayes.c.hayes@gmail.com</div>
                        </div>
                        <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
