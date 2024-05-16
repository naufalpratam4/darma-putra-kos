<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <script src="resources/js/app.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title>Darma Putra Kos</title>
</head>

<body>
    @include('template.navBarJadwalTemu')
    <div>
        <section>
            @yield('content')
        </section>
    </div>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
