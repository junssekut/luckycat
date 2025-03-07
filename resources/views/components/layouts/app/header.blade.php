<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen min-w-screen bg-cover bg-bottom bg-no-repeat">
    @persist('topbar')
        <livewire:topbar />
    @endpersist

    <div class="flex justify-center items-center w-full h-full">
        {{ $slot }}
    </div>
</body>

</html>
