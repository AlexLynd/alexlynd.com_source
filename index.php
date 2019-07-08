<!doctype html>

<!--
    ___    __             __                    __                           
   /   |  / /__  _  __   / /   __  ______  ____/ /       _________  ____ ___ 
  / /| | / / _ \| |/_/  / /   / / / / __ \/ __  /       / ___/ __ \/ __ `__ \
 / ___ |/ /  __/>  <   / /___/ /_/ / / / / /_/ /  _    / /__/ /_/ / / / / / /
/_/  |_/_/\___/_/|_|  /_____/\__, /_/ /_/\__,_/  (_)   \___/\____/_/ /_/ /_/ 
                            /____/                                           
feel free to snoop! | GitHub @alexlynd | Instagram @alex_lynd | Twitter @alexlynd
-->

<html lang= "en-US">
	<head>
		<title>Alex Lynd | Hacks, Fire and Electronics</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
		<meta charset="utf-8">
		<meta name="description" content="Haxx and spooky stuff">
  		<meta name="keywords"    content="Alex Lynd, blog, electronics, programming, hacking, diy, tutorials">
  		<meta name="author"      content="Alex Lynd">
		<meta name="viewport"    content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type= "text/css" href="css/style.css">
		<link rel="stylesheet" type= "text/css" href="css/menu.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> 
		<script src="js/typed.js" type="text/javascript"></script>
	</head>
	<body>
		<script> 
			document.addEventListener('DOMContentLoaded',function() { 
				var typed= new Typed('.typed', {
					strings: ['<b>Alex Lynd&nbsp;</b>'],
					typeSpeed: 50,
					loop: false
				});
			});
		</script>
		<div id="particles-js"></div>
		<script src="js/particles.js"></script>
		<script src="js/particles-main.js"></script>
		<div class= "text">
			<?php include "menu.html";?>
			<main id="home">
				<div class="centered">
					<div class="title" style="font-size: 7vw"><span class="typed" style="white-space:pre;"></span></div>
					<p class= "float-fade-in">Welcome to my website! This is my personal page where you can find my project documentation, portfolio, story, and other resources/tutorials on a variety of things including programming, hacking and more. This site is programmed and maintained by me, and you can view the source <a href="https://github.com/alexlynd/website">here</a>.  Click the icons below to head to my social media, or one of the links in the menu to check out my stuff!</p>
					<div class="iconwrap">
						<a href="https://github.com/alexlynd" target="_blank"><i class="fab fa-github-alt"></i></a>
						<a href="https://youtube.com/c/AlexLynd" target="_blank"><i class="fab fa-youtube"></i></a>
						<a href= "https://instagram.com/alex_lynd" target="_blank"><i class="fab fa-instagram"></i></a>
						<a href= "https://twitter.com/alexlynd" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://patreon.com/alexlynd" target="_blank"><i class="fab fa-patreon"></i></a>
					</div>
				</div>
		</main>
		<div class="block" id="light">
		<div class="description" id="home">
				<h1>About Me</h1>
				<p>I'm Alex Lynd, a 16 year old maker/hacker from California. </p>
			</div>
			<div class="image" id="home">
				<img src="img/profile.png" >
			</div>
		</div>
		<div class="block" id="dark">
		<div class="image" id="home">
				<img src="img/fire.jpg">
			</div>
			<div class="description" id="home">
				<h1>My Work</h1>
				<p>I'm Alex, and I like to set stuff on fire.  And hack.  This is some sample text so I can test some fancy divs and see if my page is working.</p>
			</div>
		</div>
		</div>
	</body>
</html>
