<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h2>Formulář</h2>
<form method="post" action="idk2.php"> 

<?php //sem web kam přejít
?>

  Jméno: <input type="text" name="name">

  <br><br>
 
  E-mail: <input type="text" name="email">

  <br><br>
  
  Jste drogově závislí? <input type="radio" name="drug" value="ano">Ano
                        <input type="radio" name="drug" value="ne">Ne

  <br><br>
  
  Napište něco o své závislosti: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <input type="radio" name="gender" value="croissant">Croissant

  <br><br>
 
  <input type="submit" name="submit" value="Submit">  

</form>

</body>
</html>