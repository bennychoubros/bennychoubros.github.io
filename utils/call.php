<?PHP
session_start();

$_SESSION["class"] = "utils";
$_SESSION["index"] = "call";
$_SESSION["old"] = $_SESSION["path"];
?>
<html lang="en">
    <head>
		<title>Appel...</title>
		<meta http-equiv="refresh" content="4; URL=../merci/vote.php">
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">Appel Accueil</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
					<br />
					<br />
					<br />
Appel accueil en cours ...
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<img class="img-justone" src="../img/phone_red.png" alt="utile">
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
Merci de patienter ...
					<br />
					<br />
					<br />
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
