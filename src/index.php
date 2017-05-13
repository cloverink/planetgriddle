<?php

  include("core/config.php");
  include("core/helper.php");

  $request_uri = $_SERVER["REQUEST_URI"];
  $request_uri = explode("?", $request_uri);
  $url_fragment = explode("/", $request_uri[0]);
  $template_name = strtolower($url_fragment[1]);
  $template_path = $template_name;

  if (empty($template_name)) {
    $template_name = "homepage";
    $template_path = "homepage";
  } else if ($template_name === "404" || $template_name === "403" || $template_name === "500")  {
    $template_path = "errer/" . $requested_template;
  }
  $target_file = "pages/" . $template_path . ".php";
  if (!file_exists($target_file)) {
    $target_file = "pages/error/404.php";
  }

}
?>
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>PLANET GRIDDLE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="styles/styles.min.css" />
  </head>
  
  <body data-template="<?=$template_name?>">
    <?php include "partials/header.php" ?>
    <div id="dvPageWrapper" class="page-wrapper">
      <main>
        <?php include $target_file; ?>        
      </main>
      <?php include "partials/footer.php" ?>
    </div>        
    
    <script src="scripts/vendors.min.js"></script>
    <script src="scripts/apps.min.js"></script>
  </body>
</html>