<br>
<div class = "container">
<h3>All Users</h3>
<table class = "table" style = "margin-bottom: 100px;">
<thead class = "thead-light">
    <tr><th scope = "col">First Name</th><th scope = "col">Last Name</th><th scope = "col">Email</th><th scope = "col">Password</th> 
</thead>
<?php
foreach ($authors as $author) {
    echo "<tr><td>{$author->firstName}</td><td>{$author->lastName}</td><td>{$author->email}</td><td>{$author->password}</td></tr>";
}
?>
</table>
</div>