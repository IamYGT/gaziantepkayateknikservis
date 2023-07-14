<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Anasayfa - Gaziantep Kaya Teknik Servis</title>
	<meta charset="utf-8">
<?php include("css.php")?>
</head>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
	<?php include("ust.php")?> 
		<div id="slider" class="banner banner-slider carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			<div class="carousel-inner"> 
			
				 <?php
				$i = 0;		
				$veri_cek = $db->query("SELECT * FROM slayt WHERE slayt_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 
			
			
				<div class="item <?php echo ($i == 0 ? "active" : null) ?>">
					<div class="fill" style="background-image:url('<?php echo $ayarlar["strURL"]; ?>/uploads/sliders/<?php echo $veri_listele["slayt_resim"]; ?>');">
						<div class="banner-content dark-mb">
							<div class="container">
								<div class="row">
									
									<div class="banner-text style-modern al-left pos-left light">
										<div class="animated fadeInRight">
											<h3 class="page-title ucap"><strong style="    font-weight: 700;" ><?php echo 	$veri_listele["slayt_baslik"]; ?></strong></h3>
											<p class="lead"><?php echo 	$veri_listele["slayt_aciklama"]; ?></p>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
	 <?php 
					$i++;
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
			

			</div>
			<!-- Arrow Controls -->
			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Geri</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">İleri</span>
			</a>
		</div>
		<!-- #end Banner/Slider -->
	</header>
	<!-- End Header -->
	<!-- CTA Num -->
	<div class="call-action cta-small bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Teknik Servise mi ihtiyacınız var?</h3>
						<span class="cta-num"><strong><a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></strong></span>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End CTA -->
	<!-- Content -->
	<div class="section section-services">
	    <div class="container-fluid">
	        <div class="content row">
	        	<!-- Feature Row  -->
				<div class="row row-feature row-column feature-s4 boxed-filled center">
					    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id DESC LIMIT 8");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>

				<div class="col-sm-3 col-xs-6">
						<!-- Feature Box -->
						<div class="feature bg-dark">
							<a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler/<?php echo $veri_listele["haber_seo"]; ?>">
								<div class="fbox-photo">
									<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo $veri_listele["haber_baslik"]; ?>">
								</div>
								<div class="fbox-over">
									<h3 class="title"><?php echo $veri_listele["haber_baslik"]; ?></h3>
								</div>
							</a>
						</div>
						<!-- #end -->
					</div>
					 			 
<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>


					 </div>
				<!-- Feture Row  #end -->
	        </div>
	    </div>
	</div> 
	<!-- Content -->
	<div class="section section-content section-pad bg-light">
		<div class="container">
			<div class="content row">
			
				<div class="row">
					<div class="col-sm-7 res-s-bttm">
						<h3><strong>Gaziantep Kaya Teknik Servis Hakkında</strong></h3>
						<?php echo $ayarlar["hakkimizda_tr"]; ?>
					</div>
					<div class="col-sm-5 pad-l">
						<img src="image/photo-md-a.jpg" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->
	 
	<!-- Testimonials -->
	<div  style="padding-top: 70px;" class="section section-quotes section-pad has-bg dark-filter light">
		<div class="container">
			<div class="content row">
				<h2 style="font-weight:700" class="center">Müşteri Yorumları</h2>
				<div class="testimonials style-v1">
					<div id="testimonial" class="quotes-slider wide-sm">
						<div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true" data-navs="false">
						
						<?php
				$veri_cek = $db->query("SELECT * FROM nedenildi WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>
 
						<div class="item center">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text">
										<p><?php echo 	$veri_listele["haber_aciklama"]; ?></p>
									</div>
									<div class="profile">
										<h5><?php echo 	$veri_listele["haber_baslik"]; ?></h5>
									</div>
								</div>
									</div> 
									
									<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>

							 </div>
						</div>
				</div>

			</div>
		</div>
		<div class="section-bg imagebg fixed-bg">
			<img src="image/plx-dark.jpg" alt="">
		</div>
	</div>
	<!-- End Section -->
		
	<!-- Client logo -->
	<div class="section section-logos section-pad-sm bdr-top bg-light">
		<div class="container">
			<div class="content row">
				<h3 style="font-weight:700" class="heading-lead-sm ucap center">Gazdaş Yetkili Firma <br> Yetki Numarası: 292 </h3>
				<p style="text-align:center;" > Berat Mühensilik İş Ortaklığıyla </p>
 			</div>
		</div>
	</div> 
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Gaziantep 7/24 Beyaz Eşya Kombi Klima Servisi<br>
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