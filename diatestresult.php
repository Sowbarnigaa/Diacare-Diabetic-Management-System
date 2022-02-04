<!DOCTYPE html>
<html>
<head>
	<title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
    <link rel="stylesheet" href="style1.css">  
 <script src=
    "https://smtpjs.com/v3/smtp.js">
  </script>
  
  <script type="text/javascript">
    function sendEmail(x) {
      Email.send({
        Host: "smtp.gmail.com",
        Username: "trendytechs2021@gmail.com",
        Password: "sss@2021",
        To: x,
        From: "trendytechs2021@gmail.com",
        Subject: "Diarisk test result",
        Body: y,
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }
  </script>
</head>
<style>
.bg
{

background: url(img10.jpg) no-repeat;
  background-size: cover;

  height: calc(150vh - 200px);
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
</style>
<body>

	 <nav>
     
      <label class="logo"><img src="diabetes.png" height="50" width="50" style="vertical-align:middle"> Diacare</label>
      <ul>
        <li><a  href="red.php">Home</a></li>
        <li><a href="info.php">Diabetes</a></li>
        <li><a class="active" href="diatest.php">Diarisk test</a></li>
        <li><a href="diet.php">Diet plan</a></li>
        <li><a href="chart.php">Chart</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>

        <li><a href="login.php">Log Out</a></li>
      </ul>
    </nav>


<div class=bg>	

		<center><h1>Diarisk Test Result</h1></center>
		<br><br><br><br><br><br>
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect=$totalCorrect+5; }
            if ($answer1 == "B") { $totalCorrect=$totalCorrect+2; }
            if ($answer2 == "A") { $totalCorrect++; }
if ($answer2 == "B") { $totalCorrect=$totalCorrect+5; }
if ($answer2 == "C") { $totalCorrect=$totalCorrect+10; }
if ($answer2 == "D") { $totalCorrect=$totalCorrect+15; }
            if ($answer3 == "A") { $totalCorrect=$totalCorrect+5; }
            if ($answer3 == "B") {$totalCorrect=$totalCorrect+10;}
            if ($answer4 == "A") { $totalCorrect++; }
if ($answer4 == "B") { $totalCorrect=$totalCorrect+5; }
if ($answer4 == "C") { $totalCorrect=$totalCorrect+10; }
if ($answer4 == "D") { $totalCorrect=$totalCorrect+15; }
 if ($answer5 == "A") { $totalCorrect=$totalCorrect+5; }
if ($answer5 == "B") {$totalCorrect=$totalCorrect+10;}   
  if ($answer6 == "A") {  $totalCorrect=$totalCorrect+10; }
if ($answer6 == "B") { $totalCorrect=$totalCorrect+10; }
if ($answer6 == "C") { $totalCorrect=$totalCorrect+10; }
if ($answer6 == "D") { $totalCorrect=$totalCorrect+1; }
                     
            echo "<div id='results'><h1><font color=blue><center>Your score is $totalCorrect</h1></font></center><br></div>";
            if($totalCorrect<35) { echo "<div id='results'><h1><font color=red><center>Low risk</h1></font></center></div>";}
 if($totalCorrect>=35) { echo "<div id='results'><h1><font color=red><center>High risk</h1></font></center></div>";}
        ?>
	
	
<?php
session_start();

?>
<br><br><br>
<script type="text/javascript">
        var x = "<?php echo $_SESSION['email']?>";
       var y = "<?php echo"$totalCorrect"?>";
    </script>
  <form method="post">
   <center> <input type="button" value="Send Email" class=button
        onclick="sendEmail(x)" /></center>
  </form>
	</div>
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>