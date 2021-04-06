function searchRentalNumber(){
  var rentalNumber = document.getElementById("rentalNumber").value;

  var dataString = "rentalNumber=" + rentalNumber;
  $.ajax({
        type: 'POST',
        url: 'getRental.php',
        data: dataString,
        cache: false,
        success: function (html) {

          try {
            var data = JSON.parse(html);


            console.log(data[0]["Return_Date"])
            document.getElementById("fullName").innerHTML=data[0]["Name"];
            document.getElementById("phoneNumber").innerHTML=data[0]["Phone_Number"];
            document.getElementById("email").innerHTML=data[0]["Email"];
            document.getElementById("address").innerHTML=data[0]["Address"].toString();
            document.getElementById("professionalRole").innerHTML=data[0]["Professional_Role"];
            document.getElementById("orderDetails").innerHTML=data[0]["Order_Details"];
            document.getElementById("deliveryDate").innerHTML=data[0]["Delivery_Date"];
            document.getElementById("returnDate").innerHTML=data[0]["Return_Date"];
            document.getElementById("cardNumber").innerHTML=data[0]["CC_number"];
            document.getElementById("cvc").innerHTML=data[0]["CVC"].toString();
            document.getElementById("expiry").innerHTML=data[0]["Expiry_Date"];
            
            document.getElementById("showOrderDetails").classList.remove("d-none");
            document.getElementById("errorMessage").classList.add("d-none");
          }
          catch(err) {
            document.getElementById("errorMessage").classList.remove("d-none");
            document.getElementById("showOrderDetails").classList.add("d-none");
          }

        }
    });
}


function placeRentalOrder(){
  var Name = document.getElementById("Name").value;
  var Phone_Number = document.getElementById("Phone_Number").value;
  var Email = document.getElementById("Email").value;
  var Address = document.getElementById("Address").value;
  var Professional_Role = document.getElementById("Professional_Role").value;
  var Order_Details = document.getElementById("Order_Details").value;
  var Delivery_Date = document.getElementById("Delivery_Date").value;
  var Return_Date = document.getElementById("Return_Date").value;
  var CC_number = document.getElementById("CC_number").value;
  var CVC = document.getElementById("CVC").value;
  var Expiry_Date = document.getElementById("Expiry_Date").value;

  var dataString = "Name=" + Name + "&Phone_Number=" + Phone_Number + "&Email=" + Email + "&Address=" + Address + "&Professional_Role=" + Professional_Role + "&Order_Details=" + Order_Details + "&Delivery_Date=" + Delivery_Date + "&Return_Date=" + Return_Date + "&CC_number=" + CC_number + "&CVC=" + CVC + "&Expiry_Date=" + Expiry_Date;
  $.ajax({
        type: 'POST',
        url: 'editRental.php',
        data: dataString,
        cache: false,
        success: function (html) {
          document.getElementById("orderNumber").innerHTML=html;
          document.getElementById("orderPlaced").classList.remove("d-none");
          document.getElementById("orderForm").classList.add("d-none");

        }
    });
}
