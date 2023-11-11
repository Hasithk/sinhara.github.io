<?php

$user=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,"password");





    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="web";
    $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
    if (mysqli_connect_error()){
    die('connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

        } else{
            //database query

            $sql = "SELECT * FROM users WHERE username='$user' AND password='$password'";
            if($conn->query($sql)){
            $results = mysqli_query($conn, $sql);
            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location:messages.php');
              }else {
                echo "Wrong username/password combination" ;
              }
              
               
            }else{
                    echo "Error: ".$sql ."<br>".$conn->error;
                        }
                            $conn->close();
                    } 
?>