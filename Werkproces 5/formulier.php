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
				<a class="nav-item nav-link" href="index.php?page=home">Home</a>
				<a class="nav-item nav-link" href="index.php?page=formulier">Klachtformulier</a>
				<a class="nav-item nav-link" href="index.php?page=login">Admin Login</a>
			</div>
		</div>
	</nav>

	<form style="padding: 5%;">
        
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categorie van klacht:</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Algemene onderhoud</option>
                <option>Defectie</option>
                <option>Lekkage</option>
                <option>Verzorging van verblijfplaats</option>
                <option>Hygiëne</option>
            </select>
        </div>
        <div class="form-group">

            <label for="exampleFormControlInput1">Naam:</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Voledige naam" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="camping@maasvalei.nl" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Datum:</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="DD-MM-JJJJ" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Plaats van verblijf:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nummer van verblijfplaats" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Overige toelichting van klacht:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required></textarea>
        </div>
        <input type="submit" value="Inzenden" onclick="gestuurd()">
    </form>

    
	<footer class="page-footer font-small blue">
		<div class="footer-copyright text-center py-3">© 2020 Copyright:
		<a href="">CampingDeMaasvalei.nl</a>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
</body>
</html>