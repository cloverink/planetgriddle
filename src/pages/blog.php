<div class="row content">
  <div class="content-left columns col-xs-3">
    <div class="logo"></div>

    <h2 class="title">What's ON</h2>

    <?php include Helper::getTemplate("box-opening"); ?> 

  </div>
  <div class="content-right columns col-xs-6 col-sm-offset-1">
    <?php include Helper::getTemplate("nav"); ?> 

    <div class="content-detail blog">

    <?php
      foreach ($blog as $key => $value):
        $topic = $value["topic"];
        $datetime = $value["datetime"];
        $thump = $value["thump"];
        $description = $value["description"];
        
        echo "<div class='row'>";
          echo "<div class='columns col-xs-12 topic'>$topic</div>";
          echo "<div class='columns col-xs-12 datetime'>$datetime</div>";
          echo "<div class='columns col-xs-7 thump' style='background-image: url(\"$thump\")'></div>";
          echo "<div class='columns col-xs-5 description'>$description</div>";
        echo "</div>";

      endforeach;
    ?>

        

    </div>


  </div>
</div>