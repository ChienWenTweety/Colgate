<?php
	
	//匯入連接MYSQL的檔案，使用剛剛建立的$mysqli物件
    require_once('db_connect.php');
$res = $mysqli->query("select * from material");	


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
    padding: 10px;
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
<a href="Index.php"><button type="button" class="btn btn-default">Home</button></a>
    <br>
	<table id = "t01">
		<tr>
			<th>原料名稱</th>
			<th>原料數量</th>
			<th>安全存量</th>
			<th>持有成本</th>
			<th>下定成本</th>
            <th>購買成本</th>
			<!-- <td>修改</td>
			<td>刪除</td>			 -->
		</tr>
		<?php while($rs = mysqli_fetch_row($res)) { ?>
		<tr>
	
			<td><?php echo $rs[2];?></td>
			<td><?php echo $rs[3];?></td>
			<td><?php echo $rs[4];?></td>
            <td><?php echo $rs[5];?></td>
            <td><?php echo $rs[6];?></td>
            <td><?php echo $rs[7];?></td>
		</tr>
		<?php } ?>
		
	</table>
    
</body>