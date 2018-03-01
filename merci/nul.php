<?PHP
session_start();
$tab = unserialize(file_get_contents("../private/reviews"));
$vote = array("class" => $_SESSION["class"], "index" => $_SESSIOM["index"]);
$tab["nul"][] = $vote;
file_put_contents("../private/reviews", serialize($tab));
header("Location: ./merci.php");
?>
