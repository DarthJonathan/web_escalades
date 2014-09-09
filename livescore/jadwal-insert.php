<?php


$arr = array('lomba','jam','lokasi','sx','sy','keterangan');


$verdict = true;

for( $i = 0; $i < count( $arr ); ++ $i ){
	if( !isset( $_POST[ $arr[ $i ] ] ) ) {
		echo "ERR : one or more field is empty";
		echo $arr[$i];
		$verdict = false;
		break;
	}
	
	
	$GLOBALS[ $arr[$i] ] = $_POST[ $arr[ $i ] ];	
}

if( $verdict ){
	include('db_connect.php');
	
	mysql_query("
	
	CREATE TABLE IF NOT EXISTS `jadwal` (
	  `id` int(20) NOT NULL AUTO_INCREMENT,
	  `lomba` varchar(200) NOT NULL,
	  `lokasi` varchar(200) NOT NULL,
	  `jam` varchar(200) NOT NULL,
	  `sekolahx` varchar(200) NOT NULL,
	  `sekolahy` varchar(200) NOT NULL,
	  `keterangan` varchar(200) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;
	", $con );
	
	$query = "
		INSERT INTO jadwal ( lomba, lokasi, jam, sekolahx, sekolahy, keterangan )
		VALUES( 
			'$lomba', 
			'$lokasi', 
			'$jam', 
			'$sx', 
			'$sy',
			'$keterangan`'
		);
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
<form action=jadwal-insert.php method=POST>
	Lomba : <input type=text name=lomba maxlength=200 />
	<BR>
	Lokasi : <input type=text name=lokasi maxlength=200 />
	<BR>
	Jam : <input type=text name=jam maxlength=200 />
	<br>
	Sekolah X : <input type=text name=sx maxlength=200 />
	<br>
	Sekolah Y : <input type=text name=sy maxlength=200 />
	<br>
	Keterangan : <input type=text name=keterangan maxlength=200 />
	<input type=submit value=Insert />

</form>

</body>
</html>