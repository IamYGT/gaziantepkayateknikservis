<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Blog - Gaziantep Kaya Teknik Servis</title>
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
							<h1 class="page-title">BLOG</h1>
 						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/blog.jpg" alt="">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-blog section-pad">
		<div class="container">
			<div class="content row">

				<div class="row">
					<div class="col-md-12">
						<!-- Blog Post Loop -->
						<div class="row">
							<ul class="blog-posts col-md-12"  >
						
<?php
				$veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>
 				

							<li class="post col-md-4" style="margin-bottom:20px;" >
								<div class="post-thumbs">
									<a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>"><img alt="" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $veri_listele["haber_resim"]; ?>"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> <?php echo 	$veri_listele["haber_tarih"]; ?> </span>
									</div>
									<h2><a href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h2>
									<p> <?php echo 	$veri_listele["haber_kisaaciklama"]; ?></p>
									<a class="btn-link link-arrow-sm" href="<?php echo $ayarlar["strURL"]; ?>/blog/<?php echo $veri_listele["haber_seo"]; ?>">Devamını Oku</a>
								</div>
							</li>
							<?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?>
							 
						</ul>
						</div> 
					</div> 
				</div> 
			</div>
		</div>
	</div>
	<!-- End Content -->

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