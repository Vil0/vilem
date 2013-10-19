<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vilem Hujnak</title>
	<meta name="author" content="Vilém Hujňák">
	<meta name="keywords" content="web, design, developement, developer, designer, Vilém Hujňák, Vil">
	<meta name="description" content="This is Vilem's personal and professional website. He's a web developer, designer with taste and loves Apple stuff. He's a passionate guitar player with weakness for IT and computers. He believes he can change the world, but can he?">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<!--[if lt IE 9]>
	<script scr="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>		<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>       <!-- jQuery UI -->
	<script src="./js/script.js"></script>
	<script> /* google analitycs script */
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41981230-1', 'hujnak.cz');
  ga('send', 'pageview');
 </script>
</head>

<body>

	<header>
		<h2><?php 
			 $header = "welcome to my website";
			 $headerForBio= "just enough you need to know about me";
			 $headerForWeb= "i'll design a website for you";
			
			$page = $_GET["page"];	
				if ($page == "bio"){
					echo $headerForBio;
				} elseif ($page == "webdesign") {
					echo $headerForWeb;
				} else {
					echo $header;
				}
			?>
		</h2>
			<div id="socials">
			<ul>
				<li><a class="soc" href="https://www.facebook.com/vilcek.hujnak" target="_blank"><img src="img/icons/facebook.png" alt="Facebook"/></a></li>
				<li><a class="soc" href="http://instagram.com/vil_0" target="_blank"><img src="img/icons/instagram.png" alt="Instagram"/></a></li>
				<li><a class="soc" href="http://www.linkedin.com/pub/vilem-hujnak/53/556/221" target="_blank"><img src="img/icons/linkedin.png" alt="LinkedIn"/></a></li>
				<li><a class="soc" href="https://plus.google.com/u/0/101851313341356352926/posts" target="_blank"><img src="img/icons/google.png" alt="Google+"/></a></li>
				<li><a class="soc" href="https://twitter.com/vil_0" target="_blank"><img src="img/icons/twitter.png" alt="Twitter"/></a></li>					
				<li><a class="soc" href="http://www.youtube.com/user/Vilcekcovers?feature=guide" target="_blank"><img src="img/icons/youtube.png" alt="Youtube"/></a></li>
			</ul>
		</div>
		<nav><ul>
				<li><a class="active" href="index.php">home</a></li>
				<li><a href="index.php?page=bio">bio</a></li>
				<li><a href="index.php?page=webdesign">hire me</a></li>
			</ul>
		</nav>
	
	</header>
	
					<div class="clear"></div>
	
<?php   
$page = $_GET["page"];
		    if($page == "bio") {
		    	include ("bio.php"); 
		    } elseif($page == "webdesign") {
		    	include ("webdesign.php");
		    } else {
		    	include ("home.php");
		    }
?>				

<div id="footer">
		 <p>Copyright © 2013 Vilem Hujnak.<br> All rights reserved.</p>
		 </div>
 
</body>

</html>