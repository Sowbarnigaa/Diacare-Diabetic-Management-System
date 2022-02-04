<!DOCTYPE html>
<html>
<head>
	<title>Diacare</title>
    <link rel="icon" href="diabetes.png" type="image/x-icon" >
    <link rel="stylesheet" href="style1.css">  
</head>
<style>
body				{ font: 15px comic sans ms; }

#page-wrap		    { width: 500px; margin: 0 auto; }
.bg
{
width: 700px; margin: 0 auto;height:2000;
background: url(img10.jpg) no-repeat;
  background-size: cover;

  height: calc(150vh - 200px);
}


h1                  { margin: 20px 0; font: 25px comic sans ms ; text-transform: uppercase; }

#quiz input {
    vertical-align: middle;
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
#quiz ol {
   margin: 0 0 10px 20px;
}

#quiz ol li {
   margin: 0 0 20px 0;
}

#quiz ol li div {
   padding: 4px 0;
}

#quiz h3 {
   font-size: 17px; margin: 0 0 1px 0; color:crimson;font-family:comic sans ms;
}

#results {
    font: 44px Georgia, Serif;
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

		<center><h1><b>Diarisk test</b></h1></center>
		
		<form action="diatestresult.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>Are you a male or female?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Male</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Female</label>
                    </div>
                     
                </li>
                
                <li>
                
                    <h3>How old are you?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) age<25</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) age between 25 and 45</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) age between 45 and 65</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) age>65</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Do you perform physical activity daily atleast for 30 minutes?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Yes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) No</label>
                    </div>
                    
                    
                
                </li>
                
                <li>
                
                    <h3>How often do you eat vegetables or fruits?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Everyday</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Every alternate days</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Weekly once</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Rarely</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Do you have high blood pressure?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Yes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) No</label>
                    </div>               
                </li>
            
<li>
                    <h3>Do any of your blood relatives have diabetes?</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) Father</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Mother</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) Brother/Sister</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) None</label>
                    </div>
                
                </li>
                
                
                
            </ol>
            
            <center><input type="submit" value="Submit" class=button /></center>
		
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