<?PHP
session_start();
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../utils/exit.php";
?>
<html lang="en">
	<head>
		<title>Mon mini-parking</title>
		<meta http-equiv="refresh" content="20; URL=../landing/landing.php">
		<link rel="stylesheet" href="../style.css">
	</head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">Sorties</a>
				<br />
				<br />
				<a class="text-header">Quelle sortie desirez - vous prendre ?</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
				<div class="button-inside">
				<a href="./exit_main.php">
				<img class="img-choice" src="../img/exit_white.png" alt="sortie pietonne"></a>
				<br />
				<a class="but" href="./exit_main.php">La plus proche</a>
				</div>
				<div class="button-inside">
				<a href="./lift.php">
				<img class="img-choice" src="../img/elevator_white.png" alt="ascenseur"></a>
				<br />
				<a class="but" href="./lift.php">Avec ascenseur</a>
				</div>
				</div>
			<div class="button">
				<a class="but-accueil" href="../landing/landing.php"><img
				class="img-accueil" src="../img/home_white.png" alt="accueil"></a>
				<a class="but-return" href="../landing/landing.php"><img
				class="img-return" src="../img/return_white.png" alt="return"></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
