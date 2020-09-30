<?php

 // get the original image
 $im = imagecreatefrompng("image.png");

 // new color
 $blue = imagecolorallocate($im, 0, 0, 255);                 // blue
 $red = imagecolorallocate($im, 255, 0, 0);                  // red

imagefilledrectangle ($im,   80,  5, 195, 60, $blue);
imagestring($im, 5, 80, 5, "Modified!", $red);

imagepng($im,"modified_image.png");
imagedestroy($im);

print "<img src=image.png> <br>Modified image<BR> <img src=modified_image.png>";

 ?>