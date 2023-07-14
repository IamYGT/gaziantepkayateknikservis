<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php");  
	$tekil_veri_cek = $db->query("SELECT * FROM haberler WHERE haber_durum = 1 AND haber_seo = '{$_GET["url"]}' AND dil_id = 'tr' ")->fetch(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	 
	 
	<title><?php echo $tekil_veri_cek["haber_baslik"]; ?> - Gaziantep Kaya Teknik Servis</title>
	<?php include("css.php")?>
</head>
<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
		 	<?php include("ust.php")?>

		<div  style="background-image: url(<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>)" class="banner banner-static banner-medium has-bg lighter-filter">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text light style-modern">
							<h1 class="page-title"><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
							<p><?php echo $tekil_veri_cek["haber_kisaaciklama"]; ?></p>
						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>" alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-blog section-pad">
		<div class="container">
			<div class="content row">
			
				<div class="blog-wrapper row">
					<div class="col-md-8 res-m-bttm">

						<div class="post post-single">
							<div class="post-thumbs">
								<img alt="<?php echo $tekil_veri_cek["haber_baslik"]; ?>" src="<?php echo $ayarlar["strURL"]; ?>/uploads/haberler/<?php echo $tekil_veri_cek["haber_resim"]; ?>">
							</div>
							<div class="post-meta">
								<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> <?php echo $tekil_veri_cek["haber_tarih"]; ?> </span>
							</div>
							<div class="post-entry">
								<h1><?php echo $tekil_veri_cek["haber_baslik"]; ?></h1>
								 
								<p> <?php echo $tekil_veri_cek["haber_aciklama"]; ?> </p>
								 </div>
						</div>
						
					</div>

					<!-- Sidebar -->
					<div class="col-md-4">
						<div class="sidebar-right">
							<div class="wgs-box wgs-search">
								<div class="wgs-content">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search...">
										<button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>

						 
							<div class="wgs-box boxed boxed-flat">
								<div class="wgs-content">
									<h5>İletişim Bilgileri</h5>
									<p><strong>Telefon</strong> <br>
								Sabit: <a href="tel:<?php echo $ayarlar["strFax"]; ?>"><?php echo $ayarlar["strFax"]; ?> </a><br>
								Cep: <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></p>
							
									<p><strong>Çalışma Saatleri</strong><br>
									<?php echo $ayarlar["strAnalytics"]; ?></p>
									<p></p>
									<p><strong>Eposta</strong><br>
								<a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?> </a></p>
							
							
								</div>
							</div>
							 

						</div>
					</div>
					<!-- Sidebar #end -->

				</div>

			</div>
		</div>
	</div>
<?php include("alt.php")?>
<?php include("js.php")?>
</body>
</html>