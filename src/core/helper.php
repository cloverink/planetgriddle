<?php

	class Helper {
		public function getMenu($route_name = "") {
			$string = $route_name;
			$pattern = '/[-]/';
			$replacement = '_';
			$route_name = preg_replace($pattern, $replacement, $string);

			$menu_data = [
				"homepage" => [
					"title" => "Homepage",
					"url" => "/",
					"menu_label" => "Home"
				],
				"about" => [
					"title" => "About",
					"url" => "/about",
					"menu_label" => "About LSCE"
				],
				"resources" => [
					"title" => "Resources",
					"url" => "/resources",
					"menu_label" => "Resources"
				],
				"glossary" => [
					"title" => "Glossary",
					"url" => "/glossary",
					"menu_label" => "Glossary"
				],
				"glossary_details" => [
					"title" => "Glossary Details",
					"url" => "/glossary-details",
					"menu_label" => "",
					"parent_menu" => "glossary"
				],
				"news_events" => [
					"title" => "News & Events",
					"url" => "/news-events",
					"menu_label" => "News &amp; Events"
				],
				"contact" => [
					"title" => "Contact",
					"url" => "/contact",
					"menu_label" => "Contact"
				],
				"news_event_detail" => [
					"title" => "News/Event Detail",
					"url" => "/news-event-detail",
					"menu_label" => "",
					"parent_menu" => "news_events"
				],
				"resources_detail" => [
					"title" => "Resources Detail",
					"url" => "/resources-detail",
					"menu_label" => "",
					"parent_menu" => "resources"
				]
			];

			if ($route_name == "ALL") {
				return $menu_data;
			} else {
				if ($menu_data[$route_name]) {
					return $menu_data[$route_name];
				}

				return null;
			}
		}

		function truncateText($string, $length, $dots = "...") {
			return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
		}
	}
?>