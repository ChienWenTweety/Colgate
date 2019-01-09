<html>
<head>
	<title>Alter Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php

	//updProduct.php 是修改產品

	require_once('Db_connect.php');

	//當使用者從首頁點修改時，查詢欲修改的產品資訊
	if(isset($_GET["pID"])){
		$pID = $_GET["pID"];
		$res = $mysqli->query("select * from colgate_order where `order_id` = $pID");	
		$rs = mysqli_fetch_row($res);
	};	

	//當使用者修改後點確認，就會執行修改的功能
	if(isset($_POST["order_id"])){
		$orderId = $_POST["order_id"];
		$customerName = $_POST["cus_name"];
		$phone = $_POST["phone_no"];
        $toothbrush_bam_quan = $_POST["toothbrush_bam_quan"];
        $toothbrush_thin_quan = $_POST["toothbrush_thin_quan"];
        $toothbrush_spiral_quan = $_POST["toothbrush_spiral_quan"];
        $mouthwash_mint_quan = $_POST["mouthwash_mint_quan"];
		$mouthwash_tea_quan = $_POST["mouthwash_tea_quan"];
		$mouthwash_orange_quan = $_POST["mouthwash_orange_quan"];
        $toothpaste_pum_quan = $_POST["toothpaste_pum_quan"];
		$toothpaste_egg_quan = $_POST["toothpaste_egg_quan"];
        $toothpaste_buddhist_quan = $_POST["toothpaste_buddhist_quan"];
        $Total = ($toothbrush_bam_quan+$toothbrush_thin_quan+$toothbrush_spiral_quan)*50+
		($mouthwash_mint_quan+$mouthwash_tea_quan+$mouthwash_orange_quan)*105+
		($toothpaste_orange_quan+$toothpaste_pum_quan+$toothpaste_buddhist_quan)*90;
		$res = $mysqli->query("UPDATE `colgate_order` SET `cus_name`='$customerName',`phone_no.`='$phone',`toothbrush_bam_quan`='$toothbrush_bam_quan',
        `toothbrush_thin_quan`='$toothbrush_thin_quan',`toothbrush_spiral_quan`=' $toothbrush_spiral_quan'
        ,`mouthwash_mint_quan`='$mouthwash_mint_quan',`mouthwash_tea_quan`='$mouthwash_tea_quan'
        ,`mouthwash_orange_quan`='$mouthwash_orange_quan',`toothpaste_pum_quan`='$toothpaste_pum_quan'
        ,`toothpaste_egg_quan`='$toothpaste_egg_quan',`toothpaste_buddhist_quan`='$toothpaste_buddhist_quan'
        ,`Total`='$Total'WHERE `order_id` = $orderId");	
		header('Location: all_Order.php');
	};			
?>
</head>
<body>	
<a href="Index.php"><button type ="button" class="btn btn-default">Home</button></a>
<a href="all_Order.php"><button type ="button" class="btn btn-default">All Orders</button></a>
	<form action="alter_Order.php" method="POST" enctype="multipart/form-data" id="form1">
		<table>
			<tr>
				<td><input type="hidden" name="order_id" value="<?php echo $rs[0];?>"/></td>					
			</tr>
			<tr>
				<td>顧客姓名</td>
				<td><input type="text" name="cus_name" value="<?php echo $rs[2];?>"/></td>				
			</tr>
			<tr>
				<td>電話</td>
				<td><input type="text" name="phone_no" value="<?php echo $rs[3];?>"/></td>				
			</tr>
			<tr>
				<td>竹炭牙刷數量</td>
				<td><input type="text" name="toothbrush_bam_quan" value="<?php echo $rs[5];?>"/></td>			
			</tr>
            <tr>
				<td>超細牙刷數量</td>
				<td><input type="text" name="toothbrush_thin_quan" value="<?php echo $rs[7];?>"/></td>			
			</tr>
            <tr>
				<td>旋轉牙刷數量</td>
				<td><input type="text" name="toothbrush_spiral_quan" value="<?php echo $rs[9];?>"/></td>			
			</tr>
            <tr>
				<td>薄荷漱口水數量</td>
				<td><input type="text" name="mouthwash_mint_quan" value="<?php echo $rs[11];?>"/></td>			
			</tr>
            <tr>
				<td>綠茶漱口水數量</td>
				<td><input type="text" name="mouthwash_tea_quan" value="<?php echo $rs[13];?>"/></td>			
			</tr>
            <tr>
				<td>酷涼橙橘漱口水數量</td>
				<td><input type="text" name="mouthwash_orange_quan" value="<?php echo $rs[15];?>"/></td>			
			</tr>
            <tr>
				<td>南瓜牙膏數量</td>
				<td><input type="text" name="toothpaste_pum_quan" value="<?php echo $rs[17];?>"/></td>			
			</tr>
            <tr>
				<td>茄子牙膏數量</td>
				<td><input type="text" name="toothpaste_egg_quan" value="<?php echo $rs[19];?>"/></td>			
			</tr>
            <tr>
				<td>釋迦牙膏數量</td>
				<td><input type="text" name="toothpaste_buddhist_quan" value="<?php echo $rs[21];?>"/></td>			
			</tr>
			
		</table>
		<button  type="submit" class="btn btn-default" form="form1">Enter</button>
	</form>
	<button type ="button" class="btn btn-default" onclick="location.href='Index.php'">Cancel</button>
</body>

</html>