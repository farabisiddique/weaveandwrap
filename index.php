<?php 
  ini_set('display_errors',1); error_reporting(E_ALL | E_STRICT);

 
  include realpath('./db.php');

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

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html">Weave & Wrap</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/img/logo color-01.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul> 
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#values">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Our Products</a></li>

          <?php
            if($total_team_members>0){
          ?>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <?php  
          
            } 

            ?>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>


  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
	    <div class="container" data-aos="flip-down">
	      <h1>Welcome to Weave & Wrap</h1>
	      <h2>100% Export oriented Garments Accessories Manufacturer, Supplier</h2>
	    </div>
  </section>

  <main id="main">
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Why Choose Weave & Wrap?</h3>
              <p>
                We Sincerely response to the challenges of economy for private sectors major stimulus for phenomenal growth of the company. we give very much emphasis on ethical business practices for entire global needs. 
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
                    <h4>Labore consequatur</h4>
                    <p>We already employed a number of man and women aborigines in our factory in future for their engagement in the economic development activity of our country. Hope we will be succeed to our efforts.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    

    <section id="values" class="values">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="flip-down">
            <div class="card" style="background-image: url(assets/img/mission.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="flip-right" data-aos-delay="100">
            <div class="card" style="background-image: url(assets/img/ourplan.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="flip-left" data-aos-delay="200">
            <div class="card" style="background-image: url(assets/img/vision.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4" data-aos="flip-up" data-aos-delay="300">
            <div class="card" style="background-image: url(assets/img/ourcare.jpg);">
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Care</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="flip-up">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="flip-up">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container position-relative" data-aos="fade-up">

      	<div class="section-title" data-aos="fade-up" style="color: white;">
          <h2 style="color: white;">See what our clients say about us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->











    <!-- ======= Portfolio Section ======= -->


    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Our Products</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            	
              <li data-filter="*" class="filter-active">All</li>

              <?php  

                foreach ($product_cat_array as $key => $value) {
                
              ?>
              <li data-filter=".filter-<?php echo $value['cat_short_form'];?>"><?php echo $value['cat_name'];?></li>
             <?php 

                }

              ?>
            </ul>
          </div>  
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

	          
          <?php   

            foreach ($product_array as $key => $bvalue) {
            
          ?>
	          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $bvalue['cat_short_form'];?>">
		            <img src="<?php echo $bvalue['product_image'];?>" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4><?php echo $bvalue['product_name'];?></h4>
		              <p><?php echo $bvalue['product_name'];?></p>
                  
		              <a href="<?php echo $bvalue['product_image'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $bvalue['product_name'];?>"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

          <?php } ?>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-el">
		            <img src="assets/img/portpic/elastic3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Elastic 3</h4>
		              <p>Elastic 3</p>
		              <a href="assets/img/portpic/elastic1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="el"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>
<!-- 
          	<div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 1</h4>
		              <p>Twill Tape 1</p>
		              <a href="assets/img/portpic/ttap1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-el">
                <img src="assets/img/portpic/elastic1.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Elastic 1</h4>
                  <p>Elastic 1</p>
                  <a href="assets/img/portpic/elastic1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="el"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
              
            <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 2</h4>
		              <p>Twill Tape 2</p>
		              <a href="assets/img/portpic/ttap2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 3</h4>
		              <p>Twill Tape 3</p>
		              <a href="assets/img/portpic/ttap3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap4.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 4</h4>
		              <p>Twill Tape 4</p>
		              <a href="assets/img/portpic/ttap4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>


	          <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap5.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 5</h4>
		              <p>Twill Tape 5</p>
		              <a href="assets/img/portpic/ttap5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap6.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 6</h4>
		              <p>Twill Tape 6</p>
		              <a href="assets/img/portpic/ttap6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap7.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 7</h4>
		              <p>Twill Tape 7</p>
		              <a href="assets/img/portpic/ttap7.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-tt">
		            <img src="assets/img/portpic/ttap8.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 8</h4>
		              <p>Twill Tape 8</p>
		              <a href="assets/img/portpic/ttap8.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 1</h4>
		              <p>Webbing Belt 1</p>
		              <a href="assets/img/portpic/wbelt1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>
              
            <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 2</h4>
		              <p>Webbing Belt 2</p>
		              <a href="assets/img/portpic/wbelt2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 3</h4>
		              <p>Webbing Belt 3</p>
		              <a href="assets/img/portpic/wbelt3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt4.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 4</h4>
		              <p>Webbing Belt 4</p>
		              <a href="assets/img/portpic/wbelt4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt5.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 5</h4>
		              <p>Webbing Belt 5</p>
		              <a href="assets/img/portpic/wbelt5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt6.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 6</h4>
		              <p>Webbing Belt 6</p>
		              <a href="assets/img/portpic/wbelt6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt7.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 7</h4>
		              <p>Webbing Belt 7</p>
		              <a href="assets/img/portpic/wbelt7.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-wb">
		            <img src="assets/img/portpic/wbelt8.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Webbing Belt 8</h4>
		              <p>Webbing Belt 8</p>
		              <a href="assets/img/portpic/wbelt8.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-we">
		            <img src="assets/img/portpic/welastic1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Woven Elastic 1</h4>
		              <p>Woven Elastic 1</p>
		              <a href="assets/img/portpic/welastic1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="we"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-we">
		            <img src="assets/img/portpic/welastic2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Woven Elastic 2</h4>
		              <p>Woven Elastic 2</p>
		              <a href="assets/img/portpic/welastic2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="we"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-we">
		            <img src="assets/img/portpic/welastic3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Woven Elastic 3</h4>
		              <p>Woven Elastic 3</p>
		              <a href="assets/img/portpic/welastic3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="we"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-draw">
		            <img src="assets/img/portpic/drawstring1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Drawstring 1</h4>
		              <p>Drawstring 1</p>
		              <a href="assets/img/portpic/drawstring1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="draw"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-draw">
		            <img src="assets/img/portpic/drawstring2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Drawstring 2</h4>
		              <p>Drawstring 2</p>
		              <a href="assets/img/portpic/drawstring2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="draw"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-draw">
		            <img src="assets/img/portpic/drawstring3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Drawstring 3</h4>
		              <p>Drawstring 3</p>
		              <a href="assets/img/portpic/drawstring3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="draw"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-draw">
		            <img src="assets/img/portpic/drawstring4.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Drawstring 4</h4>
		              <p>Drawstring 4</p>
		              <a href="assets/img/portpic/drawstring4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="draw"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS</h4>
		              <p>ALL LABELS 1</p>
		              <a href="assets/img/portpic/label1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>
              

            <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 2</h4>
		              <p>ALL LABELS 2</p>
		              <a href="assets/img/portpic/label2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 3</h4>
		              <p>ALL LABELS 3</p>
		              <a href="assets/img/portpic/label3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label4.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 4</h4>
		              <p>ALL LABELS 4</p>
		              <a href="assets/img/portpic/label4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label5.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 5</h4>
		              <p>ALL LABELS 5</p>
		              <a href="assets/img/portpic/label5.png.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label6.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 6</h4>
		              <p>ALL LABELS 6</p>
		              <a href="assets/img/portpic/label6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label7.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 7</h4>
		              <p>ALL LABELS</p>
		              <a href="assets/img/portpic/label7.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/ttap8.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>Twill Tape 8</h4>
		              <p>Twill Tape 8</p>
		              <a href="assets/img/portpic/ttap8.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="tt"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label9.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 9</h4>
		              <p>ALL LABELS 9</p>
		              <a href="assets/img/portpic/label9.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
		            <img src="assets/img/portpic/label10.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>ALL LABELS 10</h4>
		              <p>ALL LABELS 10</p>
		              <a href="assets/img/portpic/label10.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lab"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pi">
		            <img src="assets/img/portpic/paper1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>PAPER ITEMS 1</h4>
		              <p>PAPER ITEMS 1</p>
		              <a href="assets/img/portpic/paper1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="pi"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-pi">
		            <img src="assets/img/portpic/paper2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>PAPER ITEMS 2</h4>
		              <p>PAPER ITEMS 2</p>
		              <a href="assets/img/portpic/paper2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="pi"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-pi">
		            <img src="assets/img/portpic/paper3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>PAPER ITEMS 3</h4>
		              <p>PAPER ITEMS 3pi
		              <a href="assets/img/portpic/paper3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="pi"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-pi">
		            <img src="assets/img/portpic/paper4.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>PAPER ITEMS 4</h4>
		              <p>PAPER ITEMS 4</p>
		              <a href="assets/img/portpic/paper4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="pi"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-pi">
		            <img src="assets/img/portpic/paper5.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>PAPER ITEMS 5</h4>
		              <p>PAPER ITEMS 5</p>
		              <a href="assets/img/portpic/paper5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="pi"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-pi">
		            <img src="assets/img/portpic/paper6.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>PAPER ITEMS 6</h4>
		              <p>PAPER ITEMS 6</p>
		              <a href="assets/img/portpic/paper6.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="pi"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sb">
		            <img src="assets/img/portpic/suspender1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SUSPENDER & BELT 1</h4>
		              <p>SUSPENDER & BELT 1</p>
		              <a href="assets/img/portpic/suspender1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="sb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-sb">
		            <img src="assets/img/portpic/suspender2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SUSPENDER & BELT 2</h4>
		              <p>SUSPENDER & BELT 2</p>
		              <a href="assets/img/portpic/suspender2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="sb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-sb">
		            <img src="assets/img/portpic/suspender3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SUSPENDER & BELT 3</h4>
		              <p>SUSPENDER & BELT 3</p>
		              <a href="assets/img/portpic/suspender3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="sb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-sb">
		            <img src="assets/img/portpic/suspender4.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SUSPENDER & BELT 4</h4>
		              <p>SUSPENDER & BELT 4</p>
		              <a href="assets/img/portpic/suspender4.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="sb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-sb">
		            <img src="assets/img/portpic/suspender5.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SUSPENDER & BELT 5</h4>
		              <p>SUSPENDER & BELT 5</p>
		              <a href="assets/img/portpic/suspender5.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="sb"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-st">
		            <img src="assets/img/portpic/sewing1.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SEWING THREAD 1</h4>
		              <p>SEWING THREAD 1</p>
		              <a href="assets/img/portpic/sewing1.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="st"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-st">
		            <img src="assets/img/portpic/sewing2.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SEWING THREAD 2</h4>
		              <p>SEWING THREAD 2</p>
		              <a href="assets/img/portpic/sewing2.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="st"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>

	          <div class="col-lg-4 col-md-6 portfolio-item filter-st">
		            <img src="assets/img/portpic/sewing3.png" class="img-fluid" alt="">
		            <div class="portfolio-info">
		              <h4>SEWING THREAD 3</h4>
		              <p>SEWING THREAD 3</p>
		              <a href="assets/img/portpic/sewing3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="st"><i class="bx bx-plus"></i></a>
		              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
		            </div>
	          </div>    	 -->
        </div>
      </div> 
    </section>

    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
      	<div class="section-title" data-aos="fade-up">
          <h2>Our Global Partners</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide"><img src="assets/img/brand/brand1.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand2.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand3.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand4.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand5.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand6.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand7.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand8.png" class="img-fluid" alt=""></div>
           
            <div class="swiper-slide"><img src="assets/img/brand/brand9.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand10.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand11.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand12.png" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="assets/img/brand/brand13.png" class="img-fluid" alt=""></div>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <?php
      if($total_team_members>0){

    ?>
    <section id="team" class="team">

      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Team</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
         <div class="row" style="height: 28vw;">
            <?php  

                foreach ($team_members as $key => $value) {
                

            ?>
              <div class="col-lg-3 col-md-6 h-100 mb-3">
                <div class="team_member h-75 position-relative">
                  <img src="<?php echo $value['team_image']; ?>" class="h-100 w-100" alt="">
                  <div class="team_social w-100 position-absolute bottom-0">
                    <?php  
                        if(!empty($value['team_facebook'])){
                    ?>
                    <a href="<?php echo $value['team_facebook'] ; ?>">
                      <i class="bi bi-facebook"></i>
                    </a>
                    <?php 
                      }
                      if(!empty($value['team_instagram'])){ 

                    ?>
                    <a href="">
                      <i class="bi bi-instagram"></i>
                    </a>
                    <?php 
                      }
                      if(!empty($value['team_linkedin'])){ 

                    ?>
                    <a href="">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <?php 
                      }
                      if(!empty($value['team_twitter'])){ 

                    ?>
                    <a href="">
                      <i class="bi bi-twitter"></i>
                    </a>
                    <?php 
                      }
                    ?>
                  </div>
                </div>
                <div class="team_member_info h-25 d-flex flex-column justify-content-center align-items-center pt-2 pb-2">
                    <h4 class="ellipsis"><?php echo ucwords($value['team_name']) ; ?></h4>
                    <span class="ellipsis"><?php echo ucwords($value['team_designation']); ?></span>
                </div>
              </div>
                
            <?php } ?>
            


         </div>
      </div>
    </section>

  <?php 
      } 
    ?>
    <!-- ======= Pricing Section ======= -->
<!--     <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Pricing</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">F.A.Q</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> --><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact Us</h2>
          <p data-aos="fade-up">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row " data-aos="flip-right" data-aos-delay="100">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14689.144151169512!2d91.3985556!3d23.0132675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x771a869a5c860d66!2sBari%20Siddique%20Computers%20%26%20Training%20Center!5e0!3m2!1sen!2sus!4v1645610350994!5m2!1sen!2sus" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>House #79, Road #15,Sector #10,Uttara, Dhaka, Bangladesh</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com<br>contact@example.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Weave & Wrap</h3>
            <p>
              House #79, Road #15, Sector #10 <br>
              Uttara, Dhaka<br>
              Bangladesh <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
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

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

         <!--  <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Weave & Wrap</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed & Developed by <a href="https://bootstrapmade.com/">Bari Siddique Computers</a>
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