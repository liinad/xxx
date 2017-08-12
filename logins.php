<?php
//dear beejee --------> i need a work 
  //setcookie("adminos_login", "md5($_POST[login_name]");
  //setcookie("adminos_password", 'md5($_POST["login_pass"]');
  $login = md5($_POST["login_name"]);
  $pass = md5($_POST["login_pass"]);
  if ( $login == "21232f297a57a5a743894a0e4a801fc3") {
    if ( $pass == "202cb962ac59075b964b07152d234b70") {
      setcookie("editor","try");
      echo "<center>"."WELLCOME ADMIN"."</br>";
      //code
      
      //echo $_COOKIE["adminos_login"];
      //header( "refresh:0;url=admin_panel.php" );
      echo "<a href='admin_panel.php'>"."edit"."</a>";
    } else {
      setcookie("editor","try1");
      echo "<center>"."bad pass";
    }
  } else {
    setcookie("editor","try2");
    echo "<center>"."bad login";
  }
?>



<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://bootstrap-3.ru/assets/ico/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</head>
    <title>LOgins</title>

    <!-- Bootstrap core CSS -->
    <link href="Signin%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Signin%20Template%20for%20Bootstrap_files/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
<label class="checkbox">
      <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading" align="center">LOGIN</h2>
        <input class="form-control" placeholder="name " required="" autofocus=""  name="login_name" type="name">
        <input class="form-control" placeholder="Password" required=""  name="login_pass" type="password">
        
          
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</label>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
</body></html>