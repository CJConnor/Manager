/**
 * Submit Login Form
 */
function submitLoginForm() {

  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  $.post("actions/login/login.php",
    {
      'username': username,
      'password': password
    },
    function(data, status){
      if(data == 'success') {

        //Hide Login Modal
        $('#log_p1').fadeOut();

        //Fire sweetalert
        Swal.fire({
          type: 'success',
          title: 'Login Successful!!'
        });

        //Redirect...
        setTimeout(function() {window.location.href = "gameDashboard.php" }, 2000);

      }else {
        
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: data
        });

      }
  });
}

/**
 * Confirms Password
 */
function confirmPassword() {

  let origPassword = $('#password');
  let conPassword  = $('#conPass');
  let errorSlot    = $('#error');

  if(origPassword.val() != conPassword.val()) {
      Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Passwords Do Not Match!'
      });
      return "N";
  }

}

/**
 * Checks for duplicates
 */
function checkUsername() {

    let username = $('#username').val();

    $.get(`actions/login/checkUserName.php?u=${username}`, function(data) {

        if (data != "") {

            if (data == "fail") {

                swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Sorry, it appears the username has already been taken'
                });

                return "N";

            }

        } else {
            return "N";
        }

    });

}

/**
 * Checks for an existing email
 */
function checkEmail() {

    let email = $('#email').val();

    $.get(`actions/login/checkUserName.php?u=${email}`, function(data) {

        if (data != "") {

            if (data == "fail") {

                swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Sorry, it appears that email is already in use'
                });

                return "N";

            }

        } else {
            return "N";
        }

    });

}

/**
 * Submit function
 * @param {Element} e 
 */

function submit(e) {

  let form   = "";
  let formId = "";

  for (let i = 0; i < 4; i++) {

      form   = document.getElementsByTagName("form")[i];
      formId = form.id;

      if (formId != "")
          break;

  }
  
  if (formId != "") {

      let elements = form.elements;

      for (let i = 0, element; element = elements[i++];) {

          let elementId  = element.id;
          let elementVal = element.value;

          if (element.value === "" && formId != "4") {
              Swal.fire({
                  type: 'error',
                  title: 'Oops...',
                  text: `${elementId} is empty`
              });
              return false;
          }

          if(formId == "1") {
              if (confirmPassword() == "N" || checkUsername() == "N") {
                  return false;
              }
          }

          if(formId == "2") {
              if(checkEmail() == "N") {
                  return false;
              }
          }

          if (elementId == "username")
              $('#uname').val(elementVal);
          else if (elementId == "password")
              $('#pwd').val(elementVal);
          else if (elementId == "email")
              $('#em').val(elementVal);
          else if (elementId == "team")
              $('#tm').val(elementVal);
          else if (elementId == "forename")
              $('#fname').val(elementVal);
          else if (elementId == "surname")
              $('#sname').val(elementVal);
          else if (elementId == "dob")
              $('#db').val(elementVal);
          else if (elementId == "age")
              $('#ag').val(elementVal);
          else if (elementId == "mname")
              $('#manager').val(elementVal);
          else if (elementId == "attr")
              $('#manAttr').val(elementVal);
      }

  }

  if(formId == "4") {

      let username = $('#uname').val();
      let password = $('#pwd').val();
      let forename = $('#fname').val();
      let surname  = $('#sname').val();
      let age      = $('#ag').val();
      let dob      = $('#db').val();
      let email    = $('#em').val();
      let team     = $('#tm').val();
      let manager  = $('#manager').val();
      let manAttr  = $('#manAttr').val();

      $.post("actions/login/register.php", {
          "username": username,
          "password": password,
          "forename": forename,
          "surname": surname,
          "age": age,
          "dob": dob,
          "email": email,
          "favTeam": team,
          "name": manager,
          "managerAttribute": manAttr
          },
          function(data){
              if (data == "success") {
                  Swal.fire({
                      type: 'success',
                      title: 'You Have Been Registered!!',
                      showConfirmButton: false,
                      timer: 1500
                  }).then(() => {
                      window.location.href = "gameDashboard.php";
                  })
              }
          }
      );

  }

  let modal   = e.closest("modal");
  let modalId = modal.id;
  let idNum   = modalId.substring(5, 6);
  let newNum  = parseInt(idNum) + 1;
  let newId   = `#reg_p${newNum}`;

  $(`#reg_p${idNum}`).modal("hide");
  $(`#reg_p${newNum}`).modal({backdrop: 'static', keyboard: false});

  form.id = "";

}

/**
 * Sets Attribute
 * @param {Chosen Attribute} value 
 */
function setBtn(value) {
  $('#attr').val(value); 
}
