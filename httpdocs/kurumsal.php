<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Kurumsal - Gaziantep Kaya Teknik Servis</title>
	<meta charset="utf-8">
	<?php include("css.php")?>
</head>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
			<?php include("ust.php")?>

		<div class="banner banner-static banner-medium has-bg lighter-filter">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text light style-modern">
							<h1 class="page-title">KURUMSAL</h1>
							<p>Kaya Teknik Servis 2017 yılından beri Gaziantep ve ilçelerinde faaliyette olan firmamız edindiği amaç doğrultusunda müşterilerimize en hızlı ve etkin şekilde cevap verebilmek üzere uzman personelimizle sizlere hizmet vermekteyiz.</p>
						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="<?php echo $ayarlar["strURL"]; ?>/image/kurumsal.jpg" alt="Gaziantep Teknik Servis">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-content section-pad">
		<div class="container">
			<div class="content row">

				<div class="row">
					<div class="col-sm-6 res-s-bttm pad-r">
						<h2>Kaya Teknik Servis</h2>
						<p> <?php echo $ayarlar["hakkimizda_tr"]; ?> </p>
					</div>
					<div class="col-sm-6 pad-l">
						<img src="image/photo-md-a.jpg" alt="Gaziantep Klima Bakım">
					</div>
				</div>
				<!-- // -->
				<div class="gaps size-lg"></div> 
			</div>
		</div>
	</div>  
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Gaziantep 7/24 Beyaz Eşya Kombi Klima Servisi.<br>
Bakım Onarım ve Tamir Hizmetleri</h3>
						<a class="btn btn-outline" href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a>
					</div>

				</div>
			</div>
		</div>
	</div>
<?php include("alt.php")?>
<?php include("js.php")?>
</body>
</html>