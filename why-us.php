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
              <h3>Why Choose Weave & Wrap?</h3>
              <p>
                Our knowledge and commitment has made us a multi-product organization with clients all over the world. We work hard To address the expectations of our customer in an innovative way. Our company tries to maintain long lasting relation With our clients and ensures serving best to them on the basis of following parameters

                <ul>
                  <li>Constant Innovation in Designs.</li>
                  <li>World Class Quality Control.</li>
                  <li>Strong Business Ethics.</li>
                  <li>Transparency in Deals.</li>
                  <li>Highly Involved and Efficient Management.</li>
                  <li>Commitment to Deliver on Time.</li>
                  <li>Competitive Prices.</li>
                  <li>Strong and Secure online Communications.</li>
                  <li>Focus on Sustainability and Eco-friendly Environment.</li>
                  <li>Fully Equipped facilities with Fire and Safety Equipment.</li>
                  <li>Medical Facilities.</li>
                  <li>Well Ventilated and Lit Facilities.</li>
                  <li>Upholding Human Rights.</li>
                  <li>Absolute Compliance with existing labor laws and recommendations.</li>
                  <li>Social Activities and Outings.</li>
                  <li>High production facility.</li>
                  <li>Competent Team.</li>
                  <li>Sound Infrastructure & Machines.</li>
                  <li>Wide Client Network.</li>
                  <li>Exclusive packing.</li>
                  <li>Customization.</li>
                </ul>
  
              </p>

              <h3>Our core values</h3>
              <p>
                Our Core values are built on superior customer satisfaction principles we strive to achieve everyday by maintaining

                <ul>
                  <li>Fashion Sensibility</li>
                  <li>Service Quality</li>
                  <li>Corporate dignity and reliability</li>
                  <li>Legal, ethical, Social and environment responsibility</li>
                  <li>Personal sincerity</li>
                  <li>And latest technology</li>
                </ul>


              </p>

              <h3>Compliance</h3>
              <p>

                We have modern trained compliance teams with full setup. Compliance team is organized as per organogram and to maintain as per country law and buyers COC.
              </p>
              <p>
                Weave & Wrap is a well-known compliance factory that implements basic laws and regulations of home and international organizations. ILO laws and tripartite agreement concluded by Govt. of Bangladesh are being enforced in the factory. The factory is determined to live up to its reputation as a model in Bangladesh RMG sector. Compliance is basically focusing on the welfare of the workers and ensures working in a non-hazardous, environment friendly atmosphere.
              </p>
              <p>
                This compliance ensures a good working atmosphere, where everybody knows their job, gets his/her dues in time, gets Medicare and benefits as per Bangladesh labor laws commensuration with ILO conventions. Compliance always guides the organization to attain better working conditions, thus enabling everybody to work in a neat and tidy, risk free environment.
              </p>
              <p>
                Weave & Wrap offers better service facility in which compliance dept. oversees to happen/execute on ground. Compliance also keeps worker’s updating their knowledge on this professional as well as their rights and obligations. Every aspect of offering by Trim Solution Bangladesh is being supervised by the compliance department. This department is headed by an experienced and qualified manager with trained team of workforce.
              </p>

              <h3>Customer Satisfaction</h3>

              <p>
                The list of our clients comprises leading domestic manufacturers, exporters, local retailers and other outlets. One thing common to our importers and exporters is constant quality. We take immediate action when troubles are identified in any of our products.
              </p>
              <p>
                We believe in doing long-term business with our clients and therefore we have a very personalized relation with all of them. Our clients can give order of any size and we make sure of proper delivery without any delay.
              </p>
              
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