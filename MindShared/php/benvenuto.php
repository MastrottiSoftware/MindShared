<?php
session_start();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Homepage">
    <meta name="author" content="Izanagi">
    <title>MindShared</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap-theme.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="http://webdev.dibris.unige.it/~S4121569/MindShared/css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://webdev.dibris.unige.it/~S4121569/MindShared/css/social.css">


</head>

<body>


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html">MindShared</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" href="#">Come funziona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrazione.html">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container top">
        <!-- Control the column width, and how they should appear on different devices -->
        <div class="row">
            <div class="col-md-12">
                <h1>Benvenuto <?php echo $_SESSION["nome"]; ?></h1>
            </div>
        </div>
        <br>

    </div>

    <footer>
        <div class="container">
            <p>seguici anche su:</p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-pinterest"></a>
            <a href="#" class="fa fa-snapchat-ghost"></a>
            <a href="#" class="fa fa-skype"></a>
            <a href="#" class="fa fa-android"></a>
            <a href="#" class="fa fa-dribbble"></a>
            <a href="#" class="fa fa-vimeo"></a>
            <a href="#" class="fa fa-tumblr"></a>
            <a href="#" class="fa fa-vine"></a>
            <a href="#" class="fa fa-foursquare"></a>
            <a href="#" class="fa fa-stumbleupon"></a>
            <a href="#" class="fa fa-flickr"></a>
            <a href="#" class="fa fa-reddit"></a>
            <a href="#" class="fa fa-rss"></a>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
