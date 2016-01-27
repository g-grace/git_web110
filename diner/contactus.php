<!doctype html>
<html>
<head>
    <title>Happy Diner by Grace</title>
        <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link href="css/diner.css" type="text/css" rel="stylesheet" />
    <link href="css/nav.css" type="text/css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>    
</head>
    
<body>
  <header>
    <h1>Seattle's Happy Diner</h1>

<!-- HOOK to CSS nav -->
     <nav id="cssmenu">
    <ul>
        <li><a href="index.html">Home Plate</a></li>
        <li><a href="menu.html">Diner Menu</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="map.html">Map</a></li>
        <li class="active"><a href="contactus.php">Contact Us</a></li>
    </ul>
   </nav>
 </header>
    
 <section>
      <h2>Contact Us</h2>
	  
	<?php
		include 'includes/contact-simple.php';
	?>
    
</section>

 <aside>
  <h3>Our Address</h3>   
    <p>lorem ipsum and maybe an image will go here</p>
 </aside>

    <footer>
   <small>
   &copy; 2015, All Rights Reserved ~ Authored by Grace San...~ 
   <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~  
   <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
   </small>
</footer>
    
</body>
</html>