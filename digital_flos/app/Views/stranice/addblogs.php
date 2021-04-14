<?php
    /*if(!empty($errors)) echo "<span style='color:red'>$errors</span>";

    echo form_open("Korisnik/novaVest","method=post");    
    echo "<br/>Naslov:<br/>";
    echo form_input("naslov",set_value("naslov")); 
    echo "<br>Sadrzaj:<br/>";
    echo form_textarea("sadrzaj",set_value("sadrzaj")); 
    echo "<br/><br/>";
    echo form_submit("dodaj", "Dodaj");
    echo form_close();*/
?>

<div class = container>
<br>
<div class = "card" style = "margin-bottom: 100px;">
<div class = "card-header">
  <h3>Add Blog</h3>
</div>
<div class = "card-body">
<form name="addblogform" action="<?= site_url("User/newBlog") ?>" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="title3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="title3" required name="title" value="<?= set_value('title') ?>">
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
      <textarea class="form-control" id="text3" required name="content" rows="5" ><?= set_value('content') ?></textarea>
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
      <input type="file" accept="image/x-png,image/gif,image/jpeg" class="form-control-file" name="image" required id="exampleFormControlFile1">
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
      <button type="submit" class="btn btn-primary" value="Add Blog">Add Blog</button>
    </div>
  </div>
</form>

</div>
</div>
</div>