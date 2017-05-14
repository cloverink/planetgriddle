<div class="row content">
  <div class="content-left columns col-xs-3">
    <div class="logo"></div>

      <h2 class="title">Menu</h2>

      
      <h4 class="topic">PRESSED JUICES</h4>
      <h4>THE ROLLS ROYCE</h4>
      <div>w/ kale, apple, celery, pineapple, lemon, ginger, mint</div>

      <br>

      <h4>MORNING GLORY</h4>
      <div>w/ carrot, celery, orange, lemon, ginger</div>

      <br>

      <h4>GET READY</h4>
      <div>w/ beetroot, lemon, carrot, celery, ginger</div>

      <br>

      <h4 class="topic">SMOOTHIES</h4>

      <h4>LEAN ʻNʼ GREEN</h4>
      <div>mango, banana, matcha, spinach</div>

      <br>
      
      <h4>BREAKFAST SMOOTHIE</h4>
      <div>banana, date, steel cut oats, house made cashew milk</div>

      <br>

      <?php include Helper::getTemplate("box-opening"); ?> 

  </div>
  <div class="content-right columns col-xs-6 col-xs-offset-1">
    <?php include Helper::getTemplate("nav"); ?> 

    <div class="content-detail menu">

    <?php
      foreach ($menu_food as $key => $food):
        echo "<div class='row'>";
          echo "<div class='columns col-xs-12 topic'>" . $food["name"] . "</div>";
          foreach ($food["lists"] as $id => $menu):
            echo '<div class="columns col-xs-9 col-xs-offset-1 menu">'. $menu["name"] .'</div>';
            echo '<div class="columns col-xs-1 price">'. $menu["price"] .'</div>';
          endforeach;
        echo "</div>";
      endforeach;
    ?>


    </div>

  </div>
</div>
