<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body {{-- class="min-h-screen min-w-screen bg-[url('/public/assets/images/main-background.jpg')] bg-cover bg-bottom bg-no-repeat"> --}} class="min-h-screen min-w-screen  bg-cover bg-bottom bg-no-repeat">
    {{ $slot }}
</body>

</html>
