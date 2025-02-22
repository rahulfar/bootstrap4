<?php
include 'connection.php';
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
  <style>
    *{
      padding: 0; margin: 0;
      font-family: 'Josefin Sans', sans-serif;
    }
       .carousel-inner img {
    width: 100%;
    height: 80%;
  }
          </style>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="unnamed.png" class="w-25"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
     
              <!-- banner -->


  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="banner1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption pt-5">
          <h3>Indian Premier League</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="banner2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Indian Premier League</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="banner3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Indian Premier League</h3>
          <p>We love the Big Apple!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</header>
   <!-- About us -->
        <section id="about">
            <div class="container">
            <h3 class="text-center text-capitalize pt-3">About US</h3>  
            <hr class="w-25 mx-auto">
            <div class="row  mb-5">
             <div class="col-lg-6 col-md-6 col-12">
                 <img src="about.jpg" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                 <h1>Indian Premier League</h1>
                 <p>The 2021 season promises to
                  live up to
                   the hype after a crazy
                    auction
                  that saw 8 teams spend a total 
                of 145.30 crore rupees. 
                </br>Royal Challengers Bangalore.
               Punjab Kings. Mumbai Indians. Chennai Super Kings. 
            Delhi Capitals. Sunrisers Hyderabad. Rajasthan Royals.
         Kolkata Knight Riders.
         It is scheduled to be played between 9 April to 30 May 2021 across six different venues in India
         </p>
         <a href="https://en.wikipedia.org/wiki/2021_Indian_Premier_League"> <button class="btn btn-primary">Read More</button></a>
                  </div>
              </div>
            </div>
        </section>
           <section>
            <div class="container">
            <h3 class="text-center text-capitalize pt-3">Service</h3>  
            <hr class="w-25 mx-auto">
            <div class="row text-center mb-4">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                  <img class="card-img-top" src="halmet.webp" alt="Card image">
                  <div class="card-body">
                   <h4 class="card-title">₹ 3,280</h4> 
                    <p class="card-text"> Cricket Helmet Mens And Boys Size.</p>
                    <a href="https://www.cricketershop.com/shrey-master-class-air-titanium-grill-cricket-helmet-mens-and-boys-size/" class="btn btn-primary">See Profile</a>
                  </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                  <div class="card">
                    <img class="card-img-top" src="glabes.webp" alt="Card image">
                    <div class="card-body">
                      <h4 class="card-title">₹ 3,199</h4>
                      <p class="card-text">Gray-Nicolls IPL Edition Off Cuts Cricket Batting Gloves Mens Size</p>
                      <a href="https://www.cricketershop.com/gray-nicolls-ipl-edition-off-cuts-cricket-batting-gloves-mens-size/" class="btn btn-primary">See Profile</a>
                    </div>
                  </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                      <img class="card-img-top" src="guard.webp" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title">₹ 11,699</h4>
                        <p class="card-text">REMFRY CRICKET BATTING THIGH GUARD YOUTH SIZE</p>
                        <a href="https://www.cricketershop.com/remfry-cricket-batting-thigh-guard-mens-size/" class="btn btn-primary">See Profile</a>
                      </div>
                    </div>
                    </div>
            </div>
         
            </div>
        </section>
           <!-- article -->
           <sction>
            <article class="bg-primary text-center text-white py-5">
              <div>
                <h3 class="display-4">+91 1025874954</h3>
                <p>If you want call this Same number</p>
                <a href="#contact"><button class="btn btn-warning">Contact us</button></a>
              </div>
            </article>

           </sction>

           <!-- gallery -->

           <section>
            <div class="container">
              <h3 class="text-center text-capitalize pt-3">Gallery</h3>  
              <hr class="w-25 mx-auto">
              <div class="row">
                <div class="col-lg-4 col-md-2 col-12 mb-4">
                  <img src="ga1.jpg" class="img-fluid">
                  </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="ga2.jpg" class="img-fluid">
                    </div>
                    <div class="col-lg-4 col-md-2 col-12 mb-4">
                      <img src="ga3.jpg" class="img-fluid">
                      </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="g4.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="ga5.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="ga6.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="ga7.jpg" class="img-fluid">
                    </div>
                  <div class="col-lg-4 col-md-2 col-12 mb-4">
                    <img src="ga8.jpg" class="img-fluid">
                    </div>
                <div class="col-lg-4 col-md-2 col-12 mb-4">
                  <img src="ga9.jpg" class="img-fluid">
                  </div>
                </div>
              </div>
           </section>
           <!-- end gallery -->

           <sction id="contact">
            <article class="bg-primary  py-5">
              <div class="text-white text-center">
                <h3 class="display-4">Want to Join</h3>
                <p>Be a part of sports family</p>
                <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Join Now</button>
              </div>
              <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Sign Up</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form method="POST" action="">
                        <div class="form-group">
                          <label for="email">Email address:</label>
                          <input type="email" class="form-control" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" placeholder="Enter password" name="pwd">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                          </label>
                        </div>
                        <button type="submit" name="save" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </article>

           </sction>
           <!-- End Jion -->
           <section>
            <div class="container mb-5">
              <h3 class="text-center text-capitalize pt-3">Contact Us</h3>  
              <hr class="w-25 mx-auto">
              <div class="w-50 mx-auto">
                <form method="POST" action="">
                  <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" class="form-control" placeholder="Enter yourname" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="number">Number:</label>
                    <input type="number" class="form-control" placeholder="Enter number" name="number">
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                   <textarea class="form-control" name="address"></textarea>
                  </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                  </div>
                  <button type="submit" name ="submit" class="btn btn-primary">Send</button>
                </form>
              </div>
              </div>
           </section>
           <!-- end contact us -->

           <footer>
             <p class="text-center bg-dark text-white">
               2021 @ Design by a Rahul 
             </p>
           </footer>
</body>
</html>
<?php
if(isset($_POST['save']))
{
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $sql = "INSERT INTO connect (email, pwd) VALUES ('$email', '$pwd')";
  $exe = mysqli_query($conn, $sql);
  if (!$exe)
{
    echo "error";
  }
}


?>
<?php

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];
  $sql = "INSERT INTO connected (name, email, number, address) VALUES ('$name', '$email', '$number', '$address')";
  $exe = mysqli_query($conn, $sql);
  if (!$exe)
{
    echo "error";
  }
}
?>
