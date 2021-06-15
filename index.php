<? 

//defining a config constant
define('__CONFIG__',true);

//require config file
require_once "inc/config.php";


?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
<div class="login-box">
<p> Welcome Todays date is:- <b><?= date('y-m-d')?></b></p>
<div class="row">
<div class="col-6">
<a href="login.php">
<button class="btn btn-primary">Login</button>
</a>
</div>
<div class="col-6">
<a href="register.php">
<button class="btn btn-primary">Register</button>
</a>
</div>
</div>
</div>
<?php require_once "inc/footer.php"?>
</body>

</html>