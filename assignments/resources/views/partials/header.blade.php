<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games Assignment - Milad </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/977c9f68f6.js" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <style>
        body{
            background: #0c1b2b;
            font-family: 'Quicksand', sans-serif;
        }
        h1 {
            color: white;
        }
        h6{
            color:blue;

        }
        .bord{
            border:6px solid #0c1b2b;
        }
        img{
            border:none;
            border-radius: 0;
        }
        h5 {
          padding-bottom: 4px;
          background-color:#0c1b2b;
          color:white;
          margin-bottom: 0

        }
        .card-img-top {
          border-radius: 0 !important;
        }
        .card{
          flex-direction:row;
          border:3px solid white;
          border-radius: 0;
        }
        .col-sm-12, .col-md-6, .col-xl-4{
          padding: 0 !important;
        }
        footer {
            background: whitesmoke;
            margin-top: 60px;
          }
          .sub-menu{
            margin:0 auto;
            width: 100%;
            background-color: white;

          }
          .cat-ul {
            display: flex;
            justify-content: center;
            list-style: none;

          }
          .cat-ul li {
            margin:16px;
            color: white;
          }

          .cat-ul li a {
            color: #444;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
          }
    </style>

</head>
<body>
   <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="/"><i class="fas fa-gamepad fa-2x"></i></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">HOME
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">CONTACT</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">CATEGORIES</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          @foreach($categories as $category)
          <a class="dropdown-item" href="#">{{$category->name}}</a>
          @endforeach
        </div>
      </li>

    </ul>
    <!-- Links -->


  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->