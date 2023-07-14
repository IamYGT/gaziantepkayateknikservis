<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); 

$row_info = $db->query("SELECT * FROM galeriler WHERE galeri_seo = '1' ")->fetch(PDO::FETCH_ASSOC);
$ustid = $row_info["galeri_ust_id"];

?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Galeri - Gaziantep Kaya Teknik Servis</title>
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

						<div class="banner-text light style-modern pos-center al-center">
							<h1 class="page-title">GALERİ</h1>
 						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/galeri.jpg" alt="Nurdağı Beyaz Eşya Tamiratı">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	 
	<div class="section section-contents section-pad bdr-top">
		<div class="container">
			<div class="content row">
				<div class="wide-md text-center">
					<h2>Galeri</h2>
				</div>
				<div class="clear"></div>
				<div class="gaps"></div>
				<!-- Gallery -->
				<div class="gallery gallery-col3 gallery-grids gallery-with-caption hover-zoom">

					<ul class="gallery-list">
												 	<?php 

			$list = $db->query("SELECT * FROM files WHERE ustid = 1 AND itable = 1");
				foreach($list as $row){
?>		 
						
						<li>
							<div class="gallery-item">
								<img src="<?php echo $ayarlar["strURL"]; ?>//uploads/files/<?php echo $row["name"]?>" alt="Gaziantep Teknik Servis">
								<div class="gallery-item-link">
									<span class="link-block">
 										<a class="link link-popup image-lightbox" href="<?php echo $ayarlar["strURL"]; ?>//uploads/files/<?php echo $row["name"]?>" title="Gaziantep Teknik Servis"><em class="fa fa-arrows-alt"></em></a>
									</span>
								</div> 
							</div>
						</li>
						 <?php 
				} 
				?>
					
					

						 </ul>

				</div>
				<!-- Gallery #End -->
			</div>
		</div>		
	</div> 
	<?php include("alt.php")?>
	<?php include("js.php")?>
</body>
</html>