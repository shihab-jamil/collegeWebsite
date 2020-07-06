<?php
  include('config.php');
  $query = "SELECT * FROM notice ORDER BY Id DESC LIMIT 10";
  $notice = mysqli_query($con , $query);

  $query = "SELECT * FROM newsevent ORDER BY Id DESC LIMIT 10";
  $newsEvent = mysqli_query($con , $query);

  $istitutional_history = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='institution_history'"));

?>

<!doctype html>
<html lang="en">
  <head>
    <title>সাধারণ তথ্য</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <li class="nav-item ">
                      <a class="nav-link" href="index.php">প্রচ্ছদ <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown active">
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

        <section class="mainBody my-3">
            <div class="row mx-1">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12 p-0">
                    <h3>সাধারণ তথ্য</h3>
                    <h6>প্রচ্ছদ / আমাদের সম্পর্কে / সাধারণ তথ্য</h6>
                    <hr style="border-top: 4px solid #ebebeb !important;">
                </div>
            </div>
            <div class="row mx-1 my-3">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                    <div class="pathBox">
                        <h5>আমাদের সম্পর্কে</h5>
                        <hr style="border-top: 4px solid #0099ff !important;">
                        <ul>
                            <li ><a href="vissionMissionGoal.php">উদ্দেশ্য ও লক্ষ্য</a></li>
                            <li><a href="whyChooseISRCR.php">কেন ইশিম</a></li>
                            <li><a class="text-warning" href="#">সাধারণ তথ্য</a></li>
                            <li><a href="guidancePrincipal.php">পথনির্দেশক নীতি</a></li>
                        </ul>
                    </div>
                    <div class="row mb-3">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-3">
                        <h4 class="logo text-white py-1 m-0 pl-2">নোটিশ</h4>
                        <div class="noticeBox events scrollbar-primary">
                          <ul>
                            <?php while ($row = mysqli_fetch_array($notice)) {
                              ?>
                              <li onclick="noticeEventViewer('notice' , <?php echo $row['Id'] ?>)">
                                <a href="#">
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
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 text-justify">
                   <?php echo '<img src="data:image;base64,'.base64_encode($istitutional_history['image']).'"alt="institute image" class="img-fluid mb-5">'; ?>
                    <!-- <img src="static/images/institute.jpg" alt="institute image" class="img-fluid"> -->
                    <div class="institueDetails my-4">
                        <p class="text-justify">
                            <?php echo $istitutional_history['qoutes'] ?>
                        </p><br>
                    </div>
                    <div class="sharePost my-5">
                      <p><i class="fa fa-share-alt mr-2" aria-hidden="true"></i>Share Post</p>
                      <div class="row">
                        <a href="#"><i class="fa fa-facebook-official fa-3x mx-2" aria-hidden="true"></i></a> 
                        <a href="#"><i class="fa fa-twitter-square fa-3x mx-2" aria-hidden="true" style="color: #00acee;"></i></i></a> 
                        <a href="#"><i class="fa fa-google-plus-square fa-3x mx-2" aria-hidden="true" style="color: #db4a39;"></i></a> 
                      </div>                                          
                    </div>
                </div>
            </div>
        </section>
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
                              <li><a href="#">Admin Panel</a></li>
                          </ul>
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
        console.log(id);
        location.assign('noticeAndEvents.php?table='+table+'&id='+id);
      }
    </script>
  </body>
</html>