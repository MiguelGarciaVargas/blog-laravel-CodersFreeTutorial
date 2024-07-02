<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- favicon -->
    <!-- styles -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- header -->
    @include('layouts.partials.header')
    <!-- nav -->

    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')

    <!-- script -->
</body>

</html>
