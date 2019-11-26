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
        <div class="border">
            <div class="form1">
            <form action="/action_page.php" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <script src="http://code.jquery.com/jquery-1.5.js"></script>
                    <label for="word">Message:</label>
                    <textarea class="form-control" cols="100" rows="5" id="word" maxlength="150" onkeyup="countChar(this)" placeholder="Enter your message" name="word" required></textarea>
                    <div id="charNum"></div>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-dark" onclick="window.location.href='home.php'"><span>Cancel</span></button>
            </form>
            <script>
            // Disable form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
  
            function countChar(val) {
                var len = val.value.length;
                if (len >= 150) {
                val.value = val.value.substring(0, 150);
                } else {
                $('#charNum').text(150 - len + " characters left.");
                }
            };
            
            </script>
            
        </div>
    </body>
</html>
