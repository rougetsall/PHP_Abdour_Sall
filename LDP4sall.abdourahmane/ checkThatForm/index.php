
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<style type="text/css">
	  body{
	  	display: flex;
	  }
		.formul{
			margin: auto;
			display: block;
			background-color: blue;
			width: 750px;
			height: 700px;
			margin-left: 25%; 
			border-radius: 15px;
			box-shadow: 1px 1px 20px #000;
		}
		h2{
			text-align: center;
		}
		
		.inpp{
			width: 300px;
			height: 30px;
			border-radius: 10px;
		}

	</style>
</head>
<body>
	
	<div class="formul">
		<h2>Inscrisption</h2>
      <span id="dep"></span>
	<form method="post" action="checkThatForm.php" id="form" name="formss">
		<table>
			<tr>
				<td>
					
					 Prenom :
				</td>
				<td>
					<input class="inpp" type="text" name="prenom" id="prenom">
				</td>
				<td id="pre" ></td>
			</tr>
			<tr>
				<td>
					Nom :
				</td>
				<td>
					<input class="inpp" type="text" name="nom" id="nom" >
				</td>
			
				<td id="nomm" ></td>
			</tr>
			<tr>
				<td>
				  Email :
				</td>
				<td>
					<input class="inpp" type="email" name="email" id="email">
			
				</td>
				<td id="emai" ></td>
			</tr>
			<tr>
				<td>
				  Age :
				</td>
				<td>
					<input  class="inpp" type="text" name="age" id="age">
				
				</td>
				<td id="ag" ></td>
			</tr>
			<tr>
				<td>
				  Bachelor :	</td>
				<td>
					<input class="inpp" type="text" name="bachelor" id="bachelor"> 
			
				</td>
				
				<td id="bach" ></td>
			</tr>
			<tr>
				<td>
				 Mot de passe :	<span id="dmd"></span> 
				</td>
				<td>
					<input class="inpp" type="password" name="mdp" id="mdp">

			
				</td>
			
				<td id="pass" ></td>
			</tr>
			<tr>
				<td>
				Retapez mot de passe:
				<td>
					<input class="inpp" type="password" name="rmdp" id="rmdp">
				</td>
				
				<td id="rpass" ></td>
			</tr>
		</table>
	

		<div></div>
		
		<div id="sexe">Sexe <span id="sex"></span>


			<div><input type="radio" name="sexe"   value="Femme">Femme</div>
		    <div><input type="radio" name="sexe" value="homme" id="sexe1"  >homme</div>
              
				<span id="sex">gfdhfjkk</span>
		</div>
		<div > Quelest votre tome du voyage galactique prefere<br>
					 <div><input type="checkbox" name="tome[]" value="le Guide du voyageur galactique">le Guide du voyageur galactique</div>
					<div><input type="checkbox" name="tome[]" value="le Dernier Restaurant avant la fin du monde">le Dernier Restaurant avant la fin du monde</div>
					<div><input type="checkbox" name="tome[]" value="La vie , l'Univers et le Reste">La vie , l'Univers et le Reste</div>
					<div><input type="checkbox" name="tome[]" value="Salue ,et encore merci pour le poisson">Salue ,et encore merci pour le poisson</div>
					<div><input type="checkbox" name="tome[]" value="Globalement inoffensive">Globalement inoffensive</div>
					

			</div>
			<div><br></div>
			<div> Un petit commentaire<br>
			   <textarea   style="font-weight: bold"   name="mess" rows="5" cols="40" value="" size="35" disabled><b> si c'est text s'affiche en gras, u lost the game </b></textarea></div>
             <div style="text-align: center; "><input type="submit" name="submit" id="submit"  value="inscription" style="text-align: center; font-size: 20px; border-radius: 5px;background-color: #00951E;"></div>
	</form>
	</div>
	<script type="text/javascript" src="checkThatForm.js"></script>
</body>
</html>

