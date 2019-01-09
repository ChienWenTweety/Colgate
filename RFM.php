<html>
<head>
	<title>Colgate</title>


</head>
<body>
<image src=recency.php>
<image src=frequency.php>
<image src=avg_monetary.php>
</body>

<?php


	//匯入連接MYSQL的檔案
	require_once('db_connect.php');

	//取損益平衡值
	$sql_breakeven = "SELECT breakeven_value FROM product";
	$breakeven = $mysqli->query($sql_breakeven);
	while($row = $breakeven->fetch_assoc()){
		$breakeven_value = $row["breakeven_value"];
	}
	//echo $breakeven_value;


	//這裡是要做RFM表格
	echo "<br>" . "M--F--R" . "<br>";//RFM排列順序
	echo "<br>" . "小組 RFM代碼 損益平衡值(%) 實際回應率(%) 損益平衡指數" . "<br>";//欄位名稱
	echo "name phone response(%) frequency recency monetary_value" . "<br>";

	$sql_RFM1 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12) as table1 ORDER BY frequency DESC LIMIT 6) as table2 ORDER BY recency ASC";
	$RFM1 = $mysqli->query($sql_RFM1);
	$RFM11 = $mysqli->query($sql_RFM1);
	$nr = $RFM1->num_rows;

	if ($RFM1->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;
    	while($row = $RFM1->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				echo "<br>" . $j . ", " . "11" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM11->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	$sql_RFM2 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12) as table1 ORDER BY frequency DESC LIMIT 6,6) as table2 ORDER BY recency ASC";
	$RFM2 = $mysqli->query($sql_RFM2);
	$RFM21 = $mysqli->query($sql_RFM2);
	$nr = $RFM2->num_rows;

	if ($RFM2->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;
    	$k = 2;
    	while($row = $RFM2->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "12" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM21->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	$sql_RFM3 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12,12) as table1 ORDER BY frequency DESC LIMIT 6) as table2 ORDER BY recency ASC";
	$RFM3 = $mysqli->query($sql_RFM3);
	$RFM31 = $mysqli->query($sql_RFM3);
	$nr = $RFM3->num_rows;

	if ($RFM3->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;
    	$k = 4;
    	while($row = $RFM3->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "21" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM31->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	$sql_RFM4 = "SELECT * FROM (SELECT * FROM (SELECT * FROM customer ORDER BY avg_monetary DESC LIMIT 12,12) as table1 ORDER BY frequency DESC LIMIT 6,6) as table2 ORDER BY recency ASC";
	$RFM4 = $mysqli->query($sql_RFM4);
	$RFM41 = $mysqli->query($sql_RFM4);
	$nr = $RFM4->num_rows;

	if ($RFM4->num_rows > 0) {
    	$i = 0;
    	$res = 0;
    	$j = 0;
    	$k = 6;
    	while($row = $RFM4->fetch_assoc()) {
    		$res += $row["response_percentage"];
			$avg_res = $res/($nr/2);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數
			$i++;
		//	echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["avg_monetary"] . ", "   . $row["frequency"] . ", "   . $row["recency"] ."<br>";
			//echo $avg_res . "<br>";
			if($i%($nr/2) == 0){
				$j++;
				$k++;
				echo "<br>" . $k . ", " . "22" . $j . ", " . $breakeven_value . ", " . round($avg_res,3) . ", " . round($BEI,2)  . "<br>";
				$res = 0;
				for($i=0; $i<$nr/2; $i++){
					$row1 = $RFM41->fetch_assoc();
					echo $row1["cus_name"] . ", " . $row1["cus_phone"] . ", " . $row1["response_percentage"] . ", "  . $row1["avg_monetary"] . ", "   . $row1["frequency"] . ", "   . $row1["recency"] ."<br>";
				}

			}
    	}
	} else {
    	echo "0 results";
	}


	/**$sql_RFM = "SELECT cus_name, frequency, recency, avg_monetary, response_percentage FROM customer ORDER BY frequency DESC, recency ASC, avg_monetary DESC";
	$RFM = $mysqli->query($sql_RFM);
	$RFM1 = $mysqli->query($sql_RFM);

	if($RFM->num_rows > 0) {
    // output data of each row
		//echo "<br>";
		$res = 0;
		$i = 0;
		$j = 1;
		
		//$l = 0;
		$R = 1;
		$F = 1;
		$M = 1;
		while($row = $RFM->fetch_assoc()){	
			$res += $row["response_percentage"];
			$avg_res = $res/($RFM->num_rows/8);
			$BEI = ($avg_res - $breakeven_value)/$breakeven_value;//損益平衡指數			
			$i++;
			//echo "<br>" . $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["frequency"] . ", "   . $row["recency"] . ", "   . $row["avg_monetary"] ."<br>";
			if($i%($RFM->num_rows/8) == 0){
				if($M > 2){
					$R++;
					$M = 1;
					if($R > 2 ){
						$F++;
						$R = 1;
					}
				}
				
				echo "<br>" . $j . ", " . $F . $R . $M . ", " . $breakeven_value . ", " . round($avg_res,2) . ", " . round($BEI,2);
				$j++;
				
			//	for($j=0; $j<$k; $j++){
			//		$rs = mysqli_fetch_row($RFM);
			//			echo $rs[$l] . "<br>";
			//		
			//		$l++;	
			//	}
			//	$k = $k + 3;
				$res = 0;
				$M++;
			}

		}

	} else {
    echo "0 results";
	}

	$k = 0;
	$l = 1;
	echo "<br><br>";
	echo "<br>" . "name response(%) frequency recency monetary_value" . "<br>";//欄位名稱，我也不確定這裡放哪些欄好 可以增減的
	while($row = $RFM1->fetch_assoc()){
		if($k%($RFM1->num_rows/8) == 0){
			echo $l . "<br>";
			$l++;
		}
		echo $row["cus_name"] . ", " . $row["response_percentage"] . ", "  . $row["frequency"] . ", "   . $row["recency"] . ", "   . $row["avg_monetary"] ."<br>";
		$k++;
	}
	*/



	//計算R的平均回應率
	$sql_R = "SELECT CID, cus_name, response_percentage FROM customer ORDER BY recency ASC";
	$R = $mysqli->query($sql_R);

	$first_part_r = 0;
	$last_part_r = 0;

	if ($R->num_rows > 0) {
		for($i=0; $i<$R->num_rows/2; $i++){
			$row = $R->fetch_assoc();
			//echo "<br>". $row["CID"]. " , " . $row["cus_name"]. " , " . $row["response_percentage"] . "<br>";
			$first_part_r += $row["response_percentage"];
		}
		for($i=$R->num_rows/2; $i<$R->num_rows; $i++){
			$row = $R->fetch_assoc();
			//echo "<br>". $row["CID"]. " , " . $row["cus_name"]. " , " . $row["response_percentage"] . "<br>";
			$last_part_r += $row["response_percentage"];
		}

		$avg_first_part_r = $first_part_r/($R->num_rows/2);
		$avg_last_part_r = $last_part_r/($R->num_rows/2);
	//	echo "R: " . $avg_first_part_r . "<br>" . $avg_last_part_r . "<br>" ;

	} else {
    	echo "0 results";
	}

	//計算F的平均回應率
	$sql_F = "SELECT CID, cus_name, response_percentage FROM customer ORDER BY frequency DESC";
	$F = $mysqli->query($sql_F);


	$first_part_f = 0;
	$last_part_f = 0;

	if ($F->num_rows > 0) {
		for($i=0; $i<$F->num_rows/2; $i++){
			$row = $F->fetch_assoc();
			//echo "<br>". $row["CID"]. " , " . $row["cus_name"]. " , " . $row["response_percentage"] . "<br>";
			$first_part_f += $row["response_percentage"];
		}
		for($i=$F->num_rows/2; $i<$F->num_rows; $i++){
			$row = $F->fetch_assoc();
			//echo "<br>". $row["CID"]. " , " . $row["cus_name"]. " , " . $row["response_percentage"] . "<br>";
			$last_part_f += $row["response_percentage"];
		}

		$avg_first_part_f = $first_part_f/($R->num_rows/2);
		$avg_last_part_f = $last_part_f/($R->num_rows/2);
	//	echo "F: " . $avg_first_part_f . "<br>" . $avg_last_part_f . "<br>" ;

	} else {
    	echo "0 results";
	}


	//計算M的平均回應率
	$sql_M = "SELECT CID, cus_name, response_percentage FROM customer ORDER BY avg_monetary DESC";
	$M = $mysqli->query($sql_M);


	$first_part_m = 0;
	$last_part_m = 0;

	if ($M->num_rows > 0) {
		for($i=0; $i<$M->num_rows/2; $i++){
			$row = $M->fetch_assoc();
		//	echo "<br>". $row["cus_id"]. " , " . $row["cus_name"]. " , " . $row["response_percentage"] . "<br>";
			$first_part_m += $row["response_percentage"];
		}
		for($i=$M->num_rows/2; $i<$M->num_rows; $i++){
			$row = $M->fetch_assoc();
		//	echo "<br>". $row["cus_id"]. " , " . $row["cus_name"]. " , " . $row["response_percentage"] . "<br>";
			$last_part_m += $row["response_percentage"];
		}

		$avg_first_part_m = $first_part_m/($M->num_rows/2);
		$avg_last_part_m = $last_part_m/($M->num_rows/2);
	//	echo "M: " . $avg_first_part_m . "<br>" . $avg_last_part_m . "<br>" ;

	} else {
    	echo "0 results";
	}


	


?> 

</html>