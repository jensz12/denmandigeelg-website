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
<title>FAQ & Setup - Den Mandige Elg</title>
<meta name="description" content="Alt om elgen og hans setup">
<link rel="icon" href="/img/favicon.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@DenMandigeElg">
<meta name="twitter:creator" content="@jensz12">
<meta name="twitter:title" content="FAQ & Setup - Den Mandige Elg">
<meta name="twitter:description" content="Alt om elgen og hans setup">
<meta name="twitter:image:src" content="http://denmandigeelg.dk/img/bg.jpg">
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
				<li><h3><strong>Navn</strong>: Daniel.</h3></li>
				<li><h3><strong>Alder</strong>: <?php echo $age; ?> år.</h3></li>
				<li><h3><strong>Hvornår kommer der nye afsnit?</strong> Når jeg har tid</h3></li>
				<li><h3><strong>Må jeg få dig på Skype?</strong> Nej</h3></li>
				<li><h3><strong>Må jeg være med i en video?</strong> Nej</h3></li>
				<li><h3><strong>Kan du anbefale en server host</strong>: Ja, jeg kan anbefale <a href="https://primaservers.com/DME" target="_blank">PrimaServers</a></h3></li>
				<li><h3><strong>Kan du anbefale en dansk Minecraft server</strong>: Ja <a href="http://freakyville.net" target="_blank">Freakyville</a> er en glimrende dansk Minecraft server</h3></li>
				<li><h3><strong>Kan jeg joine din Minecraft eller ARK server</strong>: Nej</h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h1 id="setup">Setup</h1>
			</div>
			<div class="jumbotron">
				<h2 id="udstyr"><strong>Udstyr:</strong></h2>
				<ul>
				<li><h3><strong>Skærm</strong>: <a href="http://gaming.benq.com/gaming-monitor/xl2720z" target="_blank">BenQ XL2720Z</a></h3></li>
				<li><h3><strong>Skærm</strong>: <a href="https://www.acer.com/ac/en/GB/content/predator-model/UM.HX1EE.A01" target="_blank">Acer Predator XB271HUA</a></h3></li>
				<li><h3><strong>Mus </strong>: <a href="https://www.amazon.com/Wireless-Soundless-Receiver-Adjustable-Four-color/dp/B01565RLGY" target="_blank">SROCKER C10s</a></h3></li>
				<li><h3><strong>Tastatur</strong>: <a href="http://www.corsair.com/en-eu/strafe-rgb-mechanical-gaming-keyboard-cherry-mx-silent" target="_blank">Corsair Strafe RGB Silent</a></h3></li>
				<li><h3><strong>Headset</strong>: <a href="https://www.bose.dk/da_dk/products/headphones/over_ear_headphones/quietcomfort-35-wireless-ii.html" target="_blank">Bose QuietComfort</a></h3></li>
				<li><h3><strong>Mikrofon</strong>: <a href="http://www.rode.com/microphones/procaster" target="_blank">RØDE Procaster </a></h3></li>
				<li><h3><strong>Mikrofon Stativ</strong>: <a href="http://www.rode.com/accessories/psa1" target="_blank">Røde PSA1</a></h3></li>
				<li><h3><strong>Vlogging</strong>: <a href="http://shop.gopro.com/EMEA/cameras/hero4-silver/CHDHY-401-EU.html" target="_blank">GO-Pro Hero 4 Silver </a></h3></li>
				<li><h3><strong>Kamera</strong>: <a href="https://www.sony.dk/electronics/kameraer-med-udskiftelige-objektiver/ilce-6000-body-kit" target="_blank">Sony α6000 </a></h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="computer"><strong>Computer:</strong></h2>
				<ul>
				<li><h3><strong>CPU</strong>: <a href="https://ark.intel.com/products/126684/Intel-Core-i7-8700K-Processor-12M-Cache-up-to-4_70-GHz" target="_blank">Intel Core i7-8700K</a></h3></li>
				<li><h3><strong>Grafikkort</strong>: <a href="https://www.nvidia.com/en-us/geforce/products/10series/geforce-gtx-1080-ti//" target="_blank">MSI NVIDIA GeForce GTX 1080 TI</a></h3></li>
				<li><h3><strong>Motherboard</strong>: <a href="https://www.msi.com/Motherboard/Z370-GAMING-M5.html" target="_blank">MSI Z370 Gaming M5</a></h3></li>
				<li><h3><strong>Harddisk</strong>: 2x 500GB <a href="http://www.samsung.com/semiconductor/minisite/ssd/product/consumer/850evo.html" target="_blank">Samsung 850 EVO</a></h3></li>
				<li><h3><strong>Harddisk</strong>: <a href="https://www.wdc.com/products/internal-storage/wd-red.html#WD30EFRX" target="_blank">2x3TB WD Red WD30EFRX</a></h3></li>
				<li><h3><strong>Ram</strong>: 32GB HyperX DDR4</h3></li>
				</ul>
			</div>
			<div class="jumbotron">
				<h2 id="software"><strong>Software:</strong></h2>
				<ul>
				<li><h3><strong>Optagelsesprogram</strong>: <a href="http://bandicam.com" target="_blank">Bandicam</a>, <a href="http://exkode.com/dxtory-features-en.html" target="_blank">Dxtory</a> & <a href="https://mirillis.com/en/products/action.html" target="_blank">Action Mirillis</a></h3></li>
				<li><h3><strong>Redigeringsprogram</strong>: <a href="http://www.adobe.com/dk/products/premiere.html" target="_blank">Adobe Premiere Pro CC 2017</a></h3></li>
				</ul>
				</div>
		</article>
		<?php require 'sidebar.php';?>
	</div>
<?php require 'footer.php';?>
</body>
</html>
