<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Page Title' }}</title>
        <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg/900px-Logo_of_the_Ministry_of_Environmental_Affairs_and_Forestry_of_the_Republic_of_Indonesia.svg.png">

        <link rel="stylesheet" href="{{ asset('build/assets/app-543fc016.css') }}">
        {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
        @livewireScripts
    </head>
    <body class="bg-gray-50">
    
