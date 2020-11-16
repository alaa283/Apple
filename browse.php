<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Browse</title>
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
	<h2>Browse Developers</h2>
		<h3 class="green-background">Choose Developer</h3>
                
			
                <pre style="font-weight: bold; font-size: 18px; align:bottom;" >   Name            city          Skills
                    </pre>
               
                <?php
		   
        // put your code here
        $con=new mysqli("localhost","root","","apple");
        $stat=$con->prepare("SELECT * FROM joinus");
        $stat->execute();
        $result=$stat->get_result();
      
        while ($row =$result->fetch_assoc())//make it array 
         {
            
    
         echo'<table class="dev-table">';
	 
	   echo "<tr><td><a href='https://www.creativebloq.com/features/10-famous-web-designer-portfolios-everyone-should-check-out'>".$row['name']."</a></td><td>".$row['location']."</td><td>".$row['skills']."</td></tr>";     
        }
       
		
		echo'</table class="dev-table">';
	   ?>
<!--<table class="dev-table">
		<thead>
			<tr>
			<th>Name</th>
			<th>City</th>
			<th>Skills</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><a href="profile.html">David karp</a></td>
			<td>Cambridge</td>
			<td>html5, css, php</td>
		</tr>
		<tr>
			<td><a href="profile.html">chris Brant</a></td>
			<td>Fall River</td>
			<td>html5, css</td>
		</tr>
		<tr>
			<td><a href="profile.html">Mark simonds</a></td>
			<td>Amesbury</td>
			<td>html5, ror, php, asp</td>
		</tr>
		<tr>
			<td><a href="profile.html">Tommy Gooden</a></td>
			<td>Haverhill</td>
			<td>Photoshop, html, css</td>
		</tr>
		<tr>
			<td><a href="profile.html">Antonio Atacan</a></td>
			<td>Medford</td>
			<td>html5, Photoshop, css</td>
		</tr>
		<tr>
				<td><a href="profile.html">Dan Webb</a></td>
				<td>Exeter</td>
				<td>html5, css, php</td>
			</tr>
			<tr>
				<td><a href="profile.html">Amine Haroun</a></td>
				<td>Manchester</td>
				<td>html5, css</td>
			</tr>
			<tr>
				<td><a href="profile.html">Will Moffat</a></td>
				<td>Nashua</td>
				<td>html5, ror, php, asp</td>
			</tr>
			<tr>
				<td><a href="profile.html">Reh Jones</a></td>
				<td>Concord</td>
				<td>Photoshop, html, css</td>
			</tr>
			<tr>
				<td><a href="profile.html">Joel limberg</a></td>
				<td>South Hampton</td>
				<td>html5, Photoshop, css</td>
			</tr>
		</tbody>
	</table>-->
	
	
    </section><!--content end-->
	
</div><!--container end-->
 
</body>
</html>
