<br>
<div class = "container">
<h3>Blogs on hold</h3>
<table class = "table" style = "margin-bottom: 100px;">
<thead class = "thead-light">
    <tr><th scope = "col">Title</th><th scope = "col">Author</th><th scope = "col">Options</th> 
</thead>
<?php
foreach ($blogs as $blog) {
    echo "<tr><td>{$blog->title}</td><td>{$blog->authorName}</td>";
    echo "<td><a class='btn btn-info' style = 'margin-bottom: 5px;' href='/{$controller}/blog/{$blog->id}'>Read </a>";
    echo " <a class='btn btn-success' style = 'margin-bottom: 5px;' href='/{$controller}/accept/{$blog->id}'>Accept </a>";
    echo " <a class='btn btn-danger' style = 'margin-bottom: 5px;' href='/{$controller}/delete/{$blog->id}'>Delete </a></td></tr>";
}
?>
</table>
</div>