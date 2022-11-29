<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
</head>

<body>

  <ul class="nav justify-content-center  ">
    <li class="nav-item">
        <a class="nav-link btn btn-danger" href="{{route('welcome')}}" aria-current="page"><h3 class="text-white">LARAVEL</h3></a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-success" href="{{route('libros.index')}}" aria-current="page"><h3 class="text-white">LIBROS</h3></a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-info" href="{{route('categorias.index')}}" aria-current="page"><h3 class="text-white">CATEGORIAS</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link btn btn-warning" href="{{route('autor.index')}}" aria-current="page"><h3 class="text-white">AUTORES</h3></a>
  </li>
</ul>
  
@yield('content')






