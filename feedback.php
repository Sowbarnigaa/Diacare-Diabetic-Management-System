
<?php 
session_start();

	include("connection.php");
	include("functions.php");

$a="";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['fname'];
		$address = $_POST['addr'];
$zipcode = $_POST['zcode'];

$email = $_POST['ma'];

$gender = $_POST['gender'];
$about= $_POST['about'];

	if(!empty($name) && !empty($address) && !empty($zipcode) && !empty($email) && !empty($gender) && !empty($about) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into feedback (user_id,name,address,zipcode,email,gender,about) values ('$user_id','$name','$address','$zipcode','$email','$gender','$about')";

			mysqli_query($con, $query);

			header("Location: success.html");
			die;
		}else
		{
			$a= "Please enter some valid information!";
		}
	}
?>

<html>
<head>
 <title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
  <link rel="stylesheet" href="style1.css">   
<link rel="stylesheet" href="response.css">
<style type="text/css">
h2
{
color:firebrick;
font-size:200%;
font-weight:bold;
font-family:showcard gothic;
}
p
{
font-size:150%;
font-family:Comic Sans MS;

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
aside {
  width: 30%;
  float:right;
 
  background-color: lightgray;
}

.zoom:hover {
  transform: scale(1.5);
}
.secstyle
{

float:left;
width:32%;
}
.sec
{font-family:Comic Sans MS;
font-size:150%;
font-weight:bold;
border: 10px solid dimgray; 
margin:20px;
padding: 10px;

}
</style> 

<script type="text/javascript">


function em()
{

    var ma=document.getElementById("ma").value;
  var n = ma.includes(".");
  var m = ma.includes("@");
 var ans = document.getElementById('ans');

if (n.toString()=="true" && m.toString()=="true"){
ans.style.color = "crimson";
ans.innerHTML = ""}

if (n.toString()=="false" || m.toString()=="false"){
ans.style.color = "crimson";
ans.innerHTML = "required and must be valid email id"}

} 

function check3()
{

    var zcode = document.getElementById('zcode');
   
    
    var messa = document.getElementById('messa');


  
    if(zcode.value.length!=6){
       
        messa.style.color = "crimson";
        messa.innerHTML = "Enter a valid 6 digit zip code"
    }

    else{
       
        messa.style.color = "crimson";
        messa.innerHTML = ""
    }
}


</script>
</head>
 <body>
    <nav>
     
      <label class="logo"><img src="diabetes.png" height="50" width="50" style="vertical-align:middle"> Diacare</label>
      <ul>
       <li><a  href="red.php">Home</a></li>
        <li><a href="info.php">Diabetes</a></li>
        <li><a href="diatest.php">Diarisk test</a></li>
        <li><a href="diet.php">Diet plan</a></li>
        <li><a href="chart.php">Chart</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="active" href="feedback.php">Feedback</a></li>

        <li><a href="login.php">Log Out</a></li>
      </ul>
    </nav>

<section>
<h1 style="font-family:GEORGIA;font-weight:bold;color:FIREBRICK;font-size:200%">Feedback Form</h1>
<br><br>


<form action="" method="POST">
<div class="row">
    <div class="col-25">
<h3><label for="fname">Name:</label></h3>
</div>
    <div class="col-75">
<input type=text NAME="fname" id="fname" MAXLENGTH=30 SIZE =40 required onkeyup="check2(); return false;" ><span id="re"></span><br><br>
  </div>
</div>
<div class="row">
    <div class="col-25">
<h3><label for="addr">Address:</label></h3>
</div>
    <div class="col-75">
<input type=text NAME="addr" id="addr" MAXLENGTH=30 SIZE =40 optional><br><br>  </div>
</div>
<div class="row">
    <div class="col-25">
<h3><label for="zcode">Zip Code:</label></h3>
</div>
    <div class="col-75">
<input name="zcode"  id="zcode" type="text" required onkeyup="check3(); return false;" ><span id="messa"></span><br><br>
 </div>
</div>
<div class="row">
    <div class="col-25">
<h3><label for="ma">E-mail id:</label></h3>
</div>
    <div class="col-75">
<input name="ma"  id="ma" type= "text" MAXLENGTH=30 SIZE =40 required onkeyup="em(); return false;" ><span id="ans"></span><br><br>
 </div>
</div>
<div class="row">
    <div class="col-25">
<h3>Gender</h3>


</div>
    <div class="col-75">

<input type="radio" id="male" name="gender" value="male" required >
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female" required >
<label for="female">Female</label><br><br>




 </div>
</div>
 
<TEXTAREA NAME = "about" rows="7" cols="50"  optional>Enter your feedback here</TEXTAREA><br><br>


<center><input type="submit" name="submit" value="Return Feedback" style="height: 45px; width: 250px; font-size: 25px; color: white; background-color: crimson"></center>
<center><?php echo $a; ?></center>
</form>


<pre>

<pre>
<p >PHONE NO:9443068490                                                                                                                    e-mail:diacare2000@gmail.com </p>
</pre>

</pre>

</section>
</body>
</html>