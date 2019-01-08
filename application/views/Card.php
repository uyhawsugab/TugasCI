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
            <a href="#" class="brand-logo center">Card</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?= base_url()?>index.php/route/dashboard"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4">
                <div class="card-image">
                    <img src="<?= base_url()?>assets/parr1.jpg" alt="">
                    <span class="card-title">Ini Card Pertama</span>
                </div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. 
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4">
                <div class="card-image">
                    <img src="<?= base_url()?>assets/parr2.jpg" alt="">
                    <span class="card-title">Ini Card Kedua</span>
                </div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. 
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4 horizontal">
                <div class="card-image">
                    <img src="<?= base_url()?>assets/parr3.jpg" alt="">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                    <span class="card-title">Ini Card Ketiga</span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. 
                </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4 horizontal">
                <div class="card-image">
                    <img src="<?= base_url()?>assets/parr4.jpg" alt="">
                </div>
                <div class="card-stacked">
                <div class="card-content">
                    <span class="card-title">Ini Card Keempat</span>                    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. 
                </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="<?= base_url()?>assets/parr5.jpg" alt="" class="activator">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Ini Card Kelima<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title activator grey-text text-darken-4">Ini Card Kelima<i class="material-icons right">close</i></span>
                    <p class="grey-text text-darken-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="<?= base_url()?>assets/parr6.jpg" alt="" class="activator">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Ini Card Keenam<i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title activator grey-text text-darken-4">Ini Card Keenam<i class="material-icons right">close</i></span>
                    <p class="grey-text text-darken-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. </p>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4">
                <div class="card-image">
                    <img src="<?= base_url()?>assets/parr7.jpg" alt="">
                    <span class="card-title">Ini Card Ketujuh</span>
                </div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. 
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card medium z-depth-4">
                <div class="card-image">
                    <img src="<?= base_url()?>assets/parr8.jpg" alt="">
                    <span class="card-title">Ini Card Kedelapan</span>
                </div>
                <div class="card-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Commodi, quisquam. 
                </div>
            </div>
        </div>
    </div>
</body>
</html>