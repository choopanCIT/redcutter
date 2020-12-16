<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="payment.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
  <main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <h3 class="title" style="text-align: center">PAYMENT</h3>
        <form>
          <div class="products" id="products">
            <div class="total">ยอดรวม<span class="price" id="total">฿0</span></div>
          </div>
            <div class="total" style="text-align: center"><p>เเจ้งโอนเงิน line @citkmutnb(ภายใน 24 ชม.)</p><img src="QRcode.JPG" alt="Nature" class="responsive"></span></div>
        </form>
      </div>
    </section>
  </main>
</body>
<script>
$(document).ready(function() {
  var x = $('div').getParameter({});
  if(x == null){
    return window.location = "index.html";
  }
  $('#products').Fetchdata({x});
});
</script>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>
<script src="jquery.seat-charts.js"></script>
</body>
</html>
