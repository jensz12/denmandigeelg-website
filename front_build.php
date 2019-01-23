<?php
require_once 'inc/JensFunctions.php';

JensFunctions::loadConfig('config.php');
JensFunctions::checkCronjob();

$latest_youtube_video = JensFunctions::getYouTubeLatestVideo();
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Siden bliver opdateret - Den Mandige Elg</title>
<meta name="description" content="Siden bliver opdateret - Den Mandige Elg">
<link rel="icon" href="/img/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@DenMandigeElg">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Siden bliver opdateret - Den Mandige Elg">
<meta name="twitter:description" content="En super MANDIG YouTuber">
<meta name="twitter:image:src" content="http://denmandigeelg.dk/img/bg.jpg">
<?php require 'header.php';?>
<style>
h1 {
  text-align: center;
  margin-top:0px;
}
</style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.5&appId=1111505942272053";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
<?php require 'navbar.php';?>
</header>
<main role="main" id="content" class="container">
	<div class="row">
		<article class="col-lg-12 col-md-12">
		<div class="jumbotron">
					<h1>Vi udføre opdateringer på Den Mandige Elgs side.</h1>
					<h1>Kom tilbage om</h1>
					<h1 id="countdown"></h1>
		</div>
		</article>
	</div>
<?php require 'footer.php';?>
<script>
	var countDownDate = new Date("Jun 14, 2018 19:00:00").getTime();
	var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s "; 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "Opdatering færdig";
    }
}, 1000);
</script>
</body>
</html>
