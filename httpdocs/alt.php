	<!-- End Section -->
	<!-- Footer Widget-->
	<div class="footer-widget style-v2 section-pad-md">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">HİZMETLERİMİZ</h5>
							<div class="wgs-content">
								<ul class="menu">
			     <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 AND dil_id = 'tr' ORDER BY haber_ust_id DESC LIMIT 6");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?>


 <li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></li>
 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?> 
	
 </ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">HIZLI MENÜ</h5>
							<div class="wgs-content">
								<ul class="menu">
			<li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a> 
						</li>
						 <li>
							<a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a> 
						</li>
						<li>
							<a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a>
						 
						</li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/galeri">Galeri</a></li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/blog">Blog</a></li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">İLETİŞİM BİLGİLERİ</h5>
							<div class="wgs-content">
								<ul class="contact-info">
									<li><span>Telefon</span>: <a href="tel:<?php echo $ayarlar["strPhone"]; ?>"> <?php echo $ayarlar["strPhone"]; ?> </a><br>
										<span>Sabit Telefon</span>: <a href="tel:<?php echo $ayarlar["strFax"]; ?>"> <?php echo $ayarlar["strFax"]; ?> </a></li>
									<li><?php echo $ayarlar["strAddress"]; ?></li> 
									<li><a href="mailto:<?php echo $ayarlar["strMail"]; ?>"> <?php echo $ayarlar["strMail"]; ?> </a> </li> 
								</ul>
								<ul class="social social-v2">
									<li><a href="<?php echo $ayarlar["strFacebook"]; ?>"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="<?php echo $ayarlar["strTwitter"]; ?>"><em class="fa fa-google" aria-hidden="true"></em></a></li>
									<li><a href="<?php echo $ayarlar["strInstagram"]; ?>"><em class="fa fa-instagram" aria-hidden="true"></em></a></li>
									<li><a href="https://wa.me/<?php echo $ayarlar["strWhatsappPhone_tr"]; ?>?text=<?php echo $ayarlar["strWhatsappMessage_tr"]; ?>"><em class="fa fa-whatsapp" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<div class="wgs-content">
								<div class="footer-logo"><img src="<?php echo $ayarlar["strURL"]; ?>/image/logo.png" srcset="<?php echo $ayarlar["strURL"]; ?>/image/logo.png" alt="Logo"></div> 
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->
	<!-- Copyright -->
	<div class="copyright style-v2">
		<div class="container">
			<div class="row">
				<div class="site-copy col-sm-7">
					<p>Copyright &copy; 2021 Her Hakkı Saklıdır.<span class="sep"> </span></p>
				</div>
				<div class="site-by col-sm-5 al-right">
					<p>Design:  <em class="fa fa-heart text-danger"></em><a rel="dofollow" href="https://www.memsidea.com/" target="_blank"> Gaziantep Web Tasarım</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copyright -->