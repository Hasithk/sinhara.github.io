
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>message</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body>
    <table class="table table-light">
        <tbody>
          
            <tr>
            <th>name</th>
            <th>telephone</th>
            <th>email</th>
            <th>message</th>
                
            </tr>
           
            <?php 
             $host="localhost";
             $dbusername="root";
             $dbpassword="";
             $dbname="web";
             $_conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
            if($_conn-> connect_error){
                die("connection faild".$_conn-> connect_error);
            }
            $sql ="SELECT `name`, `telephone`, `email`, `message` FROM `comment`";
            $result=$_conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo"<tr><td>".$row["telephone"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["message"]."</td></tr>";
                }
                echo"</table>";
            }
            $_conn-> close();
            ?>
        </tbody>
   
</body>
</html>