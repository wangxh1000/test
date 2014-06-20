<?php
$tireqty = $_POST ['tireqty'];
$oilqty = $_POST ['oilqty'];
$sparkqty = $_POST ['sparkqty']?>

<html>
<head>
<title>Bob's Auto Parts - Order Results</title>
</head>

<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
	
	<?php
	echo $_POST ['tireqty'] . ' tires</br>';
	echo $_POST ['oilqty'] . ' bottles of oil<br/>';
	echo $_POST ['sparkqty'] . ' spark plugs<br/>';
	echo "<br/> ";
	echo "You entered $tireqty, $oilqty, $sparkqty";
	echo "<br/> ";
	
echo<<<EOF
	</br>
	this is a paragraph.<br/>
	this is a paragraph.
EOF;
	
	?>
	
</body>
</html>