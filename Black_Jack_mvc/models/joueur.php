<?php
/**
 * 
 */

session_start();

function initialistion()
{
    unset($_SESSION["joueur"]);
    unset($_SESSION["croupier"]);
}

function distrubition_carte($cartes)
{
	# code...
   $carte=array_rand($cartes);
   $_SESSION["joueur"]["cartes"][]=$carte;
   if($carte=="as"){
      $_SESSION["joueur"]["point"]=test_as($_SESSION['joueur']["point"]);
   }else{
      $_SESSION["joueur"]["point"]+=$cartes[$carte];
   }
   if($_SESSION["joueur"]["point"]>21)
      echo "<br/>".$_SESSION["joueur"]["point"]." points, tu as perdu !!!!!<br/>";
}
?>