<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body>
<div class="col-lg-6 col-sm-10 mx-auto my-3">
<div class="card text-center">
                        <div class="card-header text-center primery-color text-uppercase">
                            <h1>Admin Login</h1>
                        </div>
    <form method="POST" action="connection.php">
    <div class="input-group my-3">
                                    <span class="input-group-text">
                                        <i class="fa fa-user " aria-hidden="true"></i>
                                    </span>
                                    <input type="text" name="username" class="form-control form-control-lg " placeholder="Enter Your username here">
                                </div>
        
        <div class="input-group my-3">
                                    <span class="input-group-text">
                                        <i class="fa fa-user " aria-hidden="true"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control form-control-lg " placeholder="Enter Your password here">
                                </div>
       

<p>        <input type="submit" value="login" class="btn btn-block btn-lg btn-outline-light secondary-color text-uppercase">               </p>
    </form>
</div>
</body>
</html>