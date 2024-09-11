<!doctype html>
<html lang="en">
	<h1>Bienvenue sur mon site !</h1>
	  <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
	<p>Utilisateur :
	<?php  $nom = "Clément";
		echo("Bienvenue {$nom} sur le site");?>
		<br>
		<?php 
		$admin = false;
		if ($admin) {
			print("Accès Admin autorisé.");
		}
		elseif (!$admin) {
			print("Accès refusé !");
		}
		else {
			print("Espèce de hacker !!!!!"); //erreur ici dans ce cas
		}
		?>
	<br>
		<?php 
		$adminlevel = 0;
		switch ($adminlevel) {
			case 0:
				print("Aucun accès.");
			break; //on ressort + vite
			case 1:
				print("Accès support.");
			break;
			case 2:
				print("Accès maintenance.");
			break;
			case 3:
				print("Accès *");
			break;
			
			default:
				print("Erreur du niveau d'accès.");
				
		}
		?>
	
	</p>
	
	<br><br><br>
	<h1 align=center>Derniers posts</h1>
	<p>
	<?php
		//utilisateur 1
		//$utilisateur = "Clément";
		//$mail = "clement@nsi";
		//$age = 17;
		$clement = ["Clément","clement@nsi",17];
		
		//utilisateur 2
		//$utilisateur = "Prof";
		//$mail = "prof@nsi";
		//$age = 25;
		$prof = ["Prof","prof@nsi",25]; //+ rapide avk des tableaux
		
		print($prof[1]);
		
		
		?>
	
	
	</p>
</html>
