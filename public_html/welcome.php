<?php
  
?>
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
        <div class="test" align="right">
        <h1 style="font-size:2vw">Product include shipping fee to worldwide.</h1>
        <p>This fisheye lens able to capture wider and nicer photo through your smartphone with just a clip on lens.</p>
        <table class="table table-dark table-bordered table-hover">
            <br>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price (RM)</th>
                    <th>Add To Cart</th>
                </tr>
            </thead>
            <tr>
                <th>FishEye lens (2 in 1)</th>
                <th>Wide angle and Micro lens</th> 
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>299.00</th>
                <th><input type="checkbox" id="confirmation1" value="tick"></th>
            </tr>
            
            <tr>
                <th>FishEye lens</th>
                <th>Wide angle lens only</th> 
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>169.00</th>
                <th><input type="checkbox" id="confirmation2" value="tick"></th>
            </tr>
            
            <tr>
                <th>Micro lens</th>
                <th>Micro lens only</th> 
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>149.00</th>
                <th><input type="checkbox" id="confirmation3" value="tick"></th>
            </tr>
            
            <tr>
                <th>Tripod</th>
                <th>Universal tripod</th>
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>89.00</th>
                <th><input type="checkbox" id="confirmation4" value="tick"></th>
            </tr>
            
            <tr>
                <th>Smart Mount</th>
                <th>Not included lens</th>
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>69.00</th>
                <th><input type="checkbox" id="confirmation5" value="tick"></th>
            </tr>
            
            <tr>
                <th>iPhone 11 Pro Max Case</th>
                <th>Rubber transparent</th>
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>49.00</th>
                <th><input type="checkbox" id="confirmation6" value="tick"></th>
            </tr>
            
            <tr>
                <th>iPhone 11 Pro Case</th>
                <th>Rubber transparent</th>
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>45.00</th>
                <th><input type="checkbox" id="confirmation7" value="tick"></th>
            </tr>
            
            <tr>
                <th>iPhone 11 Case</th>
                <th>Rubber transparent</th>
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>42.00</th>
                <th><input type="checkbox" id="confirmation8" value="tick"></th>
            </tr>
            
            <tr>
                <th>iPhone X Case</th>
                <th>Rubber transparent</th>
                <th><select name="list">
                    <option value="one">1</option>
                    <option value="two">2</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    </select></th>
                <th>40.00</th>
                <th><input type="checkbox" id="confirmation9" name="confirm" value="tick"></th>
            </tr>
            <?php
                
            ?>
        </table>
           
        <button class="button" style="vertical-align:middle" button onclick="uncheck()"><span>Clear</span></button>
        <button class="button" button type="submit" style="vertical-align:middle" onclick="window.location.href='payment.php'"><span>Check Out</span></button>
   </body>
   
   <script>
       function uncheck() {
            document.getElementById("confirmation1").checked = false;
            document.getElementById("confirmation2").checked = false;
            document.getElementById("confirmation3").checked = false;
            document.getElementById("confirmation4").checked = false;
            document.getElementById("confirmation5").checked = false;
            document.getElementById("confirmation6").checked = false;
            document.getElementById("confirmation7").checked = false;
            document.getElementById("confirmation8").checked = false;
            document.getElementById("confirmation9").checked = false;
        }
        
        function checkForm(table)
        {
            if(!table.confirm.checked) {
            alert("Please tick before check out.");
            table.confirm.focus();
            return false;
            }
            return true;
        }
        
   </script>
   
   
   
</html>