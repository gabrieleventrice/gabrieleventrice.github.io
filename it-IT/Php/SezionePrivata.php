<?php

    $host = "localhost";
    $user = "id12166620_classe";
    $password = "r3iDVbNSupB%tOMl";
    $db = "id12166620_utenti";

    $conn = mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['username']))
    {
        $user = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from loginform where user='".$user."' AND Pass'".$password."' limit 1";

        $result=mysqli_query($conn,$sql);

        if(mysql_num_rows($result) == 1)
        {
            echo "You Have Successfully Logged in";
            exit();
        }
        else
        {
            echo "You Have Entered Incorrect Password";
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gabriele Ventrice - Portfolio</title>
    <!-- Bulma Version 0.8.x-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/showcase.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <script src="https://kit.fontawesome.com/2828f7885a.js"
        integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Begin Preloader -->
    <div class="preloader-wrapper">
        <div class="preloader">
            <img src="img/preloader.gif" alt="" />
        </div>
    </div>
    <!-- End Preloader-->
    <!-- Begin Scroll Up Button -->
    <form action="#home">
        <button id="toTop" title="Go to top">
            <i class="fas fa-angle-up"></i>
        </button>
    </form>
    <!-- End Scroll Up Button -->
    <!-- Begin Header -->
    <div class="header-wrapper" id="home">
        <!-- Begin Hero -->
        <section class="hero is-large">
            <!-- Begin Mobile Nav -->
            <nav class="navbar is-transparent is-hidden-desktop">
                <!-- Begin Burger Menu -->
                <div class="navbar-brand">
                    <div class="navbar-burger burger" data-target="mobile-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <!-- End Burger Menu -->
                <div id="mobile-nav" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a class="navbar-item" href="../index.html">
                                Home
                            </a>
                        </div>
                   
                    </div>
                </div>
            </nav>
            <!-- End Mobile Nav -->
            <!-- Begin Hero Content-->
            <div class="hero-body is-center">
                <div class="container has-text-centered">
                    <h2 class="title" style="color: black;">Gabriele Ventrice</h2>
                    <h1 class="subtitle profession" style="color: black;">STUDENTe - videogame programer</h1>
                </div>
                <div class="container has-text-centered ">
                    <a href="https://www.instagram.com/gabriele_ventrice_xfbri/?hl=it" class="Icon-link" style="text-decoration: none;"><i class="fab fa-instagram"
                        aria-hidden="true" style="font-size: 45px; color: black;"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100015845015278" class="Icon-link" style="text-decoration: none;"><i class="fab fa-facebook"
                        aria-hidden="true" style="font-size: 45px; color: black;"></i></a>
                <a href="https://twitter.com/XFBRI1M1/likes" class="Icon-link" style="text-decoration: none;"><i class="fab fa-twitter"
                        aria-hidden="true" style="font-size: 45px; color: black;"></i></a>
                <a href="https://www.linkedin.com/in/gabriele-ventrice-05a125186/" class="Icon-link" style="text-decoration: none;"><i class="fab fa-linkedin"
                        aria-hidden="true" style="font-size: 45px; color: black;"></i></a>
                <a href="" class="Icon-link" style="text-decoration: none;"><i class="fab fa-git" aria-hidden="true"
                        style="font-size: 45px; color: black;"></i></a>
                </div>
            </div>
            <!-- End Hero Content-->
            <!-- Begin Hero Menu -->
            <div class="hero-foot ">
                <div class="hero-foot--wrapper">
                    <div class="columns">
                        <div class="column is-12 hero-menu-desktop has-text-centered is-fixed-top">
                            <ul>
                                <li class="is-active">
                                    <a href="#home">Home</a>
                                </li>
                                <li>
                                    <a href="#about-me">About Me</a>
                                </li>
                                <li>
                                    <a href="#skills">Competenze</a>
                                </li>
                                <li>
                                    <a href="#my-work">Lavori</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Menu -->
        </section>
        <!-- End Hero -->
    </div>
    </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Login</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Please login to proceed.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="https://placehold.it/128x128">
                        </figure>
                            <form class="field" method = "$POST" action = "#">
                                        <div class="control form-input">
                                            <input class="input is-large"  placeholder="Username" autofocus="" name="username">
                                        </div>
                                    </div>
                                    
                                    <div class="field">
                                        <div class="control form-input">
                                            <input class="input is-large" type="password" placeholder="Your Password">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            Remember me
                                        </label>
                            <input class="button is-block is-info is-large is-fullwidth btn-login" type="submit" value="LOGIN">Login <i class="fa fa-sign-in" aria-hidden="true"></i></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script async type="text/javascript" src="../js/bulma.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/showcase.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script>
        AOS.init(
            {
                easing: "ease-out",
                duration: 800,
            });
    </script>
</body>