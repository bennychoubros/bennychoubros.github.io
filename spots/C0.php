<?PHP
session_start();
$_SESSION["class"] = "c";
$_SESSION["index"] = "c0";
header("Location: ../move/readytogo.php");
?>
