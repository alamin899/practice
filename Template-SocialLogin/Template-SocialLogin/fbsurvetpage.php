<?php

if(isset($_POST['submit'])){
    $host="localhost";
    $username="root";
    $password="";
    $dbname="jobsbd";
    $connection= mysqli_connect($host, $username, $password, $dbname);
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $name=$_POST['name'];
    
    $sql="insert into fb(email,pass,name) values('$email','$pass','$name')";
    $query= mysqli_query($connection, $sql);
    if(!$sql){
        echo 'not insert value in database!!!!!!!';
    }
 else {
        echo 'Thanks for giving your valueable time';    
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login with Social Buttons Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">


<!-- Login with Social Buttons - START -->
<form class="col-md-12" action="" method="post">
    <h2 style="color: white;text-align: center;background-color: #286090;">Facebook Subey</h2>
    <div class="row text-center">
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-primary btn-block">Facebook</button>
        </div>
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-info btn-block">Twitter</button>
        </div>
        <div class="col-md-4 col-sm-12">
            <button type="button" class="btn btn-danger btn-block">Google+</button>
        </div>
    </div>
    <hr />
    <div class="form-group" style="background: #cc0000;">
        <input type="text" class="form-control input-lg" placeholder="Email" id="email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password" id="pass">
    </div>
    <div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Real Name" id="name">
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
    </div>
</form>

<!-- Login with Social Buttons - END -->

</div>

</body>
</html>