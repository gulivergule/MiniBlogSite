<br>
<div class = "container">
<h3>My Blogs</h3>
<table class = "table" style = "margin-bottom: 100px;">
<thead class = "thead-light">
    <tr><th scope = "col">Title</th><th scope = "col">Options</th><th>State</th> 
</thead>
<?php
foreach ($blogs as $blog) {
    echo "<tr><td>{$blog->title}</td>";
    echo "<td><a class='btn btn-info' style = 'margin-bottom: 5px;' href='/{$controller}/blog/{$blog->id}'>Read </a>";
    echo " <a class='btn btn-warning' style = 'margin-bottom: 5px;' href='/{$controller}/edit/{$blog->id}'>Edit </a>";
    echo " <a class='btn btn-danger' style = 'margin-bottom: 5px;' href='/{$controller}/delete/{$blog->id}'>Delete </a></td>";
    if($blog->state == "accepted")
        echo '<td style="color:green"><b>accepted<b></td></tr>';
    else
        echo '<td style="color:gray"><b>on hold<b></td></tr>';
    //echo "<td>".anchor("$controller/blog/{$blog->id}", "Read")." ".anchor("$controller/edit/{$blog->id}", "Edit")." ".anchor("$controller/delete/{$blog->id}", "Delete")."</td></tr>";
}
?>
</table>
</div>