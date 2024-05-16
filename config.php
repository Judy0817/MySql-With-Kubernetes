<?php

    // $host = "mysql";
    // $user = "root";
    // $pass = "password";
    // $db = "mysql_minikube";
 
    // $conn = new mysqli($host, $user, $pass, $db);

    // if(!$conn){
    //     print("Not connectd.<br>".mysql_error());
    // }else{
    //     echo("Connected!");
    // }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $servername = "mysql";
    $username = "root";
    $password = "password";
    $database = "mysql_minikube";

 
    $conn = new mysqli($servername, $username, $password, $database);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user (name, phone) VALUES ('$name', '$phone')";

    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    if(!$conn){
        print("Not connected!");
    }else{
        echo("Connected..");
    }


    // $conn->close();
} else {
    header("Location: index.html");
    exit();
}
?>