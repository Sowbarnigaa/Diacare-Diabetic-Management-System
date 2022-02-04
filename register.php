<?php 
session_start();

	include("connection.php");
	include("functions.php");

$a="";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
$email = $_POST['email'];

$cpassword = $_POST['password_confirmation'];

$phone = $_POST['phone'];
$city= $_POST['city'];
$state = $_POST['state'];

$country = $_POST['country'];
	if(!empty($user_name) && !empty($password) && !empty($cpassword) && !empty($email) && !empty($phone) && !empty($city) && !empty($state) && !empty($country))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into signup (user_id,user_name,password,cpassword,email,phone,city,state,country) values ('$user_id','$user_name','$password','$cpassword','$email','$phone','$city','$state','$country')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			$a= "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head> <title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
    <link rel="stylesheet" href="style1.css">    

<link rel="stylesheet" href="response.css">


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function validate1() {


    var m=document.getElementById("email").value;
  var a1 = m.includes(".");
  var a2 = m.includes("@");

if (a1.toString()=="true" && a2.toString()=="true"){

document.getElementById("msg1").innerHTML = ""}

if (a1.toString()=="false" || a2.toString()=="false"){

document.getElementById("msg1").innerHTML = "Enter a valid email id"}

}
function validate2() {
var v= document.getElementById("password").value;
 if(v.length<5){
       
        document.getElementById("msg2").innerHTML= "Enter a valid password with more than 5 digits";
    }
      else{
        document.getElementById("msg2").innerHTML = "";
      }
    }
function validate3() {
      var v1 = document.getElementById("password").value;
      var v2 = document.getElementById("password_confirmation").value;
 if(v1 != v2) {
        document.getElementById("msg3").innerHTML = "Password do not match";
      }
      else {
        document.getElementById("msg3").innerHTML = "";
      }
    }
</script>
</head>
<body>


<br><br>
  <center>
    <div style="background-color: #4CAF50; height: 80px; width: 100%; align-items: center; color: white "><h1>New User Registration</h1>
</div>
  <br><br>
  <hr class="colorgraph">
  <form action="" method="POST">
    <table cellspacing="20">
      <col width="400">
      <tr>
        <td>
 <div class="row">
    <div class="col-25">
 <label for="user_name"><span>Name*</span></label>
</div>
    <div class="col-75">
          <input type="text" name="user_name" class="question" id="user_name" required autocomplete="off" />
            </div>
</div>
        </td>
        
      </tr>
      <tr>
        <td colspan="2">
 <div class="row">
    <div class="col-25">
 <label for="email"><span>Email Address*</span></label>
</div>
    <div class="col-75">
          <input type="text" name="email"  oninput="validate1()" class="question" id="email" required autocomplete="off" />
          <div style="color: red;" id="msg1"></div>
        </td>
      </tr>
      <tr>
        <td>
 <div class="row">
    <div class="col-25">
<label for="password"><span>Password*</span></label>
</div>
    <div class="col-75">
          <input type="password" name="password"   oninput="validate2()" class="question" id="password" required autocomplete="off" />
 <div style="color: red;" id="msg2"></div>
</td>
      </tr>
      <tr>
        <td colspan="2">
 <div class="row">
    <div class="col-25">
    <label for="password_confirmation"><span>Confirm Password*</span></label>
</div>
    <div class="col-75">
          <input type="password" name="password_confirmation" oninput="validate3()" class="question" id="password_confirmation" required autocomplete="off" />
      
          <div style="color: red;" id="msg3"></div>
        </td>
      </tr>
<tr>
        <td>
 <div class="row">
    <div class="col-25">
  <label for="phone"><span>Mobile Number*</span></label>
</div>
    <div class="col-75">
          <input type="text" name="phone" class="question" id="phone" required autocomplete="off" />
        
        </td>

  <tr>
        <td>
 <div class="row">
    <div class="col-25">
<label for="city"><span>City*</span></label>
</div>
    <div class="col-75">
          <input type="text" name="city" class="question" id="city" required autocomplete="off" />
          
        </td>
</tr>
<tr>
        <td>
 <div class="row">
    <div class="col-25">
<label for="state"><span>State*</span></label>
</div>
    <div class="col-75">
          <input type="text" name="state" class="question" id="state" required autocomplete="off" />
          
        </td></tr>
<tr>
        <td>
 <div class="row">
    <div class="col-25">
<label for="country"><span>Country*</span></label>
</div>
    <div class="col-75">
          <input type="text" name="country" class="question" id="country" required autocomplete="off" />
          
        </td></tr>
      </tr>
      <tr>
        <td><a style="color: blue" onmouseover="this.style.color = 'red'" onmouseleave="this.style.color = 'blue'" href="login.php">Already A User?</a></td>
      </tr>
    </table>
    <hr class="colorgraph">
    <br>
   <input type="submit" name="submit" value="Sign Up" style="height: 45px; width: 250px; font-size: 25px; color: white; background-color: green;">
  </form>
  </center>

?>
</body>
</html>
