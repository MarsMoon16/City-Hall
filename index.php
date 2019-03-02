<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
  
    if ($_POST['message'] != NULL) {
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
      if ($_POST['message'] == "clear") {
        $file = fopen("log.txt", "w") or die("Unable to clear file!");
        
        fclose($file);
        }
      else {
    $string = "<br>". $pseudo. " ". date("H:i") . ": " . $message;
    $file = fopen("log.txt", "a") or die("Unable to open file!");
    fwrite($file, $string);
    fclose($file);
    }
      }
  else { $pseudo = "Anonymous"; }
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
      <p>Pseudo:<input type="text" name="pseudo" value="<?php echo $pseudo; ?>"><br>
      <textarea id =test2" name="message" rows="5" cols="40" placeholder="Message"></textarea>
      <input type="submit" value="Send">
    </form>
   </div>
  </div>

<!-- Bottom -->
<div class="bottom">
</div>


</body>
</html>
