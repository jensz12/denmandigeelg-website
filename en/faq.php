<?php
  //date in mm/dd/yyyy
  $birthDate = "10/01/1989";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta name="charset" content="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>FAQ & Setup - Manly Moose</title>
<meta name="description" content="Everything about the manly moose and his setup">
<link rel="icon" href="/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ManlyMooseYT">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="FAQ & Setup - Manly Moose">
<meta name="twitter:description" content="Everything about the manly moose and his setup">
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
			<div class="jumbotron">
				<h1 id="faq">FAQ</h1>
				<ul>
				<li><h3><strong>Name</strong>: Daniel.</h3></li>
				<li><h3><strong>Age</strong>: <?php echo $age; ?> years old.</h3></li>
				<li><h3><strong>Who made your banner, intro etc...</strong>: <a href="https://www.youtube.com/channel/UCo4WCXS0vb6k5DFOgxIbabQ" target="_blank">DoodlePunk</a></h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h1 id="setup">Setup</h1>
			</div>
			<div class="jumbotron">
				<h2 id="udstyr"><strong>Gear:</strong></h2>
				<ul>
				<li><h3><strong>Monitor</strong>: <a href="http://gaming.benq.com/gaming-monitor/xl2720z" target="_blank">BenQ XL2720Z</a></h3></li>
				<li><h3><strong>Mouse </strong>: <a href="http://www.logitech.com/en-us/product/wireless-desktop-mk710" target="_blank">Wirelsess Desktop MK710</a></h3></li>
				<li><h3><strong>Keyboard</strong>: <a href="http://www.logitech.com/en-us/product/wireless-desktop-mk710" target="_blank">Wirelsess Desktop MK710</a></h3></li>
				<li><h3><strong>Headset</strong>: <a href="https://en-us.sennheiser.com/wireless-headphones-home-audio-rs-175" target="_blank">Sennheiser RS 175</a></h3></li>
				<li><h3><strong>Microphone</strong>: <a href="http://www.rode.com/microphones/procaster" target="_blank">RØDE Procaster </a></h3></li>
				<li><h3><strong>Microphone stand</strong>: <a href="http://produkte.k-m.de/en/product?info=454&xebee2=c7fd1c55118c7bf4e9f8cc1efbeb813d" target="_blank">König & Meyer 21080 Microphone Stand Black</a></h3></li>
				<li><h3><strong>Vlogging cam</strong>: <a href="http://shop.gopro.com/EMEA/cameras/hero4-silver/CHDHY-401-EU.html" target="_blank">GO-Pro Hero 4 Silver </a></h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="computer"><strong>Computer:</strong></h2>
				<ul>
				<li><h3><strong>CPU</strong>: <a href="http://ark.intel.com/products/88195/Intel-Core-i7-6700K-Processor-8M-Cache-up-to-4_20-GHz" target="_blank">Intel Core i7-6700K</a></h3></li>
				<li><h3><strong>Grafic</strong>: <a href="https://www.nvidia.com/en-us/geforce/products/10series/geforce-gtx-1080/" target="_blank">NVIDIA GeForce GTX 1080</a></h3></li>
				<li><h3><strong>Motherboard</strong>: <a href="https://www.asus.com/uk/Motherboards/Z170-PRO-GAMING/" target="_blank">Z170 PRO GAMING</a></h3></li>
				<li><h3><strong>HDD</strong>: 2x 500GB <a href="http://www.samsung.com/semiconductor/minisite/ssd/product/consumer/850evo.html" target="_blank">Samsung 850 EVO</a></h3></li>
				<li><h3><strong>HDD</strong>: 6TB unspecified HDD</h3></li>
				<li><h3><strong>Ram</strong>: 16GB DDR4</h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="software"><strong>Software:</strong></h2>
				<ul>
				<li><h3><strong>Recording</strong>: <a href="http://bandicam.com" target="_blank">Bandicam</a> & <a href="http://exkode.com/dxtory-features-en.html" target="_blank">Dxtory</a></h3></li>
				<li><h3><strong>Editing</strong>: <a href="http://www.adobe.com/uk/products/premiere.html" target="_blank">Adobe Premiere Pro CC 2017</a></h3></li>
				</ul>
				</div>
		</article>
		<?php require 'sidebar.php';?>
	</div>
<?php require 'footer.php';?>
</body>
</html>
