<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>
       <?php 
        if(isset($title)):
        echo $title;
      else:
        echo "Todolist";
      endif; 
         ?>

    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- font awesome pour afficher les réseaux -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>

      *{
        background: darkred;
      }
      body {
        background-image: url();
        background: black;
        background-repeat: no-repeat;
        background-size: cover;
        cursor:crosshair;
        
      }

      a:hover{
          color: chocolate;
      }

      h1{
        color: rgba(94, 6, 6, 0.6);
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        transition: 1s;
        border-radius: 5px 5px 5px 5px;
        border: 5px solid purple;
        
      }

      h1:active{
        text-align: center;
        color: wheat;
        transform: scale(1.1);
        transition: 1.5s;
        cursor: crosshair;
        
      }

      h1:hover{
        color: chocolate;
        transform: scale(1.1);
        transition: 1.5s;
        
      }

      h2, h3, h4, h5, h6{
        font-family: Arial, Helvetica, sans-serif;
        color: black;
        transition: 1s;
      }

      h2:active{
        color: silver;
        transition: 0.5s;
      }

      h2:hover{
        color: bisque;
        transition: 0.7s;
      }

       h3:active{
        color: silver;
        transition: 0.5s;
      }

      h3:hover{
        color: bisque;
        transition: 0.7s;
      }

      h4:hover{
        color: silver;
        transition: 0.7s;
      }

      h5:hover{
        color: silver;
        transition: 0.7s;
      }

      h6:hover{
        color: silver;
        transition: 0.7s;
      }

      p, ul, li{
        font-family: 'Times New Roman', Times, serif;
        color: whitesmoke;
        transition: 1s;
      }

      p:hover{
        color: silver;
        transition: 0.7s;
      }

      ul:hover{
        color: silver;
        transition: 0.7s;
      }

      li:hover{
        color: silver;
        transition: 0.7s;
      }

      .calma{
        text-align: center;
        transition: 4s;
        border-radius: 10px 10px 10px 10px;
      }

      .calma:hover{
        transform: perspective(500px) rotateY(360deg) scale(1.5);
        transition: 3s;
        
      }

      .trophies{
        text-align: center;
        display: flex;
        flex-direction:row;
        align-self: center;
        justify-content: space-around
      }

      .palmares{
        text-align: center;
        border-radius: 10px 10px 10px 10px;
        transition: 1.5s;
      }

      .palmares:active{
        border-radius: 10px 10px 10px 10px;
        transition: 1s;
      }

      .palmares:hover{
        transform:scale(1.2);
        transition: 0.5s;
        box-shadow: 2.5px 2.5px 2.5px 2.5px rgba(255, 255, 255, 1);
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .espada{
        text-align: center;
        display: flex;
        flex-direction: row;
        align-self: center;
        justify-content:space-evenly;

      }

      .espada:hover{
        text-align: center;
        display: flex;
        flex-direction: row;
        align-self: center;
        justify-content:space-evenly;
 
      }

      iframe{
        border-radius: 10px 10px 10px 10px;
        transition: 1.5s;
      }

       iframe:active{
        border-radius: 10px 10px 10px 10px;
        transition: 1s;
      }

      iframe:hover{
        transform:scale(1.2);
        transition: 0.5s;
        box-shadow: 7px 7px 7px 7px rgba(255, 255, 255, 1);
    
      }

      button{
        background-color:antiquewhite;
        transition: 1.5s;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0 5px burlywood;

      }

      button:hover{
        color: burlywood;
        transform: scale(1.3);
        transition: 1s;
        box-shadow: 0 10px burlywood;

      }

    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark rgba(0, 0, 0, 0) mb-4">
  <a class="navbar-brand" href="/phpPerso/index.php">Acceuil</a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($nav === "index"): ?> active <?php endif ?>">
        <a class="nav-link" href="/PHPPERSO/index.php">Accueil <span class="sr-only">(current)</span></a>
      </li>
      
  </div>
</nav>
