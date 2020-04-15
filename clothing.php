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
              <img src="./img/pinkjumper.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Pink knitted jumper</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made knitted jumper.
              </p>  
              <h5>
                
                <span class="price">€15</span>
              </h5>

              <a href="pinkjumper.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
     </div>
      
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/purplejumper.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">knitted Purple jumper</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </h6>
              <p class="card-text">
                Hand made knitted jumper.
              </p>  
              <h5>
                
                <span class="price">€15</span>
              </h5>

              <a href="purplejumper.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form>
      </div>
  
      <div class="col-md-3 col-sm-6 my-3 my-md-0"> 
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/halterneck.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Halter kneck top</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                Crocheted halter neck top.
              </p>  
              <h5>
                
                <span class="price">€14</span>
              </h5>

              <a href="halterneck.php" class="btn btn-success my-3">See More</a>

            </div>
          </div>
        </form> 
      </div>
    

      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="index.php" method="post">
          <div class="card shadow"> 
            <div>
              <img src="./img/strapless.jpg" alt="image1" class="img-fluid card-img-top">       
            </div>
            <div class="card-body">
              <h5 class="card-title">Strapless Top</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">
                Crocheted strapless top.
              </p>  
              <h5>
                
                <span class="price">€16</span>
              </h5>

              <a href="strapless.php" class="btn btn-success my-3">See More</a>

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