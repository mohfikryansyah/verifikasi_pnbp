@include('components.layouts.app')
@include('auth.partials.navbar')

<div class="flex pt-16 overflow-hidden">
    @include('auth.partials.sidebar')
    <div id="main-content" class="relative w-full h-full overflow-y-auto lg:ml-64 dark:bg-gray-900 -mt-2">
        <main class="p-5">
            @yield('content')
        </main>
    </div>
</div>

@include('auth.partials.footer')
