<!DOCTYPE html>
<html>
	<body>
		<?php

			function returnTrue() {
				echo "True called\n";
				return true;
			}
			
			// 1. How are the boolean values represented?
			
			echo "True and False's representations:\n";
			
			$b = true;
			echo "True: " . $b . "\n";
			echo "False: " . !$b . "\n\n";
			 
			// 2. What operators are short-circuited?
	
			// AND and OR: &&, ||
	
			echo "\nIf operator is short-circuited, 'True called' will get printed less than two times\nelse operator is not short-circuited.\n";
	
			echo "\n&&:\n";
			true && returnTrue();
			false && returnTrue();
	
			echo "\n||:\n";
			true || returnTrue();
			false || returnTrue();
	
			echo "\n^:\n";
			true ^ returnTrue();
			false ^ returnTrue();
		?>
	</body>
</html>