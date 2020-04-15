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
              <img src="./img/blanket.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Patchwork Blanket</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made patchwork blanket.
              </p>  
              <h5>
                <small><s class="text-secondary">€30</s></small>
                <span class="price">€25</span>
              </h5>

              <a href="blanket2.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
     </div>
      
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/blanket3.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">knitted multi coloured blanket</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made knitted multi coloured blanket.
              </p>  
              <h5>
                <small><s class="text-secondary">€25</s></small>
                <span class="price">€20</span>
              </h5>

              <a href="blanket3.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
      </div>
  
      <div class="col-md-3 col-sm-6 my-3 my-md-0"> 
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/bee.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Bee themed blanket</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made Bee themed blanket.
              </p>  
              <h5>
                <small><s class="text-secondary">€20</s></small>
                <span class="price">€16</span>
              </h5>

              <a href="bee.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form> 
      </div>
    

      
         
        </form>
      </div>
    

    </div>
  </div>
    

  

  



<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>