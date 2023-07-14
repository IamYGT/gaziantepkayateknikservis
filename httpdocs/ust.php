	<div class="navbar navbar-primary">
			<div class="container">
				<a class="navbar-brand" href="<?php echo $ayarlar["strURL"]; ?>/index">
					<img class="logo logo-dark" alt="Gaziantep Kaya Logo" src="<?php echo $ayarlar["strURL"]; ?>/image/logo.png" srcset="<?php echo $ayarlar["strURL"]; ?>/image/logo.png">
					<img class="logo logo-light" alt="Gaziantep Kaya " src="<?php echo $ayarlar["strURL"]; ?>/image/logo.png" srcset="<?php echo $ayarlar["strURL"]; ?>/image/logo.png">
				</a> 
				<div class="header-top">
					<ul class="top-contact"> 
					<li class="t-phone t-phone1 t-phone-s2">
							<span><small> SABİT TELEFON</small> <em class="fa fa-phone" aria-hidden="true"></em> 
							<a href="tel:<?php echo $ayarlar["strFax"]; ?>"><?php echo $ayarlar["strFax"]; ?></a></span>
						</li>
						<li class="t-phone t-phone1 t-phone-s2">
							<span><small> CEP TELEFONU </small> <em class="fa fa-phone" aria-hidden="true"></em> 
							<a href="tel:<?php echo $ayarlar["strPhone"]; ?>"><?php echo $ayarlar["strPhone"]; ?></a></span>
						</li> 
 					</ul>
				</div>
 				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
						<span class="sr-only">MENÜ</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
 					<div class="quote-btn"><a class="btn" href="<?php echo $ayarlar["strURL"]; ?>/iletisim"><span>İLETİŞİM</span></a></div>
				</div>
 				<nav class="navbar-collapse collapse" id="mainnav">
										<ul class="nav navbar-nav">
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a> 
						</li>
						 <li>
							<a href="<?php echo $ayarlar["strURL"]; ?>/kurumsal">Kurumsal</a> 
						</li>
						<li>
							<a href="<?php echo $ayarlar["strURL"]; ?>/hizmetlerimiz">Hizmetlerimiz</a>
							<ul>
							
												<?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1 ");
				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 		 
	
								<li><a href="<?php echo $ayarlar["strURL"]; ?>/hizmetler/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo $veri_listele["haber_baslik"]; ?></a></li>
 <?php 
					}
				}else{
					"Listelenecek veri bulunamadı.";
				}
?> 
	 </ul>
						</li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/galeri">Galeri</a></li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/blog">Blog</a></li>
						<li><a href="<?php echo $ayarlar["strURL"]; ?>/iletisim">İletişim</a></li>
						<li class="quote-btn"><a class="btn hidden-xs" href="<?php echo $ayarlar["strURL"]; ?>/iletisim"> İletişim</a></li>
					</ul>
				</nav>
 			</div>
		</div> 