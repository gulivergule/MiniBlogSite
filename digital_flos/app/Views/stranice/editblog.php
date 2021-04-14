<div class = container>
<br>
<div class = "card" style = "margin-bottom: 100px;">
<div class = "card-header">
  <h3>Edit Blog</h3>
</div>
<div class = "card-body">
<form name="addblogform" action="<?= site_url("User/editBlog/{$blog->id}") ?>" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="title3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-5">
      <input type="text" required class="form-control" id="title3" name="title" value="<?= $blog->title ?>">
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['title'])) 
                echo $errors['title'];
            ?></font>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-sm-2 col-form-label">Content</label>
    <div class="col-sm-5">
      <textarea class="form-control" required id="text3" name="content" rows="5" ><?= $blog->content ?></textarea>
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['content'])) 
                echo $errors['content'];
            ?></font>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 col-form-label" for="exampleFormControlFile1">Only Image</label>
    <div class="col-sm-5">
      <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file" name="image" id="exampleFormControlFile1">
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['image'])) 
                echo $errors['image'];
            ?></font>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="Save">Save</button>
    </div>
  </div>
</form>
</div>
</div>
</div>