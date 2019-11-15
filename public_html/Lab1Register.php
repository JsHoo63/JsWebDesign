<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$yourEmail = $_POST['yourEmail'];
$yourAddress = $_POST['yourAddress'];
$yourPhone = $_POST['yourPhone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if(!empty($firstName) || !empty($lastName) || !empty($userName) || !empty($yourEmail) || !empty($yourAddress) || !empty($yourPhone) || !empty($password)|| !empty($confirm_password)) {
    
        $host ="localhost";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbname = "magic_lens";
        //create connection
        $conn=new mysqli($host,$dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
             
            $SELECT = "SELECT user_email From user_table where user_email = ? Limit 1";
            $INSERT = "INSERT INTO user_table(user_firstName,user_lastName,user_name,user_email,user_address,user_phone,user_password) values (?,?,?,?,?,?,?)";
            //Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$yourEmail);
            $stmt->execute();
            $stmt->bind_result($yourEmail);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum == 0){
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                
                $stmt->bind_param("sssssis",$firstName,$lastName,$userName,$yourEmail,$yourAddress,$yourPhone,$password);
                
                $stmt->execute();
                
                echo "New record inserted successfully";
            } else{
                $error_message =  "Someone already register using this email";
            }
            
            $stmt->close();
            $conn->close();
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="home.html">Magic Wide Angle Lens</a>
                <ul class="navbar-nav ml-auto">
                    <li class = "nav-item"><a class="nav-link" href="Index.html">Product</a></li>
                    <li class = "nav-item"><a class="nav-link" href="Lab1ContactUs.html">Contact</a></li>
                </ul>
        </nav>
        
        
        <div class="border">
        <div class="form1">
            <form action="#" class="needs-validation" method="post" novalidate>
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" name="firstName" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" name="lastName" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="lname">User Name:</label>
                    <input type="text" class="form-control" id="userName" placeholder="Enter User Name" name="userName" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="mail">Email:</label>
                    <input type="email" class="form-control" id="yourEmail" placeholder="Enter Email" name="yourEmail" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="yourAddress" placeholder="Enter Address" name="yourAddress" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No:</label>
                    <input type="number" class="form-control" id="yourPhone" maxlength="10" placeholder="Enter Phone No" name="yourPhone" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="cpwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required>
                    <span id='message'></span>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <?php if(isset($error_message)){
            echo '<h1>' .$error_message. '</h1>';
        } ?>
                <button type="submit" id="submit" class="btn btn-dark" disabled>Submit</button>
                <button type="button" class="btn btn-dark" onclick="window.location.href='/Lab1Login.php'"><span>Cancel</span></button>
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
            
            $('#password, #confirm_password').on('keyup', function () {
                
                if ($('#password').val() == $('#confirm_password').val()) {
                    if ($('#password').val() =='' || $('#confirm_password').val() == ''){
                        $('#message').html('Please Enter Password').css('color', 'red');
                        $('#submit').attr('disabled',true);
                    }
                    else{
                        $('#message').html('Password Matching').css('color', 'green');
                        $('#submit').attr('disabled',false);
                    }
                }else {
                    $('#message').html('Password Not Matching').css('color', 'red');
                    $('#submit').attr('disabled',true);
                }
            });
            
            </script>
            
        </div>
        
    </body>
</html>
