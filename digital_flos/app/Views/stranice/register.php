<div class = container>
<br>
<div class = "card" style = "margin-bottom: 100px;">
<div class = "card-header">
  <h3>Register</h3>
</div>
<div class = "card-body">
<?php if(isset($message)) echo "<font color='red'>$message</font><br>"; 
        else echo "<br>"?>
<form name="registerform" action="<?= site_url("Guest/registerSubmit") ?>" method="post">
  <div class="form-group row">
    <label for="firstName3" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-5">
      <input type="text" required class="form-control" id="firstName3" name="firstName" value="<?= set_value('firstName') ?>">
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['firstName'])) 
                echo $errors['firstName'];
            ?></font>
    </div>
  </div>
  <div class="form-group row">
    <label for="lastName3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-5">
      <input type="text" required class="form-control" id="lastName3" name="lastName" value="<?= set_value('lastName') ?>">
    </div>
    <div class="col-sm-5">
      <font color='red'>
            <?php if(!empty($errors['lastName'])) 
                echo $errors['lastName'];
            ?></font>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-5">
      <input type="email" required class="form-control" id="inputEmail3" name="email" value="<?= set_value('email') ?>">
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
      <button type="submit" class="btn btn-primary" value="Register">Register</button>
    </div>
  </div>
</form>
</div>
</div>
</div>