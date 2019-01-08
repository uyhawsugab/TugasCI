<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <a href="#" class="brand-logo center">Slideshow</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?= base_url()?>index.php/route/dashboard"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
    </nav>
<!-- slider -->
<div class="slider">
    <ul class="slides">
        <li>
            <img src="<?= base_url()?>assets/parr1.jpg" alt="" class="materialboxed">
            <div class="caption center-align">
                <h3>Ini Gambar Pertama</h3>
                <h5 class="light grey-text text-lighten-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Cum cupiditate sapiente facere harum velit perspiciatis a totam quod consectetur, 
                    quo tempore ea quidem dolore unde, vero doloribus quasi sed cumque?</h5>
            </div>
        </li>
        <li>
            <img src="<?= base_url()?>assets/parr3.jpg" alt="" class="materialboxed">
            <div class="caption left-align">
                <h3>Ini Gambar Kedua</h3>
                <h5 class="light grey-text text-lighten-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, assumenda dolor. 
                    Sit, facilis consequuntur, dolorem, quisquam tempora voluptatibus vero ratione omnis accusamus saepe officiis. 
                    Praesentium omnis voluptas molestiae ea nobis.
                </h5>
            </div>
        </li>
        <li>
            <img src="<?= base_url()?>assets/parr4.jpg" alt="" class="materialboxed">
            <div class="caption right-align">
                <h3>Ini Gambar Ketiga</h3>
                <h5 class="light grey-text text-lighten-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Itaque quia, reiciendis eius asperiores beatae, eaque, cum dolorem earum unde enim tempora praesentium. 
                    Repellendus blanditiis suscipit ad ipsum possimus aspernatur ea?
                </h5>
            </div>
        </li>
    </ul>
</div>
<script>
    $(document).ready(function(){
        $(".slider").slider();
    })
    $(document).ready(function(){
        $(".materialboxed").materialbox();
    })
</script>
</body>
</html>