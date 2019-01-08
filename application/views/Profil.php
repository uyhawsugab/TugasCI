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
            <a href="#" class="brand-logo center">PROFILKU</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?= base_url()?>index.php/route/dashboard"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <div class="row" id="rw1">
    <div class="col s12 m4 l4">
        <img class="materialboxed responsive-img z-depth-4"src="<?= base_url()?>assets/user1.jpg" alt="">
    </div>
    <div  class="col s12 m4 l8">
        <ul class="collapsible popout" data-collapsible="accordion">
            <li class="active">
                <div id="div2" class="collapsible-header"><i class="material-icons">account_box</i>ProfilKu</div>
                <div class="collapsible-body">
                    <p class="black-text">
                        Nama: Wahyu Bagus Wicaksono <br>
                        Kelas: XIRPL4 <br>
                        Absen: 40
                    </p>
                </div>
            </li>
            <li>
                <div id="div2" class="collapsible-header"><i class="material-icons">priority_high</i>TentangKu</div>
                <div class="collapsible-body">
                    <p class="black-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero sed blanditiis illo omnis aliquid hic ad accusamus cum, nihil ex beatae, quos aliquam corrupti assumenda repellendus a! Minus, accusantium assumenda.
                    </p>
                </div>
            </li>
            <li>
                <div id="div2" class="collapsible-header"><i class="material-icons">location_on</i>TempatKu</div>
                <div class="collapsible-body">
                    <p class="black-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nam aliquam animi, esse officiis nulla maiores vel repellendus ea voluptatum modi debitis provident quas iusto dolore fugiat quibusdam fuga quisquam?
                    </p>
                </div>
            </li>
        </ul>
    </div>
    </div>
    </div>
    <script>
    $(document).ready(function(){
        $(".collapsible").collapsible();
    })
    $(document).ready(function(){
        $(".materialboxed").materialbox();
    })
    </script>
</body>
</html>