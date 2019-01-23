<?php
//FIXME: This is a "hack", please fix Jens...
require_once 'inc/JensFunctions.php';
JensFunctions::loadConfig('config.php');
?>
<div class="col-lg-3 col-md-4">
	<div class="row">
		<aside class="col-md-12 col-sm-6" role="complementary">
			<div class="panel panel-material-red-A700">
				<div class="panel-heading">
					<h2 class="panel-title"><i class="fa fa-youtube"></i> Abonnér på Youtube</h2>
				</div>
				<div class="panel-body">
				<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channel="DenMandigeElg" data-layout="full" data-count="default"></div>
				</div>
			</div>
		</aside>
		<aside class="col-md-12 col-sm-6" role="complementary">
			<div class="panel panel-material-red-A700">
				<div class="panel-heading">
					<h2 class="panel-title"><i class="fa fa-youtube"></i> Subs på YouTube</h2>
				</div>
				<div class="panel-body">
					<p class="subs"><?php echo number_format(JensFunctions::getYouTubeSubCount()); ?></p>
				</div>
			</div>
		</aside>
	</div>
</div>
