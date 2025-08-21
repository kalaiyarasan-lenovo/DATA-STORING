<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    echo 'connection error';
}
else{
    echo "<script>alert('Datebase Connected!')</script>";
}
if(isset( $_POST["submit"])){
    $username = $_POST["username"];
    $email_address = $_POST["email_address"];
    $password = $_POST["password"];
    $confirm_pass = $_POST["confirm_pass"];

    $sql ="INSERT INTO login_details(username,email_address,password,confirm_pass) VALUES('$username','$email_address','$password','$confirm_pass')";
     
    if($conn->query($sql)==true){
        echo 'INSERTED';
    }
    else{
        echo 'error';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Deatils</title>
    <link rel="stylesheet" href="login_style">
</head>
<body>
    <form action="data_stored.php" method="post">
        <div>
            <label for="username">username:</label>
            <input type="text" name="username" required>
        </div><br>
        <div>
            <label for="email_address">email address:</label>
            <input type="email" name="email_address" required>
        </div><br>
        <div>
            <label for="password">password:</label>
            <input type="password" name="password" required>
        </div><br>
        <div>
            <label for="c_password">confirm_pass</label>
            <input type="password" name="confirm_pass" required>
        </div><br>
        <div>
            <input type="submit" name="submit">
        </div>
    </form>
</body>
</html>
