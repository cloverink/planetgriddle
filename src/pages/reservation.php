<div class="row content">
  <div class="content-left columns col-xs-3">
    <div class="logo"></div>


    <div class="box reservation">
<br>
Nutrition and indulgence. Two words
you donʼt often see strung together.
At Planet Griddle we find the balance
between these unlikely friends as we
strive to deliver on experience that
goes beyond just a meal.
<br><br>
- -
<br><br>
Weʼre on a mission to enhance
your knowledge, support sustainability,
think locally and most important
to make your tastebuds dance
<br><br>
    </div>

    <?php include Helper::getTemplate("box-opening"); ?> 

  </div>
  <div class="content-right columns col-xs-6 col-sm-offset-1">
    <?php include Helper::getTemplate("nav"); ?> 

    <div class="content-detail reservation">

      <div class="topic"> RESERVATION </div>

      <p>
        <span>TO MAKE A RESERVATION PLEASE CALL US AT</span>
        <span class="tel">03 9456 7890</span>
        <span>OR FILL OUT THE FOLLOWING RESERVATION BOX AND WE WILL CONTACT YOU</span>
        <span>WITH AVAILABILITY AS SOON AS POSSIBLE:</span>
      </p>

      <form id="frmReservation">
        <div class="form-group">
          <input type="text" class="form-control" id="inpName" placeholder="Name">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="inpEmail" placeholder="Email">
        </div>
        <div class="form-group">
          <textarea id="msg" class="form-control" rows="5" placeholder="Message"></textarea>
        </div>
        <div class="form-group text-right">
          <button id="btnReservation" type="button" class="btn btn-default" disabled>Default</button>
        </div>
      </form>

    </div>


  </div>
</div>