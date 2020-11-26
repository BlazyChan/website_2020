<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forbidden page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
    <script type="text/javascript" src="/js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
<div class="jumbotron" style="margin-bottom: 0; ">
    <h1>Welcome to my website!</h1>
</div>

<div class="container col-12">
    <div class="my_content_title">
        <h>Error 403</h>
    </div>
</div>

<div class="container col-12">
    <div class="my_content">
        <h>Sorry, you don't have access to view this page!</h>
    </div>
</div>

<div class="container col-12">
    <div class="my_content">
        <h>Please go to one of my public pages instead:</h>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <span class="navbar-text mr-auto">Gundar's website</span>
    <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/index.html">News</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                    Content
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown_target">
                    <a class="dropdown-item" href="/videos.html">Videos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/screenshots.html">Screenshots</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
                    About
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown_target">
                    <a class="dropdown-item" href="/me.html">Me</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/my_channel.html">My Channel</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/my_dog.html">My Dog</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
<footer class="jumbotron" style="margin-bottom: 0; ">Made by Gundars Pelle D3-3</footer>
</body>
</html>