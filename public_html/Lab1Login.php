<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
   include("Config.php");
   if(!$db){
       die("Connection failed: ". mysqli_connect_error());
   }
   session_start();

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $userName = mysqli_real_escape_string($db,$_POST['userName']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
       
      $sql = "SELECT user_id FROM user_table WHERE user_name = '$userName' and user_password = '$password'";
      
      $result = mysqli_query($db,$sql);
    
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count != 0) {
         $_SESSION['user_table'] = $userName;
         $error_message = "Login successfully";
         header("Location: welcome.php");
         
      }else {
         $error_message = "Your Login Name or Password is invalid";
      }
      
      if(isset($_SESSION['user_table'])) {
          
      }
   }
?>

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
                </ul>
        </nav>
        
            <div class="border">
            <div class="form1">
            <form action="#" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="userName" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <p><a href="Lab1Register.php">Don't have an account? Register here</a></p>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-dark" onclick="window.location.href='index.php'"><span>Cancel</span></button>
                    <p><?php echo $error_message;?></p>
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
            
            
            </script>
            </div>
        </form>
    </body>
</html>
