//Script to trigger tooltip
$(document).ready(function () {
   $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
   $("button.updateemail").click(function () {
      $(".display").load("updateemail.php");
   });
});

$(document).ready(function () {
    $("button.updatepassword").click(function () {
        $(".display").load("updatepassword.php");
    });
});