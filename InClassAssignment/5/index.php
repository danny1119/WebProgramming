<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			// ==============================================Question 1==============================================
			echo '1. ';
			echo '<i>“Good morning, Dave,” said H</i>';
			echo "<br>";
			// ==============================================Question 2==============================================
			echo '2. ';
			function calculateAreaOfCircle($radius = 1) {
				if(!is_numeric($radius) || $radius <= 0)
				return -1;
				
				return pow($radius, 2) * M_PI;
			}
			$radius = 5;
			echo("Area of the circle with the radius " .$radius . " is: ". calculateAreaOfCircle($radius));
			echo "<br>";
			// ==============================================Question 3==============================================
			echo '3. ';
			$temperature = 32;
			function fahrenheitToCelsius($f) {
				return (5/9)*($f-32);
			}
			echo $temperature . " degree Fahrenheit is " . fahrenheitToCelsius($temperature) . " degree Celsius";
			echo "<br>";
			// ==============================================Question 4==============================================
			echo '4. ';
			$string = "  PHP is fun   ";
			function wordCount($str) {
 				$trimmed = trim($str);
 				return strlen($trimmed);
 			}

			echo("String " . "' ".$string." '". " has " . wordCount($string ). " characters");
			echo "<br>";
			// ==============================================Question 5==============================================
			echo '5. ';
			$string = "WDWWLWWWLDDWDLL";
			$target = "WWW";
			$index = strpos($string,$target);

			echo "First letter after " .$target . " is ";
			echo $string[$index+strlen($target)];
			echo "<br>";
			// ==============================================Question 6==============================================
			echo '6. ';
			function isPalindrome($string){ 
  				return (strrev($string) == $string);
			}   
  
			$str = "abcdba";  
			echo $str . " is ";
			echo (isPalindrome($str)) ?  "palindrome" :  "not palindrome";
			echo "<br>";
			// ==============================================Question 7==============================================
			echo '7. ';
			$myInteger = 7;
			echo "The number: " .$myInteger . " is ";
			echo ($myInteger % 2 == 0) ? " even number" : " odd number";
			echo "<br>";	
			// ==============================================Question 8==============================================
			echo '8. ';
			$year = 2020;

			function isLeapYear($year) {
				return ((($year % 400) == 0)) || (($year % 100) != 0) && ((($year % 4) == 0)) ?  " leap year" : " not leap year";
			}			
			
			$res = $year . " is " .isLeapYear($year);
			echo  "<b>{$res}</b>";


		?>
	</body>
</html>