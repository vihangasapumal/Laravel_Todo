<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('libraries.style')
    <title>Todo By Vihanga</title>
</head>
<body>
    <div id="main-wrapper">
        {{-- Nav Bar --}}
        @include('components.navbar')

        {{-- Content --}}
        @yield('content')
    </div>

    @include('libraries.script')
    @yield('scripts')

</body>
</html>