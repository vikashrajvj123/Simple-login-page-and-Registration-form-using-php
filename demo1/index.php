<?php

require_once "config.php";
if(isset($_POST['login'])){

  $username = $_POST['username'];
  $pwd      = $_POST['password'];



/*  $link->query("INSERT INTO login (username, password) VALUES ('$username', '$pwd')");*/


$selectdata = $link->query("SELECT * FROM login where username = '$username' AND password = '$pwd'");



$selectrow  = mysqli_num_rows($selectdata);



if($selectrow > 0){

header("location: demo2/index.php");


}
else{
    echo '<script language="javascript">';
echo 'alert("Invalid userdata")';
echo '</script>';
  

}










}





?>


<!DOCTYPE html>

<html>
<head>
	<title>DEMO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
     <section class="fst">
     	<div class="nav">
  <div class="nav-header">
    <div class="nav-title">
      VIKASH
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="//github.io/jo_geek" target="_blank">Github</a>
    <a href="http://stackoverflow.com/users/4084003/" target="_blank">Stackoverflow</a>
    <a href="https://in.linkedin.com/in/jonesvinothjoseph" target="_blank">LinkedIn</a>
    <a href="https://codepen.io/jo_Geek/" target="_blank">Codepen</a>
    <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">JsFiddle</a>
  </div>
</div>
     </section>
     <div class ="center">
     <h1>Login</h1>
     <form action="" method="post" >
     	<div class="txt_field">
     			<label>Username</label>
     		<input type="text" name = "username"  class="form-control" required>
     	
        </div>
        <div class="txt_field">
        		<label>Password</label>
     		<input type="password"  name="password" class="form-control" required>
     	
        </div>
        <div class="pass"><a href="#">Forgot Password?</a></div>
        <div class="submit-btn">
          <button type="submit" name="login" >login</button>
       <!-- <a href="demo2/index.php"> login</a> -->
    </div>
        <div class="signup_link">
        	Not a member?<a href="#">Signup</a>
        </div>	
      </form>
      </div>  




	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(".nav-btn label").click(function(){
  // alert("The paragraph was clicked.");
  $(".nav-links").addClass("dis-block");
    $(".nav-links").toggle("dis-block");

  $(".nav-links").removeClass("dis-block1");
});
	</script>
</body>	
</html>