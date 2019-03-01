<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

?>

<head>
<title>Fungi's City Hall</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" type="text/css" href="style.css"/>

  <script>
    
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content").innerHTML =
      this.responseText;
      setTimeout(loadDoc, 2000);
    }
  };
  xhttp.open("GET", "log.txt?t=" + Math.random(), true);
  xhttp.send();
}
    function updateContent() {
      var message = document.getElementById("test2").value;
   var client = new XMLHttpRequest();
  client.open("POST", "log.txt");
  client.setRequestHeader("Content-Type", "text/plain;charset=UTF-8");
  client.send("message");
      message = "<br>readystate: " + client.readyState + "<br>client status: " + client.status;
      document.getElementById("test").innerHTML = message;
      document.getElementById("test2").value = "";
      
}
    
      
</script>
  
</head>

<body onload="loadDoc()">

<!-- Top -->
<div class="top">
<h1>Welcome to Fungi's City Hall</h1>
  <button type="button" onclick="updateContent()">Change Content</button>
</div>


<!-- Content -->
<div class="content">
  <div class="log">
      <textarea id="content" disabled>
      </textarea>
  </div>
  <div class="inputs">
      Pseudo:<input type="text" name="pseudo" value="Anonymous"><br>
      <input id="test2" type="text" name="message" value="">
      <button type="button" onclick="send()">Submit</button>
   </div>
  </div>
  <p id="test"></p>

<!-- Bottom -->
<div class="bottom">
</div>


</body>
</html>
