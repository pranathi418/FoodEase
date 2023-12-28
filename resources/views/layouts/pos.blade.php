<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FoodEase') }}</title>
    @include('layouts.scripts')

</head>

<body class="font-sans antialiased">
    <div class="flex-col">
        {{-- main nav --}}
        <div
            class="flex flex-row justify-around w-full pt-5 text-gray-700 bg-slate-100 dark:text-gray-200 dark:bg-gray-800">
            <nav class="flex-grow px-4 pb-4 ">
                <x-pos-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('FoodEase') }}
                </x-pos-nav-link>
                <x-pos-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('New Order') }}
                </x-pos-nav-link>
            </nav>
            <nav class="align-middle justify-center flex-grow px-4 pb-4 ">
                <x-pos-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('Categories') }}
                </x-pos-nav-link>
                <x-pos-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('Categories') }}
                </x-pos-nav-link>
                <x-pos-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('Categories') }}
                </x-pos-nav-link>
                <x-pos-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('Categories') }}
                </x-pos-nav-link>
            </nav>

        </div>
        <main class="m-2 p-8 w-full">
            <div>
                @if (session()->has('danger'))
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('danger') }}!</span>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('success') }}!</span>
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('warning') }}!</span>
                    </div>
                @endif
            </div>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
