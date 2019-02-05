$(document).ready(function() {

  $("#response").hide();

  $("#bookform").on("submit", function(e) {
    e.preventDefault();

    $.ajax({
      url: "enter.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
        $("#books").hide();
        $("#response").show();
      },

      error: function(xhr, status, err) {
        alert("Error! Message from server: " + xhr.status + " " + err);
      }
    }); // close ajax
  }); // close on submit
}); // close document ready
