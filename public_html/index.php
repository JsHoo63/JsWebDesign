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
                    <li class = "nav-item"><a class="nav-link" href="index.php">Product</a></li>
                    <li class = "nav-item"><a class="nav-link" href="Lab1ContactUs.php">Contact</a></li>
                    <?php
                    session_start();
                        if(isset($_SESSION['user_table'])){
                            echo '<li class = "nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>';
                        }
                    ?>
                </ul>
        </nav>
        
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
  
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://www.tokkoro.com/picsup/2952585-artwork-fisheye-lens-photography-panoramic-sphere___abstract-wallpapers.jpg" alt="lens1" class="imagesetting">
                </div>
                <div class="carousel-item">
                <img src="https://s3.amazonaws.com/files.shopmoment.com/general/shot-on-moment/@nilesgrey/thumbnail-anamorphic-niles-grey.jpg?mtime=20180606104757" alt="lens2" class="imagesetting">
                </div>
                <div class="carousel-item">
                <img src="https://free4kwallpapers.com/uploads/originals/2015/10/20/fish-eye-panoramic-photography-wallpaper.jpg" alt="lens3" class="imagesetting">
                </div>
            </div>
  
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="border">
        <div class="test" align="right">
        <h1 style="font-size:2vw">Product include shipping fee to worldwide.</h1>
        <p>This fisheye lens able to capture wider and nicer photo through your smarthphone with just a clip on lens.</p>
        <table class="table table-dark table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Price (RM)</th>
                </tr>
            </thead>
         
            <tr>
                <th>FishEye lens (2 in 1)</th>
                <th>Wide angle and Micro lens</th> 
                <th>299.00</th>
            </tr>
            
            <tr>
                <th>FishEye lens</th>
                <th>Wide angle lens only</th> 
                <th>169.00</th>
            </tr>
            
            <tr>
                <th>Micro lens</th>
                <th>Micro lens only</th> 
                <th>149.00</th>
            </tr>
            
            <tr>
                <th>Tripod</th>
                <th>Universal tripod</th>
                <th>89.00</th>
            </tr>
            
            <tr>
                <th>Smart Mount</th>
                <th>Not included lens</th>
                <th>69.00</th>
            </tr>
            
            <tr>
                <th>iPhone 11 Pro Max Case</th>
                <th>Rubber transparent</th>
                <th>49.00</th>
            </tr>
            
            <tr>
                <th>iPhone 11 Pro Case</th>
                <th>Rubber transparent</th>
                <th>45.00</th>
            </tr>
            
            <tr>
                <th>iPhone 11 Case</th>
                <th>Rubber transparent</th>
                <th>42.00</th>
            </tr>
            
            <tr>
                <th>iPhone X Case</th>
                <th>Rubber transparent</th>
                <th>40.00</th>
            </tr>
        </table>
        <br>
       
        
        
        <button class="button" style="vertical-align:middle" onclick="window.location.href='<?php if(isset($_SESSION['user_table'])){echo "welcome.php";}else{echo "Lab1Login.php";}?>';"><span>Proceed</span></button>
       
        
       
        </div>
    </body>
</html>
