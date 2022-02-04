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

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from signup where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_name'] = $user_data['user_name'];
$_SESSION['email'] = $user_data['email'];

						header("Location: http://localhost/ResponsiveNavbar/red.php");
						die;
					}
				}
			}
			
			$a= "wrong username or password!";
		}else
		{
			$a= "wrong username or password!";
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
</script>

</head>
<body>


<br><br>
  <center>
    <div style="background-color: #4CAF50; height: 80px; width: 100%; align-items: center; color: white "><h1>Login</h1>
</div>
  <br><br>
<hr class="colorgraph">
  <form action="" method="post">
    <table cellspacing="25">
      <col width="80%">
      <tr>
        <td>
  <label for="id"><span>User Name</span></label>
          <input type="text" name="user_name" class="question" id="user_name" required autocomplete="off" />
        
        </td>
      </tr>
      <tr>
        <td>
  <label for="password"><span>Password</span></label>
          <input type="password" name="password" class="question" id="password" required autocomplete="off" />
       
        </td>
      </tr>

      <tr>
        <td><a style="color: blue" onmouseover="this.style.color = 'red'" onmouseleave="this.style.color = 'blue'" href="register.php">New User?</a></td>
      </tr>
    </table>
 <center><?php echo $a?></center><br><br>
    <hr class="colorgraph">
    <br>
    <input type="submit" name="submit" value="Login" style="height: 45px; width: 200px; font-size: 25px; color: white; background-color: #4CAF50">
  </form>
  </center>
  
</body>
</html>
