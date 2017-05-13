<?php
	$map_api_key = 'AIzaSyBzbUZZWlUUnZoqa86KKVeFSgAcpQjlgXI';
	$map_api_key_dev = 'AIzaSyCCJ_nr3_Uin7EwlnfQLpLGrvAWGirdzP8';
	$banner_bg_image = 'assets/images/contact-banner-bg.jpg';
	$banner_bg_text = 'Contact';

	if (strpos($_SERVER["SERVER_NAME"], ".quo-staging.com")) {
		$map_api_key = 'AIzaSyAFKjfbiekIaBMKRwgMoFtwnNqsYXQW_Q0';
	}

	include "partials/banner.php";
	//include "templates/partner-logo-slider.php";
?>
<section class="contact-map-section">
	<div class="map-layer" id="dvContactMap" data-map-api-key="<?=$map_api_key_dev?>">
		
	</div>
	<div class="map-desc-box">
		<span class="common-title-2-lg txt-bold txt-white">
			address
		</span>
		<span class="address-content">
			<p>
				<strong>Visitors’ address</strong><br />
				UNICEF Regional Office<br />
				Abdulqader Al-Abed Street<br />
				Building No.15<br />
				Tla'a Al-Ali<br />
				Amman, Jordan<br />
				<br />
				<strong>Mailing address</strong><br />
				UNICEF Regional Office<br />
				P.O. Box 1551<br />
				Amman 11821<br />
				Jordan<br />
				<br />	
				Tel.: <a href="tel:+962-6-550-2400">+962-6-550-2400</a><br />
				Fax: +962-6-553-8880<br />
				Email: <a href="mailto:menaro@unicef.org">menaro@unicef.org</a>
			</p>			
		</span>
	</div>
</section>