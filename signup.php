<?php
    $username = $_POST["username"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $user = "root";
    $pass = "";
    $dbname = "quiz";
    $servername = "localhost";
    $query1 = "SELECT * FROM student WHERE username='$username'";
    $query2 = "INSERT INTO student VALUES ('$username','$password','$name','$email',$phone)";
    $query3 = "CREATE DATABASE checkdb";


    $conn = mysqli_connect($servername,$user,$pass,$dbname); 
    if(!$conn){
        die("Connection Failed.".$conn->connect_error);
    }
    else{
        
        if(mysqli_query($conn,$query1)){
            echo "<script>alert('This username is already registered.');
            window.location = 'login.php';
            </script>";
        }
        else{
            if(mysqli_query($conn,$query2)){
                echo "signed in successfully.";
            }
            else{
                echo "<script>alert('There is some error.');
                window.location = 'login.php';
                </script>";
            }
        }
    }
?>