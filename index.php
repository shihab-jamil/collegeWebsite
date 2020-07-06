<?php
  include('config.php');
  session_start();
  $query = "SELECT * FROM notice ORDER BY Id DESC LIMIT 10";
  $notice = mysqli_query($con , $query);

  $query = "SELECT * FROM newsevent ORDER BY Id DESC LIMIT 10";
  $newsEvent = mysqli_query($con , $query);

  $acamdic_support = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='academic_support'"));
  $istitutional_history = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='institution_history'"));
  $principal = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='principal'"));
  $vice_principal = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='vice_principal'"));
  $announcement = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='announcement'"));
  $slide_image_count = mysqli_fetch_array(mysqli_query($con , "SELECT COUNT(Id) FROM slide"));
  $slide_image_count = $slide_image_count['COUNT(Id)'];
  $slide = mysqli_query($con, "SELECT * FROM slide");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Itakumari Shibchandra Roy College</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="static/css/style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <section class="container main">
      <header>
        <!-- logo   -->
        <section>
          <div class="row logo mx-1 ">
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 my-auto ">
                <img src="static/images/logo.png" alt="Logo" width="150vw" height="150vh" >
              </div>
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                <div class="details ml-xl-1 ml-lg-1 ml-md-5 ">
                  <label class="text-white mt-xl-3 mt-lg-3 mt-md-3 mt-sm-2 mt-2">ইটাকুমারী শিবচন্দ্র রায় কলেজ</label>
                  <h2 class="text-white">পীরগাছা , রংপুর</h2>
                  <h3 class="text-white">স্থাপিত : ১৯৯৫</h3>
                  <h4 class="text-white my-2">EIN : 123456</h4>
                </div>
              </div>            
          </div>
        </section>
        <!-- /logo        -->

        <!-- navbar -->
        <section >
          <div class="row mx-1 ">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-justify p-0">
              <nav class="navbar navbar-expand-lg navbar-dark navMod">
                <!--tips: to change the nav placement use .fixed-top,.fixed-bottom,.sticky-top-->
                <!-- <a class="navbar-brand" href="#">My Brand</a> -->
                <!--<a class="navbar-brand" href="#">
                  <img src="..." class="d-inline-block align-top" width="30" height="30" alt="...">My Brand
                </a>-->
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarContent">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">প্রচ্ছদ <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                      <a class="nav-link" href="aboutUs.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        আমাদের সম্পর্কে <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="vissionMissionGoal.php">উদ্দেশ্য ও লক্ষ্য</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="whyChooseISRCR.php">কেন ইশিম</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="genaralInformation.php">সাধারণ তথ্য</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="guidancePrincipal.php">পথনির্দেশক নীতি</a>
                      </div>
                    </li>
              
                                  
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        কর্তৃপক্ষ <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="moderator.php">সভাপতি</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="chairman.php">চেয়ারম্যান</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="principal.php">অধ্যক্ষ</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="vicePrincipal.php">সহকারী অধ্যক্ষ</a>
                      </div>
                    </li>
              
                                  
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ভর্তি <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="admissionResult.php">ফলাফল</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admissionRequirment.php">যোগ্যতা</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admissionNotice.php">ভর্তি বিজ্ঞপ্তি</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admissionProcedure.php">ভর্তি পদ্ধতি</a>
                      </div>
                    </li>
              
                                  
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        একাডেমিক <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="deaprtments.php">বিভাগ</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="teachers.php">শিক্ষকবৃন্দ</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="routine.php">রুটিন</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="academicCalender.php">একাডেমিক ক্যলেন্ডার</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="stuffs.php">কর্মকর্তা কর্মচারী</a>
                      </div>
                    </li>
              
                                  
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        মিডিয়া <i class="fa fa-caret-down" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="gallery.php">গ্যালারী</a>
                      </div>
                    </li>
                                               
                    <li class="nav-item">
                      <a class="nav-link" href="contactUs.php">যোগাযোগ</a>
                    </li>
              
                  </ul>
              
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
                </div>
              </nav>
            </div>                                                     
          </div>
        </section>
        <!-- /navbar -->
      </header>

      <!-- carousel -->
      <section class="my-2">
        <div class="rown mx-1">
          <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-0">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <?php  for ($i=1; $i < $slide_image_count ; $i++) { ?>
                      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>"></li> <?php
                    } ?>
                </ol>
                <?php $row= mysqli_fetch_array($slide) ?>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" height="396px" width="1140px" class="d-block w-100">'; ?>
                      <!-- <img class="d-block w-100" src="static/images/1.jpg" alt="First slide" height="396px" width="1140px" > -->
                  </div>
                  <?php  for ($i=1; $i < $slide_image_count; $i++) { $row= mysqli_fetch_array($slide) ?>
                    <div class="carousel-item">
                        <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" height="396px" width="1140px" class="d-block w-100">'; ?>
                        <!-- <img class="d-block w-100" src="static/images/2.jpg" alt="Second slide" height="396px" width="1140px" > -->
                    </div> <?php
                  }  ?>
                    
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
          </div> 
        </div>
      </section>
      <!-- carousel end -->

      <!-- marquee -->
       <section class="mb-2">
         <div class="row mx-1">
           <div class="col-cl-2 col-lg-2 col-md-2 col-sm-12 col-12 logo text-center pt-2">
             <label class="text-white" style="font-family: myBangla; font-size: 20px;">ঘোষণা : </label>
           </div>
           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 m-0 p-0">
             <marquee behavior="scroll" direction="left" scrollamout="4" class="marquee" onmouseover="stop()" onmouseout="start()"><?php echo $announcement['qoutes'] ?></marquee>
           </div>
         </div>
       </section> 
      <!-- marquee -->

      <!-- mainBody -->
       <section class="my-4" style="font-family: regularBangla;">
          <div class="row mx-1">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 p-0">
              <!-- institutional history -->
              <div class="row mb-3">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <h4 class="logo text-white py-1 pl-2">প্রতিষ্ঠানের ইতিহাস</h4>
                  <div class="history">
                    <?php echo '<img src="data:image;base64,'.base64_encode($istitutional_history['image']).'"alt="institute image" width="350px" class="img-fluid mr-2" style="float: left;">'; ?>
                    <!-- <img src="static/images/institute.jpg" alt="Institute" width="350px" style="float: left;" class="img-fluid mr-2"> -->
                    <p class="text-justify" id="instituteHistory"><?php echo substr($istitutional_history['qoutes'],0,1335) ?><a href="genaralInformation.php">বিস্তারিত. . .</a> </p>  
                  </div>
                </div>
              </div>

              <!-- qoutes -->
              <div class="row mb-3">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <h4 class="logo text-white py-1 pl-2">অধ্যক্ষের বাণী</h4>
                     <?php echo '<img src="data:image;base64,'.base64_encode($principal['image']).'"alt="institute image" width="130px" class="mr-3" style="float: left;">'; ?>
                     <!-- <img src="static/images/principal.png" alt="Principal" class="mr-3" style="float: left;"> -->
                     <div class="nameQoutes">
                        <h3><?php echo $principal['name'] ?></h3>
                        <p class="text-justify">
                            <?php echo substr($principal['qoutes'],0,1335) ?> <a href="principal.php">বিস্তারিত. . .</a>
                        </p>
                    </div>
                   </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <h4 class="logo text-white py-1 pl-2">উপধ্যক্ষের বাণী</h4>
                     <?php echo '<img src="data:image;base64,'.base64_encode($vice_principal['image']).'"alt="institute image" width="130px" class="mr-3" style="float: left;">'; ?>
                     <!-- <img src="static/images/vice-principal.png" alt="Principal" class="mr-3" style="float: left;"> -->
                     <div class="nameQoutes">
                        <h3><?php echo $vice_principal['name'] ?></h3>
                        <p class="text-justify">
                           <?php echo substr($vice_principal['qoutes'],0,1335) ?> <a href="vicePrincipal.php">বিস্তারিত. . .</a>
                        </p>
                    </div>  
                  </div>
                </div>
              </div>

              <!-- teachers & students -->
              <div class="row mb-3">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4 class="logo text-white py-1 mb-0 pl-2">শিক্ষার্থীদের তথ্য</h4>
                    <div class="studentCorner">
                      <img src="static/images/students.png" alt="students" class="img-fluid my-5 mr-5 ml-3" style="float: left;"  width="150px">
                      <div class="innerItem my-5 ">
                        <ul>
                          <li><a href="#">রুটিন</a></li>
                          <li><a href="#">বুকলিস্ট</a></li>
                          <li><a href="#">ভর্তি তথ্য</a></li>
                          <li><a href="#">কৃতি শিক্ষার্থী</a></li>
                          <li><a href="#">আসন সংখ্যা</a></li>
                        </ul>
                       </div>  
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4 class="logo text-white py-1 mb-0 pl-2">শিক্ষকদের তথ্য</h4>
                    <div class="studentCorner">
                      <img src="static/images/teacher.png" alt="students" class="img-fluid my-3 mr-5 ml-3" style="float: left;"  width="150px">
                      <div class="innerItem my-5 ">
                        <ul>
                          <li><a href="#">শিক্ষকবৃন্দ</a></li>
                          <li><a href="#">শুণ্যপদের তালিকা</a></li>
                          <li><a href="#">কর্মকর্তা কর্মচারী</a></li>
                          <li><a href="#">পরিচালনা পরিষদ</a></li>
                          <li><a href="#">প্রাক্তন আধ্যক্ষ</a></li>
                        </ul>
                       </div>  
                    </div>
                  </div>
                </div>
              </div>

              <!-- academic support and dept slide -->
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 p-0">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4 class="logo text-white py-1 pl-2">প্রাতিষ্ঠানিক সহযোগিতা</h4>
                    <?php echo '<img src="data:image;base64,'.base64_encode($acamdic_support['image']).'"alt="institute image"  class="img-fluid mr-3" style="float: left;">'; ?>
                    <!-- <img src="static/images/2.jpg" alt="Academic support image" class="img-fluid" > -->
                    <p class="justify-content-center text-justify py-lg-2 py-md-2" id="pTruncate">
                       <?php echo substr($acamdic_support['qoutes'],0,506) ?> <a href="academicSupport.php">বিস্তারিত. . .</a>
                    </p>
                  </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 p-0 mb-sm-4 mb-4">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h4 class="logo text-white py-1 pl-2">বিভাগ</h4>
                    <div class="deptCarousel ">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner py-4 text-justify">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <img class="pr-xl-4 pr-lg-5 pr-md-5" src="static/images/science.png" alt="First slide" width="200px"> 
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-md-2 mt-sm-2 mt-2 ">
                                            <div class="depDetails">
                                              <h4 class="">বিজ্ঞান</h4>
                                              <p class="">অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!</p>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <img class="pr-xl-4 pr-lg-5 pr-md-5" src="static/images/arts.png" alt="First slide" width="200px"> 
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-md-2 mt-sm-2 mt-2 ">
                                            <div class="depDetails">
                                              <h4 class="">মানবিক</h4>
                                              <p class="">অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!</p>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="carousel-item ">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <img class="pr-xl-4 pr-lg-5 pr-md-5" src="static/images/commerce.png" alt="First slide" width="200px"> 
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-md-2 mt-sm-2 mt-2 ">
                                            <div class="depDetails">
                                              <h4 class="">ব্যবসায় শিক্ষা</h4>
                                              <p class="">অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!</p>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                            <img class="pr-xl-4 pr-lg-5 pr-md-5" src="static/images/bm.jpg" alt="First slide" width="200px"> 
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-md-2 mt-sm-2 mt-2 ">
                                            <div class="depDetails">
                                              <h4 class="">ব্যবসায় ব্যবস্থাপনা</h4>
                                              <p class="">অর্থহীনতা আর অর্থদ্যোতনার সেই ঈর্ষাকাতর মোহাবিষ্টতা তাই তৈরি করে নাও নিজের মাঝে- চাই একটুখানি ঔৎসুক্য। নিজেই ঠিক করো, নিজের ভাষাটা কি অর্থহীন, নাকি কিছু সত্যিই বলছে!</p>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
                </div>
              </div>
           </div>

           <!-- news notice events important links-->
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="row mb-3">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pr-0">
                  <h4 class="logo text-white py-1 m-0 pl-2">নোটিশ</h4>
                  <div class="noticeBox events scrollbar-primary">
                    <ul>
                      <?php while ($row = mysqli_fetch_array($notice)) {
                        ?>
                        <li onclick="noticeEventViewer('notice' , <?php echo $row['Id'] ?>)">
                          <a href="#" >
                            <label class="mb-0"><?php echo $row['date'] ?></label>
                            <p class="text-justify"><?php echo $row['heading'] ?></p>
                          </a>
                        </li> <?php
                      } ?> 
                    </ul>
                  </div>
                  <div class="allNotice">
                    <a href="allNotice.php"><i class="fa fa-plus-circle" aria-hidden="true"><span class="ml-2">আরও দেখুন</span></i></a>
                  </div> 
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-xl-12 col-lg 12 col-md-12 col-sm-12 col-12 pr-0">
                  <h4 class="logo text-white py-1 m-0 pl-2">কর্মসূচী</h4>
                  <div class="noticeBox events scrollbar-primary">
                    <ul>
                      <?php while ($row = mysqli_fetch_array($newsEvent)) {
                        ?>
                        <li onclick="noticeEventViewer('newsevent' , <?php echo $row['Id'] ?>)">
                          <a href="#">
                            <label class="mb-0"><?php echo $row['date'] ?></label>
                            <p class="text-justify"><?php echo $row['heading'] ?></p>
                          </a>
                        </li> <?php
                      } ?> 
                    </ul>
                  </div>
                  <div class="allNotice">
                    <a href="allEvents.php"><i class="fa fa-plus-circle" aria-hidden="true"><span class="ml-2">আরও দেখুন</span></i></a>
                  </div>
                </div>
              </div>

              <!-- important links -->
              <div class="row">
                <div class="col xl-12 col-lg-12 col-md-12 col-12 pr-0">
                  <h4 class="logo text-white py-1 m-0 pl-2">গুরুত্বপূর্ণ লিংক</h4>
                  <div class="importantLinks">                       
                    <ul class=" p-3" style="list-style-type: none;">
                        <li><i class="fa fa-external-link mr-3" aria-hidden="true"></i><a target="_blank" href="http://www.educationboard.gov.bd">Education Board</a></li>
                        <li><i class="fa fa-external-link mr-3" aria-hidden="true"></i><a target="_blank" href="http://dinajpureducationboard.portal.gov.bd">Dinajpur Education Board</a></li>
                        <li ><i class="fa fa-external-link mr-3" aria-hidden="true"></i><a target="_blank" href="http://moedu.gov.bd">Ministry of Education</a></li>
                        <li ><i class="fa fa-external-link mr-3" aria-hidden="true"></i><a target="_blank" href="http://www.educationboardresults.gov.bd/regular/index.php">Education Board Result</a></li>                 
                    </ul>												
                  </div>
                </div>
              </div>
           </div>
           <!-- /news Notice Events -->
         </div>
       </section>
      <!-- .mainBody -->
    </section>

    <footer>
      <div class="container-fluid bg-dark">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="address p-3">
                          <h4 class="text-white my-4">QUICK CONTACT</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, id!</p>
                          <p>Phone : +880123456789</p>
                          <p>institute@gmail.com <br>
                          Office : +6846453121323 , +65465132184 , +986153113 
                          </p>
                          <p>Working day: Sat-Thu 8:30 AM to 4:30 PM</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="links p-3">
                          <h4 class="text-white my-4">QUICK LINKS</h4>
                          <ul class="pl-0">
                              <li><a href="#">Link 1</a></li>
                              <li><a href="#">Link 2</a></li>
                              <li><a href="#">Link 3</a></li>
                              <li><a href="#">Link 4</a></li>
                              <li><a href="#">Link 5</a></li>
                          </ul>
                      </div>                   
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                      <div class="panels p-3">
                          <h4 class="text-white my-4">PANEL</h4>
                          <ul class="pl-0">
                              <li><a href="adminPanel.php" data-toggle="modal" data-target="#myModal" >Admin Panel</a></li>
                          </ul>
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="myModalTitle">Admin Panel Login</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action='adminValidation.php' method='POST'>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" name="adminEmail" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" name="adminPassword" class="form-control" id="exampleInputPassword1" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="container text-center">
                      <p class="copyrightText mb-3" ><i class="fa fa-copyright mr-2" aria-hidden="true"></i>2020 Lorem ipsum dolor sit amet.</p>
                  </div>
                  <!-- <a id="back-to-top" href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> -->
              </div>
          </div>
      </div>
    </footer>
    <button id="myBtn" title="Go to top" style="display: block;"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="static/js/script.js"></script>
    
    <script>
      function noticeEventViewer(table , id) {
        location.assign('noticeAndEvents.php?table='+table+'&id='+id);
      }
    </script>
  </body>
</html>
