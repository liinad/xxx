<?php
	$username = $_POST["name"];
	$user_email = $_POST["email"];
	$user_text = $_POST["text"];



	//echo $username;
	//echo $user_email;
	//echo $user_text;
	//mysql connect and connect to db_name->"work"



  	if ( isset($_POST["send_button"])) {

	$connect = mysql_connect("localhost", "root") or die(mysql_error());
  	mysql_select_db("work");
  		
//echo "1";
//redirect ????????????????????????????? love beejee 	
  		if ( $_POST["name"] == true ) {
  			if ( $_POST["email"] == true ){
  				if ( $_POST["text"] == true ) {
  					$result = mysql_query("INSERT INTO beejee(name, email, text, status) 
  					VALUES ('$username', '$user_email', '$user_text', 'not done')");
  					mysql_close();
    				header( "refresh:0;url=index.php" );
  				} else {
  					echo "enter text";
  					header( "refresh:0;url=form.php" );
  				}
  			} else {
  				echo "enter email";
  				header( "refresh:0;url=form.php" );
  			}
  		} else {
  			echo "enter name";
  			header( "refresh:0;url=form.php" );
  		}
  	mysql_close();
    }
    

?>




<html>
<head>
	<title>FORM</title>

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
<body>
<!-- 
	<center>
	<form method="post">
		<label> enter name </label>
			<input type="text" name="name" > </input>

				<br><br>

		<label> enter email </label>
			<input type="text" name="email" > </input>

				<br><br>

		<label> enter text </label>
			<textarea type="textarea" rows="10" cols="20" name="text" > </textarea>

				<br><br>

			<input type="submit" value="send" name="send_button"></input>



	</form>
	</center> -->


	<div class="container">
<label class="checkbox">
      <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading" align="center">ADD WORK</h2>
        <input class="form-control" placeholder="enter name" required="" autofocus=""  name="name" type="name">
        <input class="form-control" placeholder="enter email" required=""  name="email" type="email">
        <input class="form-control" placeholder="enter text" required="" autofocus=""  name="text" type="text">
                
          
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="send_button" >send</button>
      </form>
</label>
    </div> <!-- /container -->
</body>
</html>