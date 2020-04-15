<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/css.css" >
    <link rel="stylesheet" href="css/bootstrap.css" >
<!--bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
     <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css"> 
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- font awsome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
<!--brand -->
  <a class="navbar-brand" href="./index.php">
  <img src="img/logo.png" width="190" height="110"  alt=""></a>

  <!-- toggler/collapse button -->
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
          <span class="navbar-toggler-icon"></span>
        </button>
<!-- navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class=" nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a class=" nav-link" href="clothing.php">Clothing</a>
        </li>
        <li>
          <a class=" nav-link" href="blanket.php">Blankets</a>
        </li>
        <li>
          <a class=" nav-link" href="other.php">Other</a>
        </li>
        </ul>
        </div>

        <div class="col-md-8 text-right header-box">
		      <a href="view_cart.php" class="cart-counter" id="cart-info" title="View Cart">            
			      <span class="cart-item" id="cart-container"><?php 
			        if(isset($_SESSION["products"])){
			      	echo count($_SESSION["products"]); 
		        	} else {
			      	echo 0; 
			        }
		      	?></span>
		      </a>
	    	</div>
        
     
  
</nav>

<title>Jaynes jumpers!</title>
  </head>