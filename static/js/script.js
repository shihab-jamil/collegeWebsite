$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 40) {
      $("#myBtn").fadeIn();
    } else {
      $("#myBtn").fadeOut();
    }
  });

  $("#myBtn").click(function () {
    $("html ,body").animate({ scrollTop: 0 }, 800);
  });
});

function validate() {
  console.log("yes");
  location.assign("adminValidation.php");
}

