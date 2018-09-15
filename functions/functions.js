function submitLoginForm() {

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  $.post("actions/login.php",
     {
         'username': username,
         'password': password
     },
     function(data, status){
         if(data == 'success' && status == 'success') {
           $('#myModal').modal('hide');
         }else {
           $('#errorMessage').show();
         }
     });
}
