<?php

$url='http://www.soso.com';

if (! ($content = file_get_contents ( $url ))) {
	die ( 'Failure to open' . $url );
}

echo $content;

?>