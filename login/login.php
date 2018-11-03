<!DOCTYPE html>
<html>
  <head>
    <?php
      include"fragment/head.php";
    ?>
  </head>
  <body>
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
