<html>
<head>
<title>Bond Movies</title>
</head>
</html>

<body>
	<table border=1>
		<tr>
			<th>Movie</th>
			<th>Year</th>
			<th>Actor</th>
		</tr>
<?php
require_once 'DB.php';
$db = DB::connect ( "mysql://root:@localhost/welcometest" );
if (DB::iserror ( $db )) {
	die ( $db->getMessage () );
}

$sql = "select movie.title, movie.year, actor.name
		from movie, actor
		where movie.actor=actor.id
		order by movie.year asc";

$q = $db->query ( $sql );
if (DB::iserror ( $q )) {
	die ( $q->getMessage () );
}

while ( $q->fetchInto ( $row ) ) {
	?>
		<tr>
			<td><?=$row[0]?></td>
			<td><?=$row[1]?></td>
			<td><?=$row[2]?></td>
		</tr>
<?php }?>

</table>
</body>