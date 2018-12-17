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
      <h1>Football News</h1>
      <hr>
      <?php

        $url = "https://newsapi.org/v2/top-headlines?country=gb&category=sports&sortBy=popularity&apiKey=00a67e139c1e4a1183fcdde32fb6006b";

        $result = System::getNews($url);

        $articleNum = $result->totalResults;

        $articles = $result->articles;

        foreach($articles as $article) {

          $headline = $article->title;
          $description = $article->description;
          $publishDate = date("d/m/Y", strtotime($article->publishedAt));
          $link = $article->url;
          $image = $article->urlToImage;
          $author = $article->author;

          ?>
          <div class="row">

            <div class="col-sm-3">
              <img src="<?=$image?>" style="height:160px; width:200px;" />
            </div>

            <div class="col-sm-9">
              <h4><?=$headline?></h4>
              <p><?=$description?></p>

              <div class="col-sm-offset-8 col-sm-4">
                <p>Published at: <?=$publishDate?> by <?=$author?></p>
              </div>
            </div>

            <div class="col-sm-12">
              <hr>
            </div>  

          </div>
          <?php

        }
      ?>
    </div>
  </body>
</html>
