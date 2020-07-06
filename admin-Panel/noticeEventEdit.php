<?php
    include('../config.php');
    include('../bnTime.php');
    session_start();
    $currentDate = convertDateToBangla();
    $table_name = $_GET['table'];
    $id = $_GET['id'];

    $query = "SELECT * FROM $table_name WHERE Id = '$id'";
    $result = mysqli_fetch_array(mysqli_query($con , $query));

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
    <link rel="stylesheet" href="../static/css/style.css" />
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
                <img src="../static/images/logo.png" alt="Logo" width="150vw" height="150vh" >
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
      </header>
      
      <section class="row mx-2 my-5">
          <?php if($table_name == 'notice'): ?>
            <form action="noticeUpdate.php" method="post">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input id="date" class="form-control" type="text" name="date" value="<?php echo $result['date'] ?>" readonly="true" >
                </div>
                <div class="form-group">
                    <label for="heading">Heading</label>
                    <input id="heading" class="form-control" type="text" name="heading" value="<?php echo $result['heading'] ?>" >
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea name="editor24" id="Description" class="form-control" cols="30" rows="10"><?php echo $result['details'] ?></textarea>
                </div>
                <button  class="my-5 container btn btn-success" >Update</button>
                <input type="hidden" name="id" value="<?php echo $result['Id'] ?>">
            </form>
          <?php else: ?>
            <form action="eventUpdate.php" method="post">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input id="date" class="form-control" type="text" name="date" value="<?php echo $result['date'] ?>" readonly="true" >
                </div>
                <div class="form-group">
                    <label for="heading">Heading</label>
                    <input id="heading" class="form-control" type="text" name="heading" value="<?php echo $result['heading'] ?>" >
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea name="editor27" id="Description" class="form-control" cols="30" rows="10"><?php echo $result['details'] ?></textarea>
                </div>
                <button  class="my-5 container btn btn-success" >Update</button>
                <input type="hidden" name="id" value="<?php echo $result['Id'] ?>">
            </form>
          <?php endif ?>  
      </section>
     
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
    <script src="../static/js/script.js"></script>
    <script src="../static/ckeditor/ckeditor.js"></script>
    <script>
      for (let i = 0; i < 30; i++) {
        CKEDITOR.replace( 'editor'+i );  
      }

    </script>
  </body>
<?php else: ?>
    <h3 class="text-danger text-center my-5 ">You Need To Authorized</h3>
    <h6 class="text-danger text-center my-2 "><a href="index.php">Back to Homepage</a></h6>
    
<?php endif ?>
</html>
