<div class="common-banner" style="background-image: url('<?=$banner_bg_image?>')";>
	<h1 class="common-banner-title"><?php echo $banner_bg_text; ?></h1>

	<?php
		if (isset($banner_button) && !empty($banner_button["text"])) {
	?>
		<div class="button-layer color-3" data-url="<?=$banner_button["url"]?>" data-role="banner-button">
			<label class="text-block"><?=$banner_button["text"]?></label>
			<span class="icon-block"></span>
		</div>
	<?php
		}
	?>
</div>

<?php include "templates/map-header.php" ?>