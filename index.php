<!DOCTYPE html>
<html>
  <head>
    <?php
      include"fragment/head.php";
    ?>
  </head>
  <body>
    <?php include"fragment/nav.php"; ?>
    <div class="container">
      <?php include"fragment/modals/login.php" ?>
    </div>
    <script>
      $(document).ready(function(){
        $('#myModal').modal('show');
      });

      $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
      })
    </script>
  </body>
</html>
