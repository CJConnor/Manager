<style>
  body {
    background-image: radial-gradient(circle, white, black);
  }
</style>
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
