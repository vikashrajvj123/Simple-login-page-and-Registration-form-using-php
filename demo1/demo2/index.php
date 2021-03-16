
<?php
require_once "../config.php";
if(isset($_POST['submit'])){

  $first_name = $_POST['firstname'];
  $last_name  = $_POST['lastname'];
  $country    = $_POST['country'];
  $subject    = $_POST['subject'];
  $datetime   = date( 'Y-m-d h:i:s');

$link->query("INSERT INTO form (first_name, last_name,country,subject,date_time,form_active) VALUES ('$first_name', '$last_name','$country','$subject','$datetime','1')");
// echo "INSERT INTO form (first_name, last_name,country,subject,date_time,form_active) VALUES ('$first_name', '$last_name','$country','$subject','$datetime','1')";
// exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DEMO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
 
</style>
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
<section class="snd">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			  <div class="img1">
			  	<img src="ff.jpg" class="i2">
				 </div>
				</div>
			  <div class="col-md-8">
			  <div class="head">
			  	<h1>Hi there!</h1>
			    <p>Fuelled by a passion for designing compelling products, I have a deep desire to excel and continuously improve in my work. Learn more about my journey below.</p>
			  </div>
			</div>
		</div>
	</div>

			</section>
  <section class="thd">
    <div class="container">
    <h2>Responsive Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>


  <form action="index.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" required placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" required placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">India</option>
          <option value="canada">Canada</option> 
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" required placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>
  </section>    
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