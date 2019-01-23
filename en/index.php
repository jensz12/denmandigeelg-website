<?php
$video = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?key=AIzaSyDBzIBpp0A9HUcrkwhLVJ_k1cLdwrk0pLE&part=id&channelId=UCr6lyt73rvsYF_M48ZXS3IA&order=date&maxResults=1&type=video'), true);
$video_id = $video['items'][0]['id']['videoId'];
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Manly Moose</title>
<meta name="description" content="A manly youtuber that loves the color pink and to play video games. ">
<link rel="icon" href="favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ManlyMooseYT">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Manly Moose">
<meta name="twitter:description" content="A manly youtuber that loves the color pink and to play video games. ">
<meta name="twitter:image:src" content="http://denmandigeelg.dk/bg.jpg">
<?php require 'header.php';?>
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
		<article class="col-lg-9 col-md-8">
		<div class="jumbotron">
				<div class="embed-responsive embed-responsive-16by9 hidden-print">
				<iframe class="embed-responsive-item" src="https://youtube.com/embed/<?php echo $video_id; ?>?showinfo=0&color=white&theme=light&fs=1">Brug en moderne browser TAK!!</iframe>
				</div>
			</div>
			<div class="row hidden-print">
	<aside id="facebook" class="col-sm-6">
		<div class="panel panel-material-light-blue-900">
			<div class="panel-heading">
				<h2 class="panel-title"><i class="fa fa-facebook-square"></i> <a href="https://www.facebook.com/themanlymoose" target="_blank"> Facebook</a></h2>
			</div>
			<div class="fb-page" style="margin-left: -1px;" data-width="410" data-height="510" data-href="https://www.facebook.com/themanlymoose" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/themanlymoose"><a href="https://www.facebook.com/themanlymoose">The Manly Moose</a></blockquote></div></div>
			</aside>
	<aside id="twitter" class="col-sm-6">
		<div class="panel panel-info">
				<div class="panel-heading">
				<h2 class="panel-title"><i class="fa fa-twitter"></i> <a href="https://twitter.com/ManlyMooseYT" target="_blank"> Twitter</a></h2>
				</div>
				<div class="panel-body">
				<a class="twitter-timeline" data-height="475" data-chrome="nofooter noheader transparent noscrollbar" href="https://twitter.com/ManlyMooseYT">Tweets by The Manly Moose</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				</div>
	</aside>
		</article>
		<?php require 'sidebar.php';?>
	</div>
<?php require 'footer.php';?>
</body>
</html>
