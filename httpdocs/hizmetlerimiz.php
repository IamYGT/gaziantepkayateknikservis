<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Hizmetlerimiz - Gaziantep Kaya Teknik Servis</title>
	<meta charset="utf-8">
<?php include("css.php")?>
</head>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
	<?php include("ust.php")?>
		<div class="banner banner-static banner-medium has-bg lighter-filter">
			<div   class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text light style-modern">
							<h1 class="page-title">HİZMETLERİMİZ</h1>
 						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="<?php echo $ayarlar["strURL"]; ?>/image/hizmetlerimiz.jpg" alt="">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->
	<!-- Service Section -->
	<div class="section section-services section-pad">
	    <div class="container">
	        <div class="content row">
				
	        	<!-- Feature Row  -->
				<div class="row row-feature row-column mt-x5">
					
					<?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 			<div class="col-md-4 col-sm-6">
						<!-- feature box -->
						<div class="feature boxed feature-s6">
							<a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler/<?php echo $veri_listele["haber_seo"]; ?>">
								<div class="fbox-photo">
									<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>">
								</div>
							</a>
							<div class="fbox-content">
								<h3> <a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler/<?php echo $veri_listele["haber_seo"]; ?>"> <?php echo 	$veri_listele["haber_baslik"]; ?> </a></h3>
								<p><?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
								<p><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler/<?php echo $veri_listele["haber_seo"]; ?>" class="btn-link link-arrow-sm">Devamını Oku</a></p>
							</div>
						</div>
						<!-- End Feature box -->
					</div>
			<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?> 
					</div>
				</div>
				<!-- Feture Row  #end -->
	        	 
	        </div>
	    </div>
	</div>
	<!-- End Section -->

	<!-- Call Action -->
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Gaziantep 7/24 Beyaz Eşya kombi klima servİsi.<br>
Bakım onarım ve tamir hizmetleri</h3>
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