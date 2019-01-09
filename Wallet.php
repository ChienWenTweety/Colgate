<html>
<head>
	<title>Colgate</title>
<?php
 	require_once('Db_connect.php');
//牙膏部分
 	$sql_tp = "SELECT cus_name, cus_phone, colgate_toothpaste_price,total_toothpaste_price FROM customer";
	$tp = $mysqli->query($sql_tp);

	$sql_tp1 = "SELECT cus_name, cus_phone, colgate_toothpaste_price,total_toothpaste_price FROM customer order by total_toothpaste_price LIMIT 12,1";
	$tp1 = $mysqli->query($sql_tp1);

	$sql_tp2 = "SELECT cus_name, cus_phone, colgate_toothpaste_price,total_toothpaste_price FROM customer LIMIT 3,1";
	$tp2 = $mysqli->query($sql_tp2);
	//錢包大小中位數
	while($rs1 = mysqli_fetch_row($tp1)){
		$median_ttp=$rs1[3];
	}
	//個別錢包佔有率中位數
	while($rs1 = mysqli_fetch_row($tp2)){
		$median_ctp=$rs1[2]/$rs1[3];
		//echo $median_ctp . "<br>";
	}

	
	/**for($i=0; $i<$tp->num_rows; $i++){
			$rs1 = mysqli_fetch_row($tp);
			echo round($rs1[2]/$rs1[3], 2). "<br>";
	}
	*/	

	mysqli_data_seek($tp, 0); //重製
	echo "牙膏<br>";

	echo "(錢包大小&個別錢包佔有率 都大)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tp->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tp);
		if($rs1[3] >= $median_ttp && $rs1[2]/$rs1[3] >= $median_ctp){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }

    mysqli_data_seek($tp, 0); 
    echo "<br>";

	echo "(錢包大小 大&個別錢包佔有率 小)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tp->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tp);
		if($rs1[3] >= $median_ttp && $rs1[2]/$rs1[3] < $median_ctp){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


    mysqli_data_seek($tp, 0); 
    echo "<br>";

	echo "(錢包大小 小&個別錢包佔有率 大)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tp->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tp);
		if($rs1[3] < $median_ttp && $rs1[2]/$rs1[3] >= $median_ctp){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


     mysqli_data_seek($tp, 0); 
    echo "<br>";

	echo "(錢包大小 小&個別錢包佔有率 小)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tp->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tp);
		if($rs1[3] < $median_ttp && $rs1[2]/$rs1[3] < $median_ctp){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }





//牙刷部分
 	$sql_tb = "SELECT cus_name, cus_phone, colgate_toothbrush_price,total_toothbrush_price FROM customer";
	$tb = $mysqli->query($sql_tb);

	$sql_tb1 = "SELECT cus_name, cus_phone, colgate_toothbrush_price,total_toothbrush_price FROM customer order by total_toothbrush_price LIMIT 12,1";
	$tb1 = $mysqli->query($sql_tb1);

	$sql_tb2 = "SELECT cus_name, cus_phone, colgate_toothbrush_price,total_toothbrush_price FROM customer LIMIT 23,1";
	$tb2 = $mysqli->query($sql_tb2);

	while($rs1 = mysqli_fetch_row($tb1)){
		$median_ttb=$rs1[3];
	}

	while($rs1 = mysqli_fetch_row($tb2)){
		$median_ctb=$rs1[2]/$rs1[3];
		//echo $median_ctb . "<br>";
	}

	
	/**for($i=0; $i<$tb->num_rows; $i++){
			$rs1 = mysqli_fetch_row($tb);
			echo round($rs1[2]/$rs1[3], 5). "<br>";
	}
	*/	

	mysqli_data_seek($tb, 0); //重製
	echo "<br><br>牙刷<br>";

	echo "(錢包大小&個別錢包佔有率 都大)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tb->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tb);
		if($rs1[3] >= $median_ttb && $rs1[2]/$rs1[3] >= $median_ctb){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }

    mysqli_data_seek($tb, 0); 
    echo "<br>";

	echo "(錢包大小 大&個別錢包佔有率 小)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tb->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tb);
		if($rs1[3] >= $median_ttb && $rs1[2]/$rs1[3] < $median_ctb){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


    mysqli_data_seek($tb, 0); 
    echo "<br>";

	echo "(錢包大小 小&個別錢包佔有率 大)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tb->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tb);
		if($rs1[3] < $median_ttb && $rs1[2]/$rs1[3] >= $median_ctb){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


     mysqli_data_seek($tb, 0); 
    echo "<br>";

	echo "(錢包大小 小&個別錢包佔有率 小)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$tb->num_rows; $i++){
		$rs1 = mysqli_fetch_row($tb);
		if($rs1[3] < $median_ttb && $rs1[2]/$rs1[3] < $median_ctb){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }



//漱口水部分
 	$sql_mw = "SELECT cus_name, cus_phone, colgate_mouthwash_price,total_mouthwash_price FROM customer";
	$mw = $mysqli->query($sql_mw);

	$sql_mw1 = "SELECT cus_name, cus_phone, colgate_mouthwash_price,total_mouthwash_price FROM customer order by total_mouthwash_price LIMIT 12,1";
	$mw1 = $mysqli->query($sql_mw1);

	$sql_mw2 = "SELECT cus_name, cus_phone, colgate_mouthwash_price,total_mouthwash_price FROM customer LIMIT 18,1";
	$mw2 = $mysqli->query($sql_mw2);

	while($rs1 = mysqli_fetch_row($mw1)){
		$median_tmw=$rs1[3];
	}

	while($rs1 = mysqli_fetch_row($mw2)){
		$median_cmw=$rs1[2]/$rs1[3];
		echo $median_cmw . "<br>";
	}

	
	/**for($i=0; $i<$mw->num_rows; $i++){
		$rs1 = mysqli_fetch_row($mw);
		if($rs1[3]!= 0){
			echo round($rs1[2]/$rs1[3], 2). "<br>";
		}
	}*/
		

	mysqli_data_seek($mw, 0); //重製
	echo "<br><br>漱口水<br>";

	echo "(錢包大小&個別錢包佔有率 都大)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$mw->num_rows; $i++){
		$rs1 = mysqli_fetch_row($mw);
		if($rs1[3] >= $median_tmw && $rs1[2]/$rs1[3] >= $median_cmw ){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }

    mysqli_data_seek($mw, 0); 
    echo "<br>";

	echo "(錢包大小 大&個別錢包佔有率 小)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$mw->num_rows; $i++){
		$rs1 = mysqli_fetch_row($mw);
		if($rs1[3] >= $median_tmw && $rs1[2]/$rs1[3] < $median_cmw){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


    mysqli_data_seek($mw, 0); 
    echo "<br>";

	echo "(錢包大小 小&個別錢包佔有率 大)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$mw->num_rows; $i++){
		$rs1 = mysqli_fetch_row($mw);
		if($rs1[3] < $median_tmw && $rs1[2]/$rs1[3] >= $median_cmw){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


     mysqli_data_seek($mw, 0); 
    echo "<br>";

	echo "(錢包大小 小&個別錢包佔有率 小)<br>";
	echo "name phone 錢包大小 個別錢包佔有率<br>";//欄位名
	for($i=0; $i<$mw->num_rows; $i++){
		$rs1 = mysqli_fetch_row($mw);
		if($rs1[3] < $median_tmw && $rs1[2]/$rs1[3] < $median_cmw){
			echo $rs1[0] .", ". $rs1[1] . ", ". $rs1[3]. ", " . round($rs1[2]/$rs1[3], 3) . "<br>";
		}
    }


?> 

</head>
<body>

</body>
</html>
