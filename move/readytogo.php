<?PHP
session_start();
$tab = unserialize(file_get_contents("../private/spots"));
$index = $_SESSION["index"];
$class = $_SESSION["class"];
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../move/readytogo.php";
?>
<html lang="en">
    <head>
		<title>Itineraire</title>
		<meta http-equiv="refresh" content="20; URL=../landing/landing.php">
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">Itineraire</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
					<br />
<?php echo '<img class="img-maps" src="' .$tab[$class][$index]. '"/>'; ?>
					<br />
					<div class="Follow-me">
						<div class="Follow-text">Voulez-vous que je vous y emmene?</div>
					<br />
						<div class="Follow-yes"><a class="Follow-but" href="./moveinprogress.php">OUI</a></div>
						<div class="Follow-no"><a class="Follow-but" href="../merci/vote.php">NON</a></div>
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
