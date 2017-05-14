<?php

class Helper {
  public function getTemplate($name) {
    return "templates/" . $name . ".php";
  }
}


$request_uri = $_SERVER["REQUEST_URI"];
$request_uri = explode("?", $request_uri);
$url_fragment = explode("/", $request_uri[0]);
$template_name = strtolower($url_fragment[1]);
$template_path = $template_name;

if (empty($template_name)) {
  $template_name = "home";
  $template_path = "home";
} else if ($template_name === "404" || $template_name === "403" || $template_name === "500")  {
  $template_path = "errer/" . $requested_template;
}

$target_file = "pages/" . $template_path . ".php";

if (!file_exists($target_file)) {
  $target_file = "pages/error/404.php";
}