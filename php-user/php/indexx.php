<?php

include 'database.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEE</title>
    <link rel="shortcut icon" href="../abass project images/Screenshot (92).png">
    <!--start of bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--end of  bootstrap css -->
    <!-- start of fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Orelega+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- end of fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200&family=Orelega+One&display=swap" rel="stylesheet">
   <!-- start of external style sheet -->
    <link rel="stylesheet" href="../css/homepage.css">
    <!-- end of external style sheet -->

</head>
<body >

    <div>
        <div class="section section1 container-fluid">
            <div class="row  justify-content-center align-items-center ">
                <div class="col-xs-12 col-sm-6 text-light text-center">
                    <h1 class="brand-subject" >Payment made Easy</h1>
                    <h2 class="brand-name"><strong>AEE</strong></h2>
                    <img class="img-fluid " src="../abass project images/bpi-logo.png">
                    <p class="brand-subject">You have the opportunity of stress free payment of your  Electricity bill</p>
                    <a href="sign up.php" class="btn btn-lg btn-outline-light sign-up-btn">Sign up</a>
                    <a href="signin.php" class="btn btn-lg btn-outline-light sign-in-btn">Sign in</a>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img class="img-fluid justify-self-end align-items-end" src="../abass svg for project/blockchain-smart-contracts-948x640.png">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L40,154.7C80,181,160,235,240,240C320,245,400,203,480,192C560,181,640,203,720,224C800,245,880,267,960,261.3C1040,256,1120,224,1200,197.3C1280,171,1360,149,1400,138.7L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
        <section class="section2 ">
            <div class="container text-center">
                <h4>Features</h4>
                <h2>Some Of The Best features</h2>
                <div class="row justify-content-center align-items-start ">
                    <div class="col-xs-12 col-sm-4">
                        <img class="feature-icon" src="../abass svg for project/icons8-key.svg"/><br>
                        <a href="#" class="links">Security</a>
                        <p>The system is confidential.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 ">
                        <img class="feature-icon" src="../abass svg for project/icons8-clock.svg"/><br>
                        <a href="#" class="links">Speed</a>
                        <p>AEE brings speed and scalability  that allows to process several transactions .</p>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img class="feature-icon" src="../abass svg for project/icons8-anonymous-mask.svg"/><br>
                        <a href="#" class="links">Anonymity</a>
                        <p>The  absence of a public transaction history exclude any extraneous interference.</p>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 ">
                        
                    </div>
                </div>
            </div>
            
        </section>
        <section class="section3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.04" d="M0,320L40,314.7C80,309,160,299,240,250.7C320,203,400,117,480,90.7C560,64,640,96,720,138.7C800,181,880,235,960,266.7C1040,299,1120,309,1200,277.3C1280,245,1360,171,1400,133.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            <div class="container">
                <div class="row text-left justify-content-start align-items-center">
                    <div class="col-xs-12 col-md-6">
                        <h2>Payment has never been so fast</h2>
                        <p>Incredible transaction speed - we talk about more than a million transactions per second.</p>
                        <p>The main principle is to execute transactions parallelly and to separate all the data into different small blockchains that can interact with each other.</p>
                        </div>
                    <div class="col-xs-12 col-md-6">
                        <img class="img-fluid" src="../abass project images/da_img.png">
                    </div>
                </div>
            </div>
        </section>
        <footer class="page-footer text-center">
            <p><small>AEE. Copyright © 2021</small></p>
        </footer>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>