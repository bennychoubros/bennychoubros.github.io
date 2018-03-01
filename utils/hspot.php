<?PHP
session_start();
$tab = unserialize(file_get_contents("../private/spots"));
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../utils/hspot.php";
?>
<html lang="en">
    <head>
		<title>Itineraire</title>
		<meta http-equiv="refresh" content="30; URL=../landing/landing.php">
        <link rel="stylesheet" href="../style.css">
    </head>
	<body>
<div class="wrapper">
	<div class="header">
			<div class="inside-header">
				<a class="text-header">Choississez une place</a>
			</div>
		</div>
		<div class="back">
			<div class="panel">
				<div class="text">
					<br />
<p>
	<map name="hspots" id="hspots">
	<area shape="rect" coords="0,375,97,424" href="../spots/A0.php" alt="A0"/>
	<area shape="rect" coords="131,0,188,105" href="../spots/B0.php" alt="B0"/>
	<area shape="rect" coords="405,107,502,161" href="../spots/C0.php" alt="C0"/>
	</map>
</p>
<br />
<p>
	<img src="../img/maps/Parking_hspot.png" height="424" width="598" usemap="#hspots" alt="places handicapees"/>
</p>
					<br />
					<div class="Follow-me">
					<br />
					<br />
						<div class="Follow-text">Cliquez sur la place de votre choix</div>
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
