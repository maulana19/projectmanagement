
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    </head>
