<?php

$related_link = [
	[
		"link_title" => "UNESCO Institute for Statistics (UIS)",
		"link_url" => ""
	],
	[
		"link_title" => "The Understanding Children’s Work (UCW)",
		"link_url" => ""
	],
	[
		"link_title" => "Educate A Child",
		"link_url" => ""
	],
	[
		"link_title" => "The Global Partnership for Education",
		"link_url" => ""
	]
];

$glossary_item = [
	[
		"title" => "Accumsan nec reprehenderit",
		"posted_date" => "FRIDAY, NOVEMBER 4TH - 2016",
		"description" => "Lorem ipsum dolor sit amet, persius suscipit vel.",
		"article_url" => ""
	],
	[
		"title" => "Accumsan nec reprehenderit",
		"posted_date" => "FRIDAY, NOVEMBER 4TH - 2016",
		"description" => "Lorem ipsum dolor sit amet, persius suscipit vel.",
		"article_url" => ""
	]
];

?>
<section class="tile-block-section" data-equalizer="section-block" data-equalize-on="large">
	<div class="row collapse blue-block" data-equalizer="outer-block" data-equalize-on="large">
		<div class="column small-12 large-6" data-equalizer-watch="outer-block">
			<div class="row collapse" data-equalizer="block-set-1" data-equalize-on="medium">
				<div class="column small-12 medium-6">
					<div class="tile-block-content green-block" data-equalizer-watch="block-set-1">
						<h4 class="block-title">latest news &amp; events</h4>
						<a class="arrow-link white">
							<i class="arrow-icon"></i><!--
							--><span class="link-text">view all</span>
						</a>
					</div>
				</div>
				<div class="column small-12 medium-6">
					<div class="tile-block-image" style="background-image: url(assets/images/tile-block-image-1.jpg);" data-equalizer-watch="block-set-1"></div>
				</div>
				<div class="column small-12">
					<div class="tile-block-content" data-equalizer-watch="section-block">
						<div class="row">
							<div class="column small-12 large-10 large-centered">
								<h4 class="block-title bigger-text">related links</h4>
								<ul class="block related-link-list light">
								<?php
									foreach ($related_link as $idx => $link) {
								?>
									<li>										
										<a href="<?=$link["link_url"]?>" target="_blank">
											<i class="material-icons">open_in_new</i>
											<span><?php echo $link["link_title"]; ?></span>
										</a>
									</li>
								<?php
									}
								?>
									
								</ul>
								<a class="inline-block arrow-link white mtl">
									<i class="arrow-icon"></i><!--
									--><span class="link-text">view all</span>
								</a>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="column small-12 large-6 end gray-block" data-equalizer-watch="outer-block">
			<div class="row collapse" data-equalizer="block-set-2" data-equalize-on="medium">
				<div class="column small-12">
					<div class="tile-block-content" data-equalizer-watch="section-block">
						<div class="row">
							<div class="column small-12 large-10 large-centered">
								<h4 class="block-title bigger-text">
									latest<br />glossary items
								</h4>
								<ul class="block mtl">
									<?php
										foreach ($glossary_item as $idx => $item) {
									?>
										<li class="glossary-item">									
											<a class="title" href="<?=$link["article_url"]?>">
												<?php echo $item["title"]; ?>
											</a>
											<span class="posted-date">
												<?=$item["posted_date"]?>
											</span>
											<div class="desc">
												<?php echo $item["description"]; ?>
											</div>
										</li>
									<?php
										}
									?>
								</ul>
								<a class="inline-block arrow-link mtl blue">
									<i class="arrow-icon"></i><!--
									--><span class="link-text">view all</span>
								</a>
							</div>
						</div>						
					</div>
				</div>
				<div class="column small-12 medium-6">
					<div class="tile-block-content purple-block" data-equalizer-watch="block-set-2">
						<h4 class="block-title">About The Life Skills &amp; Citizenship Education Initiative</h4>
						<a class="arrow-link white">
							<i class="arrow-icon"></i><!--
							--><span class="link-text">view all</span>
						</a>
					</div>
				</div>
				<div class="column small-12 medium-6">
					<div class="tile-block-image" style="background-image: url(assets/images/tile-block-image-2.jpg);" data-equalizer-watch="block-set-2"></div>
				</div>
			</div>
		</div>
	</div>
</section>