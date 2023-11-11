<?php
$name=filter_input(INPUT_POST,'name');
$telephone=filter_input(INPUT_POST,'telephone');
$email=filter_input(INPUT_POST,'email');
$message=filter_input(INPUT_POST,'message');


        //required to fill  



       

                     //database connection
                            $host="localhost";
                            $dbusername="root";
                            $dbpassword="";
                            $dbname="web";
                            $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
                            if (mysqli_connect_error()){
                            die('connect Error('.mysqli_connect_error().')'.mysqli_connect_error());

                                } else{
                                    //database query
                                        $sql ="INSERT INTO comment (name,telephone,email,message) VALUES ('$name','$telephone','$email','$message')";
                                        // if any errors in data base 
                                            if($conn->query($sql)){
                                                header('location: index.html');
                                                        }else{
                                                                echo "Error: ".$sql ."<br>".$conn->error;
                                                                    }
                                                                        $conn->close();
                                                                }  
                               // if not fill the required fields error massage
                            
  
?>