<?PHP
if (!file_exists("./private"))
	mkdir("private", 0700);
if (!file_exists("./private/spots"))
{
	$tab_spots = array("a" => "a", "b" => "b", "c" => "c", "utils" => "utils");
	$tab_spots["a"] = array("a0" => "../img/maps/spots/A0.png", "a1" => "../img/maps/spots/A1.png", "a2" => "../img/maps/spots/A2.png", "a3" => "../img/maps/spots/A3.png", "a4" => "../img/maps/spots/A4.png");
	$tab_spots["b"] = array("b0" => "../img/maps/spots/B0.png", "b1" => "../img/maps/spots/B1.png", "b2" => "../img/maps/spots/B2.png", "b3" => "../img/maps/spots/B3.png");
	$tab_spots["c"] = array("c0" => "../img/maps/spots/C0.png", "c1" => "../img/maps/spots/C1.png", "c2" => "../img/maps/spots/C2.png", "c3" => "../img/maps/spots/C3.png");
	$tab_spots["utils"] = array("payment" => "../img/maps/Parking_payment.png", "lift" => "../img/maps/Parking_lift.png", "exit_main" => "../img/maps/Parking_exit_main.png");
	file_put_contents("./private/spots", serialize($tab_spots));
}
if (!file_exists("./private/reviews"))
{
	$tab_reviews = array("nul" => array(), "moyen" => array(), "bien" => array());
	file_put_contents("./private/reviews", serialize($tab_reviews));
}
header("Location: landing/landing.php");
?>
