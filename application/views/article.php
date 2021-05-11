<div class="container text-center">
<?php if(isset($article) && $article!=""){
echo   "<h3>".$url."</h3><hr>"; 
echo "<p>".$article[0]->article_html."</p>";
}
?></div>