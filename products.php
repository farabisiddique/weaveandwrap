<?php 
  
  $category = $_GET['id'];
 
  include realpath('./db.php');


  
  $product_cat_sql = "SELECT cat_name,cat_description FROM product_category WHERE cat_id='".$category."'"; 

  $product_cat_result = $conn->query($product_cat_sql);
  
  if ($product_cat_result->num_rows > 0) {
    while($row = $product_cat_result->fetch_assoc()) {
      $category_name = $row['cat_name'];
      $category_description = $row['cat_description'];
    }
  }



  $product_sql = "SELECT * FROM product WHERE product_cat_id='".$category."'";
  $product_result = $conn->query($product_sql);
  $product_array = array();
  if ($product_result->num_rows > 0) {
    while($row = $product_result->fetch_assoc()) {
      array_push($product_array, $row);
    }
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Weave & Wrap</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    .team_member:hover .team_social{
      width: 100%;
      height: 4vw;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      transition: ease-in-out 0.3s;
      background: rgba(255, 255, 255, 0.85);
      
    }
    .team_social{
      
      display: none;
    }

    .team_social a{
      color: #473d3a !important;
      text-decoration: none !important;
    }

    .ellipsis{
      text-align: center;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      width: 100%;
    }

    
  </style>

</head>

<body>

  <?php 

    include 'header.php';

  ?>



  <main id="main">
    

    <section id="" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up"><?php echo ucwords($category_name); ?></h2>
          <p data-aos="fade-up"><?php echo $category_description; ?></p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            
          <?php   

            for ($i=0; $i<count($product_array); $i++) {
            
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item">
                <img src="<?php echo $product_array[$i]['product_image'];?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $product_array[$i]['product_name'];?></h4>
                  <p><?php echo $product_array[$i]['product_name'];?></p>
                  
                  <a href="<?php echo $product_array[$i]['product_image'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $product_array[$i]['product_name'];?>"><i class="bx bx-plus"></i></a>
                  <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

          <?php } ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-el">
                <img src="assets/img/portpic/elastic3.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Elastic 3</h4>
                  <p>Elastic 3</p>
                  <a href="assets/img/portpic/elastic1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="el"><i class="bx bx-plus"></i></a>
                  <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

        </div>
      </div> 
    </section>
    



    




   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Weave & Wrap</h3>
            <p>
              Sekh Bhaban, Dag-322, Airport Road(Near Hazi Camp), Uttara, Dhaka-1230, Bangladesh <br><br>
              <strong>Phone:</strong> <a href="tel:+8801322673125">+8801322673125</a><br>
              <strong>Email:</strong> <a href="mailto:support@weaveandwrap.com">support@weaveandwrap.com</a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

    
        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Weave & Wrap</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed & Developed by <a href="#">Bari Siddique Computers</a>
        </div>
      </div>
      <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>