<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ (isset($title) ? $title.' - ' : '').env('APP_NAME') }}</title>

        @vite('resources/css/app.css')

        @yield('css_plugins')
    </head>
    <body>
        {{-- Navbar --}}
        @livewire('partials.navbar', ['user' => null, 'wmenu' => $wmenu ?? null], key(\Str::uuid()->toString()))

        @persist('data-attr')
            <div class=" fixed bottom-4 w-full items-center justify-center">
                <span class=" flex justify-center" data-attr="sample"></span>
            </div>
        @endpersist

        <div class=" flex items-center justify-center h-screen">
            {{ $slot }}
        </div>

        @yield('js_plugins')
        @yield('js_inline')
    </body>
</html>
