<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link href="style.css?php echo time()" type="text/css" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div id="main">
		<div id="products">
<?php
include "./class/product_class.php";
include "./action/productaction.php";
?>
			<!-- table of cart -->
			</div>
		</div>
	<div id="table">
		<table>
			<thead>
				<tr>
					<th>IMAGE</th>
					<th>NAME</th>
					<th>QUANTITY</th>
					<th>PRICE</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody id="details"></tbody>
		</table>
	
	</div>
	<!-- footer -->
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
</body>
<script src="./js/script.js"></script>
</html>