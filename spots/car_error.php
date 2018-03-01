<?PHP
session_start();
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../landing/landing.php";
?>
<html lang="en">
    <head>
		<title>Ma voiture</title>
		<meta http-equiv="refresh" content="3; URL=../spots/car.php">
		<script type="text/javascript" src="keyboard.js" charset="UTF_8"></script>
		<link rel="stylesheet" href="keyboard.css">
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
	<a class="text-header" style="color:red">Erreur, Mauvais numero : pas une place de parking </a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
					<br />
					<br />
					<br />
					<br />
					<br />
					<div class="Follow-me">
						<div class="Follow-text">Entrez votre numero de place de Parking figurant sur votre ticket</div>
					<br />
					</div>
				</div>
			<div class="button">
				<a class="but-accueil" href="../landing/landing.php"><img
				class="img-accueil" src="../img/home_white.png" alt="accueil"></a>
<?php echo '<a class="but-return" href="' .$_SESSION["old"]. '">'; ?><img
				class="img-return" src="../img/return_white.png" alt="return"></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
