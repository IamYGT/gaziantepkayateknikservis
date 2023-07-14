<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<title>İletişim - Gaziantep Kaya Teknik Servis</title>
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
							<h1 class="page-title">İLETİŞİME GEÇİN</h1>
							<p>İletişim formundan bizlere ulaşabilir veya telefon numaramızdan bizleri arayabilirsiniz.</p>
						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/iletisim.jpg" alt="İletişim Gaziantep">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row">

				<div class="contact-content row">
					<div class="drop-message col-md-8 pad-r res-m-bttm">
						<h2>İletişim Bilgileri</h2>
						<div class="row">
							 
							<div class="col-sm-4 res-s-bttm-sm">
								<p><strong>Telefon</strong> <br>
								Sabit: <a href="tel:<?php echo $ayarlar["strFax"]; ?>"><?php echo $ayarlar["strFax"]; ?> </a><br>
								Cep: <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a></p>
							</div>
							<div class="col-sm-4">
								<p><strong>Çalışma Saatleri</strong><br>
							 
							 <?php echo $ayarlar["strAnalytics"]; ?>
							 </p>
							</div>
							<div class="col-sm-4">
								<p><strong>Eposta</strong><br>
								<a href="mailto:<?php echo $ayarlar["strMail"]; ?>"><?php echo $ayarlar["strMail"]; ?> </a></p>
							</div>
						</div>
						<div class="gaps size-xs"></div>
						<div class="clear"></div>
						<form id="quote-request" class="form-message" action="form/contact.php" method="post">
							<div class="form-results"></div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="contact-name" type="text" placeholder="İsminiz" class="form-control required">
								</div>
								<div class="form-field col-md-6">
									<input name="contact-email" type="email" placeholder="Eposta *" class="form-control required email">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12 form-m-bttm">
									<input name="contact-phone" type="text" placeholder="Telefon *" class="form-control required">
								</div>
							 
							</div>
							 
							<div class="form-group row">
								<div class="form-field col-md-12 form-m-bttm">
									<input name="contact-service" type="text" placeholder="Konu" class="form-control">
								</div>
								 
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<textarea name="contact-message" placeholder="Mesajınız *" class="txtarea form-control required"></textarea>
								</div>
							</div>
							<input type="text" class="hidden" name="form-anti-honeypot" value="">
							<button type="submit" class="btn solid-btn sb-h">Gönder</button>
						</form>
					</div>
					<div class="contact-maps col-md-4">
						<!-- Map -->
						<div class="map-holder map-contact-vertical">
						 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3182.5318067256235!2d37.37884741494849!3d37.09245647988933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e3f66946f595%3A0xa33ebe6808b59518!2sKaya%20Klima%20Sat%C4%B1%C5%9F%20Servis-Klima%20Sat%C4%B1%C5%9F-Klima%20Montaj-Klima%20Bak%C4%B1m-Beyaz%20E%C5%9Fya%20tamir%2C!5e0!3m2!1str!2str!4v1616100098472!5m2!1str!2str" width="400" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 						</div>
						<!-- End map -->
					</div>
				</div>

			</div>
		</div>
	</div>
 
 		<?php include("alt.php")?> 
			<?php include("js.php")?> 

</body>
</html>