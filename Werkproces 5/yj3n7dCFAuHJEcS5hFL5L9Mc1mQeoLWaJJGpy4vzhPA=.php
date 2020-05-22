<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Camping</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="index.php?page=home" onclick="uitloggen()">Uitloggen</a>
			</div>
		</div>
	</nav>

	<h1>Klachten paneel beheer</h1><br>

	<div id="main">

	<!-- Alle klachten -->
		<div class="klachtL">
			<p class="maintext">Alle klachten</p>

			<!-- verwijderfunctie van de klachten -->
			<?php
			if(isset($_GET['action']) && ($_GET['action']) == 'delete'){
				$sth = $conn->prepare('DELETE FROM `klachten` WHERE `ID` = :ID');
				$sth->execute(array(':ID' => $_GET['id']));
				header('location: index.php?page=yj3n7dCFAuHJEcS5hFL5L9Mc1mQeoLWaJJGpy4vzhPA=');
			}
			?>

			
			<?php 
			// het ophalen van klachten en deze met een foreach allemaal tonen
				$sth = $conn->prepare('SELECT * FROM `klachten` ORDER BY `klachten`.`Datum` ASC');
				$sth->execute();
				$result = $sth->fetchAll();
			?>
				<table class="klachtlist">
					<ul style="background-color: white;">
						<li>Categorie</li>
						<li>Naam</li>
						<li>Datum</li>
						<li>Verblijf</li>
						<li>Uitleg</li>
			
					</ul>
				</table>
			<?php

			foreach($result as $r){
				?>
				<table class="klachtlist">
					<ul style="background-color: white;">
						<li><?php echo $r['Categorie'];?></li>
						<li><?php echo $r['Naam'];?></li>
						<li><?php echo $r['Datum'];?></li>
						<li><?php echo $r['Verblijfplaats'];?></li>
						<li><?php echo $r['Uitleg'];?></li>

						<li>
							<a href="index.php?page=yj3n7dCFAuHJEcS5hFL5L9Mc1mQeoLWaJJGpy4vzhPA=&action=delete&id=<?php echo $r['ID'];?>">Verwijder klacht</a>
						</li>
					</ul>
				</table>
			<?php
			};
			?>
		</div>




		<!-- Aflopende klachten -->
		<div class="klachtR">
			<p class="maintext">Melding van klachten die ouder dan 1 week zijn</p>

			<?php 
			// het ophalen van alle klachten die ouder zijn als een week. Aflopende klachten dus
				$sth = $conn->prepare('SELECT * FROM klachten WHERE Datum < DATE_SUB(NOW(), INTERVAL 7 DAY)');
				$sth->execute();
				$result2 = $sth->fetchAll();


			?>

					<table class="klachtlist">
						<ul style="background-color: white;">
							<li>Categorie</li>
							<li>Naam</li>
							<li>Datum</li>
							<li>Verblijf</li>
							<li>Uitleg</li>

						</ul>
					</table>
				<?php
				foreach($result2 as $r2){
					?>
					<table class="klachtlist">
						<ul style="background-color: white;">
							<li><?php echo $r2['Categorie'];?></li>
							<li><?php echo $r2['Naam'];?></li>
							<li><?php echo $r2['Datum'];?></li>
							<li><?php echo $r2['Verblijfplaats'];?></li>
							<li><?php echo $r2['Uitleg'];?></li>


						</ul>
					</table>
			<?php
				}
				
			?>
			<!-- het bijwerken en laten downloaden van een csv bestand van alle aflopende klachten.
			Door hier een csv betsand van te maken kunnen de aflopende klachten in bijvoorbeeld de databse
			van de schoonmaken gezet worden, waardoor het eenvoudiger wordt om klachten af te handelen 
			via de computer inplaats door mondeling alles door te geven -->
			<a href="index.php?page=test">Download CSV</a>
			</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
</body>
</html>