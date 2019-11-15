<?php

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$userName = $_POST['user_name'];
$yourEmail = $_POST['your_email'];
$yourAddress = $_POST['your_address'];
$yourPhone = $_POST['your_phone'];
$password = $_POST['your_password'];
$confirm_password = $_POST['your_confirmpass'];

if(!empty($firstName) || !empty($lastName) || !empty($userName) || !empty($yourEmail) || !empty($yourAddress) || !empty($yourPhone) || !empty($password)|| !empty($confirm_password)) {
    
    $host ="localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "MagicLens";
        //create connection
        $conn=new mysqli($host,$dbUsername, $dbPassword, $dbname);
        if(mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From register Where email = ? Limit 1";
            $INSERT = "INSERT Into register (firstName, lastName, userName, yourEmail, yourAddress, yourPhone, password, confirm_password) values(?,?,?,?,?,?)";
            //Prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s",$email);
            $stmt->execute();
            $stmt->bind_result($email);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum==0){
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssii", $firstName, $lastName, $userName, $yourEmail, $yourAddress, $yourPhone, $password, $confirm_password);
                $stmt->execute();
                echo "New record inserted successfully";
            }
            else{
                echo "Someone already register using this email";
            }
            
            $stmt->close();
            $conn->close();
        }
}else {
    echo "All field are required";
    die();    

    
}
?>