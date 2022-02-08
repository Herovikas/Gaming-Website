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
                                    <a  href="Top10games.php">Top 10 Games<i class="fa fa-gamepad"> </i> </a>
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


    
<div class="jumbotron bg-dark" style="background-size: 20%;height: 71vh;background-color: #ff0000;background: url('img/valo 1.jpg') no-repeat;/* background: no-repeat; */background-size: 100% 100%;">
  <h1 style="color: #d03737;margin-top: 40px;text-align: center;"> <b>Fun.GameZone</b></h1>
  <h4 style="color: #d03737; margin-top: 10px; text-align: center;"> <b> Changing the vision of gaming </b></h4>
</div>
<section style="text-align: center; background-image: url('images/Mast2.jpg');">
  <div style="padding-top: 20px; padding-bottom: 20px;">
    <h2 style="color: silver;padding: 10px;">
      <b >
             <u >Just one click - Access all these games</u>
      </b>
    </h2>
  </div>

  <div  class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card" >
              <img class="card-img-top1" src="images/img9.jpg" alt="Tekken 7">
            </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">1) Tekken 7</h4>
                 <p class="card-text">One of the best evergreen fighting games. Get it here</p>
                 <a href="https://tk7.tekken.com" class="btn btn-success">Click Here</a>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/GTA5.jpg" alt="Grand Theft Auto V">
               </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title"> 2) Grand Theft Auto - V </h4>
                 <p class="card-text">The overall complete package game enriched with action</p>
                 <a href="https://www.rockstargames.com/games/info/V" class="btn btn-success">Click Here</a>
               </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12  py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Hitman2.jpg" alt="Hitman2">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">3) Hitman II</h4>
                 <p class="card-text">Known for its killing graphics. Stuffed with weapons </p>
                 <a href="https://www.microsoft.com/en-us/p/hitman-2/bpqkc5th07xf?activetab=pivot%3aoverviewtab" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/DoomEternal.jpg" alt="Doom Eternal">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">4) Doom Eternal</h4>
                 <p class="card-text">Game with the idea of a superhit hollywood "ghost rider"</p>
                 <a href="https://bethesda.net/en/game/doom" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/PUBG.jpg" alt="PUBG">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">5) PUBG Mobile</h4>
                 <p class="card-text">PUBG needs no discription. Download full version from this link</p>
                 <a href="https://www.pubgmobile.com/en/event/suspensestation" class="btn btn-success">Click Here</a>
               </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Automata.jpg" alt="Automata">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">6) Automata</h4>
                 <p class="card-text">Saga of a witch looking for her revenge in battleground</p>
                 <a href="https://nierautomata.square-enix-games.com/en-us/age-gate" class="btn btn-success">Click Here</a>
               </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Dishonoured2.png" alt="Dishonoured 2">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">7) Dishonoured II</h4>
                 <p class="card-text">Graphics are set for a mercyless assault </p>
                 <a href="https://www.microsoft.com/en-us/p/dishonored-2/bszm480tswgp#activetab=pivot:overviewtab" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/FIFA2.jpg" alt="FIFA 2019">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">8) FIFA 2019</h4>
                 <p class="card-text">Special piece for all soccer fans</p>
                 <a href="https://www.ea.com/en-gb/games/fifa/fifa-19" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Fortnite.jpg" alt="Fortnite">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">9) Fortnite</h4>
                 <p class="card-text">Best battleground game in the world till date.</p>
                 <a href="https://www.epicgames.com/fortnite/en-US/home" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Dusk.jpg" alt="Dusk Game">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">10) Dusk</h4>
                 <p class="card-text">This game is about a person who fights a battle for his family</p>
                 <a href="https://www.gog.com/game/dusk" class="btn btn-success">Click Here</a>
               </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/img10.jpg" alt="Street Fighter V">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">11) Street Fighter V</h4>
                 <p class="card-text">One of the epic Arcade games which needs no descriptions </p>
                 <a href="https://streetfighter.com/purchase" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Divnity.jpg" alt="Divnity">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">12) Divnity</h4>
                 <p class="card-text">Divnity is the virtual world hypothesis game. With most ratings ever</p>
                 <a href="http://www.divinityoriginalsin.com/agelock/?ref=http://www.divinityoriginalsin.com" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/img_1.jpg" alt="Street Fighter III">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title"> 13) Street Fighter III</h4>
                 <p class="card-text"> One of the best evergreen fighting games. Get the complete version here</p>
                 <a href="https://street-fighter-3.soft32.com" class="btn btn-success">Click Here</a>
               </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Assissan.png" alt="Assassin's Creed oddyssey">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">14) Assassin's Creed odyssey</h4>
                 <p class="card-text">Assassin is one of the high level killing game built up for experienced gamers</p>
                 <a href="https://assassinscreed.ubisoft.com/game/en-us/home" class="btn btn-success">Click Here</a>
               </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/img1.jpg" alt="Call of Duty">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">15) Call of Duty</h4>
                 <p class="card-text">If a game which can downsize PUBG in popularity and grapics that's COD </p>
                 <a href="https://www.callofduty.com/home" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/League.jpg" alt="League Of Legends">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">16) League of Legends</h4>
                 <p class="card-text">This latest game have everything a gamer require to enhance his gaming skills</p>
                 <a href="https://play.euw.leagueoflegends.com/en_GB" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Rainbow.jpg" alt="Rainbow Six Sieze">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">17) Rainbow Six Sieze</h4>
                 <p class="card-text">This online multiplayer squad deathmatch has a lot of new weapons and new arena rules</p>
                 <a href="https://www.ubisoft.com/en-gb/game/rainbow-six/siege" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/Warhammer.jpg" alt="Warhammer Varmintide II">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">18)  Warhammer Varmintide II</h4>
                 <p class="card-text">One of the best arcade games with high level of graphics. Highly recommended</p>
                 <a href="https://www.vermintide.com" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/RocketLeague.jpg" alt="Rocket League 2019">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">19) Rocket League 2015</h4>
                 <p class="card-text">Rocket lwague is basically a newcomers game and for early teens</p>
                 <a href="https://www.rocketleague.com" class="btn btn-success">Click Here</a>
               </div>
        </div>        

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/img4.jpg" alt="Solitaire">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">20) Solitaire</h4>
                 <p class="card-text">Masterpiece for all card lovers<br>Play it!</p>
                 <a href="https://www.google.co.in/logos/fnbx/solitaire/standalone.html" class="btn btn-success">Click Here</a>
               </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 py-3">
          <div class="card">
              <img class="card-img-top1" src="images/img6.jpg" alt="Chess Titans">
          </div>
              <div class="cardtext10 boxs">
                 <h4 class="card-title">21) Chess Titans</h4>
                 <p class="card-text">None of the gaming list can be completed with a chess masterwork</p>
                 <a href="https://www.filehorse.com/download-chess-titans" class="btn btn-success">Click Here</a>
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
