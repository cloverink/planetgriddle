<?php
	$banner_bg_image = 'assets/images/about-banner-bg.jpg';
	$banner_bg_text = 'News &amp; Events';

	include "partials/banner.php";
	//include "templates/partner-logo-slider.php";

	$filter_category = [
		[
			"category_label" => "All",
			"category_value" => "all"
		],
		[
			"category_label" => "News",
			"category_value" => "news"
		],
		[
			"category_label" => "Events",
			"category_value" => "events"
		]
	];

	$mock_news_item = [
		[
			"id" => "1",
			"type" => "news",			
			"country" => "syria",
			"image" => "assets/images/Goodbye-Math-and-English-resized.jpg",
			"title" => "Goodbye, maths and English. Hello, teamwork and communication?",
			"desc" => "<p>The World Economic Forum Future of Jobs report argues that emotional intelligence, creativity, and people management will be among the top skills needed for jobs in 2020.</p>",
			"item_date" => "16 Feb 2017",
			"color" => "blue",
			"custom_url" => "https://www.weforum.org/agenda/2017/02/employers-are-going-soft-the-skills-companies-are-looking-for/"
		],
		[
			"id" => "2",
			"type" => "news",
			"country" => "syria",
			"image" => "assets/images/The-Arab-Human-Development-Report-resized.jpg",
			"title" => "The Arab Human Development Report",
			"desc" => "<p>The focus on life skills and citizenship education features prominently in the latest Arab Human Development Report. A key message is that the success of any programmes or public policies to empower youth must involve strengthening the concept of inclusive citizenship for all. </p>",
			"item_date" => "29 Nov 2016",
			"color" => "purple",
			"custom_url" => "http://www.arab-hdr.org/"
		],
		[
			"id" => "3",
			"type" => "event",
			"country" => "yemen",
			"image" => "assets/images/Champions-for-Learning-resized.jpg",
			"title" => "Champions for Learning: The Legacy of the Learning Metrics Task Force",
			"desc" => "<p>The Learning Metrics Task Force (LMTF) was a group of education experts, civil society members, and government representatives who convened in 2012 to catalyse a shift in the global education conversation from access to access plus learning. This report focuses on the task force’s work during the second phase.</p>",
			"item_date" => "16 Nov 2016",
			"color" => "green",
			"custom_url" => "http://unicef.us7.list-manage2.com/track/click?u=ffb205d87eb3609338ae4932b&id=57f5afc44f&e=a891f0be2e"			
		],
		[
			"id" => "4",
			"type" => "news",
			"country" => "iraq",
			"image" => "assets/images/Saudi-Arabia-Launches-Anti-Bullying-Campaign-and-Programme-resized.jpg",
			"title" => "Saudi Arabia Launches Anti-Bullying Campaign and Programme",
			"desc" => "<p>UNICEF’s Gulf Area Office, the Ministry of Education, the National Commission for Childhood, and the National Family Safety Programme launched a national program in the Kingdom of Saudi Arabia to address bullying in schools.</p>",
			"item_date" => "08 Nov 2016",
			"color" => "blue"
		]
	];
?>

<div class="row xlarge-collapse">
	<div class="column small-12 medium-4 large-3 xlarge-2 xlarge-offset-1 res-sidenav-col">
		<div class="filtering-sidenav">
			<button type="button" class="filter-sidenav-header type-2">
				<span class="filter-type">categories</span>
				<span class="arrow"></span>
			</button>
			<span class="sidenav-filter-list">
				<ul>
					<?php
						foreach($filter_category as $idx => $cat) {
					?>
						<li data-category="<?=$cat["category_value"]?>" class="<?=($idx == 0 ? 'active' : '')?>">
							<a><?=$cat["category_label"]?></a>
						</li>
					<?php
						}
					?>
				</ul>
			</span>
		</div>
	</div>
	<div class="column small-12 medium-8 large-9 xlarge-8 end res-content-col">
		<div class="resource-content-wrapper active">
			<div class="row collapse">
				<div class="column small-12">
					<div class="news-events-items-container">
						<div class="row collapse data-container" data-equalizer data-qualizer-on="medium">
							<?php
								foreach($mock_news_item as $idx => $item) {
									$url = isset($item["custom_url"]) && !empty($item["custom_url"]) ? $item["custom_url"] : '/news-event-detail?id=' . $item["id"];
									$target = isset($item["custom_url"]) && !empty($item["custom_url"]) ? '_blank' : '_self';
							?>
								<div class="column small-12 medium-6">
									<div class="news-item-wrapper">
										<div class="news-event-card-item <?=$item["color"]?>" data-type="<?=$item["type"]?>" data-category="<?=$item["country"]?>">
											<div class="card-image" style="background-image: url('<?=$item["image"]?>');"></div>
											<div class="card-content" data-equalizer-watch>
												<span class="card-title"><?=Helper::truncateText($item["title"], 100)?></span>
												<span class="card-desc">
													<?php
														$tmp_desc = str_replace('<p>', '', $item["desc"]);
														$tmp_desc = str_replace('</p>', '', $tmp_desc);
														$tmp_desc = Helper::truncateText($tmp_desc, 350);
													?>
													<p><?php echo $tmp_desc; ?></p>
												</span>
												<span class="item-date"><?=$item["item_date"]?></span>
												<a class="arrow-link white" href="<?=$url?>" target="<?=$target?>">
													<i class="arrow-icon"></i><!--
													--><label class="link-text">read more</label>
												</a>
											</div>
										</div>
									</div>
										
								</div>								
							<?php		
								}
							?>
						</div>
					</div>
					<button type="button" class="viewmore-btn hide-for-large">
						<span>view more</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="column small-12 show-for-large">
		<div class="pagination-wrapper news-event-paging">
			<ul class="pagination-list">
				<li class="nav" data-direction="first"><a><i class="material-icons">first_page</i></a></li>
				<li class="nav" data-direction="prev"><a><i class="material-icons">chevron_left</i></a></li>
				<li class="current"><a>1</a></li>
				<li><a>2</a></li>
				<li><a>3</a></li>
				<li><a>4</a></li>
				<li><a>5</a></li>		
				<li class="nav" data-direction="next"><a><i class="material-icons">chevron_right</i></a></li>
				<li class="nav" data-direction="last"><a><i class="material-icons">last_page</i></a></li>
			</ul>
		</div>		
	</div>
</div>