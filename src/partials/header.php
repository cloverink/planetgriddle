<?php
$header_landing = ($template_name == "homepage")? '' : 'href="/"';
?>
<header>
	<div class="main-menu-toggle">
		<span class="bar"></span>
		<span class="bar"></span>
		<span class="bar"></span>
	</div>
	<div class="row">
		<div class="column small-12 large-6 xlarge-5 xlarge-offset-1">
			<div class="header-block">
				<a class="header-logo" <?=$header_landing?>>
					<img src="assets/images/LSCE-logo.png" alt="Life Skills and Citizenship Education Initiative Middle East and North Africa"/>
				</a>				
				<div class="header-logo-text">
					Life Skills and Citizenship Education Initiative<br />
					Middle East and North Africa
				</div>
			</div>				
		</div>
		<div class="column small-12 large-6 xlarge-5 show-for-large end">
			<div class="header-block">
				<div class="header-logo-text arabic-reg alt-lang">
					مبادرة المهارات الحياتية والتعليم من أجل المواطنة<br />
					الشرق الأوسط وشمال افريقيا	
				</div>
				<a class="header-logo" <?=$header_landing?>>
					<img src="assets/images/LSCE-logo.png" alt="Life Skills and Citizenship Education Initiative"/>
				</a>
			</div>
		</div>
	</div>
</header>
<nav class="main-menu-bar">
	
	<div class="main-menu-content-wrapper">
		<ul class="main-menu-list">
			<?php
    			$header_menu = Helper::getMenu("ALL");
				foreach ($header_menu as $idx => $menu) {
					if (!isset($menu["parent_menu"]) || empty($menu["parent_menu"])) {
						$menu_landing = ($template_name == $idx)? "class='active'" : "href='".$menu["url"]."'";
			?>
				<li>
					<a <?=$menu_landing?>><?php echo $menu["menu_label"]; ?></a>
				</li><!--
				-->
			<?php
					}
				}
			?>
		</ul>
	</div>
	<div class="language-selector">
		<button type="button" class="btn-language">
			<span class="current-lang">en</span><!--
			--><i class="material-icons">keyboard_arrow_down</i>
		</button>
		<ul class="lang-list">
			<li class="active" data-lang="en">
				<a><i class="material-icons chk-icon">done</i> <span>English</span></a>				
			</li><!--
			--><li data-lang="ar">
				<a class="alt-lang"><i class="material-icons chk-icon">done</i> <span>العربية</span> </a>
			</li>
		</ul>
	</div>
	<div class="search-box-wrapper">
		<i class="material-icons search-icon">search</i>
		<div class="search-input-box">
			<form name="fmSearch">
				<label for="search_key" class="hide">search</label>
				<input type="search" id="search_key" name="search_key" placeholder="Type keywords and press Enter" />
			</form>			
		</div>
	</div>
	
</nav>
<div class="main-menu-overlay"></div>