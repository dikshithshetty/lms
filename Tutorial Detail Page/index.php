<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="…">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Tutorial Detail Page</title>
</head>

<body class="hm-gradient">
    <section id="content" class="container">
    <?php 
      include("../menu.php");
  ?>
        <!-- Begin .page-heading -->
        <h2>Tutorial Detail Page </h2>

        <div class="row">
            <div class="col-md-4">

                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-icon">
                            <i class="fa fa-trophy"></i>
                        </span>
                        <span class="panel-title"> Tutorial Name</span>
                    </div>
                    <div class="panel-body pb5">
                        <span class="label label-warning mr5 mb10 ib lh15">
                            <b>Tutorial Information</b><br>
                            <ul>
                                <li>distracted by </li>
                                <li>distracted by </li>
                                <li>distracted by </li>
                                <li>distracted by </li>
                            </ul>
                            <b>Lecture Information</b><br>

                            distracted by the readable content of a page when looking
                            at its layout. The point of using Lorem Ipsum is that it ha
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-md-8">

                <div class="tab-block">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">Tutorial </a>
                        </li>

                    </ul>
                    <br>
                    <div class="ratio ratio-4x3">
                        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                      </div>
                <br>
                <section id="Services">
                  <div class="ServicesWrapper">
                    <div class="Circle">  
                    </div>
                    <div class="Info">
                      <h1>Lorem Ipsum</h1>
                      <p>
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      </p>
                      <button>
Expand
                      </button>
                    </div>
                  </div>
          
          
          
                </section>
                    </div>


                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
    <div class="row">
        <!-- Site footer -->
        <?php 
      include("../footer.php");
  ?>
    </div>
</body>

</html>