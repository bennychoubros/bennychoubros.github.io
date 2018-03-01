<?PHP
session_start();
$_SESSION["class"] = "b";
$_SESSION["index"] = "b0";
header("Location: ../move/readytogo.php");
?>
