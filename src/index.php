<?php

  include("core/config.php");
  include("core/helper.php");

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>PLANET GRIDDLE</title>
    <meta name="description" content="PLANET GRIDDLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/png" href="/favicon.png" />

    <style><?php echo file_get_contents("styles/styles.min.css"); ?></style>
  </head>
  
  <body data-template="<?=$template_name?>" style="background-image:url('<?=$site_background_image?>')">
    
    <div class="page-wrapper container">
      
      <?php include $target_file; ?> 
      
    </div>

    <?php include "partials/footer.php" ?>
    
    <script><?php echo file_get_contents("scripts/vendors.min.js"); ?></script>
    <script><?php echo file_get_contents("scripts/apps.min.js"); ?></script>
  </body>
</html>