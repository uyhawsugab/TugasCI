<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
    <title>Document</title>
</head>
<body>
<nav>
<div class="nav-wrapper cyan lighten-3">
<a href="#" class="brand-logo center">Dashboard</a>
<ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="<?= base_url()?>index.php/route/slideshow">Slideshow</a></li>
    <li><a href="<?= base_url()?>index.php/route/card">Card</a></li>
    <li><a href="<?= base_url()?>index.php/route/carousel">Carousel</a></li>
    <li><a href="<?= base_url()?>index.php/route/form">Form</a></li>
<!-- sidenav -->
<li><a href="#" data-activates="slide-out" class="btn-sidenav"><i class="material-icons">menu</i></a></li>
<ul id="slide-out" class="side-nav cyan lighten-5">
    <li><div class="user-view">
          <div class="background">
            <img src="<?= base_url()?>assets/detail-act-banner.png" alt="">    
        </div>
    <a href="#"><img src="<?= base_url()?>assets/user1.jpg" alt="" class="circle responsive-img"></a>
    <a href="#"><span class="white-text name">Wahyu Bagus Wicaksono</span></a>
    <a href="#"><span class="white-text email">wahyu.ae3135@gmail.com</span></a>
</div></li>
<li><a href="<?= base_url()?>index.php/route/profil" class="waves-effect"><i class="material-icons">account_box</i>Tentang ku</a></li>

</ul>
</ul>

</div>
</nav>
<div class="parallax-container">
    <div class="parallax"><img src="<?= base_url()?>assets/parr1.jpg" alt=""></div>
</div>
<div class="section-white">
    <div class="row container">
        <h2 class="header pink-text lighten-1">Ini Adalah Dashboard</h2>
        <p class="grey-text text-darken-3 lighten-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Corrupti doloremque nulla, ipsam, non error illum dicta quia aliquam repellendus cupiditate odio incidunt. 
            Minima, veritatis deserunt est nam placeat fugiat tenetur?</p>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="<?= base_url()?>assets/parr2.jpg" alt=""></div>
</div>
<div class="section-white">
    <div class="row container">
    <p class="grey-text text-darken-3 lighten-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Eum maxime sapiente voluptate, quas laboriosam numquam nobis qui id voluptatum 
        iste odit cumque, ex doloribus sed molestiae veniam maiores est incidunt?
    </p>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="<?= base_url()?>assets/parr3.jpg" alt=""></div>
</div>
<script>
    $(document).ready(function(){
        $(".btn-sidenav").sideNav();
    })
    $(document).ready(function(){
        $(".parallax").parallax();
    })
</script>
</body>
</html>