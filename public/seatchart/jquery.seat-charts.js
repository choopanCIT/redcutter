(function($) {
  var total=0,seat=[];exits=0;dataSeat=[];
  $.fn.checkout = function (zone) {
    $(this).click(function(){
      if($('#seats').val()){
        $(this).attr("data-target","#ModalCenter");
        $('#datauser').show();
        $('#user').hide();
        $('#submit').show();
      }
    });
 }
	$.fn.seatconfirm = function (name,groupname) {
     $(this).css('background-color', '#f67279');
     $(this).click(function(){
      $('#name').val(name)
      $('#name').attr('readonly', true);
      $('#id').val(groupname)
      $('#id').attr('readonly', true);
      $('#submit').hide();
      $(this).attr("data-toggle","modal");
      $(this).attr("data-target","#ModalCenter");
      $('#datauser').hide();
      $('#user').show();
 })
  }
  $.fn.seatwaitconfirm = function (name,groupname) {
     $(this).css('background-color', '#fcde60');
     $(this).click(function(){
        $('#name').val(name)
        $('#name').attr('readonly', true);
        $('#id').val(groupname)
        $('#id').attr('readonly', true);
        $('#submit').hide();
        $(this).attr("data-toggle","modal");
        $(this).attr("data-target","#ModalCenter");
        $('#datauser').hide();
        $('#user').show();
   })
  }
  $.fn.seatavailable = function (pice) {
    $(this).click(function(){
      var old_seats = $('#seats').val();
      var numseats = old_seats.split(",");
      if(numseats.length > 2) {
          alert("กรุณาจองโต๊ะมากสุด 2 โต๊ะต่อรอบ");
      } else {
        $(this).css("opacity", "0.4");
        $(this).off('click');
        var new_seats = old_seats + ',' + $(this).text();
        $('#seats').val(new_seats);
        appendtable($(this),pice);
      }
   })
  }
	$.fn.getParameter = function (setup) {
		var sPageURL = window.location.search.substring(1).split('=');
		var param = null;
		if(sPageURL.length != 2){
			return null;
		}
		if(sPageURL[0] != "id"){
			return null;
		}
		return sPageURL[1];
	}

  function appendtable(param,pice) {
  //seat.push($(param).text());
  var li = document.createElement("li");  // Create with DOM
  li.className = "list-group-item d-flex justify-content-between lh-condensed";
  var div = document.createElement("div");
  div.className = "my-0";
  div.innerHTML = "<b>Seat</b> "+$(param).text();
  var span = document.createElement("span");
  span.className = "text-muted";
  span.innerHTML = "฿"+pice;
  li.append(div,span);
  $("#cart").prepend(li);
  total+=parseInt(pice);
  $(".total").text("฿"+total);
  $("#total").text("฿"+total);
}
})(jQuery);
