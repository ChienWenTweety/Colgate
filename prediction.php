<html>
<head>
	<title>Colgate</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<a href="Index.php"><button type ="button" class="btn btn-default">Home</button></a>
</body>

<?php

require_once('db_connect.php');


echo '<br>';
if (isset($_GET['date'])) {
    echo  'Shipping Date : ' . $_GET['date'];
}
echo '<br>';  
if (isset($_GET['productList'])) {
    echo  'Product : ' . $_GET['productList'];
}
echo '<br>';  
if (isset($_GET['quantity'])) {
    echo  'Quantity : ' . $_GET['quantity'];
}


if(isset($_GET["productList"])){
	$proList = $_GET["productList"];
	$res = $mysqli->query("select `pro_inventory` from product where `product_name` = '$proList'");	
	$rap = $mysqli->query("select * from assembly where `product_name` = '$proList'");	
	$bob = $mysqli->query("select * from material");	
	//if($res === FALSE) { 
	//	die(mysqli_error()); // TODO: better error handling
	//}
	$rs = mysqli_fetch_row($res);
	$ra = mysqli_fetch_row($rap);
	$bo = mysqli_fetch_row($bob);
	if($_GET['quantity']<=$rs[0]){
	echo '<br>';  
	echo '<br>'; 
	echo 'Inventory enough! Ready to ship!';
	}else{
		if($ra[4]>2){
			echo '<br>'; 
			echo '<br>';
			$string1 = 'You have enough raw material! Start assemblying ';
			$string2 = ' days before!';
			echo $string1.$ra[15].$string2;
		}else{
			echo '<br>'; 
			echo '<br>';
			$string1 = 'You dont have enough material inventory!It takes ';
			$string2 = ' days to order and assemble, now get going!';
			echo $string1.($ra[15]+$ra[16]).$string2;


			echo '<br>';
			$string3= 'You will need ';
			echo $string3;
			echo $ra[3];
			echo $ra[4];
			echo $ra[5];
			echo $ra[6];
			echo $ra[7];
			echo $ra[8];
			echo $ra[9];
			echo $ra[10];
			echo $ra[11];
			echo $ra[12];
			echo $ra[13];
			echo $ra[14];
			
			//$bo[4]>$ra[4] && $bo[4]>$ra[6] && $bo[4]>$ra[8] &&$bo[4]>$ra[10] && $bo[4]>$ra[12] && $bo[4]>$ra[14]
		}
	}
};	

?>
