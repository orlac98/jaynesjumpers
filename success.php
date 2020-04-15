 <?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 
include("includes/header.php"); 
?>

<script type="text/javascript" src="script/cart.js"></script>

<div class="container">	
	
<div class="text-left">		
		<?php
		// payment information from PayPal 
		$txn_id = $_GET['tx'];
		$payment_gross = $_GET['amt'];
		$currency_code = $_GET['cc'];
		$payment_status = $_GET['st'];
		?>	
		<strong>Your order payment has been successful!</strong>		
	</div>
</div>
<?php include('includes/footer.php');?>




