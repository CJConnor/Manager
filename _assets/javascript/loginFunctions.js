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

function confirmPassword(password, password1) {

  if(password != password1) {
    //Display Error Message
  } else {
   //Show a tick?
  }

}

function validateForm(username, password, forename, surname, email, age, dob, team) {
  //Validate Form


}

function submitRegisterForm() {

  let username = $("#username").val();
  let password = $("#password").val();
  let forename = $("#forename").val();
  let surname  = $("#password").val();
  let email    = $("#username").val();
  let age      = $("#password").val();
  let dob      = $("#username").val();
  let team     = $("#team").val();

  validateForm(username, password, forename, surname, email, age, dob, team);

  $.post("actions/register.php",
    {
      'username': username,
      'password': password,
      'forename': forename,
      'surname': surname,
      'email': email,
      'age': age,
      'dob': dob,
      'team': team
    },
    function(data, status){
      if(data == 'success') {

        //setTimeout(function() {window.location.href = "index.php" }, 2000);

      }else {
        
        errorMessage.style.display = "block";

      }
  });


}
