<!DOCTYPE html>

<HTML>
<head>
	<title>Our Members</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://register.msi.com/asset/css/bootstrap.min.css?v=3.3.7" rel="stylesheet">
    <link href="css/main.css?update=20180702" rel="stylesheet" type="text/css">
    <link href="css/gr.css?ver=20181127" rel="stylesheet" type="text/css">
</head>

<body>

<header class="header boxs" style="background-color: black; position: fixed; left: 0; top: 0; padding:  0; width: 100%; z-index: 99;    transition: all 0.3s;box-shadow: 2px 2px 15px red;">
    <div class="container" > <nav class="navbar myNavBar navbar-expand-sm">
            
            <div class="navbar-header">
                <a href="index.php"><img src="img/logon.png" class="img-fluid first_logo" alt="logo"></a>
            </div>
            <div class="collapse navbar_right navbar-collapse" id="collapsibleNavbar">
                <div class="navbar navbar-right">
                    <ul class="navbar-nav menu">                        
                        <li class="nav-item logbtnGreen greenHover" data-toggle="modal" data-target="#myModalApp">
                            <a class="nav-link" href="signup.php" style="margin-top: 10px;margin-right:100px; ">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
    

<div class="container-fluid" style="padding-top: 100px;">
    <div class="row mainbox">

        <!-- Right -->
        <div class="col-sm-5 mm-index">
            <div class="row mb50">
                <div class="col-xs-12">
                    <h1>Welcome to Fun.GameZone</h1>
                    <h2 class="whitetxt">welcome back !</h2>
                    <ul class="fa-ul mm-index-ul">
                        <li><i class="fa-li fa fa-check"></i>Access all Games</li>
                        <li><i class="fa-li fa fa-check"></i>Exclusive updates of all Games</li>
                        <li><i class="fa-li fa fa-check"></i>Quicker service and support</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Right -->

        <!-- Left -->
        <div class="col-sm-6 col-sm-offset-1 graybox">
            
            <div class="index_logonbox">
                <h1>Login</h1>
                <form action="validation.php" id="gr-login-form" class="form-horizontal" method="POST" role="form" accept-charset="utf-8" novalidate="novalidate">
<input type="hidden" name="msi_csrf" value="d7fd6decf8bd957d9c54b3ac65772d3c">                         
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 col-lg-offset-1 control-label">Name</label>
                        <div class="col-sm-9 col-lg-8">
                            <input type="text" name="name" id ="name" autocomplete="off" class="form-control" tabindex="1" placeholder="Name" required>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 col-lg-offset-1 control-label">E-mail</label>
                        <div class="col-sm-9 col-lg-8">
                            <input type="email" name="email" class="form-control" tabindex="2" placeholder="E-mail"required >
                        </div>
                    </div>
                    <!-- Email -->

                    <!-- Password -->
                    <div class="form-group">
                        <label class="col-sm-3 col-lg-2 col-lg-offset-1 control-label">Password</label>
                        <div class="col-sm-9 col-lg-8">
                            <input type="password" name="password" class="form-control" tabindex="3" placeholder="Password"required>
                        </div>
                    </div>
                    <!-- Password -->
                    <div style="text-align: center;">
                        <b style="text-align: center; color: red;">*Incorrect Login credentials</b>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3 ">
                            <button id="home-login-btn" type="submit" tabindex="4" class="btn btn-default btn-xs-block">Login</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<section class="footerbtm boxs" style="    margin-top: 74px;">
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

</body>
</HTML>