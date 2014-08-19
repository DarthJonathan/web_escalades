<?php

$arr = array('game','sx','sy','scx','scy');


$verdict = true;

for( $i = 0; $i < count( $arr ); ++ $i ){
	if( !isset( $_POST[ $arr[ $i ] ] ) ) {
		echo "ERR : one field is empty";
		$verdict = false;
		break;
	}
	
	
	$GLOBALS[ $arr[$i] ] = $_POST[ $arr[ $i ] ];	
}

if( $verdict && (!is_numeric( $scx ) || !is_numeric( $scy ) ) ){
	echo "ERR : score is not numeric"; 
	$verdict = false;
}

if( $verdict ){
	include('db_connect.php');

	$query = "
		INSERT INTO $game ( sekolah_x, sekolah_y, score_x, score_y ) 
		VALUES ( 
			'$sx',
			'$sy',
			'$scx',
			'$scy'
		)
	";
	
	$res = mysql_query( $query, $con );
	
	if( $res == null ){
		echo "FAIL on $query";
	}
	else {
		echo "INSERT SUCCESS";
	}
}


?>

<html>
<body>

<hr noshade>
<form action=live-score-insert.php method=POST>
	Game :
	<select name=game>
		<option value=basket>Basket</option>
		<option value=catur>Catur</option>
		<option value=futsal>Futsal</option>
		<option value=reserve>Reserve</option>
	</select>
	<br>
	Sekolah X : <input type=text name=sx maxlength=200 />
	Score X : <input type=text name=scx maxlength=200 />
	<br>
	Sekolah Y : <input type=text name=sy maxlength=200 />
	Score Y : <input type=text name=scy maxlength=200 />
	<br>
	<input type=submit value=Insert />

</form>

</body>
</html>