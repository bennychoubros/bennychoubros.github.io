<?PHP
session_start();
if ((isset($_POST["number"])))
{
	$tmp = unserialize(file_get_contents("../private/spots"));
	$i = 0;
	foreach ($tmp as $key => $value)
	{
		if (!strncmp($key, $_POST["number"], 1))
		{
			foreach ($value as $tab => $elem)
			{
				if (!strcmp($tab, $_POST["number"]))
				{
					$x = $key;
					$y = $tab;
					$i = 1;
					break ;
				}
			}

		}
	}
	if ($i == 1)
	{
		$_SESSION["class"] = $x;
		$_SESSION["index"] = $y;
		header("Location: ../move/readytogo.php");
	}
	else
		header("Location: ../spots/car_error.php");
}
else
	header("Location: ../spots/car_error.php");
?>
