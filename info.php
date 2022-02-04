

<!DOCTYPE html>
<html>
<head>
	<title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
    <link rel="stylesheet" href="style1.css">  
</head>
<style>
p
{
font-size:150%;
}
h2
{
color:white;
font-size:200%;
}
</style>
<body>

	 <nav>
     
      <label class="logo"><img src="diabetes.png" height="50" width="50" style="vertical-align:middle"> Diacare</label>
      <ul>
       <li><a  href="red.php">Home</a></li>
        <li><a class="active" href="info.php">Diabetes</a></li>
        <li><a href="diatest.php">Diarisk test</a></li>
        <li><a href="diet.php">Diet plan</a></li>
        <li><a href="chart.php">Chart</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li>

        <li><a href="login.php">Log Out</a></li>
      </ul>
    </nav>


<h1>Welcome <?php 
session_start();
echo $_SESSION['user_name'];?></h1>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<br>
 <nav>
     
    
      <ul>
        
        <li><a href="info.php">DIABETES</a></li>
        <li><a href="info1.php">TYPE-1</a></li>
        <li><a href="info2.php">TYPE-2</a></li>
        <li><a href="info3.php">PRE-DIABETES</a></li>
       
       
      </ul>
    </nav>

<section>
<h2>What is Diabetes?</h2>
<br>
<p ><img src="img1.png" alt="img1" style="float:right;width:600px;height:300px;">
Diabetes is a condition that affects the way your body makes or uses insulin, a hormone that enables glucose(sugar) from your blood to enter your cells for energy. When sugar is unable to enter cells, it builds up in your bloodstream.Over time, high blood sugar levels can cause serious health problems affecting your heart, kidneys, nerves, and other organs, so it has to be managed properly.Diabetes is a disease that occurs when your blood glucose, also called blood sugar, is too high. Blood glucose is your main source of energy and comes from the food you eat.</p>
<br><br><br>
<p><img src="img2.jpg" alt="img2" style="float:left;width:600px;height:300px;">
 Insulin, a hormone made by the pancreas, helps glucose from food get into your cells to be used for energy. Sometimes your body doesn’t make enough—or any—insulin or doesn’t use insulin well. Glucose then stays in your blood and doesn’t reach your cells.

Over time, having too much glucose in your blood can cause health problems. Although diabetes has no cure, you can take steps to manage your diabetes and stay healthy.

Sometimes people call diabetes “a touch of sugar” or “borderline diabetes.” These terms suggest that someone doesn’t really have diabetes or has a less serious case, but every case of diabetes is serious.</p>


</section>
</body>
</html>
