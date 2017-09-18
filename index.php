<?php  include "assets/php/DBConnection.php"?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>M.Abduganiev</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--    DATABASE CONNECTION   -->
</head>
<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $fullName ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home-sec">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                     <li><a href="#project">PROJECT</a></li>
                    <li><a href="logIn/login.html">LOG IN</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
    <div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
                <span class="head-main" ><?php echo $greeting ," ", $name ?></span>
                <h3 class="head-last col-md-8 col-md-offset-2  col-sm-8 col-sm-offset-2"><?php echo $littleInfo?></h3>
         
                 
            </div>
        </div>
    </div>
   
    </div>
     <!--END HOME SECTION-->  
      <!--ABOUT SECTION-->
    <section id="about"  >
        <div class="container">
            <div class="row g-pad-bottom ">
                <div class="col-md-6 ">

                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-plus"></i> SMALL INTRODUCTION
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3><?php echo $fullName?></h3>
                                <!-- Small Introduction text -->
                                <?php echo $smallIntro ?>
         
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="fa fa-plus"></i>WORK EXPERIENCE
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                  <h3><?php echo $company ?></h3>

                                <?php echo $workExperience ?>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="fa fa-plus"></i>PROJECTS OUTLINES
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3><?php echo $currentProjectName ?></h3>

                                <?php echo $projectOutlines ?>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                                    <i class="fa fa-plus"></i>ACHIEVEMENTS
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3><?PHP echo "PRACTICE MAKES PERFECT"?></h3>

                                <?PHP echo $achievements?>

                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
                 <div class="col-md-6 ">
                     <h1 ><?PHP echo $fullName?></h1>
                     <h4><?php echo $whoIam ?></h4>
                     <p>
                          <?php echo $myAims ?>
                                </p>
                       <a href="assets/Documents/Resume.pdf" class="btn btn-primary btn-lg">DOWNLOAD MY RESUME</a>
                 </div>
                  </div>
                
          <div class="row text-center g-pad-bottom">
                <!-- My skills progress bar -->
                <div class="col-md-12">
                      <h2>MY SKILL SET</h2>
                    <br />
                    <div class="alert-info">
                        <div class="progress progress-adjust">
  <div class="progress-bar progress-bar-success" style="width: 30%">
    <div class="skill-div">OOP 30%</div>
    <span class="sr-only">30% Complete (success)</span>
  </div>
     <div class="progress-bar progress-bar-success" style="width: 25%; background-color: orangered">
         <div class="skill-div">JAVA 25%</div>
         <span class="sr-only">25% Complete (success)</span>
     </div>
  <div class="progress-bar progress-bar-success" style="width: 20%; background-color: darkslategray">
     <div class="skill-div">C/C++ 20%</div>
        <span class="sr-only">20% Complete (success)</span>
     </div>
  <div class="progress-bar progress-bar-warning" style="width: 5%">
     <div class="skill-div"> HTML 5%</div>
    <span class="sr-only">5% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 5%">
      <div class="skill-div"> CSS 5%</div>
    <span class="sr-only">5% Complete (danger)</span>
  </div>
     <div class="progress-bar progress-bar-primary" style="width: 15%">
      <div class="skill-div"> PHP 15%</div>
    <span class="sr-only">15% Complete (danger)</span>
  </div>

</div>
                    </div>
                </div>
                
              
        </div>
        </div>
    </section>
    <!--END ABOUT SECTION-->
    <!-- TESTIMONIAL SECTION-->
    <section id="testimonial" >
        <div class="container">
    <div class="row ">
            <div class="col-md-12">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="2" class=""></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                   
                                    <h4><i class="fa fa-quote-left"></i>
                                         <?php echo $Quote1 ?>
                                        <i class="fa fa-quote-right"></i></h4>
                                     <div class="user-img pull-right">
						<?php echo $quoterPic1 ?>
					</div>
                                    <h5 class="pull-right"><strong class="c-set" ><?php echo $quoter1 ?></strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item active left">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4> <i class="fa fa-quote-left"></i>  <?php echo $Quote2  ?> <i class="fa fa-quote-right"></i></h4>
                                         <div class="user-img pull-right">
                                             <?php echo $quoterPic2 ?>
					</div>
                                    <h5 class="pull-right"><strong class="c-set" ><?php echo $quoter2 ?></strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item next left">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4><i class="fa fa-quote-left"></i><?php echo $Quote3 ?><i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
						<?php echo $quoterPic3 ?>
					</div>
                                    <h5 class="pull-right"><strong class="c-set"> <?php echo $quoter3 ?></strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </section>
     <!--END TESTIMONIAL SECTION-->
   <!--PROJECT SECTION-->
    <section id="project" >
        <div class="container">
            <div class="row">
                 <div class="col-md-6">
                     <!-- Project picture -->
                    <!--?php echo $image ?>-->
                     <img src="assets/img/currentProject.jpg" class="img-responsive img-thumbnail" alt="">
                    </div>
        <div class="col-md-6">
                     
                     <h2><?php echo $currentProjectName ?></h2>
                    <p>
                        <?php echo $projInfo ?>
                    </p>
            
            <div class="alert alert-info text-center">
                          <h4> <?php echo $company ?></h4>
                          <hr>
                          <p>
                         <?php echo $companyInfo ?>
                        </p>
                          <hr>
                           <a href="#" class="btn btn-info">Read Full Detalis</a> 
                        </div>
                    </div>
                
            </div>
             
        </div>
    </section>
     <!--END PROJECT SECTION-->
     <!--CONTACT SECTION-->
     <section class="qry" id="contact" >
          <div class="container">
              <div class="row ">
                             <form action="assets/php/submitContact.php" method="post">
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address" id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Notes" id="notes" name="notes">
                                </div>
                            </div>
                            <div class="col-md-3">
                                                                   <button type="submit" class="btn btn-success">Submit Request</button>

                            </div>
                                 </form>
                        </div>
          </div>
     </section>
    <section >
        <!-- width="800" height="600" frameborder="0" style="border:0" allowfullscreen can be added-->
        <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.63613612628!2d69.33234131513213!3d41.33852497926866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef48a8ed4d0e9%3A0x3772abeffc72e7b8!2sInha+University+in+Tashkent!5e0!3m2!1sen!2s!4v1490357864003" ></iframe>
   <div class="add">
 <i>Address: </i> Ziyolilar str 9, Mirzo Ulugbek district, Тошкент, Uzbekistan.
   </div>
       
         </section>

     <!--END CONTACT SECTION-->
  
    <!--FOOTER SECTION -->
    <div id="footer">
        2017. Muslimbek Abduganiev.
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>  
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
