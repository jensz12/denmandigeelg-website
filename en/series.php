<?php
$videos = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/playlists?key=AIzaSyDBzIBpp0A9HUcrkwhLVJ_k1cLdwrk0pLE&part=snippet&channelId=UCr6lyt73rvsYF_M48ZXS3IA&order=date&maxResults=50'), true);
$latest_video_id = $videos['items'][0]['id']['videoId'];
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Series - Manly Moose</title>
<meta name="description" content="Overview of the series on the manly moose channel">
<link rel="icon" href="favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ManlyMooseYT">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="Series - Manly Moose">
<meta name="twitter:description" content="Overview of the series on the manly moose channel">
<meta name="twitter:image:src" content="http://denmandigeelg.dk/bg.jpg">
<?php require 'header.php';?>
</head>
<body>
<header>
<?php require 'navbar.php';?>
</header>
<main role="main" id="content" class="container">
	<div class="row">
		<article class="col-lg-9 col-md-8">
		<div class="row">
				<?php foreach ($videos['items'] as $video): ?>
				<div class="col-sm-6">
					<section class="thumbnail">
						<a href="https://youtube.com/playlist?list=<?php echo $video['id']; ?>">
							<img class="img-responsive" src="<?php echo $video['snippet']['thumbnails']['medium']['url']; ?>" width="100%" />
						</a>
						<div class="caption">
							<a href="https://youtube.com/playlist?list=<?php echo $video['id']; ?>"><h4 class="text-ellipsis"><?php echo $video['snippet']['title'];?></h4></a>
						</div>
					</section>
				</div>
				<?php endforeach; ?>
			</div>
		</article>
		<?php require 'sidebar.php';?>
	</div>
<?php require 'footer.php';?>
</body>
</html>
