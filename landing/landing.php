<?PHP
session_start();
$_SESSION["path"] = "../landing/landing.php";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mon Mini-parking</title>
        <link rel="stylesheet" href="./landing.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">BONJOUR</a>
				<br />
				<br />
				<a class="text-header">Comment puis-je vous aider ?</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
			<div class="button">
				<a href="../utils/exit.php">
					<img class="img" src="../img/exit_white.png" alt="sortie"></a>
				<br />
				<a class="but" href="../utils/exit.php">Trouver la sortie</a>
			</div>
			<div class="button">
				<a href="../spots/car.php">
				<img class="img" src="../img/car_white.png" alt="ma voiture"></a>
				<br />
				<a class="but" href="../spots/car.php">Trouver ma voiture</a>
			</div>
			<div class="button">
				<a href="../utils/access.php">
				<img class="img" src="../img/handicap_white.png" alt="Acces facile"></a>
				<br />
				<a class="but" href="../utils/access.php">Acces facile</a>
			</div>
			<div class="button">
				<a href="../utils/payment.php">
				<img class="img" src="../img/cash_white.png" alt="paiement"></a>
				<br />
				<a class="but" href="../utils/payment.php">Borne Paiement</a>
			</div>
			<div class="button">
				<a href="../utils/call.php">
				<img class="img" src="../img/phone_white.png" alt="appel accueil">
				<br />
				<a class="but" href="../utils/call.php">Appel Accueil</a>
			</div>
			<div class="button">
				<a href="../help/help.html"><img class="img" src="../img/help_white.png" alt="mode
				d'emploi"></a>
				<br />
				<a class="but" href="../help/help.html">Aide</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
