<?php
session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>TP5</title>
</head>
<body>
    <?php

        if (!isset($_POST["suv"]) && !isset($_POST["suiv"]) && !isset($_POST["termine"])) {
        	# code...
          session_destroy();

       
    ?>
             <form method="post" action="hideNSeekSession.php" >
             	<div style="text-align: center;">
             		Prénom :
             		<input type="type" name="prenom" required><br>
             		<input type="submit" name="suv" value="Suivant">
             	</div>
             </form>
          <?php  
                 } ?>
    <?php
       if (isset($_POST["suv"])) {
    	 $_SESSION["prenom"]=$_POST["prenom"];
         
    ?>
             <form method="post" action="hideNSeekSession.php">
             	<div style="text-align: center;">
             		Nom :
             		<input type="type" name="nom" required ><br>
             		<input type="submit" name="suiv" value="Suivant">
             	</div>
             </form>
    <?php } 
    ?>
    
     <?php

         if (isset($_POST["suiv"])) {
    	  $_SESSION["nom"]=$_POST["nom"];
         
    ?>
             <form method="post" action="hideNSeekSession.php">
             	<div style="text-align: center;">
             		Promo :
             		<input type="type" name="promo" required><br>
             	
             		<input type="submit" name="termine" value="Terminer">
             	</div>
             </form>
    <?php } 
    ?>
    <?php
        if (isset($_POST["termine"])) {
           $_SESSION["promo"]=$_POST["promo"];
    ?>
          	 <div style="margin-left: 48%;" >
          		    <table border="1" >
        		    	  <tr>
        		    	  	<td>Prenom :</td>
        		    	  	<td><?php echo $_SESSION["prenom"]; ?></td>
        		    	  </tr>
        		    	  <tr>
        		    	  	<td>Nom :</td>
        		    	  	<td><?php echo $_SESSION["nom"]; ?></td>
        		    	  </tr>
        		    	  <tr>
        		    	  	<td>Promo :</td>
        		    	  	<td><?php  echo $_SESSION["promo"]; ?></td>
        		    	  </tr>
        		    </table>
                <a href="hideNSeekSession.php">Recommence</a>
           </div>
    <?php } ?>




</body>
</html>