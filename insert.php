<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','login');
    if($conn->connect_error){
        die('Connection failed: ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into register(username, email, password)values(?,?,?)");
        $stmt->bind_param("sss",$username,$email,$password);
        $stmt->execute();
        echo "Registration successful";
        $stmt->close();
        $conn->close();
    }
?>