<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $user = "root";
    $pass = "";
    $dbname = "quiz";
    $servername = "localhost";
    $query1 = "SELECT * FROM student WHERE username='$username'";

    $conn = mysqli_connect($servername,$user,$pass,$dbname); 
    if(!$conn){
        die("Connection Failed.".$conn->connect_error);
    }
    else{
        $result1 = mysqli_query($conn,$query1);
        if(mysqli_num_rows($result1)>0){
            $ans_array = mysqli_fetch_assoc($result1);
            if($ans_array['password']==$password){
                echo "Welcome".$username;
            }else{
                echo "<script>alert('The password is wrong.');
                window.location = 'login.php';
                </script>";
            }
        }
        else{
            echo "<script>alert('You will need to sign in first.');
            window.location = 'login.php';
            </script>";
        }
    }
?>