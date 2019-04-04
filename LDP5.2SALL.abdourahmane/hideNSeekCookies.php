


<!DOCTYPE html>
<html>
<head>
	<title>TP5</title>
</head>
<body>
    <?php

        if (!isset($_POST["suv"]) && !isset($_POST["suiv"]) && !isset($_POST["termine"])) {
        	# code...
         

       
    ?>
             <form method="post" action="hideNSeekCookies.php" >
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
        setcookie('prenom', $_POST["prenom"], time() + 365*24*3600);
    	
         
    ?>
             <form method="post" action="hideNSeekCookies.php">
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
    	  
          setcookie('nom', $_POST["nom"], time() + 365*24*3600);
         
    ?>
             <form method="post" action="hideNSeekCookies.php">
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
           
           $_COOKIE["promo"]=$_POST["promo"]
    ?>
          	 <div style="margin-left: 48%;" >
          		    <table border="1" >
        		    	  <tr>
        		    	  	<td>Prenom :</td>
        		    	  	<td><?php echo $_COOKIE["prenom"]; ?></td>
        		    	  </tr>
        		    	  <tr>
        		    	  	<td>Nom :</td>
        		    	  	<td><?php echo $_COOKIE["nom"]; ?></td>
        		    	  </tr>
        		    	  <tr>
        		    	  	<td>Promo :</td>
        		    	  	<td><?php  echo $_COOKIE["promo"]; ?></td>
        		    	  </tr>
        		    </table>
                <a href="hideNSeekCookies.php">Recommence</a>
           </div>
    <?php } ?>




</body>
</html>