<?PHP
session_start();
$_SESSION["class"] = "a";
$_SESSION["index"] = "a0";
header("Location: ../move/readytogo.php");
?>
