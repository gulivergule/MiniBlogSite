<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Mini Blog</title>
    </head>
    <body>
        <center>
        <div class = container>
            User: <b><?php  echo $author->firstName." ".$author->lastName." "; ?></b>
        </div>
        </center>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="/User">Home</a>
            <a class="nav-item nav-link" href="/User/myBlogs">My blogs</a>
            <a class="nav-item nav-link" href="/User/addBlog">Add blog</a>
            <a class="nav-item nav-link" href="/User/logout">Log out</a>
            </div>
        </div>
        </nav>
        