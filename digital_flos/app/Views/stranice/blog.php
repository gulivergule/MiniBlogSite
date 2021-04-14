<br>
<div class = "container" style = "margin-bottom: 25px;">
<div class="jumbotron" style = "margin-bottom: 100px;">
  <h1 class="display-4"><?php echo $blog->title;?></h1>
  <p class="lead"><?php echo "Author: {$blog->authorName}";?></p>
  <hr class="my-4">
  <?php echo "<img class='img-fluid img-thumbnail' src='../../uploads/{$blog->image}' height='' width='' alt='Image'>" ?>
  <hr class="my-4">
  <p><?php echo $blog->content;?></p>
</div>
</div>

