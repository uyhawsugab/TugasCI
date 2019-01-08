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
            <a href="#" class="brand-logo center">Form</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?= base_url()?>index.php/route/dashboard"><i class="material-icons">arrow_back</i></a></li>
            </ul>
        </div>
</nav> 
<div class="container">
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>  
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">vpn_key</i>              
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>              
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      </div>
    </form>
  </div>    
</div>   
</body>
</html>