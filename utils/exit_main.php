<?PHP
session_start();
$_SESSION["class"] = "utils";
$_SESSION["index"] = "exit_main";
header("Location: ../move/readytogo.php");
?>
