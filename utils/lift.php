<?PHP
session_start();
$_SESSION["class"] = "utils";
$_SESSION["index"] = "lift";
header("Location: ../move/readytogo.php");
?>
