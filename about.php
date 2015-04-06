<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="img/ss.jpg">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/component.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>Satya - About Me</title>
</head>
<body>
	<header class="cd-header">
		<div class="cd-logo"><a href="index.php"><h1 class="logo">SS</h1></a></div>

		<a class="cd-primary-nav-trigger" href="#0">
			<span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
		</a> <!-- cd-primary-nav-trigger -->
	</header>

	<nav>
		<ul class="cd-primary-nav">
			<li class="cd-label">Who?</li>

			<li><a href="about.php">About Me</a></li>

			<li class="cd-label">What?</li>

			<li><a href="blog.php">See my Projects</a></li>
			<li><a href="http://www.github.com/lprajus2007" target="_blank">My GitHub</a></li>

			<li class="cd-label">WHERE?</li>

			<li><a href="index.php#bottom">Contact Me</a></li>

			<li class="cd-label">Follow ME</li>
			
			<li class="cd-social cd-facebook"><a href="http://www.fb.com/sslpraju" target="_blank">Facebook</a></li>
			<li class="cd-social cd-instagram"><a href="http://www.instagram.com/lprajus2007" target="_blank">Instagram</a></li>
			<li class="cd-social cd-dribbble"><a href="http://www.linkedin.com/in/satyalak" target="_blank">LinkedIn</a></li>
			<li class="cd-social cd-twitter"><a href="http://www.twitter.com/lprajus2007" target="_blank">Twitter</a></li>
		</ul>
	</nav>

	<section class="cd-intro-about">
    	<div class="main-text" align="center" style="top:50%"><h1>Free Spirited. Learner.</h1></div>
		<h1><a href="#more"><img src="http://cdn.onnoschwanen.com/images/ui/arrow-down.svg"/></a></h1>
	</section>

	<main class="cd-main-content-about">
		<article>
        	<div id="more" class="cd-container" align="center">
			<label for="read_more" onclick=""><span>View CV</span><span>Hide CV</span></label>
            <input type="checkbox" id="read_more" role="button">
            <p> Well, you wanted to know more about me. Alright. I'm a seeker of knowledge and happiness. My love for computers and software that started when I was a kid keeps me running to learn more. I code for mobile, destop and web applications but I'm inclined towards web and mobile app development. There is a long way to go and for me, playing with computers is the right way to go. This is not all I do. I also sketch portraits and like pencil sketches. I'm a foodie and love to travel. I recently started experimenting on writing science fiction. Have a look at my sci-fi article on my blog <a href="blog.html#scifi1">here</a>. 
            </p>
            <section>
            	<image src="img/SatyaSampathirao.jpg" alt="CV" width=90% align="center">
            </section>
			</div>
        </article>

	  <!-- Section 5 (Footer) -->
		
		<div class="footer">
			<div class="footer-content">
					<div class="footer-clmn1">© 2015 <a href="http://www.satyalak.com/about.html">Satya Sampathirao</a></div>
					<div class="footer-clmn2">Email: <a href="mailto:satyalak@buffalo.edu">satyalak@buffalo.edu</a></div>
			</div>
		</div>
		
	</main>
    <a href="#" class="back-to-top" style="display:inline" ><img src="img/cd-top-arrow.svg"</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>
<!-- Script for smooth scrolling -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
</body>
</html>