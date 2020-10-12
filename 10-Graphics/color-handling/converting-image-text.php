<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Converting an image to text</title>
</head>
<body bgcolor="#000000">
	<tt><?php 
			$image = imagecreatefromjpeg("logo-tiny.jpg");
			$dx = imagesx($image);
			$dy = imagesy($image);

			for($y = 0; $y < $dy; $y++){
				for($x = 0; $x < $dx; $x++){
					$colorIndex = imagecolorat($image, $x , $y);
					$rgb = imagecolorsforindex($image, $colorIndex);

					printf('<font color=#%02x%02x%02x>#</font>', $rgb['red'], $rgb['green'], $rgb['blue']);
				}

				echo "<br>\n";

			}?> 

	</tt>	
</body>
</html>