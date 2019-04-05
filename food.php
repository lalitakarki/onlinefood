<?php
if(isset($_POST[btnsub]))
{
  $con=mysqli_connect("localhost","root","","food");     
  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message"];


  $sql2=mysqli_query($con,"INSERT into contact
    values('$name','$email','$message')");
  if($sql2)
  {
    echo "<script type='text/javascript'>alert('message sent')</script>";
  }else{
    echo "not sent!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>K$B foods</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body data-spy="scroll" data-target="#site-navbar" data-offset="20">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <div class="logo">
            <img  src="img/logo.png" height="130px" width="130px">
            </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav" >
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item active"><a href="#section-home" class="nav-link" >Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link" >About</a></li>
            
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
             <li class="nav-item" ><a href="#" class="nav-link"> Management </a></li>
             <li class="nav-item"><a href="#" class="nav-link">Inventory</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(img-offer/bg34.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">WELCOME TO K$B FOODS</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Come and eat well with our delicious &amp; healthy foods.</h2>    
            <p ><a href="#" target="_blank" class="btn btn-dark btn-lg site-animate" data-toggle="modal" data-target="#reservationModal">LOGIN</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>K$B foods have been serving their customers since 3 years. Healthy and Good food is our speciality.</p>

            <p class="mb-4">K$B foods is known for the hygenic environment within the place. We believe in time saving ,hence offering home delievery to our customers within time.</p>
            <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="img-offer/dessert1.jpeg" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    
    <section class="site-section" id="section-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Delicious Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Good food is Good mood. Eat well with K$B foods every hour. </p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

            <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="pills-veg-tab" data-toggle="pill" href="#pills-veg" role="tab" aria-controls="pills-veg" aria-selected="true">VEG</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-nonveg-tab" data-toggle="pill" href="#pills-nonveg" role="tab" aria-controls="pills-nonveg" aria-selected="false">NON-VEG</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-beverage-tab" data-toggle="pill" href="#pills-beverage" role="tab" aria-controls="pills-beverage" aria-selected="false">BEVERAGES</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="pills-deseert-tab" data-toggle="pill" href="#pills-dessert" role="tab" aria-controls="pills-dessert" aria-selected="false">DESSERT</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-veg" role="tabpanel" aria-labelledby="pills-veg-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/offer1.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Chole bhature</h5>
                        <h6 class="text-primary menu-price">Rs 60/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/offer4.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0"> matar paneer </h5>
                        <h6 class="text-primary menu-price">Rs 40/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/offer3.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">shahi paneer</h5>
                        
                        <h6 class="text-primary menu-price">Rs 50/-</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/offer2.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">paneer tikka</h5>
                        
                        <h6 class="text-primary menu-price">Rs 35/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/offer10.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0"> rice & Dal</h5>
                        
                        <h6 class="text-primary menu-price">Rs 40/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/offer7.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Tandoori roti</h5>
                        
                        <h6 class="text-primary menu-price">Rs 5/-(per)</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-nonveg" role="tabpanel" aria-labelledby="pills-nonveg-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/grilledc.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Grilled chicken</h5>
                       
                        <h6 class="text-primary menu-price">Rs 50/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/friedchi.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Salted Fried Chicken</h5>
                        
                        <h6 class="text-primary menu-price">Rs 70/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/butterchi.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0">Butter-chicken</h5>
                        
                        <h6 class="text-primary menu-price">Rs 70/-</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/grillfish.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0">Grilled Fish</h5>
                       
                        <h6 class="text-primary menu-price">RS 80/-</h6>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-beverage" role="tabpanel" aria-labelledby="pills-beverage-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="img/beverage.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">lemonade</h5>
                        
                        <h6 class="text-primary menu-price">Rs 17/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/van-smoo.jpeg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">vanilla smoothie</h5>
                        
                        <h6 class="text-primary menu-price">Rs 22/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/tea.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Tea</h5>
                        
                        <h6 class="text-primary menu-price">Rs 5/-</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/greentea.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0">Green-Tea</h5>
                       
                        <h6 class="text-primary menu-price">Rs 8/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/coffe.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0">Coffe latte</h5>
                        
                        <h6 class="text-primary menu-price">Rs 10/-</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/lassi.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0">Lassi</h5>
                        
                        <h6 class="text-primary menu-price">Rs 10/-</h6>
                      </div>
                    </div>-->
                  </div>
                </div>
              </div>

                    <div class="tab-pane fade" id="pills-dessert" role="tabpanel" aria-labelledby="pills-dessert-tab">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/dessert1.jpeg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">stawbery custurd</h5>
                        
                        <h6 class="text-primary menu-price">Rs 25/-</h6>
                      </div>
                    </div>
                       <div class="media menu-item">
                      <img class="mr-3" src="img-offer/icecream2.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">ice-creams(2-scoops)</h5>
                        
                        <h6 class="text-primary menu-price">Rs 15/-</h6>
                      </div>
                    </div>
                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/gulabja.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">gulab jamun(2-pcs.)</h5>
                       
                        <h6 class="text-primary menu-price">Rs 17/-</h6>
                      </div>
                    </div>
                    <div class="media menu-item">
                      <img class="mr-3" src="img-offer/rashmalai.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">rashmalai(2-pcs.)</h5>
                       
                        <h6 class="text-primary menu-price">Rs 22/-</h6>
                      </div>
                    </div>

                       </div>
                     </div>
                  </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Management</h2>
            <div class="row justify-content-center">
             <div class="col-md-7">
                
              </div>
            </div>
          </div>
           

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Get In Touch</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="POST">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Send Message" name="btnsub">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="img-offer/rest.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> near Amrapali Institues,Lamachaur <br> haldwani <br> <br>
              Phone: <br> 0123456789<br> <br>
              Email: <br> <a href="mailto:kbfoods@gmail.com">kbfoods@gmail.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <div id="map"></div>
    <!-- END section -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

    </body>
</html>