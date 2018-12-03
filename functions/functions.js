function submitLoginForm() {

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  let errorMessage = document.getElementById("errorMessage");

  $.post("actions/login.php",
    {
      'username': username,
      'password': password
    },
    function(data, status){
      if(data == 'success') {

        //setTimeout(function() {window.location.href = "index.php" }, 2000);

      }else {
        
        errorMessage.style.display = "block";

      }
  });
}
