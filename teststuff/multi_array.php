<!DOCTYPE HTML>
<html>
	<body>
		<?php 
			$cars = array
			(
				array("Volvo", 22, 15),
				array("BM", 15, 14),
				array("Saab", 4, 3),
				array("Rover", 15, 26)
			);
			
			echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br><br>";
			
			for($row = 0; $row < 4; $row++)
			{
				echo "<p><b>Row number $row </b></p>";
				echo "<ul>";
				
				for($col=0; $col < 3; $col++)
				{
					echo "<li>".$cars[$row][$col]."</li>";
				}
				echo "</ul>";
			}
		?>
	</body>
</html>