<?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 
 include('includes/header.php');
?>

<body>
  <div class="container">
    <div class="row text-center py-5">
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      
        <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/anniversary.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Kitted Couple</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made knitted couple .
              </p>  
              <h5>
                <small><s class="text-secondary">€30</s></small>
                <span class="price">€20</span>
              </h5>

              <a href="anniversary.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
     </div>
      
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/piglet.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">knitted piglet doll</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made knitted piglet doll.
              </p>  
              <h5>
                
                <span class="price">€15</span>
              </h5>

              <a href="piglet.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
      </div>
  
      <div class="col-md-3 col-sm-6 my-3 my-md-0"> 
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/minnie.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Knitted minnie mouse</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made minnie mouse doll.
              </p>  
              <h5>
              
                <span class="price">€16</span>
              </h5>

              <a href="minnie.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form> 
      </div>
    

      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/wedding.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Knitted Wedding Couple</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made wedding couple.
              </p>  
              <h5>
              
                <span class="price">€20</span>
              </h5>

              <a href="wedding.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
      </div>
    

    </div>
  </div>
    


<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>