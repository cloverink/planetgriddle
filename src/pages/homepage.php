<?php
	$slide_item = [
		[
			"image" => "assets/images/main-banner-item-1.jpg",
			"caption" => "Discover news & events",
			"url" => "/news-events"
		],
		[
			"image" => "assets/images/main-banner-item-2.jpg",
			"caption" => "Discover glossary",
			"url" => "/glossary"
		],
		[
			"image" => "assets/images/main-banner-item-3.jpg",
			"caption" => "Discover MENA countries",
			"url" => "#map"
		]
	];
?>

<section class="main-banner">
	<div class="row collapse">
		<div class="column small-12">
			<div class="main-banner-slide-wrapper swiper-container">
				<div class="swiper-wrapper">
				<?php
					foreach($slide_item as $index => $item) {
				?>
				<div class="banner-item swiper-slide">
					<div class="image-layer" style="background-image: url(<?=$item["image"]?>);"></div>
					<div class="button-layer color-<?=($index + 1)?>" data-url="<?=$item["url"]?>" data-role="banner-button">
						<span class="text-block"><?php echo $item["caption"]; ?></span>
						<span class="icon-block"></span>
					</div>
				</div>
				<?php
					}
				?>
				</div>				
			</div>

			<?php include "templates/map-header.php" ?>

		</div>
	</div>
</section>
<?php //include "templates/partner-logo-slider.php" ?>
<?php include "templates/introduction.php" ?>
<?php include "templates/tile-block.php" ?>