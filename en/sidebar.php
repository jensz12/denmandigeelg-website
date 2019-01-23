<?php
$sub = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCr6lyt73rvsYF_M48ZXS3IA&key=AIzaSyDBzIBpp0A9HUcrkwhLVJ_k1cLdwrk0pLE'), true);
$sub_count = $sub['items'][0]['statistics']['subscriberCount'];
?>
<div class="col-lg-3 col-md-4">
	<div class="row">
		<aside class="col-md-12 col-sm-6" role="complementary">
			<div class="panel panel-material-red-A700">
				<div class="panel-heading">
					<h2 class="panel-title"><i class="fa fa-youtube"></i> Subscribe on Youtube</h2>
				</div>
				<div class="panel-body">
				<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channelid="UCr6lyt73rvsYF_M48ZXS3IA" data-layout="full" data-count="default"></div>
				</div>
			</div>
		</aside>
		<aside class="col-md-12 col-sm-6" role="complementary">
			<div class="panel panel-material-red-A700">
				<div class="panel-heading">
					<h2 class="panel-title"><i class="fa fa-youtube"></i> Subscribers on YouTube</h2>
				</div>
				<div class="panel-body">
					<p class="subs"><?php echo number_format("$sub_count;")  ?></p>
				</div>
			</div>
		</aside>
		
	</div>
</div>
