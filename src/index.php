<?php

  include("core/config.php");
  include("core/helper.php");

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