(function($) {
  var total=0,seat=[];exits=0;dataSeat=[];
	$.fn.seatcheack = function (zone) {
    $(this).css("opacity", "0.4");
    $(this).off('click');

   $.get("http://localhost:3000/db",{ zoneid: zone },function(data, status){
        for (var i = 0; i < data['seatNumber'].length; i++) {
          dataSeat.push(data['seatNumber'][i]);
        }
    });
     if(dataSeat.length > 0){
       for (var i = 0; i < this.length; i++) {
            var a = 0;
            dataSeat.forEach((item, index) => {
             if($(this[i]).text() == item){
               $(this[i]).css("opacity", "0.4");
               $(this[i]).off('click');
               a +=1;
             }
             else{
               if(dataSeat.length-1 == index && a == 0){
                 $(this[i]).css("opacity", "1");
                 $(this[i]).on('click');

                 $(this[i]).click(function(){
                   console.log(this);
                   $("#checkout").attr("data-target","#ModalCenter");
                   $(this).css("opacity", "0.4");
                   $(this).off('click');
                   appendtable($(this));
                })
               }
             }
            });
       }
     }else{
       $(this).css("opacity", "1");
       $(this).on('click');

       $(this).click(function(){
         console.log(this);
         $("#checkout").attr("data-target","#ModalCenter");
         $(this).css("opacity", "0.4");
         $(this).off('click');
         appendtable($(this));
      })
     }
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
	$.fn.submitdata = async function (url){
   if(!$("#recipient-id").val().trim().length) {
        $('p').addClass('text-warning');
     return $('p').text("กรอกข้อมูลไม่ครบ");
    }
   else if(!$("#recipient-name").val().trim().length) {
    return "กรอกข้อมูลไม่ครบ";
     }
   else if(!$("#recipient-surename").val().trim().length) {
     return "กรอกข้อมูลไม่ครบ";
      }
   else if(!$("#recipient-phone").val().trim().length) {
     return "กรอกข้อมูลไม่ครบ";
         }

    var data = {
    IDname:$("#recipient-id").val(),
    fristname: $("#recipient-name").val(),
    surename: $("#recipient-surename").val(),
    phone:$("#recipient-phone").val(),
    date: firebase.firestore.Timestamp.fromDate(new Date()),
    pice: 12500
    };

    for (var i = 0; i < seat.length; i++) {
     db.collection("availabeSeat").doc(seat[i]).get()
     .then((docSnapshot) => {
          if (docSnapshot.exists) {
              exits+=1;
          } else {
            //if(db.collection("availabeSeat").doc(item).get().exists){
          }
        })
     .then((docSnapshot) => {
       if(exits==0){
       for (const item of seat){
         db.collection("availabeSeat").doc(item).set(data)
         .then(function(doc) {
           window.location = "payment.html?id="+data['IDname'];
            })
            .catch(function(error) {
                console.error("Error adding document: ", error);
            });
        }
      }
     })
	}
};

  $.fn.Fetchdata = function (x) {
    var sum=0;var name;
    db.collection("availabeSeat").where("IDname", "==", x['x'])
   .get()
   .then(function(querySnapshot) {
       querySnapshot.forEach(function(doc) {
           // doc.data() is never undefined for query doc snapshots
           console.log(doc.id, " => ", doc.data());
           var div = document.createElement("div");
           div.className = "item";
           var span = document.createElement("span");
           span.className = "price";
           span.innerHTML ="฿"+doc.data()['pice']
           var p = document.createElement("p");
           p.className = "item-name";
           p.innerHTML = "Seat "+doc.id
           div.append(span,p);
           $('#products').prepend(div);
           sum+=parseInt(doc.data()['pice']);
           $("#total").text("฿"+sum);
           name = doc.data();
       });
       var div = document.createElement("div");
       var p = document.createElement("p");
       var p2 = document.createElement("p");
       var p3 = document.createElement("p");
       div.className = "total";
       div.innerHTML = "ข้อมูลผู้จอง";
       p.className = "total";
       p2.className = "total";
       p3.className = "total";
       p.innerHTML = "รุ่น:"+name['IDname']+"<br>\<br>\ชื่อ:"+name['fristname']+"<br>\<br>\นามสกุล:"+name['surename']+"<br>\<br>\เบอร์โทร:"+name['phone'];
       p2.innerHTML = "ชื่อ:"+name['fristname']+"  นามสกุล:"+name['surename']+"เบอร์โทร:"+name['phone'];
       p3.innerHTML = "เบอร์โทร:"+name['phone'];
      $("#products").append(div,p);
   })
   .catch(function(error) {
       console.log("Error getting documents: ", error);
   });
  };

  function appendtable(param) {
  seat.push($(param).text());
  var li = document.createElement("li");  // Create with DOM
  li.className = "list-group-item d-flex justify-content-between lh-condensed";
  var div = document.createElement("div");
  div.className = "my-0";
  div.innerHTML = "<b>Seat</b> "+$(param).text();
  var span = document.createElement("span");
  span.className = "text-muted";
  span.innerHTML = "฿12500"//params
  li.append(div,span);
  $("#cart").prepend(li);
  total+=12500;
  $(".total").text("฿"+total);
  $("#total").text("฿"+total);
}
})(jQuery);
