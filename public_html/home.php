<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Magic Wide Angle Lens</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Lab2CSS.css">
        <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="home.php">Magic Wide Angle Lens</a>
                <ul class="navbar-nav ml-auto">
                    <li class = "nav-item"><a class="nav-link" href="Index.php">Product</a></li>
                    <li class = "nav-item"><a class="nav-link" href="Lab1ContactUs.php">Contact</a></li>
                    <?php
                    session_start();
                        if(isset($_SESSION['user_table'])){
                            echo '<li class = "nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>';
                        }
                    ?>
                </ul>
        </nav>
        <img src="https://mk0new8thns8ww1hc3h8.kinstacdn.com/wp-content/uploads/2019/03/fusionlens2-1.png" alt="lens1" class="imagesetting">
        <form class="test">
            <div class="border">
            <div align="left"> 
            SHOOT LIKE A FILMMAKER
            <br>
            Ultimate filmmaker lens
            <br>
            Engineered for mobile photographers, Magic Lens is a dual-lens system for iPhone to capture ultra-wide field of view with cinematic style.
            <br>
            <br>
            + 23:9 anamorphic
            <br>
            + 8mm wide-angle
            <br>
            + 210° fisheye
            <br>
            + 360° shooting
            <br>
            <br>
            <button class="button" button type="button" class="btn btn-dark" onclick="window.location.href='index.php'"><span>Buy Now</span></button>
            </div>
        </form> 
    </body>
</html>
