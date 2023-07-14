<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");

	$tekil_veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); 

 ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Gaziantep Kaya Teknik Servis</title>
		<meta name="description" content="<?php echo $tekil_veri_cek["haber_description"]; ?>">

	<meta charset="utf-8">
	<?php include("css.php")?>
</head>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
	<?php include("ust.php")?>
		<div style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>)" class="banner banner-static banner-medium has-bg lighter-filter">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text light style-modern">
							<h1 class="page-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
							<p><?php echo $tekil_veri_cek["haber_kisaaciklama"]; ?></p>
						</div>
						<div class="banner-sider">
							<div class="boxed boxed-s">
								<p>Uzman teknisyenler, uygun fiyatlar ve nitelikli servis ve bakım hizmetleri <br>  </p>
								<a style="font-weight: 800;    font-size: 23px;" href="tel:<?php echo $ayarlar["strFax"]; ?>" class="btn-link link-arrow"><?php echo $ayarlar["strFax"]; ?></a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-contents section-pad">
		<div class="container">
			<div class="content row">
<?php echo $tekil_veri_cek["haber_aciklama"]; ?>

			</div>
		</div>
	</div>
	
	 <div class="call-action cta-small bg-secondary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta wide-sm center">
						<h3>Gaziantep 7/24 Beyaz Eşya Kombi Klima Servisi. <br> Bakım onarım ve tamir hizmetleri</h3>
						<a style="margin-top: 0;"  class="btn btn-outline" href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a>
					</div>

				</div>
			</div>
		</div>
	</div> 
	
	<?php include("alt.php")?>
	<?php include("js.php")?>
</body>
</html>