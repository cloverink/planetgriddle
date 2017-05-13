<?php	
	$mock_logo_count = 9;	
	$partner_desc = [
		[
			"partner_name" => "Arab Institute for human rights",
			"partner_img"  => "assets/images/logo/logo-1.png",
			"partner_link" => "http://humanrightsconnected.org/organizations/arab-institute-for-human-rights"
		],
		[
			"partner_name" => "alecso",
			"partner_img"  => "assets/images/logo/logo-2.png",
			"partner_link" => "http://www.alecso.org"
		],
		[
			"partner_name" => "ILO",
			"partner_img"  => "assets/images/logo/logo-3.png",
			"partner_link" => "http://www.ilo.org/global/lang--en/index.htm"
		],
		[
			"partner_name" => "World Bank",
			"partner_img"  => "assets/images/logo/logo-4.png",
			"partner_link" => "https://www.worldbank.org/"
		],
		[
			"partner_name" => "UNESCO",
			"partner_img"  => "assets/images/logo/logo-5.png",
			"partner_link" => "http://en.unesco.org/"
		],
		[
			"partner_name" => "UNFPA",
			"partner_img"  => "assets/images/logo/logo-6.png",
			"partner_link" => "http://www.unfpa.org/"
		],
		[
			"partner_name" => "UNHCR",
			"partner_img"  => "assets/images/logo/logo-7.png",
			"partner_link" => "http://www.unhcr.org/"
		],
		[
			"partner_name" => "unicef",
			"partner_img"  => "assets/images/logo/logo-8.png",
			"partner_link" => "https://www.unicef.org/"
		],
		[
			"partner_name" => "UNRWA",
			"partner_img"  => "assets/images/logo/logo-9.png",
			"partner_link" => "https://www.unrwa.org/"
		]
	];
?>

<!-- -->
<section class="partner-logo-section">
	<div class="row large-collapse">
		<div class="column small-12 xlarge-10 xlarge-centered">
			<div class="logo-slider-wrapper">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php
							foreach ($partner_desc as $idx => $partner) {
						?>
							<div class="swiper-slide">
								<div class="logo-image-wrapper">
									<a href="<?=$partner["partner_link"]?>">
										<img src="<?=$partner["partner_img"]?>" alt="<?=$partner["partner_name"]?>"/>
									</a>
								</div>								
							</div>
						<?php
							}
						?>
					</div>
				</div>	
				<div class="slider-nav slider-nav-prev"></div>
				<div class="slider-nav slider-nav-next"></div>							
			</div>
		</div>
	</div>
</section>
