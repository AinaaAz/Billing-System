function deleteBILL(id) {
  var confirmation = confirm("Are you sure?");
  if(confirmation) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if(xhttp.readyState = 4 && xhttp.status == 200)
        document.getElementById('bills_div').innerHTML = xhttp.responseText;
    };
    xhttp.open("GET", "manage_bill.php?action=delete&id=" + id, true);
    xhttp.send();
  }
}

function editBILL(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById('bills_div').innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "manage_bill.php?action=edit&id=" + id, true);
  xhttp.send();
}

function updateBILL(id) {
  var month = document.getElementById("month");
  var current_reading = document.getElementById("current_reading");
  var previous_reading = document.getElementById("previous_reading");
  var amount = document.getElementById("amount");
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if(xhttp.readyState = 4 && xhttp.status == 200)
        document.getElementById('bills_div').innerHTML = xhttp.responseText;
    };
xhttp.open("GET", "manage_bill.php?action=update&id=" + id + "&month.value + "&month.value + "&current_reading.value + "&current_reading.value + "&previous_reading=" + previous_reading.value + "&amount=" + amount.value, true)
    xhttp.send();
  
}

function cancel() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById('bills_div').innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "manage_bill.php?action=cancel", true);
  xhttp.send();
}

function searchBILL(text) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById('bills_div').innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "manage_bill.php?action=search&text=" + text, true);
  xhttp.send();
}
