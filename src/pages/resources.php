<?php
	$banner_bg_image = 'assets/images/resoures-banner-bg.jpg';
	$banner_bg_text = 'Resources';

	include "partials/banner.php";
	//include "templates/partner-logo-slider.php";

	$mock_type = [
		[
			"type_text" => "GLOBAL",
			"type_key" => "global",
			"type_heading_text" => "Global Resources"
		],
		[
			"type_text" => "REGIONAL",
			"type_key" => "regional",
			"type_heading_text" => "Regional"
		],
		[
			"type_text" => "COUNTRY",
			"type_key" => "country",
			"type_heading_text" => "Country"
		]
	];

	$main_category = [
		[
			"category_name" => "About Skills",
			"category_key" => "about_skills",
			"parent_type" => ["global","regional"]
		],
		[
			"category_name" => "Employability Focus",
			"category_key" => "employability_focus",
			"parent_type" => ["global","regional"]
		],
		[
			"category_name" => "Citizenship Education",
			"category_key" => "citizenship_education",
			"parent_type" => ["global","regional"]
		]
	];

	$sub_category = [
		[
			"category_name" => "Institutions",
			"category_key" => "institutions",
			"parent_category" => "ALL"
		],
		[
			"category_name" => "References",
			"category_key" => "references",
			"parent_category" => "ALL"
		],
		[
			"category_name" => "Tools",
			"category_key" => "tools",
			"parent_category" => "ALL"
		]
	];

	$mock_data = [
		"global" => [
			[
				"category_title" => "Institutions",
				"category_key" => "institutions",
				"data_list" => [
					[
						"id" => "1",
						"parent_category" => "institutions",
						"main_category" => "about_skills",
						"title" => "Brookings Institution",
						"type" => "link",
						"url" => "/"
					],
					[
						"id" => "2",
						"parent_category" => "institutions",
						"main_category" => "employability_focus",
						"title" => "International Labor Organization (ILO)",
						"type" => "link",
						"url" => "/"
					],
					[
						"id" => "3",
						"parent_category" => "institutions",
						"main_category" => "citizenship_education",
						"title" => "Aflatoun International",
						"type" => "link",
						"url" => "/"
					]
				]
			],
			[
				"category_title" => "References",
				"category_key" => "references",
				"data_list" => []
			],
			[
				"category_title" => "Tools",
				"category_key" => "tools",
				"data_list" => [
					[
						"id" => "8",
						"parent_category" => "tools",
						"main_category" => "about_skills",
						"title" => "UNICEF 2013 - Peacebuilding Knowledge, Attitudes and Skills: A Desk Review and Recommendations",
						"type" => "normal",
						"url" => "",
						"link_list" => [
							[
								"link_label" => "English",
								"link_url" => "/resources-detail?id=8"
							],
							[
								"link_label" => "Arabic",
								"link_url" => "#"
							]
						]
					],
					[
						"id" => "9",
						"parent_category" => "tools",
						"main_category" => "citizenship_education",
						"title" => "Tawil, Sobhi 2013 - Education for ‘Global Citizenship’: A Framework for Discussion",
						"type" => "normal",
						"url" => "",
						"link_list" => [
							[
								"link_label" => "English",
								"link_url" => "/resources-detail?id=9"
							]
						]
					],
					[
						"id" => "10",
						"parent_category" => "tools",
						"main_category" => "employability_focus",
						"title" => "UNESCO and UNEVOC 2013 - Tackling Youth Unemployment through TVET: Report of the UNESCO-UNEVOC Online Conference",
						"type" => "normal",
						"url" => "",
						"link_list" => [
							[
								"link_label" => "English",
								"link_url" => "/resources-detail?id=10"
							]
						]
					]
				]
			]
		],
		"regional" => [
			[
				"category_title" => "Institutions",
				"category_key" => "institutions",
				"data_list" => [
					[
						"id" => "5",
						"parent_category" => "institutions",
						"main_category" => "about_skills",
						"title" => "ALECSO",
						"type" => "link",
						"url" => "/"
					],
					[
						"id" => "6",
						"parent_category" => "institutions",
						"main_category" => "employability_focus",
						"title" => "AMIDEAST",
						"type" => "link",
						"url" => "/"
					],
					[
						"id" => "7",
						"parent_category" => "institutions",
						"main_category" => "citizenship_education",
						"title" => "Arab Civitas",
						"type" => "link",
						"url" => "/"
					]					
				]
			],
			[
				"category_title" => "References",
				"category_key" => "references",
				"data_list" => []
			],
			[
				"category_title" => "Tools",
				"category_key" => "tools",
				"data_list" => []
			]
		],
		"country" => [
			[
				"category_title" => "Algeria",
				"category_key" => "algeria",
				"data_list" => []
			],
			[
				"category_title" => "Djibouti",
				"category_key" => "djibouti",
				"data_list" => []
			],
			[
				"category_title" => "Egypt",
				"category_key" => "egypt",
				"data_list" => []
			],
			[
				"category_title" => "Iraq",
				"category_key" => "iraq",
				"data_list" => []
			],
			[
				"category_title" => "Iran",
				"category_key" => "iran",
				"data_list" => []
			],
			[
				"category_title" => "Jordan",
				"category_key" => "jordan",
				"data_list" => []
			],
			[
				"category_title" => "Libya",
				"category_key" => "libya",
				"data_list" => []
			],
			[
				"category_title" => "Morocco",
				"category_key" => "morocco",
				"data_list" => []
			],
			[
				"category_title" => "Oman",
				"category_key" => "oman",
				"data_list" => []
			],
			[
				"category_title" => "Palestine",
				"category_key" => "palestine",
				"data_list" => []
			],
			[
				"category_title" => "Sudan",
				"category_key" => "sudan",
				"data_list" => []
			],
			[
				"category_title" => "Syria",
				"category_key" => "syria",
				"data_list" => []
			],
			[
				"category_title" => "Tunisia",
				"category_key" => "tunisia",
				"data_list" => []
			],
			[
				"category_title" => "Yemen",
				"category_key" => "yemen",
				"data_list" => []
			]
		]
	];

	$all_category = [
		[
			"category_name" => "About Skills",
			"category_key" => "about_skills"
		],
		[
			"category_name" => "Employability Focus",
			"category_key" => "employability_focus"
		],
		[
			"category_name" => "Citizenship Education",
			"category_key" => "citizenship_education"
		]
	];
?>
<div class="row collapse resources-filter-row">
	<div class="column small-12 xlarge-10 xlarge-centered">
		<div class="large-filter">
			<div class="row small-collapse large-uncollapse">
			<?php
				foreach ($mock_type as $idx => $type) {
			?>
				<div class="column small-4">
					<div class="filter-block-wrapper">
						<div class="filter-block <?=($idx == 0 ? 'active' : '')?>"  data-type="<?=$type["type_key"]?>"><?=$type["type_text"]?></div>
					</div>			
				</div>
			<?php
				}
			?>
			</div>
		</div>
	</div>
</div>

<div class="row xlarge-collapse">
	<div class="column small-12 medium-4 large-3 xlarge-2 xlarge-offset-1 res-sidenav-col">
		<div class="filtering-sidenav">
			<button type="button" class="filter-sidenav-header">
				<small>Resources by</small>
				<span class="filter-type">categories</span>
				<span class="arrow">
					<!--<img src="assets/images/arrow_white.svg" />-->
				</span>
			</button>
			<span class="sidenav-filter-list">
				<ul>
					<?php
						foreach($all_category as $idx => $cat) {
					?>
						<li data-category="<?=$cat["category_key"]?>" class="<?=($idx == 0 ? 'active' : '')?>">
							<a><?=$cat["category_name"]?></a>
						</li>
					<?php
						}
					?>
				</ul>
			</span>
		</div>
	</div>
	<div class="column small-12 medium-8 large-9 xlarge-8 end res-content-col">
		<?php
			foreach ($mock_type as $idx => $type) {
		?>
			<div class="resource-content-wrapper <?=($idx == 0 ? 'active' : '')?>" data-type="<?=$type["type_key"]?>">
				<ul class="category-result">
				<?php
					$all_sub_category = $mock_data[$type["type_key"]];

					foreach($all_sub_category as $cat_index => $cat) {
				?>
					<li>
						<span class="common-title-1 category-title" data-category="<?=$cat["category_key"]?>">
							<label><?=$cat["category_title"]?></label>
							<i class="category-indicator">
								<img src="assets/images/arrow_blue.svg" />
							</i>
						</span>
						<ul class="category-detail-list">
				<?php
						if (isset($cat["data_list"]) && count($cat["data_list"]) > 0) {
							foreach($cat["data_list"] as $item_index => $item) {
								if ($item["type"] === "link") {
				?>
							<li data-main-category="<?=$item["main_category"]?>">
								<a class="link-item" href="/resources-detail?id=<?=$item["id"]?>"><?php echo $item["title"]; ?></a>
							</li>
				<?php
								} else {
				?>
							<li data-main-category="<?=$item["main_category"]?>">
								<span><?php echo $item["title"]; ?></a>
				<?php
								if (isset($item["link_list"]) && count($item["link_list"]) > 0) {
									echo "&nbsp;";

									foreach ($item["link_list"] as $index => $item_link) {
										$link_class = $item_link["link_url"] == "#" ? 'disabled' : '';
				?>
										<a class="link-item <?=$link_class?>" href="<?=$item_link["link_url"]?>"><?=$item_link["link_label"]?></a>
				<?php
										if ($index < count($item["link_list"]) - 1) {
											echo '<span class="sep"></span>';
										}
									}
								}
				?>
								
							</li>
				<?php
								}
							}
				?>
							<li class="no-item"><i class="material-icons">info_outline</i> No item matched selected category</li>
				<?php
							
						} else {
				?>
							<li class="no-item"><i class="material-icons">info_outline</i> No item in this category</li>
				<?php
						}
				?>
						</ul>
					</li>
				<?php		
					}
				?>
				</ul>
			</div>
		<?php
			}
		?>
	</div>
</div>