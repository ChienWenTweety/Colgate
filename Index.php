<html lang="en">
<head>
<!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Colgate System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color:#ffffff;
    color: #000;
    padding: 100px 25px;
  }  
   .container-fluid {
    padding: 125px 150px;
  }
  .navbar {
  margin-bottom: 0;
     background-color: #dc1b09;  
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important; /*  */
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color:#dc1b09;
  }
  </style>
</head>
<?php
require_once('Db_connect.php');	
?>
<body id="Home">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#Home">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Orders">ORDERS</a></li>
        <li><a href="#Inventory">INVENTORY</a></li>
        <li><a href="#Vips">VIPS</a></li>
        <li><a href="#Schedule">SCHEDULE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Home page -->

<div class="jumbotron text-center">
  <h1>Colgate</h1> 
  <p>Welcome to our System!</p> 
  <form class="form-inline">
    <div class="input-group">
      <h4>Let's get started on what you want to know!</h4>
      </div>
    </div>
  </form>
</div>

<!-- Order -->
<div id="Orders" class="container-fluid text-center">
  <div class="row">
      <h2>Orders</h2>
      <div class="btn-group">
      <a href="all_Order.php"><button type="button" class="btn btn-danger">All Orders</button></a>
      <a href="add_Order.php"><button type="button" class="btn btn-danger">Add Orders</button></a>
    <br><br><br><br>
    <div>
    <img src="order.png" alt="Order" width="75" height="75">
    </div>
    </div>
    </div>
  </div>


<!-- Inventory -->

<div id="Inventory" class="container-fluid bg-grey text-center">
  <div class="row">
      <h2>Inventory</h2>
      <div class="btn-group">
      <a href="Product.php"><button type="button" class="btn btn-danger">Products</button></a>
    <a href="material.php"><button type="button" class="btn btn-danger">Materials</button></a>
    <br><br><br><br>
    <div>
    <img src="inventory.png" alt="Inventory" width="75" height="75">
    </div>
    </div>
    </div>
  </div>

<!-- VIPS -->

<div id="Vips" class="container-fluid text-center">
  <div class="row">
      <h2>VIP Customers</h2>
      <h4>Check here to see who we should send advertisements to!</h4>      
      <div class="btn-group">
      <a href="RFM.php"><button type="button" class="btn btn-danger">RFM Analysis</button></a>
      <a href="Wallet.php"><button type="button" class="btn btn-danger">Wallet Analysis</button></a>
    <br><br><br><br>
    <div>
    <img src="vip.png" alt="Vip" width="75" height="75">
    </div>
    </div>
    </div>
  </div>

<!-- Schedule -->

<div id="Schedule" class="container-fluid bg-grey text-center">
  <div class="row">
      <h2>Schedule</h2>
      <div class="btn-group">
    
    
    <form action="prediction.php" method = "get">
    Shipping Date:
    <input type="date" value = "<?= isset($_GET['date']) ? $_GET['date'] : ''; ?>" 
    name="date" ?>
    <select id="productList" value = "<?= isset($_GET['productList']) ? $_GET['productList'] : ''; ?>" 
    name="productList" ?>">
    <option></option>
  <input type="number" value = "<?= isset($_GET['quantity']) ? $_GET['quantity'] : ''; ?>" 
    name="quantity" ?>
</select>
    <input type="submit" value="Enter" class="btn btn-danger">
  </form>
  
  <br><br><br><br>
    <div>
    <img src="schedule.png" alt="Schedule" width="75" height="75">
    </div>
    </div>
  </div>



<!-- The up button that goes up to Home page -->
<br><br><br><br><br>
<footer class="container-fluid text-center">
  <a href="#Home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

</body>
<?php
require_once('Db_connect.php');	

$res = $mysqli->query("select `product_name` from product");
$resArr=array();     //用來存哪些選項的陣列
$productCount=0;
while($rows = mysqli_fetch_row($res))
{
	$resArr[$productCount]=$rows[0];
	$productCount++;
}
for($i=0;$i<count($resArr);$i++)
{
	echo "<script type=\"text/javascript\">";
	echo "document.getElementById(\"productList\").options[$i]=new Option(\"$resArr[$i]\",\"$resArr[$i]\");";
	echo "</script>";
}
?>

</html>