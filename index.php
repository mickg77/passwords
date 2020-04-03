<?php

$string ="123";
$salt = "somth!ng a bit more solid to b3 br0ken d0wn!";
$encrypted_string=md5($string.$salt);

echo "<p>Original String".$string."</p>";
echo "<p>Encrypted String".$encrypted_string."</p>";


if(isset($_POST['submit'])){
  
  $textboxvalue=$_POST['textbox'];
  if(md5($textboxvalue)==$encrypted_string){
    echo "<h2>You can log in</h2>";
  }
  else {
    echo "<h2>Your password is wrong</h2>";
  }
  
}



?>

<form name="form1" action="" method="POST">
  
  <input type="text" name="textbox">
  <input type="submit" name="submit">
  
</form>