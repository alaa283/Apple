<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Home</title> 
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
	<a href="https://www.facebook.com" style="margin-left:15px;"><img  onmouseover="bigImg(this)" onmouseout="normalImg(this)" 
	src="images/face.png"
	 width="40px" height="20px"></a>
	<a href="https://twitter.com/" style="margin-left:15px;"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" 
	   src="images/twitt.png" width="40px" height="20px" ></a>
	 <a href="https://www.gmail.com" style="margin-left:15px;"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)"
    	 src="images/gmail.png" width="40px" height="20px" ></a>
	 </p>
	 </section>
	 </nav> <!--leftmenu end-->
	
	 
	
	
	 
	 
	   <section><!--div id="content"-->
	  <h2>Welcome to our website Apple Developers</h2>
	  <img class="float" src="images/web.jpg" alt="web developer directory">
	  <h3>Who Are we?</h3>
	  <p>We are a fictional website and service that list top web developers around the world. Search and browse fictional web developers on our
	  website absolutley FREE!</p>
	  <h3>What Skills Do Our Developer Have ? </h3>
	  <p>Our listed fictional web developers skill ranges from Graphic design with Photoshop, Illustrator and Fireworks to markup languages like 
	  HTML5, XHTML and XML to programming languages such as Javascript, PHP, Python and ASP</p>
	   </section> <!-- section end-->
	   
	   <section>  <!--div id="content"-->
	  <h2>Latest Developers</h2>
	  
	  <div class="developer">
	  <h4>Joel limberg</h4>
	    <ul>
	  <li><strong>Location:</strong>Bosten USA</li>
	  <li><strong>Skills:</strong>HTML,CSS,PHP,ROR</li>
	  <li><strong>Availabilty:</strong>Full-Time </li>
	    </ul>
	  <a href="#">view profile</a>
	  </div> <!-- developer end-->
	  
	   <div class="developer">
	  <h4>Reh Jones</h4> 
	    <ul>
	  <li><strong>Location:</strong>Bosten USA</li>
	  <li><strong>Skills:</strong>HTML,CSS,PHP,ROR</li>
	  <li><strong>Availabilty:</strong>Full-Time</li>
	     </ul>
	   <a href="#">View Profile</a>
	    </div> <!-- developer end-->
		
		<div class="developer">
	   <h4>Will Moffat</h4>
	    <ul>
	  <li><strong>Location:</strong>Bosten USA</li>
	  <li><strong>Skills:</strong>HTML,CSS,PHP,ROR</li>
	  <li><strong>Availabilty:</strong>Full-Time</li>
	   </ul>
	   <a href="#">View Profile</a>
	   </div> <!-- developer end-->
	   
	   <div class="developer">
	  <h4>Amine Haroun</h4>
	  <ul>
	  <li><strong>Location:</strong>Bosten USA</li>
	  <li><strong>Skills:</strong>HTML,CSS,PHP,ROR</li>
	  <li><strong>Availabilty:</strong>Full-Time</li>
	   </ul>
	   <a href="#">View Profile</a>
	   </div> <!--developer end-->
	   
	   </section> <!-- section2 end-->
	   </div> <!--container end-->
	   <div style="clear:both"></div>
	   <footer>
	  <p style="font-weight:bold; font-size:17px;"><marquee direction="left">welcome to our website for top web developers around the world with different skills, 
	  you can read more details about us ,browse about current developers,contact us to make any website you want or you can else join to our website team  </marquee>
	    </footer></p>
    </body>

  </html>
