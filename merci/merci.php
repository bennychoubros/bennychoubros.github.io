<?PHP
session_start();
?>
<html langi="en">
    <head>
		<title>Bonne journee</title>
		<meta http-equiv="refresh" content="3; URL=../landing/landing.php">
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
					<br />
Merci pour votre avis,
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<img class="img-justone" src="../img/happy.png" alt="utile">
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
Bonne journee et a bientot !
					<br />
					<br />
					<br />
				</div>
			<div class="button">
				<a class="but-accueil" href="../landing/landing.php"><img
				class="img-accueil" src="../img/home_white.png" alt="accueil"></a>
<?php echo	'<a class="but-return" href="' .$_SESSION["old"]. '">'; ?><img
				class="img-return" src="../img/return_white.png" alt="return"></a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
