<!DOCTYPE html>
<html>
  <head>
    <?php
      include"fragment/head.php";
    ?>
  </head>
  <body>
    <?php include"fragment/nav.php"; ?>
    <div id="cont" class="container">

    </div>
    <script>
    var url = 'https://newsapi.org/v2/top-headlines?sources=bbc-sport&' +
        'sortBy=popularity&' +
        'apiKey=00a67e139c1e4a1183fcdde32fb6006b';
    var req = new Request(url);
    fetch(req)
    .then(function(response) {
      var obj = JSON.parse(response);
      alert(obj);

      for (var i = 0; i <= obj.totalResults; i++) {
        var article = obj.articles[i];
        document.getElementById("cont").innerHTML = "
        <div>
          <h2>" + article.title + "</h2>
          <h3>" + article.author + "</h3>
          <h4>Published on " + article.publishedAt + "</h4>
          <h4>Link to article: " + article.url + "</h4>
          <img src='" + article.urlToImage + "' alt='article photograph'  />
          <p>
          " + article.content + "
          </p>
        </div>";
      }
    });
    </script>
  </body>
</html>
