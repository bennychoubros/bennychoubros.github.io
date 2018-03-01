<?PHP
session_start();
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../merci/vote.php";
?>
<html lang="en">
    <head>
		<title>Votre avis</title>
		<meta http-equiv="refresh" content="20; URL=../landing/landing.php">
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">Merci</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
					<br />
					<br />
Votre avis m'interesse !
					<br />
Comment m'avez vous trouve?
					<br />
					<br />
					<br />
				<a href="nul.php"><img class="img-vote" src="../img/sad.png" alt="peu utile"></a>
					<br />
					<br />
					<br />
				<a href="moyen.php"><img class="img-vote" src="../img/neutral.png" alt="moyen"></a>
					<br />
					<br />
					<br />
				<a href="bien.php"><img class="img-vote" src="../img/happy.png" alt="utile"></a>
					<br />
					<br />
					<br />
Merci pour votre avis,
					<br />
Bonne journee et a bientot !
					<br />
					<br />
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
