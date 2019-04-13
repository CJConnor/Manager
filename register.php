<?php include("fragment/head.php"); ?>

    <body style="background-color: #eee;">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Registration Form Template</h1> 
                <p>(Logo or multi-media should go here...)</p> 
            </div>
        </div>

        <div class="container">
            
            <?php include("fragment/login/register_p1.php"); ?>

            <?php include("fragment/login/register_p2.php"); ?>

            <?php include("fragment/login/register_p3.php"); ?>

            <?php include("fragment/login/register_p4.php"); ?>

            <?php include("fragment/login/form.html"); ?>
            
            <button id="hi">Click Here</button>

        </div>

    </body>

    <script>
        $(document).ready(function(){
            $("#reg_p1").modal({backdrop: 'static', keyboard: false});

            $("#hi").click(function(){
                $("#reg_p4").modal();
            });
        });

        function confirmPassword() {

            let origPassword = $('#password').val();
            let conPassword = $('#conPass').val();

            if(origPassword != conPassword) {
                alert("passwords not the same");
            }

        }

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

                    let elementId = element.id;
                    let elementVal = element.value;

                    if (element.value === "" && formId != "4") {
                        alert(`${elementId} is empty`);
                        return false;
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
                    else if (elementId == "ag")
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
                let surename = $('#sname').val();
                let age      = $('#ag').val();
                let dob      = $('#db').val();
                let email    = $('#em').val();
                let team     = $('#tm').val();
                let manager  = $('#manager').val();
                let manAttr  = $('#manAttr').val();

                $.post("actions/login/register.php", {
                    username: "username",
                    password: "password",
                    forename: "forename",
                    surename: "surname",
                    age: "age",
                    dob: "dob",
                    email: "email",
                    team: "team",
                    manager: "manager",
                    manAttr: "manAttr"
                    },
                    function(data){
                        alert(data);
                });

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

        function setBtn(value) {
            $('#attr').val(value); 
            submit(this);
        }
    </script>

</html>