<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body>
    @include('layout.navigation')
    <div class="container">

    @yield('page_title')
   @yield('main_content')
   
   <div class="fixed-bottom bg-dark text-warning justify-content-center d-flex">
    <footer>Copyright Project Catalog ©2021</footer>
   </div>
   
</div>
</body>
</html>