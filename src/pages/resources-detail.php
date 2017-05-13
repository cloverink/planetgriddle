<?php
	$banner_bg_image = 'assets/images/resoures-banner-bg.jpg';
	$banner_bg_text = 'Resources';

	$url = $_SERVER['REQUEST_URI'];
	$parts = parse_url($url);
	parse_str($parts['query'], $query);
	$detail_id = $query['id'];

	include "partials/banner.php";
	//include "templates/partner-logo-slider.php";

	if (!isset($detail_id) || empty($detail_id)) {
		$detail_id = "1";
	}

	$mock_data = [
		[
			"id" => "1",
			"title" => "Brookings Institution",
			"content" => '<p><strong>Website:</strong>&nbsp;<a href="https://www.brookings.edu/research/skills-for-a-changing-world/"  target="_blank">https://www.brookings.edu/research/skills-for-a-changing-world/</a></p><p><strong>About the Institution:</strong> The Brookings Institution is a nonprofit public policy organization based in Washington, DC. Our mission is to conduct in-depth research that leads to new ideas for solving problems facing society at the local, national and global level.</p><p><strong>Life Skills-Related:</strong> Skills for a Changing World is a project of the Center for Universal Education at Brookings and the LEGO Foundation that seeks to ensure all children have high-quality learning opportunities that build the breadth of skills needed to create a productive, healthy society in the face of changing social, technological, and economic demands.</p>'
		],
		[
			"id" => "2",
			"title" => "International Labor Organization (ILO)",
			"content" => '<p><strong>Website:</strong>&nbsp;<a href="http://www.ilo.org/employment/units/rural-development/WCMS_159163/lang--en/index.htm" target="_blank">http://www.ilo.org/employment/units/rural-development/WCMS_159163/lang--en/index.htm</a></p><p>About the Institution: The only tripartite U.N. agency, since 1919 the ILO brings together governments, employers and workers representatives of 187 member States , to set labour standards, develop policies and devise programmes promoting decent work for all women and men. The main aims of the ILO are to promote rights at work, encourage decent employment opportunities, enhance social protection and strengthen dialogue on work-related issues.</p> <p>Life Skills-Related: Know About Business (KAB) is a training methodology to create awareness about entrepreneurship among youth, in use since the 1990s. It is meant to strengthen the capacities of governments and tripartite constituents in providing entrepreneurship education to reduce youth unemployment in order to: Develop positive attitudes towards sustainable enterprises, self-employment and social entrepreneurship; Create awareness about working in enterprises and about self-employment as a career option for young people; Provide knowledge about the desirable attributes for starting and operating a successful enterprise; Prepare students to become better employees through improved understanding of business and stronger positive and adaptive behavioural attitudes</p>'
		],
		[
			"id" => "3",
			"title" => "Aflatoun International",
			"content" => '<p><strong>Website:</strong>&nbsp;<a href="http://www.aflatoun.org/" target="_blank">http://www.aflatoun.org/ </a></p><p>About the Institution: Aflatoun International offers social and financial education to millions of children and young people worldwide, empowering them to make a positive change for a more equitable world.</p><p>Life Skills-Related: Aflatoun International manages programmes that are based on three curricula: Aflatot (3-6 years old), Aflatoun (6-14 years old) and Aflateen (15-18 years old). Partners are encouraged to further adapt these, either to fit local circumstances or to complement their existing programmes. Regional and national versions of our curricula have been created in over 40 languages and have been adapted to complement programmes on issues as diverse as girls’ empowerment, peacebuilding and disabled learners.</p>'
		],
		[
			"id" => "5",
			"title" => "ALECSO",
			"content" => '<p><strong>Website:</strong>&nbsp;<a href="www.alecso.org" target="_blank">www.alecso.org</a></p><p><strong>About the Institution:</strong> The Arab League Education, Culture and Science Organization (ALECSO) is a specialized institution headquartered in Tunis, functions in the framework of the Arab League of States, and is concerned with enhancing the fields of education, culture and science at regional and national levels, and coordinating between Arab states thereon. It was created by virtue of Article 3 of the Arab Cultural Unity Charter, and was officially declared in Cairo on 25 July 1970.</p><p><strong>Life Skills-Related:</strong> Partner of the Life Skills and Citizenship Education initiative.</p>'
		],
		[
			"id" => "6",
			"title" => "AMIDEAST",
			"content" => '<p><strong>Website:</strong>&nbsp;<a href="http://www.amideast.org/our-work/elt/empowering-youth-and-women/skills-success%C2%AE" target="_blank">http://www.amideast.org/our-work/elt/empowering-youth-and-women/skills-success%C2%AE</a></p><p><strong>About the Institution:</strong> --</p><p><strong>Life Skills-Related:</strong> Skills for Success is an employability skills training program developed by AMIDEAST to improve the job entry prospects for high school and university graduates seeking to enter and succeed in the competitive job markets of the Middle East and North Africa. This new initiative addresses the skills mismatch that underlies the high rates of youth unemployment in the MENA region. It also seeks to foster global communication and contribute to the region\'s economic development.</p><p>Skills for Success was piloted in Egypt during 2012 with funding from the Boeing Company and the U.S. Embassy in Cairo. Beginning in 2014, <i>Skills for Success-Employability Skills for Arab Women</i> is being offered through the endorsement of the <label class="blue">Union for the Mediterranean</label> to benefit unemployed young female graduates in Egypt, Jordan, Lebanon, Morocco, and Tunisia.</p>'
		],
		[
			"id" => "7",
			"title" => "Arab Civitas",
			"content" => '<p><strong>Website:</strong>&nbsp;<a href="http://www.civiced.org/e-news/?cat=4" target="_blank">http://www.civiced.org/e-news/?cat=4</a></p><p><strong>About the Institution:</strong> The regional network knowns as Arab Civitas was created in 2003 under USAID sponsorship. The conference “Civic Education the Arab World” (Jordan, 2003) brought together civic educators from Arab countries who pledged to support a regional network that would promote civic awareness among MENA citizens, especially the youth. The network included NGOs from Egypt, Jordan, and the West Bank and Gaza and soon expanded to include Morocco, Lebanon, Yemen, Tunisia, Algeria, Bahrain, Egypt, Saudi Arabia, Qatar, Oman, Kuwait and the UAE, with its regional office set in Amman, Jordan. The organization of the conferences as well as the training materials for the centre had been largely shaped and influenced by the Center for Civic Education (CCE), the California based nonprofit active in international civic education since 1965. CCE’s two flagship programs, Project Citizen and Foundations for Democracy have been reproduced around the world, and form the pillars of the many centres and training programs across MENA.</p><p><strong>Life Skills-Related:</strong> Project Citizen (PC) focuses on the middle-school-level extracurricular program in which student teams follow a five-step process to identify and research a school or community issue, evaluate solutions, and prepare and implement an action plan to resolve the issue. The Foundations for Democracy (FOD) program targets primary school students (K-12) with interactive reading and discussion activities based on four elements of democratic behavior – justice, responsibility, authority, and privacy. Thus, while the first seeks to help young people “monitor and influence public policy” the latter “promotes civic competence and responsibility” among youth (MEPI, 2005)</p>'
		],
		[
			"id" => "8",
			"title" => "UNICEF 2013 - Peacebuilding Knowledge, Attitudes and Skills: A Desk Review and Recommendations",
			"content" => '<p><strong>Download:</strong>&nbsp;<a href="http://www.unicefinemergencies.com/downloads/eresource/docs/Adolescents/Peacebuilding-Knowledge-Attitudes-and-Skills-Desk-Review-and-Recommendations.pdf" target="_blank">Peacebuilding Knowledge, Attitudes and Skills: A Desk Review and Recommendations</a> (UNICEF 2013)</p><p>This report proposes a set of key competencies for child peacebuilders. Rather than seeking “peaceful children” the end goal becomes “children as peacebuilders”—children as active participants in the rebuilding of their societies and at various levels of peacebuilding processes. We thus re-frame peace education competencies in that light, emphasizing how children can apply emerging peacebuilding competencies to further broader social processes.</p>'
		],
		[
			"id" => "9",
			"title" => "Tawil, Sobhi 2013 - Education for ‘Global Citizenship’: A Framework for Discussion",
			"content" => '<p><strong>Download:</strong>&nbsp;<a href="http://unesdoc.unesco.org/images/0022/002237/223784e.pdf" target="_blank">Education for \'Global Citizenship\': A Framework for Discussion</a> <i>Education Research and Foresight:</i> Working Papers (UNESCO), No.7. (Tawil, Sobhi 2013)</p><p>Article exploring the meaning of \'global citizenship\' as a \'collective purpose of education\' in an increasingly interconnected and interdependent world. The paper makes explicit the points for integration between citizenship education in context of sovereign states and the global trends and challenges common to all.</p>'
		],
		[
			"id" => "10",
			"title" => "UNESCO and UNEVOC 2013 - Tackling Youth Unemployment through TVET: Report of the UNESCO-UNEVOC Online Conference",
			"content" => '<p><strong>Download:</strong>&nbsp;<a href="http://unesdoc.unesco.org/images/0022/002255/225531e.pdf" target="_blank">Tackling Youth Unemployment through TVET: Report of the UNESCO-UNEVOC Online Conference</a> (UNESCO and UNEVOC 2013)</p><p>Report of the two-week virtual conference from 25 June to 9 July 2013 on the UNEVOC e-Forum collecting knowledge, experiences, innovative ideas and promising practices in TVET which aim specifically at tackling youth unemployment.</p>'
		]
	];

	$selected_item = [];
	for ($i = 0; $i < count($mock_data); $i++) {
		if ($mock_data[$i]["id"] == $detail_id) {
			$selected_item = $mock_data[$i];
			break;
		}
	}
?>


<div class="row small-uncollapse xlarge-collapse">
	<div class="column small-12 xlarge-10 xlarge-centered">
		<div class="resources-detail-wrapper">
		<?php
			if (count($selected_item) > 0) {
		?>
				<script>document.title = '<?=$selected_item["title"]?>';</script>
				<span class="title"><?=$selected_item["title"]?></span>
				<div class="content">
					<?php echo $selected_item["content"]; ?>
				</div>
		<?php				
			} else {
				echo '<span class="title">No detail available</span>';
			}
		?>
			
		</div>
	</div>
	<div class="column small-12 xlarge-10 xlarge-offset-1 end">
		<div class="all-news-wrapper">
			<a class="arrow-link blue btn-all-news" href="/resources">
				<i class="arrow-icon"></i><!--
				--><label class="link-text">back to resources</label>
			</a>
		</div>
	</div>
</div>