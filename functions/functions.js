function submitLoginForm() {

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  $.ajax({
    type: "POST",
    url: "actions/login.php",
    data: {
      "username": username,
      "password": password
    },
    dataType: "json",
    success: fucntion(data){

    },
    error: function() {

    }
  });
}
