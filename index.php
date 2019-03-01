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
    }
  };
  xhttp.open("GET", "log.txt", true);
  xhttp.send();
}
</script>
  
</head>
<body>

<body>

<!-- Top -->
<div class="top">
<h1>Welcome to Fungi's City Hall</h1>
  <button type="button" onclick="loadDoc()">Change Content</button>
</div>


<!-- Content -->
<div class="content">
  <span id="content">
  </span>
</div>


<!-- Bottom -->
<div class="bottom">
</div>


</body>
</html>
