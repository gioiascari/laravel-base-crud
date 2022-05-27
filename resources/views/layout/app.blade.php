<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1f72ff4464.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
    <title>Laravel Base Crud</title>
</head>
<body>
    <!-- Header -->
    @include('partials.header')

    @include('partials.jumbotron')
   <!-- / Header -->
    <!-- Main -->

    @yield ('main')
    <!-- / Main -->

    <!-- Footer -->
    @include ('partials.footer')
    <!-- /Footer -->
    <script src="/js/carousel.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
