var Main = (function (self) {
  var my = self, func = {};

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  func.initReservation = function() {
    var $frmReservation = $("#frmReservation");

    var $inpName = $("#inpName", $frmReservation);
    var $inpEmail = $("#inpEmail", $frmReservation);
    var $msg = $("#msg", $frmReservation);
    var $btnReservation = $("#btnReservation", $frmReservation);

    $inpName.on("input", func.checkReservation);
    $inpEmail.on("input", func.checkReservation);
    $msg.on("input", func.checkReservation);

    $btnReservation.on("click", func.doReservation);

  };

  func.doReservation = function() {
    var $frmReservation = $("#frmReservation");

    var $inpName = $("#inpName", $frmReservation);
    var $inpEmail = $("#inpEmail", $frmReservation);
    var $msg = $("#msg", $frmReservation);
    var $btnReservation = $("#btnReservation", $frmReservation);

    $.post("/api/reservation.php", {
      "name"  : $inpName.val(),
      "email" : $inpEmail.val(),
      "msg"   : $msg.val()
    } , function(o){
      $inpName.val("");
      $inpEmail.val("");
      $msg.val("");
      $btnReservation.prop('disabled', true);
    });

  }

  func.checkReservation = function() {
    var $frmReservation = $("#frmReservation");

    var $inpName = $("#inpName", $frmReservation);
    var $inpEmail = $("#inpEmail", $frmReservation);
    var $msg = $("#msg", $frmReservation);
    var $btnReservation = $("#btnReservation", $frmReservation);

    if($.trim($inpName.val()).length > 0
    && $.trim($msg.val()).length > 0
    && validateEmail($inpEmail.val())
    ){
      $btnReservation.prop('disabled', false);
    } else {
      $btnReservation.prop('disabled', true);
    }

  }

  my.init = function () {
    
    if($("body[data-template='reservation']").length) func.initReservation();
    //if($("body[data-template='contact']").length) func.initMap();

  };

  return my;
})(Main || {});

$(function(){
  Main.init();
});
