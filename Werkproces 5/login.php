<?php require_once('dbconfig.php');?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Camping</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
                <a class="nav-item nav-link" href="index.php?page=home">Home</a>
				<a class="nav-item nav-link" href="index.php?page=formulier">Klachtformulier</a>
				<a class="nav-item nav-link" href="index.php?page=login">Admin Login</a>
			</div>
		</div>
    </nav>
    
<div class="content">
    <form name="inloggen" method="POST" encypte="multipart/form-data" action="">
        <p id="page_titel">Inloggen</p>
        <input type="tekst" name="gebruikersnaam" placeholder="gebruikersnaam" />
        <input type="password" name="wachtwoord" placeholder="wachtwoord" />
        <div class="icon_container">
            <input type="submit" class="icon" id="sumbit" name="submit" value="&rarr;" />
        </div>
    </form>

</div>


<!-- login functie -->
<?php
    if (isset($_POST["submit"])) {
        $melding = "";
        $gebruikersnaam = htmlspecialchars($_POST["gebruikersnaam"]);
        $wachtwoord = htmlspecialchars($_POST["wachtwoord"]);
        try {
            $sql = 'SELECT * FROM users WHERE gebruikersnaam = ?';
            $stmt = $conn ->prepare($sql);
            $stmt->execute(array($gebruikersnaam));
            $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($resultaat) {
                $wachtwoordInDatabase = $resultaat["wachtwoord"];
                $gebruikersnaamInDatabase = $resultaat["gebruikersnaam"];

                if ($wachtwoordInDatabase == $wachtwoord && $gebruikersnaamInDatabase == $gebruikersnaam) { 
                    $melding = $resultaat["gebruikersnaam"];
                    echo "<script>location.href='index.php?page=yj3n7dCFAuHJEcS5hFL5L9Mc1mQeoLWaJJGpy4vzhPA=';</script>";

                } 
                else {
                    $melding = "Probeer nogmaals in te loggen<br>";
                }
            } 
            else
            {
                $melding = "Probeer nogmaals in te loggen<br>";
            }
        } 
        catch ( PDOException $e) {
            echo  $e->getMessage();
        }
        echo "<div id='melding'>$melding</div>";
    }


?>

    <footer class="page-footer font-small blue">
		<div class="footer-copyright text-center py-3">© 2020 Copyright:
		<a href=""> CampingDeMaasvalei.nl</a>
		</div>
	</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
</body>
</html>