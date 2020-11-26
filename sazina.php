<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
<div class="jumbotron" style="margin-bottom: 0; ">
    <h1>Welcome to my website!</h1>
</div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <span class="navbar-text mr-auto">Gundar's website</span>
    <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">

    <ul class="navbar-nav ml-auto">

<li class="nav-item">
    <a class="nav-link" href="login">Pieslēgties</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="register">Reģistrēties</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="sazina">Saziņa</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="index">News</a>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
        Content
        <span class="caret"></span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdown_target">
        <a class="dropdown-item" href="videos">Videos</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="screenshots">Screenshots</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
        About
        <span class="caret"></span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdown_target">
        <a class="dropdown-item" href="me">Me</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="my_channel">My Channel</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="my_dog">My Dog</a>
    </div>
</li>



</ul>

    </div>
</nav>

<div class="container col-12">
    <div class="my_content_title">
        <h>Saziņa.</h>
    </div>
    <div class="my_send_a_message">
        
        <form action="sazina" methoD="post">
        <div class="form-group">
          <label for="name">Vārds:</label>
          <input type="text" class="form-control" placeholder="Ievadiet savu vārdu" id="name" name="name">
         </div>
         <div class="email">
          <label for="email">E-pasts:</label>
          <input type="email" class="form-control" placeholder="Ievadiet savu e-pastu" id="email" name="email">
         </div>
         <div class="form-group">
            <label for="message">Ziņa/Jautājums:</label>
           <textarea class="form-control" placeholder="Ievadiet savu ziņu/jautājumu" id="message" name="message" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-dark" name="submit">Nosūtīt</button>
        </form>

    </div>

</div>
<div class="my_content">
    <h>Ziņas/Jautājumi:</h>
</div>
<?php
    if(isset($_POST['submit'])){
        echo "<div class='my_content'>";
        echo "<b>Vārds:</b>{$_POST['name']}<br/>";
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Ziņa/Jautājums:</b>{$_POST['message']}<br/>";
        echo "</div>";
    }
?>

<footer class="jumbotron" style="margin-bottom: 0; ">Made by Gundars Pelle D3-3</footer>
</body>
</html>