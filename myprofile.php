<!Doctype HTML>

<html>
 <head>
   <title>profile Card Design</title>
   <link rel="stylesheet" href="style1.css">
<href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <div class="profile-card">
     <div class="image-container">
        <img src="user.png" style= "width: 60%; margin-left:70px; margin-bottom: 70px; border-radius: 50%;">
    <div class="title">
    <h2 style="text-align: center; margin-left:140px;" align="center"><?php session_start(); echo $_SESSION["una"]; ?></h2>
</div>
</div>
<div class="main-container">
<p><i class="fa fa-envelope" style="margin-right:10px;"></i><?php echo $_SESSION["mail"];?></p>
<p><i class="fa fa-phone " style="margin-right:10px;"></i><?php echo $_SESSION["mnum"];?></p>
<p><i class="fa fa-home" style="margin-right:10px;"></i>India</p>
<hr>
<p><b><i class="fa fa-asterisk info"></i>Reviews</b></p>
<p>Taj hotel,apolo bandar,Mumbai</p>
<div class="review-bar">
<div class="progress-bar" style="width: 80%">80%</div>
<p>cities visited2</p>
<div class="review-bar">
<div class="progress-bar" style="width: 70%">70%</div>
<p>cities visited</p>
<div class="review-bar">
<div class="progress-bar" style="width: 75%">75%</div>
<p>cities visited</p>
<div class="review-bar">
<div class="progress-bar" style="width: 85%">85%</div>
</div>


</div>





</div>
</div>
</body>
</html>