'<form method="post" action="">
le croupier
<?php
foreach($_SESSION["croupier"]["cartes"] as $value){
  echo $value." , "; 
}
echo "<br/>";
echo "point du croupier :".$_SESSION["croupier"]['point'];
echo "<br/>";
?>
votre cartes :
<?php
foreach($_SESSION['joueur']["cartes"] as $value){
  echo $value." , ";
 
}
?>
<input type="submit" name="carte" value= "carte" />
<input type="submit" name="reste" value= "reste" />
<input type="submit" name="new" value= "nouvelle partie" />
</form>
