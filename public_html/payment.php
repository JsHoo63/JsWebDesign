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
                    <li class = "nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
                </ul>
        </nav>
            <div class="border">
            <div class="form1">
            <form action="#" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name" name="fullName" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="billingaddress">Billing Address:</label>
                    <input type="text" class="form-control" id="billAddress" placeholder="Enter Billing Address" name="billingAddress" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No:</label>
                    <input type="number" class="form-control" id="yourPhone" maxlength="10" placeholder="Enter Phone No" name="yourPhone" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="cardNum">Credit Card Number:</label>
                    <input type="number" class="form-control" id="cardNum" placeholder="Enter Card Number" name="cardNum" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="cardDetails">Month/Year: </label>
                    <input type="number" class="form-control" id="cardDetails" placeholder="Enter Month/Year of your card" name="cardDetails" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <div class="form-group">
                    <label for="cardCiv">Credit Card Civ:</label>
                    <input type="number" class="form-control" id="cardCiv" placeholder="Enter card's civ" name="cardCiv" required>
                    <div class="invalid-feedback">Please fill up this field.</div>
                </div>
                <button class="button" button type="button" class="btn btn-dark" style="vertical-align:middle" onclick="window.location.href='welcome.php'"><span>Back</span></button>
                <button class="button" button type="submit" id="button" style="vertical-align:middle" onclick="window.location.href='thankYou.php'"><span>Proceed</span></button>
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
    </body>      
</html>
            