<?php
if($template_name === "resources"):
?>

<div class="mena-map-layer map-container" style="">

  <div class="parallax">

    <a class="country" data-cid="1" style="left: 22%;top: 30%;">
      <img src="/assets/images/maps/c1.png" class="thump">
      <img src="/assets/images/maps/algeria-area.png" class="mo" style="left: -370%;top: -218%;">
      <span>Algeria</span>
    </a>

    <img src="/assets/images/maps/map.jpg" class="map">

  </div>

  <a class="arrow-link white-bg close-map">
    <i class="material-icons">clear</i><!--
    --><span class="link-text">close</span>
  </a>

</div>

<?php else: ?>

<div class="mena-map-layer" style="background-image: url(assets/images/map-mock.jpg);">
	<a class="arrow-link white-bg close-map">
		<i class="material-icons">clear</i><!--
		--><label class="link-text">close</label>
	</a>
</div>

<?php endif; ?>