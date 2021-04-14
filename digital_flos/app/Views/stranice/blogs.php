<br>
<div class = "container">
<h3>All Blogs</h3>
<hr>

<?php $r = 0; $elm = 3; foreach($blogs as $blog) { 
    if($r % $elm == 0) echo '<div class = "row">';?>
    <div class = "col-sm-4 col-md-4" style = "margin-bottom: 25px;">
    <div class="card" >
        <?php echo "<img class='card-img-top' src='uploads/{$blog->image}' height='' width='' alt='Image'>" ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $blog->title?></h5>
            <p class="card-text">Author: <?php echo $blog->authorName?></p>
            <?php echo "<a class='btn btn-info' href='/{$controller}/blog/{$blog->id}'>Read more..</a>";?>
        </div>
    </div>
    </div>
<?php  $r = $r + 1; if($r % $elm == 0) echo '</div>';} 
if($r % $elm != 0) echo '</div>'?>
</div>
<br><br><br><br>