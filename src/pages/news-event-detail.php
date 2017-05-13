<?php
	$banner_bg_image = 'assets/images/about-banner-bg.jpg';
	$banner_bg_text = 'News &amp; Events';

	include "partials/banner.php";
	//include "templates/partner-logo-slider.php";

	$url = $_SERVER['REQUEST_URI'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$news_id = $query['id'];
    //echo $news_id;

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
			"desc" => "<p>The focus on life skills and citizenship education features prominently in the latest Arab Human Development Report. A key message is that the success of any programmes or public policies to empower youth must involve strengthening the concept of inclusive citizenship for all.</p>",
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
			"desc" => "<p>The Learning Metrics Task Force (LMTF) was a group of education experts, civil society members, and government representatives who convened in 2012 to catalyze a shift in the global education conversation from access to access plus learning. This report focuses on the task force’s work during the second phase. </p>",
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

	$news_item = [];
	for ($i = 0; $i < count($mock_news_item); $i++) {
		if ($mock_news_item[$i]["id"] == $news_id) {
			$news_item = $mock_news_item[$i];
			break;
		}
	}
?>
<script>document.title = '<?=$news_item["title"]?>';</script>
<section class="news-event-detail-section">
	<div class="row">
		<div class="column small-12 xlarge-10 xlarge-centered">

			<div class="row collapse" data-equalizer data-equalizer-on="medium">
				<div class="column small-12 medium-6 medium-push-6">
					<div class="news-detail-slider swiper-container" data-equalizer-watch>
						<div class="swiper-wrapper" data-equalizer-watch>
							<?php
								if (gettype($news_item["image"]) == "string") {
							?>
								<div class="swiper-slide">
									<div class="news-detail-image-item" style="background-image: url('<?=$news_item["image"]?>');"></div>
								</div>
							<?
								} else {
									foreach ($news_item["image"] as $idx => $img) {
							?>
								<div class="swiper-slide">
									<div class="news-detail-image-item" style="background-image: url(<?=$img["image"]?>);"></div>
								</div>
							<?php
									}									
								}
							?>
						</div>

						<div class="swiper-button-prev"></div>
    					<div class="swiper-button-next"></div>
					</div>
				</div>
				<div class="column small-12 medium-6 medium-pull-6">
					<div class="news-detail-summary-box purple" data-equalizer-watch>
						<span class="item-type">news</span>
						<label class="item-date"><?=$news_item["item_date"]?></label>
						<h3 class="item-title"><?=$news_item["title"]?></h3>
						<label class="item-author">By Lorem Ipsum</label>
					</div>
				</div>
			</div>

			<div class="news-detail-content">
				<?php echo $news_item["desc"]; ?>				
			</div>

			<div class="all-news-wrapper">
				<a class="arrow-link blue btn-all-news" href="/news-events">
					<i class="arrow-icon"></i><!--
					--><label class="link-text">all news &amp; stories</label>
				</a>
			</div>			
		</div>
	</div>
</section>