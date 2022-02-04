
<!DOCTYPE html>
<html>
<head>
	<title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
    <link rel="stylesheet" href="style1.css">  
</head>

<body>

	 <nav>
     
      <label class="logo"><img src="diabetes.png" height="50" width="50" style="vertical-align:middle"> Diacare</label>
      <ul>
        <li><a class="active" href="red.php">Home</a></li>
        <li><a href="info.php">Diabetes</a></li>
        <li><a href="diatest.php">Diarisk test</a></li>
        <li><a href="diet.php">Diet plan</a></li>
        <li><a href="chart.php">Chart</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>

        <li><a href="login.php">Log Out</a></li>
      </ul>
    </nav>
<section>
<h1>Welcome <?php 
session_start();
echo $_SESSION['user_name'];?></h1>

</section>