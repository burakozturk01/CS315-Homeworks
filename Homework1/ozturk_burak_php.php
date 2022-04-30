<!DOCTYPE html>
<html>
	<body>
		<?php

			function dynamicList() {
				$funcArr = [54,45,34];
				echo "Array from dynamicList(): " . print_r($funcArr,1) . "\n";
			}

			set_error_handler('exceptions_error_handler');

			function exceptions_error_handler($severity, $message, $filename, $lineno) {
				if (error_reporting() == 0) {
					return;
				}
				if (error_reporting() & $severity) {
					throw new ErrorException($message, 0, $severity, $filename, $lineno);
				}
			}
  
			// 1. What types are legal for subscripts?
	
			$s = "This is a string!";
	
			echo "String: $s\n";
			echo "First char of string: " . $s[0] . "\n";
			echo "Seventh char of string: " . $s[6] . "\n";
	
			print("String is subscriptable\n\n");
	
			$arr = [10,20,30,40,50];
			
			echo "Array: \n" . print_r($arr,1) . "\n";
			echo "First element of array: " . $arr[0] . "\n";
			echo "Third element of array: " . $arr[2] . "\n";
	
			echo "Array is subscriptable\n\n";
	
			// 2. Are subscripting expressions in element references range checked?
	
			echo "Array's length = " . count($arr) . "\n";
			echo "Fifth element: " . $arr[4] . "\n\n";
			
			echo "Trying to reach for sixth\n";
			try {
				echo $arr[5];
			}
			catch (Exception $e) {
				echo "\"" . $e->getMessage() . "\" error caught thus PHP utilizes range checking\n\n";
			}
	
			// 3. When are subscript ranges bound?
	
			$arr2 = [0,1,2,3,4];
			echo "Original array:\n";
			echo print_r($arr2,1) . "\n";
	
			echo "Trying to add a sixth item\n";
			$arr2[] = 5;
			echo "Sixth item: " . $arr2[5] . "\n";
	
			echo "It is possible to add after initialization, thus arrays have dynamic range bounding\n\n";
	
			// 4. When does allocation take place?
			echo "Calling a function that will create a list and print it:\n";
			dynamicList();
	
			try {
				echo "Than trying to print that array from main function:\n";
				echo print_r($funcArr,1);
			}
			catch (Exception $e) {
				echo "\"" . $e->getMessage() . "\" error raised thus arrays have dynamic allocation\n\n";
			}
	
			// 5. Are ragged or rectangular multidimensional arrays allowed, or both?
	
			echo "Trying to create rectangular MD array\n";
			$mdArr = [[1,2,3],[4,5,6]];
			echo print_r($mdArr,1) . "\n";
			
			echo "Thus it is possible to have rectangular multidimensional arrays\n";
			
			echo "Trying to add another element to the latter array inside mdArr (mdArr[1])";
			$mdArr[1][] = 7;
			echo print_r($mdArr,1) . "\n";
			
			echo "Thus it is possible to have both ragged and rectangular multidimensional arrays\n\n";
			
			// 6. Can array objects be initialized?
			
			echo "Arrays can be initialized as they declared or after they declared:\n";
			
			echo "asArr: \$asArr = [9,9,9]; print_r(\$asArr);\n";
			$asArr = [9,9,9];
			print_r($asArr);
			
			print("afterArr: \$afterArr; \$afterArr = [9,9,9]; print_r(\$afterArr);\n");
			$afterArr; $afterArr = [9,9,9]; print_r($afterArr); echo "\n\n";
			
			// 7. Are any kind of slices supported?
			
			echo "Slicing with array_slice(Array arr, int offset, int length = null) function\n";
			echo "Array: " . print_r($arr, 1) . "\n";
			echo "array_slice(\$arr, 2, 2):\n" . print_r(array_slice($arr, 2, 2),1) . "\n";
			echo "array_slice(\$arr, 2):\n" . print_r(array_slice($arr, 2),1) . "\n\n";
			
			// 8. Which operators are provided?
			
			$arr1 = [1,2,3]; unset($arr2); $arr2 = $arr1; $arr3 = [4,5,6];
			echo "arr1:\n" . print_r($arr1, 1) . "\narr3:\n" . print_r($arr3, 1) . "\n";
			
			echo "arr1 == arr3: ";
			echo ($arr1 == $arr3) ? "true\n" : "false\n";
			
			echo "arr2 = arr1\narr2:\n" . print_r($arr2, 1) . "\n";
			echo "arr1 == arr2: ";
			echo ($arr1 == $arr2) ? "true\n" : "false\n";
		?>
	</body>
</html>