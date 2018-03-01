<?PHP
session_start();
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../move/moveinprogress.php";
?>
<html lang="en">
	<head>
		<meta http-equiv="refresh" content="5; URL=../merci/vote.php">
		<title>Suivez - moi</title>
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">Suivez - moi svp</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
					<br />
					<img class="img-maps" src="../img/garage.jpg"/>
					<br />
					<div class="Follow-me">
						<div class="Follow-text">Suivez - moi !</div>
					</div>
				</div>
			<div class="button">
				<a class="but-accueil" href="../landing/landing.php"><img
				class="img-accueil" src="../img/home_white.png" alt="accueil"></a>
				<a class="but-return" href="./readytogo.php"><img
				class="img-return" src="../img/return_white.png" alt="return"></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
