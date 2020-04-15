<?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 
 include('includes/header.php');
?>

<script type="text/javascript" src="script/cart.js"></script>
 <!-- Product Page Section Beign -->
 <section class="product-page">
  <div class="container">
  <div class="products-container">

            <?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where product_code = (10)";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
      <div class="row">
          <div class="col-lg-6">
             
                <div class="product-slider owl-carousel">
                        <div class="product-img">
                            <figure>
                            <img class="product_image" src="img/<?php echo $row["product_image"]; ?>">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                        <div class="product-img">
                            <figure>
                            <img class="product_image" src="img/<?php echo $row["product_image"]; ?>">
                                <div class="p-status">new</div>
                            </figure>
                        </div>
                </div>
              
          </div>
          <div class="col-lg-6">
              <div class="product-content">
              <form class="product-form">
              <h2><?php echo $row["product_name"]; ?></h2>
              <div class="pc-meta">
                  <h4>Price : <?php echo $currency; echo $row["product_price"]; ?></h4>
              </div>
              <p> <?php  echo $row["product_desc"]; ?> </p>
                  <div class="product-box">
						
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" >Size</label>
                            </div>
                            <select class="custom-select" name="product_size">
                               
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" >Quantity</label>
                            </div>
                            <select class="custom-select" name="product_qty">
                               
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
							
						
                        <input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button class="primary-btn pc-btn" type="submit">Add to Cart</button>
                 </div>
             
               </form>
               </div>
          <?php } ?>
      
         </div>
            
    </div>
</section>
<!-- Product Page Section End -->

<!-- Related Product Section Begin -->
<section class="related-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-product-item">
                    <figure>
                        <a href="wedding.php"><img src="img/wedding.jpg" alt=""></a>
                        <div class="p-status">New</div>
                    </figure>
                    <div class="product-text">
                        <h6>Wedding couple</h6>
                        <p>€20</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-product-item">
                    <figure>
                        <a href="piglet.php"><img src="img/piglet.jpg" alt=""></a>
                        <div class="p-status">New</div>
                    </figure>
                    <div class="product-text">
                        <h6>Piglet teddy</h6>
                        <p>€13</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-product-item">
                    <figure>
                        <a href="bee.php"><img src="img/bee.jpg" alt=""></a>
                        <div class="p-status sale">Sale</div>
                    </figure>
                    <div class="product-text">
                        <h6>Bee themed blanket</h6>
                        <p>€16</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-product-item">
                    <figure>
                        <a href="pinkjumper.php"><img src="img/pinkjumper.jpg" alt=""></a>
                        <div class="p-status popular">popular</div>
                    </figure>
                    <div class="product-text">
                        <h6>Pink jumper</h6>
                        <p>€15</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- Related Product Section End -->
</div>
 </body>



</html>

<?php 
  include('includes/scripts.php');
  include('includes/footer.php');
?>