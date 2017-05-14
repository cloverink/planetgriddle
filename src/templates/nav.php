<nav>
<?php
  foreach ($nav_menu as $key => $value):
    $clsCssActived = ($template_name == $value["label"])? "actived" : "";
    echo "<a href='" . $value["link"] . "' class='$clsCssActived'>". $value["label"] ."</a>";
  endforeach;
?>
</nav>