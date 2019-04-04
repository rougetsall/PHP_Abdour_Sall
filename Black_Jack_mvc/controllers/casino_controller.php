<?php 
session_start();
include("../models/joueur.php");
include("../models/cartes.php");

if(isset($_POST['new'])){
    initialistion();
}
if(isset($_POST['carte']))
{
   distrubition_carte($cartes);
}
if($_SESSION["joueur"]["cartes"]==""){
    $carte=array_rand($cartes);
   $_SESSION["croupier"]["cartes"][]=$carte;
   $_SESSION["croupier"]["point"]+=$cartes[$carte];
   $carte=array_rand($cartes);
   $_SESSION["joueur"]["cartes"][]=$carte;
   $_SESSION["joueur"]["point"]+=$cartes[$carte];
}
if(isset($_POST["reste"])){
   while($_SESSION["croupier"]["point"]<17){
      $carte=array_rand($cartes);
      $_SESSION["croupier"]["cartes"][]=$carte;
      if($carte=='as'){
         $_SESSION["croupier"]["point"]=test_as($_SESSION["croupier"]["point"]);
      }else{
         $_SESSION["croupier"]["point"]+=$cartes[$carte];
      }
      if($_SESSION["croupier"]['point']>21){
         echo "<br/>".$_SESSION["croupier"]["point"]." points, le croupier a perdu<br/>";
      }
      if($_SESSION["croupier"]["point"]< $_SESSION["joueur"]["point"]){
         echo "<br/>le croupier a perdu<br/>";
      }else{
         echo "<br/>vous avez perdu<br/>";
      }
   }
}