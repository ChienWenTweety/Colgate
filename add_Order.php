<html>
<head>
	<title>AddOrder</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
	require_once('Db_connect.php');	
	
	//新增產品
	if(isset($_POST["order_id"])){
		
		$orderId = $_POST["order_id"];
		$customerId = $_POST["cus_CID"];
		$phone = $_POST["phone_no"];
        $toothbrush_bam_price = 50;
        $toothbrush_bam_quan = $_POST["toothbrush_bam_quan"];
        $toothbrush_thin_price = 50;
        $toothbrush_thin_quan = $_POST["toothbrush_thin_quan"];
        $toothbrush_spiral_price = 50;
        $toothbrush_spiral_quan = $_POST["toothbrush_spiral_quan"];
        $mouthwash_mint_price = 105;
        $mouthwash_mint_quan = $_POST["mouthwash_mint_quan"];
		$mouthwash_tea_price = 105;
		$mouthwash_tea_quan = $_POST["mouthwash_tea_quan"];
        $mouthwash_orange_price = 105;
		$mouthwash_orange_quan = $_POST["mouthwash_orange_quan"];
		$toothpaste_pum_price = 90;
        $toothpaste_pum_quan = $_POST["toothpaste_pum_quan"];
		$toothpaste_egg_price = 90;
		$toothpaste_egg_quan = $_POST["toothpaste_egg_quan"];
        $toothpaste_buddhist_price = 90;
        $toothpaste_buddhist_quan = $_POST["toothpaste_buddhist_quan"];
		$Total = ($toothbrush_bam_quan+$toothbrush_thin_quan+$toothbrush_spiral_quan)*50+
		($mouthwash_mint_quan+$mouthwash_tea_quan+$mouthwash_orange_quan)*105+
		($toothpaste_orange_quan+$toothpaste_pum_quan+$toothpaste_buddhist_quan)*90;
		
		$res = $mysqli->query("INSERT INTO `colgate_order` (`order_id`, `cus_CID`, `phone_no.`, `toothbrush_bam_price`,
		`toothbrush_bam_quan`, `toothbrush_thin_price`, `toothbrush_thin_quan`, `toothbrush_spiral_price`, 
		`toothbrush_spiral_quan`, `mouthwash_mint_price`, `mouthwash_mint_quan`, `mouthwash_tea_price`,
		`mouthwash_tea_quan`, `mouthwash_orange_price`, `mouthwash_orange_quan`, `toothpaste_pum_price`,
		`toothpaste_pum_quan`, `toothpaste_egg_price`, `toothpaste_egg_quan`, `toothpaste_buddhist_price`,
		`toothpaste_buddhist_quan`, `Total`)
		VALUES ('$orderId', '$customerId', '$phone', '$toothbrush_bam_price',
		'$toothbrush_bam_quan', '$toothbrush_thin_price', '$toothbrush_thin_quan', '$toothbrush_spiral_price', 
		'$toothbrush_spiral_quan', '$mouthwash_mint_price', '$mouthwash_mint_quan', '$mouthwash_tea_price',
		'$mouthwash_tea_quan', '$mouthwash_orange_price', '$mouthwash_orange_quan', '$toothpaste_pum_price',
		'$toothpaste_pum_quan', '$toothpaste_egg_price', '$toothpaste_egg_quan', '$toothpaste_buddhist_price',
		'$toothpaste_buddhist_quan', '$Total')");

		header('Location: all_Order.php');
		
	}	
	/*$test = "INSERT INTO `colgate_order` (`order_id`, `cus_CID`, `phone_no.`, `toothbrush_bam_price`,
		`toothbrush_bam_quan`, `toothbrush_thin_price`, `toothbrush_thin_quan`, `toothbrush_spiral_price`, 
		`toothbrush_spiral_quan`, `mouthwash_mint_price`, `mouthwash_mint_quan`, `mouthwash_tea_price`,
		`mouthwash_tea_quan`, `mouthwash_orange_price`, `mouthwash_orange_quan`, `toothpaste_pum_price`,
		`toothpaste_pum_quan`, `toothpaste_egg_price`, `toothpaste_egg_quan`, `toothpaste_buddhist_price`,
		`toothpaste_buddhist_quan`, `Total`)
		VALUES ('$orderId', '$customerId', '$phone', '$toothbrush_bam_price',
		'$toothbrush_bam_quan', '$toothbrush_thin_price', '$toothbrush_thin_quan', '$toothbrush_spiral_price', 
		'$toothbrush_spiral_quan', '$mouthwash_mint_price', '$mouthwash_mint_quan', '$mouthwash_tea_price',
		'$mouthwash_tea_quan', '$mouthwash_orange_price', '$mouthwash_orange_quan', '$toothpaste_pum_price',
		'$toothpaste_pum_quan', '$toothpaste_egg_price', '$toothpaste_egg_quan', '$toothpaste_buddhist_price',
		'$toothpaste_buddhist_quan', '$Total')";
		echo $test;
*/
	
?>

<body>	
	<a href="Index.php"><button type ="button" class="btn btn-default">Home</button></a>
	<a href="all_Order.php"><button type ="button" class="btn btn-default">All Orders</button></a>
	<form action="add_Order.php" method="POST" enctype="multipart/form-data" id="form1">
		<table>
			<tr>
				<td>訂單編號</td>
				<td><input type="text" name="order_id" value="20"/></td>				
			</tr>
			<tr>
				<td>顧客編號</td>
				<td><input type="text" name="cus_CID" value="7"/></td>				
			</tr>
			<tr>
				<td>電話</td>
				<td><input type="text" name="phone_no" value="20"/></td>			
			</tr>
			<tr>
				<td>竹炭牙刷數量</td>
				<td><input type="text" name="toothbrush_bam_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>超細牙刷數量</td>
				<td><input type="text" name="toothbrush_thin_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>旋轉牙刷數量</td>
				<td><input type="text" name="toothbrush_spiral_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>薄荷漱口水數量</td>
				<td><input type="text" name="mouthwash_mint_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>綠茶漱口水數量</td>
				<td><input type="text" name="mouthwash_tea_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>酷涼橙橘漱口水數量</td>
				<td><input type="text" name="mouthwash_orange_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>南瓜牙膏數量</td>
				<td><input type="text" name="toothpaste_pum_quan" value="20"/></td>			
			</tr>
			<tr>
				<td>茄子牙膏數量</td>
				<td><input type="text" name="toothpaste_egg_quan" value="20"></td>			
			</tr>
			<tr>
				<td>釋迦牙膏數量</td>
				<td><input type="text" name="toothpaste_buddhist_quan" value="20"/></td>			
			</tr>
			
		</table>
		<button type="submit" class="btn btn-default" form="form1" >Enter</button>
		
	</form>
	<button type ="button" class="btn btn-default" onclick="location.href='Index.php'">Cancel</button>
</body>
</html>







