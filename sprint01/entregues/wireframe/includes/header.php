<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{ac} alexander castelló / code & design & plus</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- FONTS DE GOOGLE -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- ESTILS -->
    <link rel="stylesheet" href="./css/2/style2.css">

    <style>
        /* To prevent FOUC while is loading page, PART 1 */
        #wrap {
            display: none;
        }
    </style>

</head>

<body>
    <?php
    //$enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //echo $enlace_actual;

    //echo $_SERVER['REQUEST_URI']:
    ?>
    <div id="wrap">
        <header>
            <h1 id="logo"><a href="index.html" alt="home">{ac} alexander castelló / </a><span class="tag midcolor">Code
                    & Design
                    & Plus</span></h1>
            <div id="social">
                <a href="#"><i class="
                    fab fa-github"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i
                        class="fas fa-at"></i></a>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.html" class="selected">Home</a></li>
                <li><a href="how-to.html">How to</a></li>
                <li><a href="resources.html">Resources</a></li>
                <li><a href="snippets.html">Snippets</a></li>
                <li><a href="about-me.html">About me</a></li>
            </ul>
        </nav>
