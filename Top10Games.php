<?php

session_start();
if (!isset($_SESSION['name'])){
    header('location:login.php');
}


?><!DOCTYPE html>
<html>
<head>
	<title></title>

	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <header class="header boxs">
    <div class="container"> <nav class="navbar myNavBar navbar-expand-sm">
            
            <div class="navbar-header">
                <a href="indexnew.php"><img src="img/logon.png" class="img-fluid first_logo" alt="logo"></a>
            </div>
            <div class="collapse navbar_right navbar-collapse" id="collapsibleNavbar">
                <div class="navbar navbar-right">
                    <ul class="navbar-nav menu">
                        <li>
                           <div class="mymenu">
                              <ul>
                                <li>
                                    <a  href="onlinegames.php">Online Games<i class="fa fa-gamepad"> </i> </a>
                                </li>
                              </ul>
                            </div>
                        </a>                         
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section4" href="javaScript:void(0)">Social</a>
                        </li>
                        
                        <li class="nav-item logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">
                            <a class="nav-link" href="logout.php"><?php echo $_SESSION['name']; ?></a>
                        </li>

                    </ul>

                </div>

            </div>
            
        </nav>
       
    </div>
</header>



<div class="jumbotron bg-dark" style="background-size: 20%;height: 71vh;background-color: #ff0000;background: url('img/hitman.jpg') no-repeat;/* background: no-repeat; */background-size: 100% 100%;">
  <h1 style="color: #d03737;margin-top: 40px;text-align: center;"> <b>Fun.GameZone</b></h1>
  <h4 style="color: #d03737; margin-top: 10px; text-align: center;"> <b> Changing the vision of gaming </b></h4>
</div>
  
<section class=" bg-dark" style=" background-image: url('images/Mast2.jpg') ;text-align: center;">
  <div style="padding-top: 20px; padding-bottom: 20px;">
    <h2 style="color: silver ;margin-top: 19px;">
      <b>
             <u>Top 10 Games of June</u>
      </b>
    </h2>
  </div>

  <div class="container-fluid" style="background-image: url('images/Mast2.jpg'); text-align: center;">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 py-3 ">
        <div class="card">
          <img class="card-img-top10" src="images/img9.jpg" alt="PlayOnlineGames">
           </div> 
            <div class="cardtext10 boxs">
              <h3 class="card-title">1) Tekken 7</h3>
            <h5 class="card-text">Click below to play</h5>
            <a href="https://tk7.tekken.com" class="btn btn-primary">Click Here</a>
            </div>
    
        
      </div>


      <div class="col-lg-6 col-md-6 col-12 py-3" >
        <div class="card">
          <img class="card-img-top10" src="images/PUBG.jpg" alt="PUBG Mobile">
        </div>
            <div class="cardtext10 boxs">
              <h3 class="card-title">2) PUBG Mobile</h3>
            <p class="card-text">Click below to play</p>
            <a href="https://www.pubgmobile.com/en/event/suspensestation" class="btn btn-primary">Click Here</a>
        </div>
        
      </div>


      <div class="col-lg-6 col-md-6 col-12 py-3 ">
        <div class="card">
          <img class="card-img-top10" src="images/Fortnite.jpg" alt="Fortnite">
          </div> 
            <div class="cardtext10 boxs">
              <h3 class="card-title">3) Fortnite</h3>
            <h5 class="card-text">Click below to play</h5>
            <a href="https://www.epicgames.com/fortnite/en-US/home" class="btn btn-primary">Click Here</a>
        </div>
        
      </div>


      <div class="col-lg-6 col-md-6 col-12 py-3">
        <div class="card">
          <img class="card-img-top10" src="images/DoomEternal.jpg" alt="Doom Eternal">
            </div>
            <div class="cardtext10 boxs">
              <h3 class="card-title">4) Doom Eternal</h3>
            <p class="card-text">Click below to play</p>
            <a href="https://bethesda.net/en/game/doom" class="btn btn-primary">Click Here</a>
        </div>
        
      </div>
      

      <div class="col-lg-6 col-md-6 col-12 py-3 ">
        <div class="card">
          <img class="card-img-top10" src="images/FIFA2.jpg" alt="FIFA 2019">
            </div>    
            <div class="cardtext10 boxs">
              <h3 class="card-title">5) FIFA 2019</h3>
            <h5 class="card-text">Click below to play</h5>
            <a href="https://www.ea.com/en-gb/games/fifa/fifa-19" class="btn btn-primary" class="btn btn-primary">Click Here</a>
        </div>
        
      </div>


      <div class="col-lg-6 col-md-6 col-12 py-3">
        <div class="card">
          <img class="card-img-top10" src="images/img10.jpg" alt="Street Fighter - V">
        </div>
            <div class="cardtext10 boxs">
              <h3 class="card-title">6) Street Fighter - V</h3>
            <p class="card-text">Click below to play</p>
            <a href="https://streetfighter.com/purchase" class="btn btn-primary">Click Here</a>
            </div>
      </div>
      
      <div class="col-lg-6 col-md-6 col-12 py-3 ">
        <div class="card">
          <img class="card-img-top10" src="images/Assissan.png" alt="Assassin's Creed odyssey">
           </div> 
            <div class="cardtext10 boxs">
              <h3 class="card-title">7) Assassin's Creed odyssey</h3>
            <h5 class="card-text">Click below to play</h5>
            <a href="https://assassinscreed.ubisoft.com/game/en-us/home" class="btn btn-primary">Click Here</a>
            </div>
        </div>
        
      <div class="col-lg-6 col-md-6 col-12 py-3">
        <div class="card">
          <img class="card-img-top10" src="images/img1.jpg" alt="Call of Duty">
             </div> 
            <div class="cardtext10 boxs">
              <h3 class="card-title">8) Call of Duty</h3>
            <p class="card-text">Click below to play</p>
            <a href="https://www.callofduty.com/home" class="btn btn-primary">Click Here</a>
            </div>
        </div>
        
      <div class="col-lg-6 col-md-6 col-12 py-3 ">
        <div class="card">
          <img class="card-img-top10" src="images/Warhammer.jpg" alt="Warhammer Vermintide II">
          </div>
            <div class="cardtext10 boxs">
              <h3 class="card-title">9) Warhammer Vermintide II</h3>
            <h5 class="card-text">Click below to play</h5>
            <a href="https://www.vermintide.com" class="btn btn-primary">Click Here</a>
            </div>
        </div>
        
      <div class="col-lg-6 col-md-6 col-12 py-3">
        <div class="card">
          <img class="card-img-top10" src="images/Dishonoured2.png" alt="Dishonoured II">
        </div>
            <div class="cardtext10 boxs">
              <h3 class="card-title">10) Dishonoured II</h3>
            <p class="card-text">Click below to play</p>
            <a href="https://www.microsoft.com/en-us/p/dishonored-2/bszm480tswgp#activetab=pivot:overviewtab" class="btn btn-primary">Click Here</a>
            </div>
        </div>
            
    </div>
    
  </div>
</section>


<section class="footerbtm boxs">
    <div class="container">
        <div class="bottomFooter boxs">
            <div class="btmleft d-inline-block ">
                <p><span><i class="far fa-copyright"></i></span> 2020 Fun.GameZone</p>
            </div>
            <div class="btmright d-inline-block float-right ">
                <h5 class="d-inline-block">We are Social:</h5>
                <a href="https://www.facebook.com/profile.php?id=100004155015725" class="facebook"><i class="fa fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/sujeetm19/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/vikas-yadav-349891137/"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/UCw9lkGbB0JgQVDkbo6RBcbA?view_as=subscriber"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</section>




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

