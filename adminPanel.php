<?php
  include('config.php');
  include('bnTime.php');
  session_start();

  $sl_no = 1;

  $acamdic_support = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='academic_support'"));
  $istitutional_history = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='institution_history'"));
  $principal = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='principal'"));
  $vice_principal = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='vice_principal'"));
  $announcement = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='announcement'"));
  $vissionMisisonGoal = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='vissionMissionGoal'"));
  $whyChoose = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='whyChoose'"));
  $generalInformation = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='generalInformation'"));
  $guidencePrincipal = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='guidence_principal'"));
  $moderator = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='moderator'"));
  $chairman = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM authorities WHERE category='chairman'"));
  $scienceResult = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission_result WHERE dept='science'"));
  $artsResult = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission_result WHERE dept='arts'"));
  $commerceResult = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission_result WHERE dept='commerce'"));
  $bmResult = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission_result WHERE dept='bm'"));
  $admissionRequirement = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission WHERE category='requirment'"));
  $admissionNotice  = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission WHERE category='notice'"));
  $admissionProcedure = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM admission WHERE category='procedure'"));
  $academic_dept = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM academic WHERE category='dept'"));
  $academic_routine = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM academic WHERE category='routine'"));
  $academic_calender = mysqli_fetch_array(mysqli_query($con , "SELECT * FROM academic WHERE category='academic_calender'"));
  $academic_teachers = mysqli_query($con , "SELECT * FROM teachers");
  $academic_staffs = mysqli_query($con , "SELECT * FROM stuffs");
  $academic_staffs_fourth_grade = mysqli_query($con , "SELECT * FROM fourth_grade_stuffs");
  $gallery = mysqli_query($con , "SELECT * FROM gallery");
  $slide = mysqli_query($con , "SELECT * FROM slide");
  $notices = mysqli_query($con , "SELECT * FROM notice ORDER BY id DESC");
  $newsEvents = mysqli_query($con , "SELECT * FROM newsevent ORDER BY id DESC");
  $currentDate = convertDateToBangla();



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

<?php if ($_SESSION['adminAuth']): ?>
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
        <!-- /logo  -->
      </header>


      <section class="my-2 mx-2">
        <ul class="nav nav-tabs nav-justified bg-dark" id="myTab" role="tablist">
            <li class="nav-item text">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                   Homepage
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aboutUs-tab" data-toggle="tab" href="#aboutUs" role="tab" aria-controls="aboutUs" aria-selected="false">
                    About us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="authorities-tab" data-toggle="tab" href="#authorities" role="tab" aria-controls="authorities" aria-selected="false">
                    Authorities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="admission-tab" data-toggle="tab" href="#admission" role="tab" aria-controls="admission" aria-selected="false">
                    Admission
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false">
                    Academic
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">
                    Gallery
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="noticeEvent-tab" data-toggle="tab" href="#noticeEvent" role="tab" aria-controls="noticeEvent" aria-selected="false">
                    Notice & Events
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active my-5" id="home" role="tabpanel" aria-labelledby="home-tab">
              <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <!--tips: to fill or justify the .nav-pills space use .nav-fill or .nav-justified-->
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                    Announcement
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-instituion_history-tab" data-toggle="pill" href="#pills-instituion_history" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Institution History
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-principal-tab" data-toggle="pill" href="#pills-principal" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Principal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-vice_principal-tab" data-toggle="pill" href="#pills-vice_principal" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Vice Principal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-academic_support-tab" data-toggle="pill" href="#pills-academic_support" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Academic SUpport
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-slider-tab" data-toggle="pill" href="#pills-slider" role="tab" aria-controls="pills-slider" aria-selected="false">
                    Slider
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <form action="admin-Panel/announcementUpdate.php" method="POST">
                    <textarea class="mt-5" name="editor1" ><?php echo $announcement['qoutes'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>

                <div class="tab-pane fade" id="pills-instituion_history" role="tabpanel" aria-labelledby="pills-instituion_history-tab">
                  <form action="admin-Panel/institutionHistoryUpdate.php" method="POST" enctype="multipart/form-data">
                    <textarea class="mt-5" name="editor2" ><?php echo $istitutional_history['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="institutionImage">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal1" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal1Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($istitutional_history['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button class="my-5 container btn btn-success">Update</button> 
                  </form>
                </div>

                <div class="tab-pane fade" id="pills-principal" role="tabpanel" aria-labelledby="pills-principal-tab">
                 <form action="admin-Panel/principalUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mt-4">
                      <label for="my-input">Name</label>
                      <input id="my-input" class="form-control" type="text" name="principalName" value="<?php echo $principal['name'] ?>">
                    </div>
                    <div class="form-group mt-4">
                      <label for="principalEmail">Email</label>
                      <input id="principalEmail" class="form-control" type="text" name="principalEmail" value="<?php echo $principal['email'] ?>">
                    </div>
                    <div class="form-group mt-4">
                      <label for="principalPhoneNumber">Mobile</label>
                      <input id="principalPhoneNumber" class="form-control" type="text" name="principalPhoneNumber" value="<?php echo $principal['phone_number'] ?>">
                    </div>
                    <label for="editor3">Quotes</label>
                    <textarea class="mt-5" name="editor3" id="editor3"><?php echo $principal['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="principalImage">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal3" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal3Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($principal['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button class="my-5 container btn btn-success">Update</button> 
                  </form>
                </div>

                <div class="tab-pane fade" id="pills-vice_principal" role="tabpanel" aria-labelledby="pills-vice_principal-tab">
                  <form action="admin-Panel/vicePrincipalUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mt-4">
                      <label for="my-input">Name</label>
                      <input id="my-input" class="form-control" type="text" name="vicePrincipalName" value="<?php echo $vice_principal['name'] ?>">
                    </div>
                    <div class="form-group mt-4">
                      <label for="vicePrincipalEmail">Email</label>
                      <input id="vicePrincipalEmail" class="form-control" type="text" name="vicePrincipalEmail" value="<?php echo $vice_principal['email'] ?>">
                    </div>
                    <div class="form-group mt-4">
                      <label for="vicePrincipalPhoneNumber">Phone Number</label>
                      <input id="vicePrincipalPhoneNumber" class="form-control" type="text" name=vicePrincipalPhoneNumber" value="<?php echo $vice_principal['phone_number'] ?>">
                    </div>
                    <label for="editor4">Quotes</label>
                    <textarea class="mt-5" name="editor4" id="editor4" ><?php echo $vice_principal['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="vicePrincipalImage">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal4" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal4Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($vice_principal['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button class="my-5 container btn btn-success">Update</button> 
                  </form>
                </div>

                <div class="tab-pane fade" id="pills-academic_support" role="tabpanel" aria-labelledby="pills-academic_support-tab">
                  <form action="admin-Panel/academicSupportUpdate.php" method="POST" enctype="multipart/form-data">
                    <textarea class="mt-5" name="editor5" ><?php echo $acamdic_support['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="academicSupportImage">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal2" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal2Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($acamdic_support['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button class="my-5 container btn btn-success">Update</button> 
                  </form>
                </div>

                <div class="tab-pane fade" id="pills-slider" role="tabpanel" aria-labelledby="pills-slider-tab">
                  <table class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th>Sl.No</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_array($slide)) { ?>
                        <tr>
                          <td><?php echo $sl_no ?></td>
                          <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" height="200px" width="250px" class="img-fluid">'; ?></td>
                          <td><button class="btn btn-warning" data-toggle="modal" data-target="<?php $pn =  $row['Id'];  echo '#'.$pn; ?>">Edit</button> <button class="btn btn-danger" onclick="deleteProfile('slide','<?php echo $row['Id'] ?>','<?php echo 'image no. '.$sl_no ?>')">Delete</button> <button class="btn btn-success" data-toggle="modal" data-target="#slidesImageAdd" >Add Image</button></td>
                        </tr>
                        <div class="modal fade" id="<?php echo $row['Id']  ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['Id']  ?>-label" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="<?php echo $row['Id']  ?>Title">Image Number <?php echo $sl_no  ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form action="admin-Panel/sliderImageUpdate.php" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <!--Modal content-->
                                  <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" class="img-fluid">'; ?>
                                  <input type="file" name="slideImage" class="mt-3" >
                                  <input type="hidden" name="slideImageId" value="<?php echo $row['Id'] ?>">
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="Submit" class="btn btn-success">Save</button>
                                </div>
                              </form>  
                            </div>
                          </div>
                        </div>
                         <?php
                        $sl_no++;
                      } $sl_no = 1;  ?>               
                    </tbody>
                  </table>
                  <div class="modal fade" id="slidesImageAdd" tabindex="-1" role="dialog" aria-labelledby="slidesImageAdd-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="slidesImageAddTitle">Add a Slider Image</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="post" action="admin-Panel/slideImageAdd.php" enctype="multipart/form-data">
                          <div class="modal-body">
                            <!--Modal content-->
                              <input type="file" name="sliderImageAdd" >
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                          </div>
                        </form>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show my-5" id="aboutUs" role="tabpanel" aria-labelledby="aboutUs-tab">
              <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <!--tips: to fill or justify the .nav-pills space use .nav-fill or .nav-justified-->
                <li class="nav-item">
                  <a class="nav-link active" id="pills-vissionMissionGoal-tab" data-toggle="pill" href="#pills-vissionMissionGoal" role="tab" aria-controls="pills-vissionMissionGoal" aria-selected="true">
                    Vission, Misison & Goal                   
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-whyChoose-tab" data-toggle="pill" href="#pills-whyChoose" role="tab" aria-controls="pills-whyChoose" aria-selected="false">
                    Why Choose ISRCR
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-generalInformation-tab" data-toggle="pill" href="#pills-generalInformation" role="tab" aria-controls="pills-generalInformation" aria-selected="false">
                    General Information
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-guidencePrincipal-tab" data-toggle="pill" href="#pills-guidencePrincipal" role="tab" aria-controls="pills-guidencePrincipal" aria-selected="false">
                    Guidence Principal
                  </a>
                </li>
              </ul>

              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-vissionMissionGoal" role="tabpanel" aria-labelledby="pills-vissionMissionGoal-tab">
                  <form action="admin-Panel/vissionMissionGoalUpdate.php" method="POST">
                    <textarea class="mt-5" name="editor6" ><?php echo $vissionMisisonGoal['qoutes'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-whyChoose" role="tabpanel" aria-labelledby="pills-whyChoose-tab">
                  <!-- whyChoose -->
                  <form action="admin-Panel/whyChooseUpdate.php" method="POST">
                    <textarea class="mt-5" name="editor7" ><?php echo $whyChoose['qoutes'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-generalInformation" role="tabpanel" aria-labelledby="pills-generalInformation-tab">
                  <!-- generalInformation -->
                  <form action="admin-Panel/generalInformationUpdate.php" method="POST" enctype="multipart/form-data">
                    <textarea class="mt-5" name="editor8" ><?php echo $istitutional_history['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="institutionImage_generalInfo">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal8" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModal8-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal8Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($istitutional_history['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button class="my-5 container btn btn-success">Update</button> 
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-guidencePrincipal" role="tabpanel" aria-labelledby="pills-guidencePrincipal-tab">
                  <!-- guidencePrincipal -->
                  <form action="admin-Panel/guidencePrincipalUpdate.php" method="POST">
                    <textarea class="mt-5" name="editor9" ><?php echo $guidencePrincipal['qoutes'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show my-5" id="authorities" role="tabpanel" aria-labelledby="authorities-tab">
              <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <!--tips: to fill or justify the .nav-pills space use .nav-fill or .nav-justified-->
                <li class="nav-item">
                  <a class="nav-link active" id="pills-moderator-tab" data-toggle="pill" href="#pills-moderator" role="tab" aria-controls="pills-moderator" aria-selected="true">
                    Moderator
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-chairman-tab" data-toggle="pill" href="#pills-chairman" role="tab" aria-controls="pills-chairman" aria-selected="false">
                    Chairman
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-principalAuth-tab" data-toggle="pill" href="#pills-principalAuth" role="tab" aria-controls="pills-principalAuth" aria-selected="false">
                    Principal
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-vice_principalAuth-tab" data-toggle="pill" href="#pills-vice_principalAuth" role="tab" aria-controls="pills-vice_principalAuth" aria-selected="false">
                    Vice-Principal
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-moderator" role="tabpanel" aria-labelledby="pills-moderator-tab">
                  <form action="admin-Panel/moderatorUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="my-input1">Name</label>
                      <input id="my-input1" class="form-control" type="text" name="moderatorName" value="<?php echo $moderator['name'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="my-input2">Phone Number</label>
                      <input id="my-input2" class="form-control" type="text" name="moderatorPhoneNumber" value="<?php echo $moderator['phone_number'] ?>">
                    </div>
                    <label for="editor10">Quotes</label>
                    <textarea class="mt-5" name="editor10" id="editor10" ><?php echo $moderator['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="moderatorImage">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal10" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModal10-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal10Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($moderator['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-chairman" role="tabpanel" aria-labelledby="pills-chairman-tab">
                  <form action="admin-Panel/chairmanUpdate.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="my-input3">Name</label>
                      <input id="my-input3" class="form-control" type="text" name="chairmanName" value="<?php echo $chairman['name'] ?>">
                    </div>
                    <div class="form-group ">
                      <label for="my-input4">Phone Number</label>
                      <input id="my-input4" class="form-control" type="text" name="chairmanPhoneNumber" value="<?php echo $chairman['phone_number'] ?>">
                    </div> 
                    <label for="editor11">Quotes</label>
                    <textarea class="mt-5" name="editor11" id="editor11"><?php echo $chairman['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="chairmanImage">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal11" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModal11-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal11Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($chairman['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-principalAuth" role="tabpanel" aria-labelledby="pills-principalAuth-tab">
                  <form action="admin-Panel/principalUpdateAuthority.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="my-input7">Name</label>
                      <input id="my-input7" class="form-control" type="text" name="principalNameAuth" value="<?php echo $principal['name'] ?>">
                    </div>
                    <div class="form-group ">
                      <label for="my-input5">Phone Number</label>
                      <input id="my-input5" class="form-control" type="text" name="principalPhoneNumberAuth" value="<?php echo $principal['phone_number'] ?>">
                    </div> 
                    <div class="form-group ">
                      <label for="my-input6">Email</label>
                      <input id="my-input6" class="form-control" type="text" name="principalEmailAuth" value="<?php echo $principal['email'] ?>">
                    </div> 
                    <label for="editor12">Quotes</label>
                    <textarea class="mt-5" name="editor12" id="editor12"><?php echo $principal['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="principalImageAuth">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal12" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModal12-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal12Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($principal['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-vice_principalAuth" role="tabpanel" aria-labelledby="pills-vice_principalAuth-tab">
                  <form action="admin-Panel/vice_principalUpdateAuthority.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="my-input11">Name</label>
                      <input id="my-input11" class="form-control" type="text" name="vice_principalNameAuth" value="<?php echo $vice_principal['name'] ?>">
                    </div>
                    <div class="form-group ">
                      <label for="my-input12">Phone Number</label>
                      <input id="my-input12" class="form-control" type="text" name="vice_principalPhoneNumberAuth" value="<?php echo $vice_principal['phone_number'] ?>">
                    </div> 
                    <div class="form-group ">
                      <label for="my-input13">Email</label>
                      <input id="my-input13" class="form-control" type="text" name="vice_principalEmailAuth" value="<?php echo $vice_principal['email'] ?>">
                    </div> 
                    <label for="editor13">Quotes</label>
                    <textarea class="mt-5" name="editor13" id="editor13"><?php echo $vice_principal['qoutes'] ?></textarea>
                    <div class="row mx-1 mt-5">
                        <input type="file" name="vice_principalImageAuth">
                        <a class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal13" ><i class="fa fa-eye" aria-hidden="true"></i> Current Image</a>                        
                        <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModal13-label1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModal13Title">Image Preview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <?php echo '<img src="data:image;base64,'.base64_encode($vice_principal['image']).'"alt="institute image" class="img-fluid">'; ?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <button  class="my-5 container btn btn-success" >Update</button> 
                  </form>
                </div>
              </div>
            </div>

            
            <div class="tab-pane fade show my-5" id="admission" role="tabpanel" aria-labelledby="admission-tab">
              <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <!--tips: to fill or justify the .nav-pills space use .nav-fill or .nav-justified-->
                <li class="nav-item">
                  <a class="nav-link active" id="pills-result-tab" data-toggle="pill" href="#pills-result" role="tab" aria-controls="pills-result" aria-selected="true">
                    Result
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-admissionRequirement-tab" data-toggle="pill" href="#pills-admissionRequirement" role="tab" aria-controls="pills-admissionRequirement" aria-selected="false">
                    Admission Requirement
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-admissionNotice-tab" data-toggle="pill" href="#pills-admissionNotice" role="tab" aria-controls="pills-admissionNotice" aria-selected="false">
                    Admission Notice
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-admissionProcedure-tab" data-toggle="pill" href="#pills-admissionProcedure" role="tab" aria-controls="pills-admissionProcedure" aria-selected="false">
                    Admission Procedure
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-result" role="tabpanel" aria-labelledby="pills-result-tab">
                  <form action="admin-panel/admissionResultScience.php" method="post">
                    <div class="form-group mb-5">
                      <label for="editor14">Science</label>
                      <textarea name="editor14" id="editor14" cols="30" rows="30"><?php echo $scienceResult['result'] ?></textarea>
                      <button  class="my-5 container btn btn-success" >Update</button>
                    </div>
                  </form>
                  <form action="admin-panel/admissionResultArts.php" method="post">
                    <div class="form-group mb-5">
                      <label for="editor15">Arts</label>
                      <textarea name="editor15" id="editor15" cols="30" rows="30"><?php echo $artsResult['result'] ?></textarea>
                      <button  class="my-5 container btn btn-success" >Update</button>
                    </div>
                  </form>
                  <form action="admin-panel/admissionResultCommerce.php" method="post">
                    <div class="form-group mb-5">
                      <label for="editor16">Commerce</label>
                      <textarea name="editor16" id="editor16" cols="30" rows="30"><?php echo $commerceResult['result'] ?></textarea>
                      <button  class="my-5 container btn btn-success" >Update</button>
                    </div>
                  </form>
                  <form action="admin-panel/admissionResultBM.php" method="post">
                    <div class="form-group mb-5">
                      <label for="editor17">BM</label>
                      <textarea name="editor17" id="editor17" cols="30" rows="30"><?php echo $bmResult['result'] ?></textarea>
                      <button  class="my-5 container btn btn-success" >Update</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-admissionRequirement" role="tabpanel" aria-labelledby="pills-admissionRequirement-tab">
                  <form action="admin-Panel/admissionRequirement.php" method="post">
                    <textarea name="editor18" cols="30" rows="10"><?php echo $admissionRequirement['details'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-admissionNotice" role="tabpanel" aria-labelledby="pills-admissionNotice-tab">
                   <form action="admin-Panel/admissionNotice.php" method="post">
                    <textarea name="editor19" cols="30" rows="10"><?php echo $admissionNotice['details'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-admissionProcedure" role="tabpanel" aria-labelledby="pills-admissionProcedure-tab">
                   <form action="admin-Panel/admissionProcedure.php" method="post">
                    <textarea name="editor20" cols="30" rows="10"><?php echo $admissionProcedure['details'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button>
                  </form>  
                </div>
              </div>
            </div>

            
            <div class="tab-pane fade show my-5" id="academic" role="tabpanel" aria-labelledby="academic-tab">
              <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                <!--tips: to fill or justify the .nav-pills space use .nav-fill or .nav-justified-->
                <li class="nav-item">
                  <a class="nav-link active" id="pills-deptDetails-tab" data-toggle="pill" href="#pills-deptDetails" role="tab" aria-controls="pills-deptDetails" aria-selected="true">
                    Departments Details
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-teachers-tab" data-toggle="pill" href="#pills-teachers" role="tab" aria-controls="pills-teachers" aria-selected="false">
                    Teachers
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-routine-tab" data-toggle="pill" href="#pills-routine" role="tab" aria-controls="pills-routine" aria-selected="false">
                    Routine
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-acCalender-tab" data-toggle="pill" href="#pills-acCalender" role="tab" aria-controls="pills-acCalender" aria-selected="false">
                    Academic Calender
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-staffs-tab" data-toggle="pill" href="#pills-staffs" role="tab" aria-controls="pills-staffs" aria-selected="false">
                    Staffs
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-deptDetails" role="tabpanel" aria-labelledby="pills-deptDetails-tab">
                  <form action="admin-Panel/academicDeptUpdate.php" method="post">
                    <textarea name="editor21"  cols="30" rows="10"><?php echo $academic_dept['details'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button>
                  </form>
                </div>

                <div class="tab-pane fade my-5" id="pills-teachers" role="tabpanel" aria-labelledby="pills-teachers-tab">
                  <table class="table table-bordered table-striped my-5 text-center">
                      <thead>
                        <tr>
                          <th>Sl.No</th>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone No.</th>
                          <th>NID</th>
                          <th>Subject</th>
                          <th>Position</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php while ($row = mysqli_fetch_array($academic_teachers)) { ?>
                          <tr>
                            <td><?php echo $sl_no ?></td>
                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" width="50px">'; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['phone_number'] ?></td>
                            <td><?php echo $row['nid'] ?></td>
                            <td><?php echo $row['subject'] ?></td>
                            <td><?php echo $row['position'] ?></td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="<?php $pn =  $row['id'];  echo '#'.$pn; ?>">Edit</button>    <button class="btn btn-danger" onclick="deleteProfile('teachers','<?php echo $row['id'] ?>','<?php echo $row['name'] ?>')">Delete</button>    <button class="btn btn-success" data-toggle="modal" data-target="#teacherAdd"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Add Teacher</button></td>
                          </tr>
                          <div class="modal fade" id="<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['id']  ?>-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="<?php echo $row['id']  ?>Title">Teacher Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="admin-Panel/academicTeachersUpdate.php" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-6 col lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="my-auto" style="display:flex; flex-flow:column ; justify-content:space-around;">
                                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" style="margin: 90px 0px;" class="img-fluid">'; ?>
                                            <input type="file" name="teacherImage" >
                                          </div>
                                        </div>
                                        <div class="col-xl-6 col lg-6 col-md-6 col-sm-12 col-12">
                                          <p><span class="font-weight-bold">নাম : </span><input type="text" name="teacherName"  value="<?php echo $row['name']  ?>"></p>
                                          <p><span class="font-weight-bold">পদবী : </span><input type="text" name="teacherPosition" value="<?php echo $row['position']  ?>"></p>
                                          <p><span class="font-weight-bold">বিষয় : </span><input type="text" name="teacherSubject" value="<?php echo $row['subject']  ?>"></p>
                                          <p><span class="font-weight-bold">মোবাইল : </span><input type="text" name="teacherMobile" value="<?php echo $row['phone_number']  ?>"></p>
                                          <p><span class="font-weight-bold">ই-মেইল : </span><input type="text" name="teacherEmail" value="<?php echo $row['email']  ?>"></p>
                                          <p><span class="font-weight-bold">NID : </span><input type="text" name="teacherNID" value="<?php echo $row['nid']  ?>"></p>
                                          <input type="hidden" name="teacherId" value="<?php echo $row['id'] ?>">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                  </div>
                                </form>  
                              </div>
                            </div>
                          </div>
                           <?php
                          $sl_no++;
                        } $sl_no=1; ?>
                      </tbody>          
                  </table>
                  <div class="modal fade" id="teacherAdd" tabindex="-1" role="dialog" aria-labelledby="teacherAdd-label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <form action="admin-Panel/academicTeacherAdd.php" method="post" enctype="multipart/form-data">  
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="teacherAddTitle">Add a teacher</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="teacherName">Name</label>
                                <input type="text" class="form-control" name="teacherNameAdd" id="teacherName">
                              </div>                              
                              <div class="form-group">
                                <label for="teacherPositionAdd">Position</label>
                                <input type="text" class="form-control" name="teacherPositionAdd" id="teacherPositionAdd">
                              </div>                              
                              <div class="form-group">
                                <label for="teacherSubjectAdd">Subject</label>
                                <input type="text" class="form-control" name="teacherSubjectAdd" id="teacherSubjectAdd">
                              </div>                              
                              <div class="form-group">
                                <label for="teacherMobile_numberAdd">Mobile Number</label>
                                <input type="text" class="form-control" name="teacherMobileAdd" id="teacherMobile_numberAdd">
                              </div>                              
                              <div class="form-group">
                                <label for="teacherEmailAdd">Email</label>
                                <input type="text" class="form-control" name="teacherEmailAdd" id="teacherEmailAdd">
                              </div>                              
                              <div class="form-group">
                                <label for="teacherNIDAdd">NID</label>
                                <input type="text" class="form-control" name="teacherNIDAdd" id="teacherNIDAdd">
                              </div>                              
                              <div class="form-group">
                                <input type="file" name="teacherImageAdd">
                              </div>                              
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </form>  
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane fade" id="pills-routine" role="tabpanel" aria-labelledby="pills-routine-tab">
                  <form action="admin-Panel/academicRoutineUpdate.php" method="post">
                    <textarea name="editor22"  cols="30" rows="10"><?php echo $academic_routine['details'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button>
                  </form>
                </div>
                
                <div class="tab-pane fade" id="pills-acCalender" role="tabpanel" aria-labelledby="pills-acCalender-tab">
                  <form action="admin-Panel/academicCalenderUpdate.php.php" method="post">
                    <textarea name="editor23"  cols="30" rows="10"><?php echo $academic_calender['details'] ?></textarea>
                    <button  class="my-5 container btn btn-success" >Update</button>
                  </form>
                </div>
                
                <div class="tab-pane fade" id="pills-staffs" role="tabpanel" aria-labelledby="pills-staffs-tab">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-5">
                    <hr><h3 class="text-center">Office Employee</h3><hr>
                    <table class="table  table-bordered table-striped text-center">
                      <thead>
                        <tr>
                          <th>Sl.No</th>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Position</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = mysqli_fetch_array($academic_staffs)) { ?>
                          <tr>
                            <td><?php echo $sl_no ?></td>
                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" width="50px">'; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['phone_number'] ?></td>
                            <td><?php echo $row['position'] ?></td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="<?php $pn =  $row['id'];  echo '#'.$pn; ?>">Edit</button>    <button class="btn btn-danger" onclick="deleteProfile('stuffs','<?php echo $row['id'] ?>','<?php echo $row['name'] ?>')">Delete</button>    <button class="btn btn-success" data-toggle="modal" data-target="#stuffAdd"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Add Employee</button></td>
                          </tr>
                          <div class="modal fade" id="<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['id']  ?>-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="<?php echo $row['id']  ?>Title">Employee Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="admin-Panel/academicStuffsUpdate.php" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-6 col lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="my-auto" style="display:flex; flex-flow:column ; justify-content:space-around;">
                                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" style="margin-bottom: 50px;" class="img-fluid">'; ?>
                                            <input type="file" name="stuffImage" >
                                          </div>
                                        </div>
                                        <div class="col-xl-6 col lg-6 col-md-6 col-sm-12 col-12">
                                          <p><span class="font-weight-bold">নাম : </span><input type="text" name="stuffName"  value="<?php echo $row['name']  ?>"></p>
                                          <p><span class="font-weight-bold">পদবী : </span><input type="text" name="stuffPosition" value="<?php echo $row['position']  ?>"></p>
                                          <p><span class="font-weight-bold">মোবাইল : </span><input type="text" name="stuffMobile" value="<?php echo $row['phone_number']  ?>"></p>
                                          <input type="hidden" name="stuffId" value="<?php echo $row['id'] ?>">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                  </div>
                                </form>  
                              </div>
                            </div>
                          </div>
                           <?php
                          $sl_no++;
                        } $sl_no=1; ?>
                      </tbody>
                    </table>
                    <div class="modal fade" id="stuffAdd" tabindex="-1" role="dialog" aria-labelledby="stuffAdd-label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="admin-Panel/academicStuffAdd.php" method="post" enctype="multipart/form-data">  
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="stuffAddTitle">Add a Employee</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="stuffName">Name</label>
                                  <input type="text" class="form-control" name="stuffNameAdd" id="stuffName">
                                </div>                              
                                <div class="form-group">
                                  <label for="stuffPositionAdd">Position</label>
                                  <input type="text" class="form-control" name="stuffPositionAdd" id="stuffPositionAdd">
                                </div>                              
                                <div class="form-group">
                                  <label for="stuffMobile_numberAdd">Mobile Number</label>
                                  <input type="text" class="form-control" name="stuffMobileAdd" id="stuffMobile_numberAdd">
                                </div>                                                           
                                <div class="form-group">
                                  <input type="file" name="stuffImageAdd">
                                </div>                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </div>
                        </form>  
                      </div>
                    </div>    
                  </div>
                  
                                    
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 my-5">
                    <hr><h3 class="text-center">Fourth Grade Staffs</h3><hr>
                    <table class="table  table-bordered table-striped text-center">
                      <thead>
                        <tr>
                          <th>Sl.No</th>
                          <th>Photo</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Position</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = mysqli_fetch_array($academic_staffs_fourth_grade)) { ?>
                          <tr>
                            <td><?php echo $sl_no ?></td>
                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" width="50px">'; ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['phone_number'] ?></td>
                            <td><?php echo $row['position'] ?></td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="<?php $pn =  $row['id'];  echo '#'.$pn; ?>">Edit</button>    <button class="btn btn-danger" onclick="deleteProfile('fourth_grade_stuffs','<?php echo $row['id'] ?>','<?php echo $row['name'] ?>')">Delete</button>    <button class="btn btn-success" data-toggle="modal" data-target="#fgStuffAdd"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Add Employee</button></td>
                          </tr>
                          <div class="modal fade" id="<?php echo $row['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['id']  ?>-label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="<?php echo $row['id']  ?>Title">Staffs Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="admin-Panel/academicFgStuffsUpdate.php" method="post" enctype="multipart/form-data">
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-6 col lg-6 col-md-6 col-sm-12 col-12">
                                          <div class="my-auto" style="display:flex; flex-flow:column ; justify-content:space-around;">
                                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" style="margin-bottom: 50px;" class="img-fluid">'; ?>
                                            <input type="file" name="fgStuffImage" >
                                          </div>
                                        </div>
                                        <div class="col-xl-6 col lg-6 col-md-6 col-sm-12 col-12">
                                          <p><span class="font-weight-bold">নাম : </span><input type="text" name="fgStuffName"  value="<?php echo $row['name']  ?>"></p>
                                          <p><span class="font-weight-bold">পদবী : </span><input type="text" name="fgStuffPosition" value="<?php echo $row['position']  ?>"></p>
                                          <p><span class="font-weight-bold">মোবাইল : </span><input type="text" name="fgStuffMobile" value="<?php echo $row['phone_number']  ?>"></p>
                                          <input type="hidden" name="fgStuffId" value="<?php echo $row['id'] ?>">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                  </div>
                                </form>  
                              </div>
                            </div>
                          </div>
                           <?php
                          $sl_no++;
                        } $sl_no=1; ?>
                      </tbody>
                    </table>
                    <div class="modal fade" id="fgStuffAdd" tabindex="-1" role="dialog" aria-labelledby="fgStuffAdd-label" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="admin-Panel/academicFgStuffAdd.php" method="post" enctype="multipart/form-data">  
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="fgStuffAddTitle">Add a Employee</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="fgStuffName">Name</label>
                                  <input type="text" class="form-control" name="fgStuffNameAdd" id="fgStuffName">
                                </div>                              
                                <div class="form-group">
                                  <label for="fgStuffPositionAdd">Position</label>
                                  <input type="text" class="form-control" name="fgStuffPositionAdd" id="fgStuffPositionAdd">
                                </div>                              
                                <div class="form-group">
                                  <label for="fgStuffMobile_numberAdd">Mobile Number</label>
                                  <input type="text" class="form-control" name="fgStuffMobileAdd" id="fgStuffMobile_numberAdd">
                                </div>                                                           
                                <div class="form-group">
                                  <input type="file" name="fgStuffImageAdd">
                                </div>                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </div>
                        </form>  
                      </div>
                    </div>    
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show my-5" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
              <table class="table table-bordered table-striped">
                 <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>    
                 </thead>  
                 <tbody>
                    <?php while ($row = mysqli_fetch_array($gallery)) { ?>
                      <tr>
                        <td><?php echo $sl_no ?></td>
                        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" width="150px" height="100px">'; ?></td>
                        <td><?php echo $row['details'] ?></td>
                        <td><button class="btn btn-warning" data-toggle="modal" data-target="<?php $pn =  $row['id'];  echo '#'.$pn; ?>">Edit</button>    <button class="btn btn-danger" onclick="deleteProfile('gallery','<?php echo $row['id'] ?>','<?php echo $sl_no.'th image' ?>')">Delete</button>    <button class="btn btn-success" data-toggle="modal" data-target="#imageAdd"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Add Image</button></td>
                      </tr>
                      <div class="modal fade" id="<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $row['id'] ?>-label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="<?php echo $row['id'] ?>Title">Edit Image</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="admin-Panel/galleryImageUpdate.php" method="post" enctype="multipart/form-data">
                              <div class="modal-body" style="display:flex; flex-flow:column;">
                                <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="institute image" style="margin-bottom: 20px;" class="img-fluid">'; ?>
                                <label for="galleryImageDetails">Title</label>
                                <input type="text" name="galleryImageDetails" id="galleryImageDetails" class="mb-2" value="<?php echo $row['details'] ?>">
                                <input type="File" name="galleryImage" id="imageDetails" class="mb-2">
                                <input type="hidden" name="galleryImageId" value="<?php echo $row['id'] ?>">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                              </div>
                            </form>  
                          </div>
                        </div>
                      </div> <?php
                      $sl_no++;
                    } $sl_no=1; ?>    
                 </tbody>     
              </table>
              <div class="modal fade" id="imageAdd" tabindex="-1" role="dialog" aria-labelledby="imageAdd-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="imageAddTitle">Add image to Gallery</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="admin-Panel/galleryImageAdd.php" method="post" enctype="multipart/form-data">
                      <div class="modal-body" style="display:flex; flex-flow:column">
                        <input type="file" name="galleryImageAdd" class="mb-2">
                        <label for="galleryImageDetailsAdd">Title</label>
                        <input type="text" name="galleryImageDetailsAdd" id="galleryImageDetailsAdd">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </form>  
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show my-5" id="noticeEvent" role="tabpanel" aria-labelledby="noticeEvent-tab">
              <ul class="nav nav-pills mb-3 nav-justified Q" id="pills-tab" role="tablist">
                <!--tips: to fill or justify the .nav-pills space use .nav-fill or .nav-justified-->
                <li class="nav-item">
                  <a class="nav-link active" id="pills-notices-tab" data-toggle="pill" href="#pills-notices" role="tab" aria-controls="pills-notices" aria-selected="true">
                    Notices
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-addNotice-tab" data-toggle="pill" href="#pills-addNotice" role="tab" aria-controls="pills-addNotice" aria-selected="false">
                    Add Notice
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-events-tab" data-toggle="pill" href="#pills-events" role="tab" aria-controls="pills-events" aria-selected="false">
                    Events
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-addEvent-tab" data-toggle="pill" href="#pills-addEvent" role="tab" aria-controls="pills-addEvent" aria-selected="false">
                    Add Event
                  </a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-notices" role="tabpanel" aria-labelledby="pills-notices-tab">
                  <table class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th>Sl. No</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_array($notices)) { ?>
                        <tr>
                          <td><?php echo $sl_no ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['heading'] ?></td>
                          <td><button class="btn btn-primary"  onclick="noticeEventViewer('notice','<?php echo $row['Id'] ?>')">View</button> <button class="btn btn-warning" onclick="noticeEventEditor('notice','<?php echo $row['Id'] ?>')">Edit</button> <button class="btn btn-danger" onclick="deleteProfile('notice', '<?php echo $row['Id'] ?>', '<?php echo 'notice number '.$sl_no ?>')">Delete</button></td>
                        </tr><?php
                        $sl_no++;
                      } $sl_no =1; ?>
                        
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-addNotice" role="tabpanel" aria-labelledby="pills-addNotice-tab">
                 <form action="admin-Panel/noticeAdd.php" method="post">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input id="date" class="form-control" type="text" name="dateAdd" value="<?php echo $currentDate?>" readonly="true" >
                    </div>
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input id="heading" class="form-control" type="text" name="headingAdd">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="editor25" id="Description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <button  class="my-5 container btn btn-success" >Submit</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab">
                 <table class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th>Sl. No</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($row = mysqli_fetch_array($newsEvents)) { ?>
                        <tr>
                          <td><?php echo $sl_no ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['heading'] ?></td>
                          <td><button class="btn btn-primary"  onclick="noticeEventViewer('newsevent','<?php echo $row['Id'] ?>')">View</button> <button class="btn btn-warning" onclick="noticeEventEditor('newsevent','<?php echo $row['Id'] ?>')">Edit</button> <button class="btn btn-danger" onclick="deleteProfile('newsevent', '<?php echo $row['Id'] ?>', '<?php echo 'event number '.$sl_no ?>')">Delete</button></td>
                        </tr><?php
                        $sl_no++;
                      } $sl_no =1; ?>
                        
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-addEvent" role="tabpanel" aria-labelledby="pills-addEvent-tab">
                 <form action="admin-Panel/newsEventAdd.php" method="post">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input id="date" class="form-control" type="text" name="newsEventDateAdd" value="<?php echo $currentDate?>" readonly="true" >
                    </div>
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input id="heading" class="form-control" type="text" name="newsEventHeadingAdd">
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="editor26" id="Description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <button  class="my-5 container btn btn-success" >Submit</button>
                  </form>
                </div>
              </div>      
            </div>
        </div>
       </section>
      <!-- .mainBody -->
    </section>

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
    <script src="static/ckeditor/ckeditor.js"></script>
    <script>
      for (let i = 0; i < 30; i++) {
        CKEDITOR.replace( 'editor'+i );  
      }

      function deleteProfile(table_name, id, name) {
        if(confirm("Do you want to remove "+name+' ?')){
          location.assign('admin-Panel/deleteProfile.php?table='+table_name+'&id='+id);
        }
        
      }
      function noticeEventViewer(table , id) {
        location.assign('noticeAndEvents.php?table='+table+'&id='+id);
      }
      function noticeEventEditor(table , id) {
        location.assign('admin-Panel/noticeEventEdit.php?table='+table+'&id='+id);
      }

    </script>
  </body>
<?php else: ?>
    <h3 class="text-danger text-center my-5 ">You Need To Authorized</h3>
    <h6 class="text-danger text-center my-2 "><a href="index.php">Back to Homepage</a></h6>
    
<?php endif ?>
</html>






