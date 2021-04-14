
<div class = container>
<br>
<div class = "card">
<div class = "card-header">
  <h3>Login</h3>
</div>
<div class = "card-body">
<?php if(isset($message)) echo "<font color='red'>$message</font><br>"; 
  else echo"<br>"?>
<form name="loginform" action="<?= site_url("Guest/loginSubmit") ?>" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" required id="inputEmail3" name="email" value="<?= set_value('email') ?>">
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['email'])) 
                echo $errors['email'];
            ?></font>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="password" required class="form-control" id="inputPassword3" name="password" placeholder="Password">
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['password'])) 
                echo $errors['password'];
            ?></font>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" value="Log in">Log in</button>
    </div>
  </div>
</form>
</div>
</div>
</div>