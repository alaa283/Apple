<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost" , "root" , "" , "apple");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $skill=$_POST['skills'];
    $about=$_POST['about'];
     $stat=$con->prepare("INSERT INTO joinus (name,email,phone,location,skills,info) VALUES (?,?,?,?,?,?);");
          $stat->bind_param("ssssss",$name,$email,$phone,$location,$skill,$about);
          $stat->execute();
}
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>join us</title> 
<script>
function bigImg(x){
x.style.height="50px";
x.style.width="50px";
}
function normalImg(x){
x.style.height="";
x.style.width="";
}
  </script>

  </head>
  <body>
  
  <div id="container">
  
  
    <header ><!-- div id="header"-->
     <h1><img src="images/apple.png" style="width:30px"><span class="green-text">Apple</span> Developers</h1>
     <h2>Find A Developer<span class="white-text"> NOW</span></h2>
  </header> 
  
   <nav id="menu"> <!--div id="menu"-->
  <ul>
    <li class="menuitem"><a href="http://localhost/apple/index.php"><img src="images/home.png" style="margin-right:10px">Home</a></li>
    <li class="menuitem"><a href="http://localhost/apple/aboutus.php"><img src="images/about.png" style="margin-right:10px">About Us</a></li>
    <li class="menuitem"><a href="http://localhost/apple/browse.php"><img src="images/browse.png" style="margin-right:10px"> Browse Developer</a></li>
    <li class="menuitem"><a href="http://localhost/apple/contact.php"><img src="images/contact.png" style="margin-right:10px">Contact Us</a></li>
	<li class="menuitem"><a href="http://localhost/apple/joinus.php"><img src="images/join.png" style="margin-right:10px">Join Us</a></li>
  </ul>
  
 
	</nav> <!--nav end--> 
	<nav id="leftmenu"><!--div id="leftmenu"-->
	<h3>Notes for you!<img src="images/smile.png" style="padding-top:0px;margin-left:10px;width:20px;margin-bottom:0"></h3>
	<ul class="note" style="color:white;font-weight:bold">
	<li>if you have any experiences ,you should write it in your cv</li>
	<li>if you are good in your skill language,we will give extra Bonus</li>
	<li>wait our response about your request until we check the info of you well</li>
	</ul>
	
	 <section class="social" >
	  
     <h4 style="text-align:center">Follow US</h4>
	 
	 <p  style="text-align:center;">
	<a href="https://www.facebook.com" style="margin-left:15px;"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" 
	src="images/face.png"
	 width="40px" height="20px"></a>
	<a href="https://twitter.com/" style="margin-left:15px;"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" 
	   src="images/twitt.png" width="40px" height="20px" ></a>
	 <a href="https://www.gmail.com" style="margin-left:15px;"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)"
    	 src="images/gmail.png" width="40px" height="20px" ></a>
	 </p>
	 </section>
	</nav>
	
	 
	   <section class="form"><!--div id="content"-->
		<h3 style="font-weight:bold; font-size:35px">Join us..</h3>
			<p>you can use this form to start your freelance job with us </p>
			<form method="post" action="">
			<img class="float" src="images/join.jpg" alt="web developer directory" 
				<p>
					<label for="name">Full Name:</label>
					<input  type="text" name="name" required>
				</p>
				
				<p>
					<label for="email">Email Address: </label>
					<input type="email" name="email" required> <!--input type="text" name="email" -->
				</p>
				
				<p>
					<label for="phone">Phone Number: </label>
					<input  type="tel" name="phone" required>
				</p>
				
				<p>
				<label for="location">Location:</label>
                                <input    list="location" name="location">
				<datalist id="location">
				<option value="Cambridge"></option> <!-- متاح ف ال html5 اني اقفل التاج او لا-->
				<option value="Haverhill"></option>
				<option value="Medford"></option>
				</datalist>
				</p>
				
				<p>
					<label for="Checkbox">Skill language:</label>
                                        <input type="text" name="skills" required>
					
				</p>
				
				<p>
				<textarea style="width:60%; height:75px; border-radius:4px; border:2px solid #ccc; background-color:#f8f8f8"
                                          placeholder="Info about your self"  name="about"required></textarea>
				</p>
				
         
					<p>
					<input class="btnsign" type="submit" value="Sign Up" style ="width:75px; height:35px;font-weight:bold;
					text-align:center;float:right;cursor:pointer;border-radius:10px;border-color:#0f5f14" onclick="show_alert()" name="submit">
				     </p>
					 <p>
					<input class="btnsign" type="submit" value="Reset" style ="width:75px; height:35px;font-weight:bold;
					text-align:center;float:right;cursor:pointer;border-radius:10px;border-color:#0f5f14;margin-right:15px" onclick="myFunction()">
				     </p>
					 
					</form>
					<script>
					function myFunction(){
					document.getElementById("frm1").reset();
					}
					</script>
					
					
<script>
					function show_alert(){
					alert("Added successfully");
					}
					</script>

    
				</section>
				</div>
				</body>
				</html>
			
	   