<html>
<head>
<title>Live Score - Escalades Revinesia</title>
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/style-home.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
</head>
<body>
<div class="container">
	<div class="five columns">
		<h1 class="tagline" align="center">Live Score</h1>
    </div>
    <div class="sixteen columns">
    	<?php
			$con = mysql_connect("localhost", "root", "") or die ('error_user');
			$db_selected = mysql_select_db("k9539147_esc",$con) or die ('error_db');
			$sql = "SELECT * from basket";
			$result = mysql_query($sql,$con) or die ('query_error');
			$data=mysql_fetch_row($result);			
    	?>
        <h2 class="tagline" align="center">Basket</h2>
        <table>
        	<tr>
            	<td><h3 class="tagline"><? $data[1]  ?></h2></td>
                <td><h1 class="tagline"><?  $data[3]  ?></h1></td>
                <td><h1 class="tagline"><?  $data[4]  ?></h1></td>
                <td><h3 class="tagline"><?  $data[2]  ?></h2></td>
            </tr>
            <tr>
            	<td><h3 class="tagline"><?  $data[1]  ?></h2></td>
                <td><h1 class="tagline"><?  $data[3]  ?></h1></td>
                <td><h1 class="tagline"><?  $data[4]  ?></h1></td>
                <td><h3 class="tagline"><?  $data[2]  ?></h2></td>
            </tr>
       	</table>
    </div>
</div>
</body>
</html>
