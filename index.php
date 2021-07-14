<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BBMS-Blood bank management system</title>
  <!-- Google Fonts -->
  <link rel="icon" href="images/blood.ico">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet">
  <!-- CSS stylesheet -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/3c4b2ffa74.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>

<body>

  <section class="coloured-section" id="title">

    <!-- Nav Bar -->
<?php 
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
  }
  else{
    $loggedin = false;
  }
  echo '<div class="container-fluid">
        <nav class="navbar  navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href=""><img class="logo-img" src="images/blood.webp">BBMS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cta">Downloads</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Registration</a>
              </li>';
              if(!$loggedin){
              echo'<li class="nav-item">
                  <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
              </li>';}
              if($loggedin){
                  echo '<li class="nav-item">
                    <a class="nav-link" href="/dbms Project/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
                  </li>';
              }

          echo' </ul>
          </div>
        </nav>';

?>




      <!-- Title -->
      <div class="row title">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <h1 class="big-heading">Life is in blood – donate Blood – give life</h1>
          <p>Universally, 'Blood' is recognized as the most precious element that sustains life.Once in every 2- seconds, someone, somewhere is desperately in need of blood.The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion. Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We remind every visitor that we have the empowerment to save lives and let’s do that – right now, right here.</p>
          <button type="button" class="btn btn-dark btn-lg Download-button"><i class="fab fa-apple"></i> Download</button>
          <button type="button" class="btn btn-outline-light btn-lg Download-button"><i class="fab fa-google-play"></i> Download</button>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <img class="title-image" src="images/iphone62.png" alt="iphone-mockup">
        </div>
      </div>
    </div>

  </section>


  <!-- Features -->

  <section class="white-section" id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="features-box col-lg-4">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Easy to use.</h3>
          <p>Easy to use.</p>
        </div>
        <div class="features-box col-lg-4">
          <i class="icon fas fa-bullseye fa-4x"></i>
          <h3 class="feature-title">Elite Clientele</h3>
          <p>We have all the donors and receivers you need.</p>
        </div>
        <div class="features-box col-lg-4">
          <i class="icon fas fa-heart fa-4x"></i>
          <h3 class="feature-title">Guaranteed to work.</h3>
          <p>You dont need to worry, we got this for you!</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimonials -->

  <section class="coloured-section" id="testimonials">
    <div id="testinomial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">"I am happy that I am the part of BBMS,I donated blood several times and that makes me very healthy."</h2>
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <em>Raja, banglore </em>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="testimonial-text"> “Donate your blood for a reason, let the reason to be life”</h2>
          <img class="testimonial-image" src="images/circle-cropped.png" alt="lady-profile">
          <em>Shivam, banglore</em>
        </div>
        
      </div>
      <a class="carousel-control-prev" href="#testinomial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testinomial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="images/TechCrunch.png" alt="tc-logo">
    <img class="press-logo" src="images/tnw.png" alt="tnw-logo">
    <img class="press-logo" src="images/bizinsider.png" alt="biz-insider-logo">
    <img class="press-logo" src="images/mashable.png" alt="mashable-logo">

  </section>


  <!-- Pricing -->

  <section class="white-section" id="pricing">
    <h2 class="section-heading">Please Register Here</h2>
    <p>A single pint can save three lives, a single gesture can create a million smiles</p>
    <div class="row">
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Donor Registration</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">Benefits</h2>
            <p>Benefit your physical health</p>
            <p>Provide a sense of belonging</p>
            <p>Reduce stress</p>
            <button class="btn btn-lg btn-block btn-outline-dark" type="button" onclick=" relocate_home()">Register</button>
            <script>
                function relocate_home()
                {
                    location.href = "donor.php";
                } 
            </script>
          </div>
        </div>
      </div>
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header">
            <h3>Receiver Registration</h3>
          </div>
          <div class="card-body">
          <h2 class="price-text">Benefits</h2>
            <p>You get the help you need</p>
            <p>blood donor one phone call away</p>
            <p>Unlimited App Usage</p>
            <!-- <button class="btn btn-lg btn-block btn-dark" type="button" onclick=" relocate_home()">Search</button> -->
            <a href="Receiver.php" class="btn btn-lg btn-block btn-dark" role="button">Search</a>
          </div>
        </div>
      </div>
      <div class="pricing-column col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3>Camps</h3>
          </div>
          <div class="card-body">
            <h2 class="price-text">Benefits</h2>
            <p>Nearest locations</p>
            <p>Get help offline</p>
            <p>Get merchandise after donating blood</p>
            <!-- <button class="btn btn-lg btn-block btn-dark" type="button">Show Camps</button> -->
            <a href="camp.php" class="btn btn-lg btn-block btn-dark" role="button">Show Camps</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Call to Action -->

  <section class="coloured-section" id="cta">
    <div class="container-fluid">
      <h3 class="big-heading">Anybody can save lives.</h3>
      <button class="btn btn-lg btn-dark Download-button" type="button"><i class="fab fa-apple"></i> Download</button>
      <button class="btn btn-lg btn-light Download-button" type="button"><i class="fab fa-google-play"></i> Download</button>
    </div>
  </section>


  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <h2>Get in Touch</h2>
      <p>Any doubt,need any help?Leave a message here.we will contact you soon.</p><br><br>
      <form action="mailto:kumarshivam11111999@gmail.com" method="post" enctype="text/plain">
        <p>Name</p>
        <input type="text" name="Your Name:" value="" placeholder="Enter Your name">
        <p>Message</p>
        <input type="text" name="Your Message:" value="" placeholder="Enter Your Message">
        <input type="submit" name="" value="Send Us">
      </form>
      <h2 class="for">OR</h2>
      <p>Find us on</p>
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="fab fa-linkedin"></i>
      <p>© Copyright 2021 BBMS</p>
    </div>
  </footer>


</body>

</html>