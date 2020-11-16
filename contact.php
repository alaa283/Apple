<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost" , "root" , "" , "apple");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $dev_name=$_POST['dev_name'];
    $budget=$_POST['budget'];
      $date=$_POST['date'];
      $about=$_POST['about'];
     $stat=$con->prepare("INSERT INTO contact (name,email,phone,location,name_dev,money,deadline,about) VALUES (?,?,?,?,?,?,?,?);");
          $stat->bind_param("ssssssss",$name,$email,$phone,$location,$dev_name,$budget,$date,$about);
          $stat->execute();
          
      
    
}
?>
<html>
<head>

<title>Contac Us</title> 
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="javascript/text.js"></script>
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
	<h3>Categories</h3>
	<ul>
	  <li><a href="browse.html">SEO</a></li>
	  <li><a href="browse.html">PHP</a></li>
	  <li><a href="browse.html">Ajax</a></li>
	  <li><a href="browse.html">jquary</a></li>
	  <li><a href="browse.html">web design</a></li>
	  <li><a href="browse.html">web programming</a></li>
	  <li><a href="browse.html">Contact Creation</a></li>
	  <li><a href="browse.html">Internet Marketing</a></li>
	  <li><a href="browse.html">XHTML Templates</a></li>
	</ul>
	<section class="social" >
     <h4 style="text-align:center">Follow US</h4>
	 <p  style="text-align:center;">
	 <a href="www.facebook.com"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="images/face.png"
	 width="40px" height="20px"></a>
	<a href="https://twitter.com/" style="margin-left:15px;"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" 
	   src="images/twitt.png" width="40px" height="20px" ></a>
	 <a href="https://www.gmail.com" style="margin-left:15px;"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)"
    	 src="images/gmail.png" width="40px" height="20px" ></a>
	 </p>
	 </section>
	 </nav> <!--leftmenu end-->
	 
	 
	   <section><!--div id="content"-->
		<h3 style="font-weight:bold; font-size:35px">Contact Us..</h3>
			<p>Please use this form to contact a member of our website team</p>
			<form method="post" action="">
				<p>
					<label for="name">Full Name:</label>
					<input type="text" name="name" required>
				</p>
				<p>
					<label for="email">Email Address: </label>
					<input type="email" name="email" required> <!--input type="text" name="email" -->
				</p>
				<p>
					<label for="phone">Phone Number: </label>
					<input type="tel" name="phone" required><!--input type="text" name="phone"-->
				</p>
				<p>
					<label for="call">Best Time To Call: </label>
					<input type="radio" name="time" value="morning" checked>Morning
					<input type="radio" name="time" value="noon">Noon
					<input type="radio" name="time" value="evening">Evening
				</p>
				
				<p>
				<label for="location">Location:</label>
				<input list="location"  name="location"required>
				<datalist id="location">
				<option value="Cambridge"></option> <!-- متاح ف ال html5 اني اقفل التاج او لا-->
				<option value="Haverhill"></option>
				<option value="Medford"></option>
				</datalist>
				</p>
				
                 <fieldset>
				 <legend>About Your Project</legend>
				 
				<p>
				<label for="Developer name">Define Developer:</label>
                                <input list="Developer" required name="dev_name">
				<datalist id="Developer">
				<option value="David karp"></option> <!-- متاح ف ال html5 اني اقفل التاج او لا-->
				<option value="chris Brant"></option>
				<option value="Mark simonds"></option>
				<option value="Tommy Gooden"></option>
				<option value="Antonio Atacan"></option>
				
				</datalist>
				</p>
				<p>
					<label for="budget">Budget: </label>
					<input type="text" name="budget">
					
				</p>
				<p>	
						</tr>
					</table>
				</p>
				
				 <p>
				 <label for="date">Deadline:</label>
				 <input type="date" name="date">
				  </p>
				  <p>
				  <textarea style="width:60%; height:75px;border-radius:4px;border:2px solid #ccc;background-color:#f8f8f8" 
                                            placeholder="Describe your website you wanted" name="about" required></textarea>
				  
				   </p>
				  
				</fieldset>
				<p>
					<input class="send"type="submit" value="Send" style ="width:75px; height:35px;font-weight:bold;
                                               text-align:center;float:right;cursor:pointer;border-radius:10px;border-color:#0f5f14" name="submit" onclick="show_alert()">
				</p>
				
 
			</form>
                        <script>
					function show_alert(){
					alert("Call You Soon");
					}
					</script>
			
    </section><!--content end-->
	
</div><!--container end-->

</body>
</html>
