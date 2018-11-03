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

    </div>
    <script>
    var url = 'https://newsapi.org/v2/top-headlines?sources=bbc-sport&' +
        'sortBy=popularity&' +
        'apiKey=00a67e139c1e4a1183fcdde32fb6006b';
    var req = new Request(url);
    fetch(req)
    .then(function(response) {
      var obj = response.json();
        console.log(obj);
    });
    </script>
  </body>
</html>
