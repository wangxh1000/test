<?php
header("content-type:text/html; charset=utf-8");

$url = 'http://www.careerbuilder.com.cn/jobs/jhm6xl73g2cbyd5mj26';
$matchs = array ();

if (! ($content = file_get_contents ( $url ))) {
	die ( 'Failure to open' . $url );
}

$pattern='/(<title>)([\s|\S]+)(<\/title)/';
$pattern='/(<h1.+>)([\s|\S]+)(<\/h1>)/';

if (preg_match ( $pattern, $content, $matchs )) {
}

?>

<html>
<head>
<title>Regex test</title>
</head>

<body>
<?php
//echo var_dump($matchs);

$html = preg_replace("/<([a-zA-Z]+)[^>]*>/","<\\1>",$matchs[2]);
echo '职位名: '.$html;


// 职位描述是下面两个内容之间的内容
// <!-- Description Start -->
// <!-- End Description Area -->

?>



</body>
</html>

