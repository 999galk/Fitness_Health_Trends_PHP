<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>Fitness Videos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css\style_fitness_videos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

 
</head>
<body>
<header>
    <div class="container-fluid text-center">
        <div class="col">
            <div class="row bg"> 
  <h2>סרטוני כושר בשבילך</h2> 
</div>
<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-light text-right">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav toCenter">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.html">דף הבית<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="Tzuna.html">תזונה</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fitness.html">כושר</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
</div>
</header>

<main class="bgMain">
    <section>  
<div class="container-fluid text-center">
<form method="post" action="">
	<fieldset class="col-sm-4">
		<legend><b>משולב</b></legend>
		<p class="p_form"><input type="radio" name="activity" class="check" value="pilates">פילאטיס</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="trx">TRX\רצועות</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="functional">אימון פונקציונלי\HIIT</p>
	</fieldset>
	<fieldset id="aerobic" class="col-sm-4">
		<legend><b>אירובי:</b></legend>
		<p class="p_form"><input type="radio" name="activity" class="check" value="walk">צעידה</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="run">ריצה</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="spin">ספינינג</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="swim">שחיה</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="dance">ריקוד</p>	
		<p class="p_form"><input type="radio" name="activity" class="check" value="studio">אימון סטודיו אירובי</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="ski">סקי</p>
	</fieldset>
	<fieldset class="col-sm-4">
		<legend><b>אנאירובי</b></legend>
		<p class="p_form"><input type="radio" name="activity" class="check" value="lift">הרמת משקולות</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="yoga">יוגה</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="martial">אומנויות לחימה</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="fit">פיט-בול</p>	
		<p class="p_form"><input type="radio" name="activity" class="check" value="climb">קיר טיפוס</p>
		<p class="p_form"><input type="radio" name="activity" class="check" value="pole">ריקוד על עמוד</p>	
	</fieldset>
<br>
	<input class="btn" type="submit" value="Go!"><br>

</form>
</div>

<div class="container-fluid text-center">
    <div class="col-sm-6 videoCenter">
<?php

if ($_POST){ 
		$host="localhost";  
		$user="galkol_user";
		$pass="Aa123456";
		$db="galkol_Videos";
		
		if (empty($_POST['activity']))
			echo 'Activity is missing';
		else{
			$activity=$_POST['activity'];
		}
		
		$conn=new mysqli($host,$user,$pass,$db);
		if ($conn->connect_error){
    		die("Connection failed: ".$conn->connect_error);}
		
		
		$sql="select video_link from $db.video_items where activity_name='$activity'";
		$result=$conn->query($sql);
		if ($result->num_rows>0){
		    while($row=$result->fetch_assoc()){
		        echo "<iframe id=\"ytplayer\" width=\"420\" height=\"315\" src=".$row["video_link"]." frameborder=\"0\" allowfullscreen></iframe>";
		    }
		}
		}

?>
</div>
</div>
</section>
</main>
<footer class="container-fluid text-center">
	<div class="row">
	
	<div class="col-sm-4">
	טלפון: 08-8543115
	</div>
	<div class="col-sm-4">
	אימייל: support@gmail.com
	</div>
	<div class="col-sm-4">
	כתובת: חבר הלאומים 2, תל אביב יפו
	</div>
	</div>
	
</footer>

</body>
</html>