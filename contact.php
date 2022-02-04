<?php 
session_start();

	include("connection.php");
	include("functions.php");

$a="";
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
$subject = $_POST['subject'];



$country = $_POST['country'];
	if(!empty($firstname) && !empty($lastname) && !empty($country) && !empty($subject) )
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into contact (user_id,firstname,lastname,subject,country) values ('$user_id','$firstname','$lastname','$subject','$country')";

			mysqli_query($con, $query);

			header("Location: success.html");
			die;
		}else
		{
			$a= "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
    <link rel="stylesheet" href="style1.css">  
<script>
function myfunc()
{
window.open("success.html");
</script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: grey;
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
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: lightblue;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
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
        <li><a class="active" href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>

        <li><a href="login.php">Log Out</a></li>
      </ul>
    </nav>


<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Leave us a message</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="contact.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
<option value="india">India</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <center><input type="submit" name="submit" value="SUBMIT" style="height: 45px; width: 250px; font-size: 25px; color: white; background-color: gray"></center>
      </form>
    </div>
  </div>
</div>
<center><?php echo $a ?></center>
</body>
</html>
