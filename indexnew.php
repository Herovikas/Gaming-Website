<?php

session_start();
if (!isset($_SESSION['name'])){
    header('location:login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/starfav.png" type="image/ico" sizes="16x16">
	<title>Fun.GameZone</title>
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
                        <li class="nav-item">
                            <a class="nav-link section1" href="javaScript:void(0)">About</a>
                        </li>
                        
                        <li>
                           <div class="mymenu">
                              <ul>
                                <li>
                                    <a class="mymenu-1 section2" href="javaScript:void(0)">Games <i class="fa fa-gamepad"> <i class="fa fa-sort-desc" aria-hidden="true" style="font-size: 20px; color: #d0373780;"></i></i> </a>
                                        <ul class="dropdown">
                                            <li><a href="onlinegames.php">Online Games</a></li>
                                            <li><a href="Top10games.php">Top 10 Games</a></li>
                                        </ul>
                                </li>
                              </ul>
                            </div>
                        </a>                         
                        </li>
                        <li class="nav-item">
                            <a class="nav-link section3" href="javaScript:void(0)">Contact</a>
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
    

</div>
              
<section class="virtual  boxs">
        <div class="prolftSlick boxs">
            <!-- for video -->
            <div class="virtualMain boxs">
                <div class="virtualPost"></div>
                <video poster="" id="bgvid" playsinline autoplay  muted loop class="indexMainVideo">
                    <!-- 
                  - Video needs to be muted, since Chrome 66+ will not autoplay video with sound.
                  WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                  <source src="video/intro.mp4" type="video/mp4">
                </video>
                <div id="polina" class="virtualArea boxs">
                    <div class="postionText">
                        <p>2020 @Fun.GameZone</p>
                    </div>
                    <div class="virtualInner boxs">
                        <h2 class="word">
                            The <span class="spanColor">Next Generation<span class="greenBar"></span></span> is here ! <i class="fa fa-gamepad" aria-hidden="true" ></i><br>Play Games all around the world.                            
                        </h2>                        
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="mainy1 boxs">
    <div class="virtualPost1"></div>
    <div class="container">
        <div class="mainy boxs" >
            <h4> About Us <i class="far fa-address-card"></i></h4><br>

            <h5 data-aos="fade-left">       Fun.GameZone <img src="img/starfav.png"><br> Here you can find one of the <span class="spanColor">best games all over the globe<span class="aboutBar"></span></span> <br><br> PC Games in Arcades, Action, Multiplayer and so on.<br>
            I hope you like it. <span class="spanColor">Then Why to be stopped ?<span class="aboutBar"></span></span><br>
            </h5>
            <!-- <p class="commonBtn">   Lets Go! </p> -->
             <a href="javaScript:void(0)" class="commonBtn section5">Let's Go!</a>
        </div>
    </div>
</section>

<section class="gamer boxs">
    <div class="container">
        <div class="gamesite boxs">
            <h6>Games <i class="fa fa-gamepad" aria-hidden="true"></i> </a> </h6>
            <p class="commonBtn1"> TOP Rated Games <i class="fab fa-autoprefixer" aria-hidden="true"></i></p>
        </div>
    </div>
</section>


<section class="new1 boxs">
    <div class="container">
        <div class="newMain1 boxs">
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://play.euw.leagueoflegends.com/en_GB" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/league-of-legends.jpg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>League of legends</p>
                    </div>
            </div>
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/CS-Go.png" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>CS-GO</p>
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="new2 boxs">
    <div class="container">
        <div class="newMain2 boxs">
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://www.rockstargames.com/V/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/GTA 5.jpg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>GTA-V</p>
                    </div>
            </div>
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://www.minecraft.net/en-us/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/MineCraft.png" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>Minecraft</p>
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="new3 boxs">
    <div class="container">
        <div class="newMain1 boxs">
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://playvalorant.com/en-gb/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/Valo.jpeg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>Valorant</p>
                    </div>
            </div>
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://lite.pubg.com/download/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/PUBG 1.jpg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>PUBG</p>
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="new4 boxs">
    <div class="container">
        <div class="newMain1 boxs">
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://hitman.com/global/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/Hitman.jpg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>Hitman</p>
                    </div>
            </div>
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://www.ea.com/en-gb/games/apex-legends" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/Apex.jpg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>Apex Legends</p>
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="new5 boxs">
    <div class="container">
        <div class="newMain1 boxs">
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://blog.dota2.com/?l=english" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/Dota 2.jpg" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>Dota 2</p>
                    </div>
            </div>
            <div class="card cardcusto d-inline-block cardlisto boxs">
                <div class="cardimg cardimg1 boxs">
                    <a href="https://www.2k.com/en-US/game/spec-ops-the-line/" class="slikocusto1">
                        <img class="card-img-top img-fluid" src="img/Spec_Ops_The_Line_cover.png" alt="tire3">
                    </a>
                </div>
                    <div class="cardtext boxs">
                        <p>Spec Ops The Line</p>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="contact boxs">
        <div class="container-fluid">
            <div class="newMain1 boxs">
                    <div class="contact_inner boxs">
                        <h2>Contact Us</h2>
                                <form action="feedback1.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pay_inner  contact_uss">
                                                <form id="common-form">
                                                    <div class="form-group ">
                                                        <label style="font-size: 22px;color: white;outline: none;box-shadow: none;">Gamer's Name</label>
                                                        <input type="text" name="user" autocomplete="off"  class="form-control" placeholder="Jonathan Coleman" id="name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label style="font-size: 22px;color: white;outline: none;box-shadow: none;">Email Address</label>
                                                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="abcd@gmail.com" id="email">
                                                    </div>

                                                    <div class="form-group ">
                                                        <label style="font-size: 22px;color: white;outline: none;box-shadow: none;">Message</label>
                                                        <textarea style="resize: none;" name="Feedback" autocomplete="off"  class="form-control" id="message" placeholder="Lorem ipsum dolor sit amet"></textarea>
                                                    </div>

                                                    <div class="pay_btn1 btn2 logBtnRed greenHover boxs">
                                                        <button type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                </form>            
                                        <div class="col-md-6">
                                            <div class="contact_right">
                                                <img src="./img/pubg.jpg" class="img-fluid" alt="location 01" style="max-width: 85%; margin-bottom: -48px;">
                                            </div>
                                        </div>
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


<!-- javaScript:void(0) -->
<!-- <p> The <span class="spanColor"> Next Generation<span class="greenBar"></span></span> is here ! <i class="fa fa-gamepad" aria-hidden="true" ></i><br>Play Games all around the world.</p> -->