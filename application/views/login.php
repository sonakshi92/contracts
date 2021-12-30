
<div class=" login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>LOGIN</b></a>
     <div id="infomsg"><?php if(isset($_SESSION['msg'])) { echo $_SESSION['msg']; echo "<script>setTimeout(function(){ $('#infomsg').html(''); }, 3000);</script>";} ?></div>
        <form action="<?php echo site_url()?>" method="POST"> 
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start </p><br>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?= set_value('email');?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <span style="color:red" class="danger" ><?php echo form_error('email'); ?> </span>
          <br>

          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?= set_value('password');?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            <span style="color:red"><?php echo form_error('password'); ?> 
            </span>
            <!-- /.col -->
            <div class="col-8">
              <br>
              <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </form>

        </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
   <!-- /.login-box -->
  </div>