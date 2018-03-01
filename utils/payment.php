<?PHP
session_start();
$_SESSION["class"] = "utils";
$_SESSION["index"] = "payment";
$_SESSION["old"] = $_SESSION["path"];
$_SESSION["path"] = "../landing/landing.php";
header("Location: ../move/readytogo.php");
?>
