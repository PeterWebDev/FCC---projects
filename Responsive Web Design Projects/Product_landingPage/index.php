<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Product Page</title>

  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'/>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
  <link href="https://fonts.googleapis.com/css?family=Istok+Web|Lora" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<header id="header">
		<nav id="nav-bar" class="nav-bar">
			<div class="nav-wrap">
				<a id="Lheader" class="nav-link" href="#header">
				<img src="img/logosmall.svg" id="header-img" width="46" height="46" /><span class="home">Home</span></a><a id="Lfeatures" class="nav-link" href="#features">
					<i class="fas fa-briefcase"></i>
					Features
				</a><a id="LPricing" class="nav-link" href="#Pricing">
					<i class="fas fa-dollar-sign"></i>
					Pricing
				</a><a id="LtryForFree" class="nav-link" href="#tryForFree">
					<i class="fas fa-arrow-right"></i>
					Free Trial
				</a>
			</div>
		</nav>
		<div class="nav-offset"/>
	</header>
	<main id="main">
		<div class="title">
			<h1>Linux Web Hosting</h1>
			<h2>Fast, Reliable, Cheap</h2>
		</div>
		
		<div id="features" class="feature-box border-none slidein-box">
			<div class="feature-img">
				<i class="fas fa-rocket"></i>
			</div>
			<div class="feature-text">
				<ul>	
					<li>Fast - Uses the fastest CPU on the Market</li>
					<li>1GB in-out transfer speed </li>
				</ul>
			</div>
		</div>
		<div class="feature-box slidein-box">
			<div class="feature-img">
				<i class="fas fa-arrow-up"></i>
			</div>
			<div class="feature-text">
				Reliable - 99.9999% Uptime!
			</div>
		</div>	

		<div class="feature-box slidein-box">
			<div class="feature-img">
				<i class="far fa-hdd"></i>
			</div>
			<div class="feature-text">
				Unlimted Storage - Never Run out of space again!
			</div>
		</div>
		<div class="feature-box slidein-box">
			<div class="feature-img">
				<i class="fas fa-dollar-sign"></i>
			</div>
			<div class="feature-text">
				<ul>	
					<li>Cheapest market Price!</li>
					<li>With unlimitted - Email Accounts and Data Transfer</li>
				</ul>
			</div>
		</div>

		<div class="feature-box slidein-box">
			<div class="feature-img">
				<i class="fas fa-thumbs-up"></i>
			</div>
			<div class="feature-text">
				Pack full with features.
				<ul class="ulTopPadding">	
					<li>Supports - PHP, Node.js, and asp.net.</li>
					<li>One click apps - Wordpress, fourms and many more.</li>
				</ul>
			</div>
		</div>
		<div id="tryForFree" class="slidein-box">
			<h2>Try for free today!</h2>
			 <form id="form" action="https://www.freecodecamp.com/email-submit">
			    <input name="email" id="email" type="email" placeholder="Enter your email address" required/><input id="submit" type="submit" value=">" class="btn"></input>
			  </form>
		</div>

		<div id="Pricing" class="slidein-box">
			<div class="price">
				<div class="priceH">
					<h3>Free</h3>
				</div>
				<div class="priceD">
					<ul>
						<li>Unlimted Storage</li>
					</ul>
				</div>
			</div>
			<div class="price">
				<div class="priceH">
					<h3>Basic - $9</h3>
				</div>
				<div class="priceD">
					<ul>
						<li>Unlimted Storage</li>
						<li>Free Domain</li>
					</ul>
				</div>
			</div>
			<div class="price">
				<div class="priceH">
					<h3>Pro - $99</h3>
				</div>
				<div class="priceD">
					<ul>
						<li>Unlimted Storage</li>
						<li>Free Domain</li>
						<li>Managed Service</li>
					</ul>
				</div>
			</div>
		</div>
		<iframe id="video" width="100%" src="https://www.youtube-nocookie.com/embed/gyGUhwtdbhI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		
	<main>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>		
 <script src="js/index.js"></script>
</body>

</html>
