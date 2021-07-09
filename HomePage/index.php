<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- All Links -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='js/jquery.svg3dtagcloud.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='js/jquery.svg3dtagcloud.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script>
      window.requestAnimFrame = (function() {
        return (
          window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimationFrame ||
          function(callback) {
            window.setTimeout(callback);
          }
        );
      });
      
      function init(elemid) {
        let canvas = document.getElementById(elemid),
          c = canvas.getContext("2d"),
          w = (canvas.width = window.innerWidth),
          h = (canvas.height = window.innerHeight);
        c.fillStyle = "rgba(30,30,30,1)";
        c.fillRect(0, 0, w, h);
        return {c:c,canvas:canvas};
      }
      </script>
    <title>Project</title>

</head>

<body>
  <div class="row" style="margin-left: 65px;">
    <a href="../Register/index.php" class="button card">
      <span class="icon">Register</span>
      <span class="text"><i class="fas fa-arrow-right"></i></span>
    </a>
    <a href="../Login/index.php" class="button card" >
      <span class="icon">Login!</span>
      <span class="text"><i class="fas fa-arrow-right"></i></span>
    </a>
  </div>
  <canvas id="canvas"></canvas>
  <script src="main.js"></script>
        
    <div class="container">

    <?php 
      include("../menu.php");
  ?>

        <div class="row">
            <div data-aos="fade-right">
                <div class="main-heading">
                  <h1><span> Programming Website</span></h1>
                  <br>
                  <h1><span>Watch, Upload and</span></h1>
                  <br>
                  <h1><span>Earn</span></h1>
                  <br>
                  <h4> A website where users will be able to register and login and be <br>able to earn points/coins after watching videos.</h4>
                </div>
              </div>
             
         </div>

         <div class="row quick" >
             <div class="col-md-6">
              
                <div data-aos="fade-up">
                    <img src="pic1.png" height="320px;">

                  </div>
             </div>
             <div class="col-md-6">
                <div class="quick-heading-left">
                    <h1><span> See Quick</span></h1>
                    <br>
                    <h1><span>Tutorials!</span></h1>
                    <br>
                    <h4 style="font-size: 20px;"><i>See Our Quick Tutorials To Learn Coding!
                        Our Tutorials are full of knowledge that provide help to learn quickly
                        and efficiently as possible!</i></h4>
                  </div>
                  <a href="#" class="button card">
                    <span class="icon">Join Now!</span>
                    <span class="text"><i class="fas fa-arrow-right"></i></span>
                  </a>

             </div>
         </div>

         <div class="row" style="margin-top: 15%;" id="serv">
             <div class="col-md-6">
                <div class="quick-heading-left">
                    <h1><span> Languages We Offer</span></h1>
                    <br>
                    <h4 style="font-size: 20px;"><i>
                      The primary area of my interest is front-end. My passion for code has begun when Adobe Flash was a complete innovation, alongside with CSS 1.0 and HTML 4.01 as standards of the current web. </i></h4>
                  </div>
             </div>
             <div class="col-md-6">
                <script>

                    $( document ).ready( function() {
            
                        var entries = [ 
                            
                            { label: 'Dev Blog', url: 'http://niklasknaack.blogspot.de/', target: '_top' },
                            { label: 'Flashforum', url: 'http://www.flashforum.de/', target: '_top' },
                            { label: 'jQueryScript.net', url: 'http://www.jqueryscript.net/', target: '_top' },
                            { label: 'Javascript-Forum', url: 'http://forum.jswelt.de/', target: '_top' },
                            { label: 'JSFiddle', url: 'https://jsfiddle.net/user/NiklasKnaack/fiddles/', target: '_top' },
                            { label: 'CodePen', url: 'http://codepen.io/', target: '_top' },
                            { label: 'three.js', url: 'http://threejs.org/', target: '_top' },
                            { label: 'WebGLStudio.js', url: 'http://webglstudio.org/', target: '_top' },
                            { label: 'JS Compress', url: 'http://jscompress.com/', target: '_top' },
                            { label: 'TinyPNG', url: 'https://tinypng.com/', target: '_top' },
                            { label: 'Can I Use', url: 'http://caniuse.com/', target: '_top' },
                            { label: 'URL shortener', url: 'https://goo.gl/', target: '_top' },
                            { label: 'HTML Encoder', url: 'http://www.opinionatedgeek.com/DotNet/Tools/HTMLEncode/Encode.aspx', target: '_top' },
                            { label: 'Twitter', url: 'https://twitter.com/niklaswebdev', target: '_top' },
                            { label: 'deviantART', url: 'http://nkunited.deviantart.com/', target: '_top' },
                            { label: 'Gulp', url: 'http://gulpjs.com/', target: '_top' },
                            { label: 'Browsersync', url: 'https://www.browsersync.io/', target: '_top' },
                            { label: 'GitHub', url: 'https://github.com/', target: '_top' },
                            { label: 'Shadertoy', url: 'https://www.shadertoy.com/', target: '_top' },
                            { label: 'Starling', url: 'http://gamua.com/starling/', target: '_top' },
                            { label: 'jsPerf', url: 'http://jsperf.com/', target: '_top' },
                            { label: 'Foundation', url: 'http://foundation.zurb.com/', target: '_top' },
                            { label: 'CreateJS', url: 'http://createjs.com/', target: '_top' },
                            { label: 'Velocity.js', url: 'http://julian.com/research/velocity/', target: '_top' },
                            { label: 'TweenLite', url: 'https://greensock.com/docs/#/HTML5/GSAP/TweenLite/', target: '_top' },
                            { label: 'jQuery', url: 'https://jquery.com/', target: '_top' },
                            { label: 'jQuery Rain', url: 'http://www.jqueryrain.com/', target: '_top' },
                            { label: 'jQuery Plugins', url: 'http://jquery-plugins.net/', target: '_top' },
            
                        ];
            
                        var settings = {
            
                            entries: entries,
                            width: 480,
                            height: 480,
                            radius: '65%',
                            radiusMin: 75,
                            bgDraw: true,
                            bgColor: 'white',
                            opacityOver: 1.00,
                            opacityOut: 0.05,
                            opacitySpeed: 6,
                            fov: 800,
                            speed: 0.3,
                            fontFamily: 'Oswald, Arial, sans-serif',
                            fontSize: '15',
                            fontColor: 'black',
                            fontWeight: 'normal',//bold
                            fontStyle: 'normal',//italic 
                            fontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                            fontToUpperCase: true,
                            tooltipFontFamily: 'Oswald, Arial, sans-serif',
                            tooltipFontSize: '11',
                            tooltipFontColor: '#fff',
                            tooltipFontWeight: 'normal',//bold
                            tooltipFontStyle: 'normal',//italic 
                            tooltipFontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                            tooltipFontToUpperCase: false,
                            tooltipTextAnchor: 'left',
                            tooltipDiffX: 0,
                            tooltipDiffY: 10
            
                        };
            
                        //var svg3DTagCloud = new SVG3DTagCloud( document.getElementById( 'holder'  ), settings );
                        $( '#holder' ).svg3DTagCloud( settings );
            
                    } );
                    
                </script>
                    <div id='holder'></div>

             </div>

         </div>

         <div class="row" id="quick">
             <div class="col-md-12">
                <div class="bottom-heading">
                    <div data-aos="zoom-in">
                      <h1>
                        Learn Coding and Upload Easily: </h1>
                    </div>
                  </div>
                
                  <div class="bottom-heading-1">
                    <a href="#" class="button card">
                      <span class="icon">Join Now!</span>
                      <span class="text"><i class="fas fa-arrow-right"></i></span>
                    </a>
                    <br>
                    </div>
             </div>
         </div>
         
         <div class="row" style="margin-top: 6%;" > 
             <div class="col-md-6">
                <div data-aos="zoom-out">
                    <img src="pic2.jpg" height="350px;">
             </div>
              
              </div>
             <div class="col-md-6">
                <div class="quick-heading-left">
                    <h1><span> See Tutorials </span></h1>
                    <br>
                    <h4 style="font-size: 20px;"><i>We have vast amount of tutorials available to teach programming even if you don’t
                        have any previous experience! </i></h4>
                  </div>
             </div>

         </div>

         <div class="row" id="service">
            <div class="cover-heading" style="margin-top:8%; ">
                <div data-aos="flip-up">
                  <h1>
                    We’ve Got You Covered
                  </h1>
                </div>
         </div>
         <div class="row" >
             <div class="col-md-12">
                <div class="d-flex flex-row bd-highlight mb-3 justify-content-center">
                    <div class="p-2 bd-highlight">
                        <div class="card" style="width: 18rem; height: 23rem;">
                            <center>   
                          <img src="key.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">CIn Depth Tutorials</h5>
                          <p class="card-text">We provide you with in-depth tutorials on programming which you can follow along easily and learn efficiently.</p>
                          <a href="#" class="btn btn-primary" style="margin-top: 25%;">Learn Now</a>
                        </div>
                      </div>
                      </div>
                      <div class="p-2 bd-highlight">
                        <div class="card" style="width: 18rem; height: 23rem;">
                            <center>   
                          <img src="cone.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">Test Your Knowledge</h5>
                          <p class="card-text">Challenge yourself with fun quizzes along the way as you learn. We provide each quiz to be fun and intuitive! </p>
                          <a href="#" class="btn btn-primary" style="margin-top: 25%;">Quiz Yourself</a>
                        </div>
                      </div>
                      </div>
                      <div class="p-2 bd-highlight">
                        <div class="card" style="width: 18rem; height: 23rem;">
                            <center>   
                          <img src="world-wide-web.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">Live Webex Tutorials</h5>
                          <p class="card-text">We hold weekly live webex calls in which we walk you through the topic and ease your questions away!</p>
                          <a href="#" class="btn btn-primary" style="margin-top: 25%;">View Live Sessions</a>
                        </div>
                      </div>
                      </div>
                      <div class="p-2 bd-highlight">
                        <div class="card" style="width: 18rem; height: 23rem;">
                            <center>   
                          <img src="chat.png" width="50px;" alt="..." style="margin-top: 9px;">
                            </center>
                        <div class="card-body">
                          <h5 class="card-title">Ask Us!</h5>
                          <p class="card-text">Have any extra questions for us and our team? We would love to help you in your next coding adventure, ask away!</p>
                          <a href="#" class="btn btn-primary" style="margin-top: 25%;">Ask a Question</a>
                        </div>
                      </div>
                      </div>

                </div>
             </div>

         </div>

         <div class="row" style="margin-top: 6%;">
            <div class="col-md-6">
                <div class="quick-heading-right-1">
                    <h1><span> Our Mission: </span></h1>
                    <h4 style="font-size: 25px; text-align: justify;">CoderChronicles® is a program dedicated to expanding access to computer science, lead by students for students! To increase more participation from students and anyone interested in learning programming. Our vision is that every student in every school should have
                       the opportunity to learn computer science, just like biology, chemistry or algebra</h4>
                  </div>
                  <a href="#" class="button card">
                    <span class="icon">Get Started!</span>
                    <span class="text"><i class="fas fa-arrow-right"></i></span>
                  </a>
            </div>
            <div class="col-md-6">
                <div data-aos="zoom-in">
                    <img src="pic3.png" height="400px;">
                  </div>
            </div>
             </div>
           

        </div>
    
   </div>
<div class="row" style="margin-top: 10%;" id="feedback">
    <!-- Site footer -->
    
 <?php
 include("../footer.php"); 
 ?>
</div>

  

   <script>
    AOS.init();
  </script>
</body>

</html>