#!/usr/bin/php
<?php
	echo "Enter a number: ";
	while (fscanf(STDIN, "%s", $number))
	{
		if (is_numeric($number))
		{
			if ($number % 2 == 0)
				echo "The number $number is even\n";
			else
				echo "The number $number is odd\n";
		}
		else
			echo "'$number' is not a number\n";
		echo "Enter a number: ";
		$number = NULL;
	}
	echo "\n";
?>
