<html>
<head>
	<title>getEvenNumbers</title>
</head>
<body>
	<form>
		n:
		<input type="text" name="n" method="GET">
		<input type="submit" value="submit">
	</form>
	<?php
	if (isset($_REQUEST['n'])) {
		$n = $_REQUEST['n'];
		echo 'n = ' . $n . "<br>";
		echo 'even numbers: ';
		for ($i = 2; $i <= $n; $i++)
		{
			if ($i%2 == 0) {
				if ($i == $n || $i == $n - 1)
				{
					echo $i . "<br>";
				} else {
					echo $i . ', ';
				}
			}
		}
		echo 'prime numbers: ';
		for ($i = 2; $i <= $n; $i++)
		{
			$prime = TRUE;
			for ($j = 2; $j < $i; $j++)
			{
				if ($i%$j == 0)
				{
					$prime = FALSE;
				}
			}
			if ($prime == TRUE) {
				echo $i . ' ';
			}
		}
	}
	?>
</body>
</html>