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
  <a href="/">Home</a>
</div>


<!-- Content -->
<div class="content">
  <div class="log">
      <span id="content">
      </span>
  </div>
  <div class="inputs">
    <form action="index.php" method="POST">
      Pseudo:<input type="text" name="pseudo" value="Anonymous"><br>
      <textarea id="test2" name="message" rows="5" cols="40" placeholder="Message"></textarea>
      <input type="submit" value="Send">
    </form>
   </div>
  </div>
  <p id="test">
  <?php 
    echo "<br>Your pseudo: ". $_POST['pseudo']. "  your message: ". $_POST['message'];
    $string = "<br>". $_POST['pseudo']. " said ". $_POST['message'];
    fopen("test.txt", "a");
    echo $file = fwrite($file, $string);
    fclose($file);
    ?>
    </p>

<!-- Bottom -->
<div class="bottom">
</div>


</body>
</html>
