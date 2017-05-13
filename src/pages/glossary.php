<?php
	$banner_bg_image = 'assets/images/glossary-banner-bg.jpg';
	$banner_bg_text = 'Glossary';
	$banner_button = [
		"text" => "Discover MENA countries",
		"url" => "#map"
	];

	include "partials/banner.php";
	//include "templates/partner-logo-slider.php";
?>

<?php
	$index_array = [
		"غ", "ظ", "ض", "ذ", "خ", "ث", "ت", "ش", "ر", "ق", "ص", "ف", "ع", "س", "ن", "م", "ل", "ك", "ي", "ط", "ح", "ز", "و", "ه", "د", "ج", "ب", "ا"
	];
	$reversed_index = array_reverse($index_array);
?>

<section class="glossary-section">
	<div class="glossary-content-wrapper" data-equalizer>
		<div class="glossary-index" id="dvGlossaryIndex">		
			<ul class="index-list arabic-reg alt-lang">
			<?php
				foreach ($reversed_index as $idx => $idx_char) {
			?>
				<li data-value="<?=$idx_char?>">
					<a class="<?=($idx == 0 ? 'active' : '')?>"><?=$idx_char?></a>
				</li><!--
				-->
			<?php		
				}
			?>
			</ul>
			<span class="search-label">
				<small>Alphabetical</small>
				<span class="filter-type">search</span>
			</span>
		</div>
		<div class="glossary-list-wrapper">
			<div class="row xlarge-collapse">
				<div class="column small-12 large-3 large-push-9 xlarge-3 xlarge-offset-1 xlarge-push-7">
					<div class="glossary-search-title">
						<h3 class="title">ALPHABETICAL SEARCH</h3>						
					</div>
				</div>
				<div class="column small-12 large-9 large-pull-3 xlarge-6 xlarge-offset-1 xlarge-pull-5">
					<ul class="glossary-item-list">
					<?php
						for ($i = 0; $i < 8; $i++) {
					?>
						<li class="glossary-item-block">
							<a class="title arabic-reg alt-lang" href="/glossary-details">هناك حقيقة مثبتة منذ زمن طويل</a>
							<span class="posted-date">2016/11/14</span>
							<span class="summary arabic-reg alt-lang">
								هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار
							</span>
						</li>
					<?php
						}
					?>
					</ul>

					<div class="pagination-wrapper glossary-paging alt-lang-paging">
						<ul class="pagination-list">
							<li><a>5</a></li>		
							<li><a>4</a></li>
							<li><a>3</a></li>
							<li><a>2</a></li>
							<li class="current"><a>1</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>		
</section>