<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen min-w-screen bg-cover bg-bottom bg-no-repeat">
    @persist('topbar')
        <livewire:topbar />
    @endpersist

    <div class="flex flex-col justify-center items-center max-w-full h-full">
        {{ $slot }}
    </div>

    @persist('footer')
        <livewire:banner-list />
        <livewire:footer />
        <livewire:copyright />
    @endpersist
</body>
    {{-- <script>
        window.addEventListener("popstate", function (event) { window.location.reload(); });
    </script> --}}
</html>
