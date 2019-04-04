
<!DOCTYPE html>
<html>
<head>
    <title>TP5</title>
</head>
<body>
    <?php

        if (!isset($_GET["suv"]) && !isset($_GET["suiv"]) && !isset($_GET["termine"])) {
            # code...

    ?>
             <form method="get" action="hideNSeekGet.php" >
                <div style="text-align: center;">
                    Prénom :
                    <input type="type" name="prenom"><br>
                    <input type="submit" name="suv" value="Suivant">
                </div>
             </form>
          <?php  
                 } ?>
    <?php
       if (isset($_GET["suv"])) {
        
         
    ?>
             <form method="get" action="hideNSeekGet.php">
                <div style="text-align: center;">
                    Nom :
                    <input type="type" name="nom"><br>
                    <input name="prenom" type="hidden" value=<?php echo $_GET["prenom"];?>>
                    <input type="submit" name="suiv" value="Suivant">
                </div>
             </form>
    <?php } 
    ?>
    
     <?php

         if (isset($_GET["suiv"])) {
        
         
    ?>
             <form method="get" action="hideNSeekGet.php">
                <div style="text-align: center;">
                    Promo :
                    <input type="type" name="promo"><br>
                    <input name="prenom" type="hidden" value=<?php echo $_GET["prenom"];?>>
                    <input name="nom" type="hidden" value=<?php echo $_GET["nom"];?>>
                    <input type="submit" name="termine" value="Terminer">
                </div>
             </form>
    <?php } 
    ?>
    <?php
        if (isset($_GET["termine"])) {
        
    ?>
             <div style="margin-left: 48%;" >
                    <table border="1" >
                          <tr>
                            <td>Prenom :</td>
                            <td><?php echo  $_GET["prenom"]; ?></td>
                          </tr>
                          <tr>
                            <td>Nom :</td>
                            <td><?php echo $_GET["nom"]; ?></td>
                          </tr>
                          <tr>
                            <td>Promo :</td>
                            <td><?php  echo $_GET["promo"]; ?></td>
                          </tr>
                    </table>
                <a href="hideNSeekGet.php">Recommence</a>
           </div>
    <?php } ?>




</body>
</html>