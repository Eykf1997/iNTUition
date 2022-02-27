<?php

if(isset($_POST['username'])&& isset($_POST['password'])){
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "iNTUition";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username,password FROM users WHERE username='$usernameInput' AND password ='$passwordInput'";
    $result = $conn->query($sql);
    $userToCheck;
    if ($result->num_rows > 0) {
        header("location:userDetailsForm.php");
    } else {
        echo "0 results";
    }

    $conn->close();
}else{
    header("location:loginPage.php");

}
?>


