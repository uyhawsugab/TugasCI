<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url()?>/assets/style.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
    <title>Document</title>
</head>
<body>
     <nav>
        <div class="nav-wrapper cyan lighten-3">
            <a href="#" class="brand-logo center">Carousel</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?= base_url()?>index.php/route/dashboard"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
    </nav>
<div class="con">
<div class="carousel">
<a href="#one" class="carousel-item"><img src="<?= base_url()?>assets/parr1.jpg" alt=""></a>
<a href="#two" class="carousel-item"><img src="<?= base_url()?>assets/parr2.jpg" alt=""></a>
<a href="#three" class="carousel-item"><img src="<?= base_url()?>assets/parr3.jpg" alt=""></a>
<a href="#four" class="carousel-item"><img src="<?= base_url()?>assets/parr4.jpg" alt=""></a>
<a href="#five" class="carousel-item"><img src="<?= base_url()?>assets/parr5.jpg" alt=""></a>
<a href="#six" class="carousel-item"><img src="<?= base_url()?>assets/parr6.jpg" alt=""></a>
<a href="#seven" class="carousel-item"><img src="<?= base_url()?>assets/parr7.jpg" alt=""></a>
<a href="#eight" class="carousel-item"><img src="<?= base_url()?>assets/parr8.jpg" alt=""></a>
</div>
</div>
<script>
    $(document).ready(function(){
        $(".carousel").carousel();
    })
</script>
</body>
</html>