<?php
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
    require_once('Db_connect.php');

    
	$res = $mysqli->query("select * from colgate_order");	
	
	if(isset($_POST["pID"])){		
		$pID = $_POST["pID"];	
		$res = $mysqli->query("DELETE FROM `colgate_order` WHERE `order_id` = $pID");		
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>All_Product</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    table {
    width:100%;
    }
    table, th, td {
    border-collapse: collapse;
	}
    th, td {
    padding: 15px;
    text-align: left;
	border-bottom: 1px solid #ddd;
    }
    table#t01 tr:nth-child(even) {
    background-color: #fff;
    }
    table#t01 tr:nth-child(odd) {
    background-color: #eee;
    }
    table#t01 th {
    background-color: #dc1b09;
    color: white;
    }
</style>
</head>
<body>	
	<a href="Index.php"><button type ="button" class="btn btn-default">Home</button></a>
	<a href="add_Order.php"><button type="button" class="btn btn-default">Add Order</button></a>
	
	<table id = "t01">
		<tr>
			<th>訂單編號</th>
			<th>顧客編號</th>
			<th>電話</th>
            <th>竹炭牙刷數量</th>
            <th>超細牙刷數量</th>
            <th>旋轉牙刷數量</th>
            <th>薄荷漱口水數量</th>
            <th>綠茶漱口水數量</th>
            <th>酷涼橙橘漱口水數量</th>
            <th>南瓜牙膏數量</th>
            <th>茄子牙膏數量</th>
			<th>釋迦牙膏數量</th>
			<th>訂單總價</th>
			<th></th>
			<th></th>
			<!-- <td>修改</td>
			<td>刪除</td>			 -->
		</tr>
		<?php while($rs = mysqli_fetch_row($res)) { ?>
		<tr>
			<td><?php echo $rs[0];?></td>
			<td><?php echo $rs[1];?></td>
			<td><?php echo $rs[3];?></td>
            <td><?php echo $rs[5];?></td>
            <td><?php echo $rs[7];?></td>
            <td><?php echo $rs[9];?></td>
            <td><?php echo $rs[11];?></td>
            <td><?php echo $rs[13];?></td>
			<td><?php echo $rs[15];?></td>
            <td><?php echo $rs[17];?></td>
            <td><?php echo $rs[19];?></td>
            <td><?php echo $rs[21];?></td>
			<td><?php echo $rs[22];?></td>
            
			<td><button type ="button" class="btn btn-default" onclick="upd(<?php echo $rs[0];?>)">Alter</button></td>
			<td><button type ="button" class="btn btn-default" onclick="del(<?php echo $rs[0];?>)">Delete</button></td>
		</tr>
		<?php } ?>
		
	</table>

</body>
<script src="./jquery-2.1.1.min.js"></script>
<script type="text/javascript">
	function del(x){		
		$.ajax({
			url: 'all_Order.php',
			type: 'POST',
			data: {				
				pID: x
			},
			dataType: "text",
			success: function(response) {
				location.href = "all_Order.php";
			}
			
		});	
	}
	function upd(x){	
	
	location.href = "alter_Order.php?pID="+x;	
		
}
	</script>
</html>
