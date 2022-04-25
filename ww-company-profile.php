<?php 
  ini_set('display_errors',1); error_reporting(E_ALL | E_STRICT);

 
  include realpath('./db.php');


  $partner_sql = "SELECT * FROM partner"; 
  $partner_result = $conn->query($partner_sql);
  $partners = array();
  if ($partner_result->num_rows > 0) {
    while($row = $partner_result->fetch_assoc()) {
      array_push($partners, $row);
    }
  }
  $total_partners = count($partners);





  $team_sql = "SELECT * FROM team"; 
  $team_result = $conn->query($team_sql);
  $team_members = array();
  if ($team_result->num_rows > 0) {
    while($row = $team_result->fetch_assoc()) {
      array_push($team_members, $row);
    }
  }
  $total_team_members = count($team_members);








  $product_cat_sql = "SELECT * FROM product_category"; 
  $product_cat_result = $conn->query($product_cat_sql);
  $product_cat_array = array();
  if ($product_cat_result->num_rows > 0) {
    while($row = $product_cat_result->fetch_assoc()) {
      array_push($product_cat_array, $row);
    }
  }

  $total_product_cat = count($product_cat_array);

  $product_sql = "SELECT * FROM product INNER JOIN product_category ON product.product_cat_id = product_category.cat_id";
  $product_result = $conn->query($product_sql);
  $product_array = array();
  if ($product_result->num_rows > 0) {
    while($row = $product_result->fetch_assoc()) {
      array_push($product_array, $row);
    }
  }

  // die(var_dump($product_sql));


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


  <!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
	    <div class="container" data-aos="flip-down">
	      <h1>Welcome to Weave & Wrap</h1>
	      <h2>100% Export oriented Garments Accessories Manufacturer, Supplier</h2>
	    </div>
  </section> -->

  <main id="main">
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12" data-aos="fade-up">
            <div class="content">
              

              <h3>Company Overview</h3>
              <p>
                Weave & Wrap is a well-established reputed garments trims & Accessories supplier in Bangladesh. We have an experienced and hard working sales, procurement & quality control team, which can provide you with a complete service supplying quality accessories at competitive prices. We have been working in this trade for  USA, Canada and EEC with good reputation. The sum of our team is an efficient official for you to start with. Each customer's account is served and handled by an individual executive that is why our service is prompt for all the orders and inquiries simultaneously. We care for the new customer same that we do for our major customers; this is also one of the main ethics of our marketing and merchandising department. All of our executives are experienced and knowledgeable and can serve you on each of your requirements.  
              </p>

              <p>
                Weave & Wrap from Bangladesh offers its international buyers, the ultimate solution for sourcing excellent quality Textiles, Apparel Accessories, Handicraft Gift items and 100% Cotton Terry Towels from Bangladesh. Our valued expertise and experience in sourcing and technical fields for helped us gain an in-depth understanding of textiles, Apparels, Handicraft Gift items.
              </p>

              <p>
                Weave & Wrap specializes in areas of product development, production & timely deliveries, online & post production inspections, coordination & communication.
              </p>

              <table class="table table-striped profile-table">
                <thead>
                  
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Name of Company:</th>
                    <td style="color:white;">Weave & Wrap</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Year of Establishment:</th>
                    <td style="color:white;">Year of 2022</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Contact Person:</th>
                    <td style="color:white;">
                        <p>Mr. Nasir Uddin Ahmed</p>
                        <p>Managing Director.</p>
                        <p>
                          E-mail: <a href="mailto:info@weaveandwrap.com" style="color: white; text-decoration: underline;">info@weaveandwrap.com</a>
                        </p>
                        <p>Cell: 
                          <a href="tel:+880-01922673125" style="color: white; text-decoration: underline;">+880-01922673125</a>.
                        </p>
                        <p><a href="https://www.weaveandwrap.com" style="color: white; text-decoration: underline;">www.weaveandwrap.com</a></p>

                    </td>
                    
                  </tr>

                  <tr>
                    <th scope="row">Mode of Payment:</th>
                    <td style="color:white;">L/C at sight & T/T</td>
                    
                  </tr>

                  <tr>
                    <th scope="row">Bank Details:</th>
                    <td style="color:white;">
                      <p>Al arafah islamic bank ,</p>
                      <p>House 13, Road 14/A, Sector 4, Uttara Model Town, Dhaka 1230, Bangladesh.</p>
                      <p>Swift: ALARBDDH082</p>
                    </td>
                    
                  </tr>
                </tbody>
              </table>







  
   
              
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <!-- <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Environment friendly</h4>
                    <p>We are very much sensitive and careful to environment and green house effects, we fulfill our Business mission in the right way that will not be harmful to the delicate world in which we live.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Visionary</h4>
                    <p>We have the plan to continue the expansion of new prestigious industries to our entire valued customer's, collaborators, suppliers and associates within Bangladesh and abroad.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Team Builder</h4>
                    <p>We already employed a number of man and women aborigines in our factory in future for their engagement in the economic development activity of our country. Hope we will be succeed to our efforts.</p>
                  </div>
                </div> -->
              </div>
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