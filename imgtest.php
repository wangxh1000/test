<?php
if (isset ( $_GET ['message'] )) {
	$font = 'times';
	$size = 12;
	$im = imagecreatefrompng ( 'button.png' );
	$tsize = imagettfbbox ( $size, 0, $font, $_GET ['message'] );
	
	$dx = abs ( $tsize [2] - $tsize [0] );
	$dy = abs ( $tsize [5] - $tsize [3] );
	$x = (imagesx ( $im ) - $dx) / 2;
	$y = (imagesy ( $im ) - $dy) / 2 + $dy;
	
	$black = imagecolorallocate ( $im, 0, 0, 0 );
	imagettftext ( $im, $size, 0, $x, $y, $black, $font, $_GET ['message'] );
	
	header ( 'Content-type: image/png' );
	imagepng ( $im );
	exit ();
}
?>

<html>
<head>
<title>Button Form</title>
</head>

<body>
	<form action="<?php $PHP_SELF?>" method="get">
		Enter message to appear on buton: <input type="text" name="message" />
		<input type="submit" value="Create Button" />
	</form>
</body>
</html>

