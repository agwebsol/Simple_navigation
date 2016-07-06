<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portfolio/Resume</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,100,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/styles/normalize.css" />
	<link rel="stylesheet" href="assets/styles/styles.css" />
</head>

<body>

	<!-- Video Markup -->
	<section class="masthead">
		<video class="masthead-video" autoplay loop muted poster="assets/images/poster.jpg">
			<source src="assets/videos/dreamscapes.mp4" type="video/mp4">
			<source src="assets/videos/dreamscapes.webm" type="video/webm">
		</video>
		<div class="masthead-overlay"></div>
		<div class="masthead-arrow"></div>
		<h1><span style="font-size:30px;">Daro Omwanor</span><span>Portfolio/Resume</span></h1>

	</section>
	<section class="content">
		<div class="container">
			<h3>Background</h3>
			<p>
				Looking for a dynamic and motivated individual to join
				your software development team? Search no further,
				with my previous experience, skill sets and educational
				background I strongly believe I would be a great addition to your company. 
			</p>
			<h3>Skills/Abilities</h3>
			<ol>
				<li>First pull the project down from into your site. Make sure it is loaded after jQuery if using it.</li>
				<li>It is important to note that the video you target will use its parent element to scale. With that in mind, we will create some simple markup and add some base styling to size the videos parent/wrapper element.</li>
				<li>Now, we would simply call the on the video element, passing through the native dimensions of the video. If you are using jQuery</li>
			</ol>
			<span>
				Modal Here| PSR 4 Model Development
				<a href="index.php/App_Controller/">Pay Roll</a>
			</span>
		</div>
	</section>

	<footer>
		<div class="container">
			<hr />
			<iframe src="http://ghbtns.com/github-btn.html?user=daroomwanor&repo=SPRZ&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
			<iframe src="http://ghbtns.com/github-btn.html?user=daroomwanor&repo=SPRZ&type=fork&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="156px" height="30px"></iframe>
			<iframe src="http://ghbtns.com/github-btn.html?user=daroomwanor&type=follow&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="224px" height="30px"></iframe>
		</div>
	</footer>

	<!-- Load Scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/covervid.js"></script>
	<script src="assets/scripts/scripts.js"></script>

	<!-- Call CoverVid -->
	<script type="text/javascript">
			coverVid(document.querySelector('.masthead-video'), 640, 360);
	</script>

</body>

</html>