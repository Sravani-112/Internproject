<!DOCTYPE html>
<html>
<head>
<style>

.img-container {
  float: left;
  align-content: center;
  width: 30%;
  padding: 5px;
  margin: 0% 10%;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  max-width: 1200px;
}
.p {
  font-family: "Lucida Console", "Courier New", monospace;
}
.responsive {
  width: 100%;
  max-width: 300px;
  height: auto;
}
</style>
	<meta charset="utf-8">
	<title>Tours & Travels</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://kit.fontawesome.com/94e307683f.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="mp.html"><i class="fas fa-bus-alt icon fa-3x"></i><span style="font-family: 'Otomanopee One', sans-serif; font-size: 50px;">Hello, <?php include'validation.php';echo "$unam";?><!-- Travels --></span></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#home" style="font-family: 'Otomanopee One', sans-serif; font-size: 20px;">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#packages" style="font-family: 'Otomanopee One', sans-serif; font-size: 20px;">Packages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#trending" style="font-family: 'Otomanopee One', sans-serif; font-size: 20px;">Trending</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="Login_page.html" style="font-family: 'Otomanopee One', sans-serif; font-size: 20px;">Logout</a>
        </li>
    </ul>
 </div>
</nav>


<!-- carousel -->
<section id="home">
    <!-- <div class="container-fluid"> -->
            <div id="slide" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/bu_im.jpg" alt="Bus" height="500" width="1200">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/cars_im.jpg" alt="Car" height="500" width="1200">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/plane1_im.jpg" alt="Plane" height="500" width="1200">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/hotel_im.jpg" alt="Hotel" height="500" width="1200">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev" style="color: #fff;">
            <span class="carousel-prev-icon" aria-hidden="true" style="color: #fff;"></span>
            <span class="sr-only" style="color: #fff;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide" role="button" data-slide="next" style="color: #fff;">
            <span class="carousel-next-icon" aria-hidden="true" style="color: #fff;"></span>
            <span class="sr-only" style="color: #fff;">Next</span>
        </a>
        </div>
    <!-- </div> -->
    
</section>

<!-- Columns -->

<div class="row c-it">
    <div class="col-lg-3 col-md-4 col-sm-6" style="background-color:orange; border: 1px solid;">
        <fieldset><a href="hotel.html"class="j"> <i class="fas fa-hotel fa-3x"></i><br></a>
        <p align="center">Available all days</p></fieldset>
        
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6" style="background-color:orange; border: 1px solid;">
        <fieldset><a href="bus.html" class="j"><i class="fas fa-bus fa-3x"></i></a>
        <p align="center">Available all days</p></fieldset>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6" style="background-color:orange; border: 1px solid;">
        <fieldset><a href="plane.html" class="j"><i class="fas fa-plane fa-3x"></i></a>
        <p align="center">Available on Mon, Wed, and Sat</p></fieldset>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6" style="background-color:orange; border: 1px solid;">
        <fieldset><a href="train.html" class="j"><i class="fas fa-train fa-3x"></i></a>
        <p align="center">Available all days</p></fieldset>
    </div>
</div>

<!-- Packages-->
<section id="packages">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">With best vacation packages</h4>
          </div>

          <div class="card-body">
           
           <img src="images/vb.jpeg" class="pc_img" width="300" height="250">
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">top reviewed </h4>
          </div>
 <div class="card-body">
           
           <img src="images/vb2.jpeg" class="pc_img" width="300" height="200">
          </div>
          </div>
<div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Prime rentals </h4>
          </div>
 <div class="card-body">
           
           <img src="images/vb3.jpeg" class="pc_img" width="300" height="250">
          </div>
          </div>
        
</section>
<section>
    <!-- <div class="container-fluid"> -->
            <div id="slide2" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/vac1.jpg" alt="Bus" height="600" width="800">
            
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/vac2.jpg" alt="Car" height="600" width="800">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/vac5.jpg" alt="Plane" height="600" width="800">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/vac6.jpg" alt="Hotel" height="600" width="800">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slide2" role="button" data-slide="prev" style="color: #fff;">
            <span class="carousel-prev-icon" aria-hidden="true" style="color: #fff;"></span>
            <span class="sr-only" style="color: #fff;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide2" role="button" data-slide="next" style="color: #fff;">
            <span class="carousel-next-icon" aria-hidden="true" style="color: #fff;"></span>
            <span class="sr-only" style="color: #fff;">Next</span>
        </a>
        </div>
    <!-- </div> -->
    
</section>
<br><br><br>

<h2 style="font-family: 'Lucida Console', 'Courier New', monospace; background-color: lightgrey; font-style: bold; border: 10px; padding: 20px 10px;" id="trending"><center>Trending Destinations ??? World</h2>


<div class="row">
  <div class="col-lg-3 col-md-6">
    <img src="images/c1.jpeg" alt="Snow" class="responsive" width="300" height="250"  style="vertical-align:middle;margin:0px 20px" >
  </div>
  <div class="col-lg-9 col-md-12 mt">
<br><br><br>
<h2>Cabo San Lucas,Mexico</h2>
    <p style="font-size:160%;">You'll find crashing waves off Cabo's Pacific coast and sheltered,
 calm water on the Sea of Cortez. Given those options, Cabo has built a rare reputation for both excellent
 outdoor sports (big-game fishing, diving and kayaking, among others) and pure beach relaxation. Of course, 
there's also great nightlife. Cabo???s resorts, hotels and inns cater to everyone from honeymooners to families to Hollywood stars seeking a weekend getaway.
</p>
  </div>
</div>
<br><hr><br>
<div class="row" style="background-color:lightblue;">
  <div class="col-lg-3 col-md-6">
    <img src="images/c3.jpeg" alt="Snow" class="responsive" width="300" height="250"  style="vertical-align:middle;margin:0px 20px">
  </div>
  <div class="col-lg-9 col-md-12 mt">
<br><Br><br>
<h2>Doha,Qatar</h2>
    <p style="font-size:160%;">The shining jewel of Qatar, Doha is a multicultural city, home to most of the country's population as well as expatriate communities from a range of origins. Shopping abounds in the city's plentiful malls, while the Corniche impresses visitors with picturesque architecture and dazzling views of the harbour. Doha boasts myriad cultural facilities, including the futuristic Education City and the National Museum.
</p>
  </div>
</div>
<br><hr><br>
<div class="row">
  <div class="col-lg-3 col-md-6">
    <img src="images/c2.jpeg" alt="Snow" class="responsive" width="300" height="250"  style="vertical-align:middle;margin:0px 20px"><!--  width="500" height="400" -->
  </div>
  <div class="col-lg-9 col-md-12 mt">
<br><br><br>
<h2>Corsica,France</h2>
    <p style="font-size:160%;">Corsica is a laid-back French island, with a breezy vibe that???s part European weekend and part tropical honeymoon. The port city of Bastia flings its arms wide open to weary travelers disembarking from a long ferry trip. For a truly charming Corsican experience, catch a train through the mountains to the beach, passing by rustic villages and grazing cows along the way. Take a few hours or even a few weeks to explore the island???s famous walking trails, including the varsity-level GR 20.
</p>
  </div>
</div>
<br><hr><br>
<div class="row" style="background-color:lightblue;">
  <div class="col-lg-3 col-md-6">
    <img src="images/c4.jpeg" alt="Snow" class="responsive" width="300" height="250"  style="vertical-align:middle;margin:0px 20px">
  </div>
  <div class="col-lg-9 col-md-12 mt">
<br><br><br>
<h2>Sanya,China</h2>
    <p style="font-size:160%;">Known as the Hawaii of China, Sanya???s miles of coastline, tropical climate, and upscale resorts make it a go-to beach destination for many travellers. But, it???s the city???s Buddhist temples, coconut plantations, fruit-sorbet stands, and fishing port that keep travellers coming back.
</p>
  </div>
</div>

<!-- <marquee width="260%" direction="right" height="100px"  style="vertical-align:middle;margin:0px 50px">
<p style="color:blue"><h3><b><i>Best tourist destinations around the world to exploire.Fall In Love With The Journey. ..</i></b></h3></p>
</marquee> -->
<br><br>
<hr>
<div class="clearfix">

  <div class="img-container">
  <img align="center" src="images/pageend.jpeg" alt="social"  width="300">
  </div>
 <div class="img-container">
</div>
  <div class="img-container">
  <img src="images/copyright.jpeg" alt="copyrights" width="200" height="50">
  </div>
 
</div>

</body>
</html>