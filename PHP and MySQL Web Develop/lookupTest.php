<html>
<head>
<title>Stock Quote From NASDAQ (PHP和MySQL Web开发)</title>
</head>

<body>
<?php
// choose stock to look at
$symbol = 'AMZN';
echo '<h1>Stock quote for ' . $symbol . '</h1>';

$url = 'http://finance.yahoo.com/d/quotes.csv' . '?s=' . $symbol . '&e=.cvs&f=s11d1t1c1ohgv';
if (! ($content = file_get_contents ( $url ))) {
	die ( 'Failure to open' . $url );
}

// extract relavant data
list ( $none, $symbol, $date, $time, $rate, $quote ) = explode ( ',', $content );
$date = trim ( $date, '"' );
$time = trim ( $time, '"' );

echo '<p>' . $symbol . ' was last sold at: ' . $quote . '</p>';
echo '<p>Quote current as of ' . $date . ' at ' . $time . '</p>';

// acknowledge source
echo '<p>This infomation retrieved from <br/> <a href="' . $url . '">Yahoo Finance</a>.</p>';
?>
</body>
</html>