<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xcutives</title>
   <?php include('header-links.php') ?>
   
</head>

<body>

  <!-- ------------header--------  -->
  <?php include('header.php') ?>
 <!-- ------------header--------  -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/page-1.jpg" class="d-block w-100" alt="logo">
        <div class="carousel-caption">
          <h5>IT Consulting for Business Excellence</h5>
          <p>Boost your business with our expert IT consulting services. Our team of experienced professionals provides strategic guidance and innovative solutions to optimize your IT infrastructure, enhance cybersecurity, and drive digital transformation.</p>
          <p><a href="#" class="btn btn-warning mt-3"> Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/page-2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Strategic IT Partnerships for Success</h5>
          <p>Forge a powerful alliance with our IT consulting firm. We collaborate closely with your team to understand your business objectives and challenges.
          </p>
          <p><a href="#" class="btn btn-warning mt-3"> Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/page-3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Empowering Businesses with Innovative Solutions</h5>
          <p>Experience business transformation through our dynamic IT consulting services. </p>
          <p><a href="#" class="btn btn-warning mt-3"> Learn More</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- -------------------about sections----------- -->

  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="img/about.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>Global Headhunting Firms In USA <br>
              <span class="text-warning"> Company Overview </span></h2>
              <p>ABC Inc is a trusted provider of international talent services, catering to the needs of global conglomerates across
                diverse geographies. For over a decade, our unwavering commitment to excellence has earned us strong customer
                relationships and a prestigious clientele. We take pride in adding value and efficiently managing the assets of these
                esteemed organizations. <br>
                <br>
                
                Our dedication to delivering exceptional results has been recognized by three of the world's leading digital IT firms,
                who have bestowed upon us the honor of being their preferred recruitment partner. We have successfully met their
                talent acquisition requirements, helping them drive business development and secure top leadership positions. With an
                extensive network of highly skilled and experienced professionals, we have consistently delivered outstanding
                resources across North America, the UK, EMEA, and APAC regions. Our collaborative partnerships span across top Indian
                and global ITES companies, solidifying our reputation as a trusted industry leader.</p>
              <a href="#" class="btn btn-warning">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ----services section----- -->
  <section id="services" class="services section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Services</h2>
            <p>understands that to help meet client challenges and opportunities successfully in a global economy</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <img src="img/ges.png" alt="logo" id="service-image">
            <div class="card-body">
              <h3 class="card-title">Global Executive Search</h3>
              <p class="lead">Executive search consulting is a specialized management consulting.</p>
              <button class="btn btn-warning text-dark"> <a href="services/global.html">Read More</a> </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <img src="img/b2b.png" alt="" id="service-image">
            <div class="card-body">
              <h3 class="card-title">B2B Sales Recruitment</h3>
              <p class="lead">Hiring salespeople who are capable of hitting or surpassing their...</p>
              <button class="btn btn-warning text-dark"> <a href="services/b2b.html">Read More</a> </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <img src="img/RM.png" alt="" id="service-image">
            <div class="card-body">
              <h3 class="card-title">Recruitment Marketing</h3>
              <p class="lead">Marketing, in all its online and offline forms, is about connecting...</p>
              <button class="btn btn-warning text-dark"> <a href="services/recruitment.html">Read More</a> </button>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <img src="img/staff.png" alt="" id="service-image">
            <div class="card-body">
              <h3 class="card-title">IT Staffing Solution</h3>
              <p class="lead">The company provides staffing solutions - contract, contract to hire.</p>
              <button class="btn btn-warning text-dark"> <a href="services/rp.html">Read More</a> </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <img src="img/rpo.png" alt="" id="service-image">
            <div class="card-body">
              <h3 class="card-title">Recruitment Process..</h3>
              <p class="lead">Recruitment Process Outsourcing is a form of business process...</p>
              <button class="btn btn-warning text-dark"> <a href="services/rp.html">Read More</a> </button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <img src="img/tm.png" alt="" id="service-image">
            <div class="card-body">
              <h3 class="card-title">Talent Maping</h3>
              <p class="lead">Market Mapping evaluates and follows active and passive talent in local.</p>
              <button class="btn btn-warning text-dark"> <a href="services/tm.html">Read More</a> </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ------team section-----   -->

  <section id="team" class="team section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Testimony</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, accusamus!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                <h3 class="card-title py-2">Jack Wilson</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, possimus.</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-2.jpg" alt="" class="img-fluid rounded-circle">
                <h3 class="card-title py-2">Jack Wilson</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, possimus.</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-3.jpg" alt="" class="img-fluid rounded-circle">
                <h3 class="card-title py-2">Jack Wilson</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, possimus.</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center">
              <div class="card-body">
                <img src="img/team-4.jpg" alt="" class="img-fluid rounded-circle">
                <h3 class="card-title py-2">Jack Wilson</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, possimus.</p>

                <p class="socials">
                  <i class="bi bi-twitter text-dark mx-1"></i>
                  <i class="bi bi-facebook text-dark mx-1"></i>
                  <i class="bi bi-linkedin text-dark mx-1"></i>
                  <i class="bi bi-instagram text-dark mx-1"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -----contact section------   -->
  <section id="contact" class="contact section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, sapiente?</p>
          </div>
        </div>
      </div>

      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 pb-4">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <input type="text" class="form-control" required placeholder="Your Full Name">
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <input type="email" class="form-control" required placeholder="Your Email Here">
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
               <textarea rows="3" required class="form-control" placeholder="Your Query Here"></textarea>
              </div>
            </div>
            <button class="btn btn-warning btn-lg btn-block mt-3">
              Send Now
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- -----------------footer------------ -->
  <!-- Footer -->

<!-- Footer -->
<?php include("footer.php") ?>
<!-- script   -->



<!-- script  -->
</body>

</html>