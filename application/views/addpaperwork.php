<div class="col-md-5">
<?php if(isset($_SESSION['success'])) { ?>
      <div id="success"> <?php echo $_SESSION['success']; echo "<script>setTimeout(function(){ $('#success').html(''); }, 3000);</script>";?></div>
    <?php }  ?>   
</div>
<section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"> DOCUMENTATION FORM</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <div class="col-md-6">
      <div class="form-group">
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'user/addpaperwork';?>" class="mb-5">  
   
        <label>Name Of Candidate :</label>
        <input type="text" name="name_of_candidate" size="50" value="<?php echo set_value('name_of_candidate');?>" class="form-control">
        <span style="color:red" class="danger" ><?php echo form_error('name_of_candidate'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>E-mail Address :</label>
        <input type="email"  name="email"  size="50" value="<?php echo set_value('email');?>" class="form-control">  
        <span style="color:red;" class="danger" ><?php echo form_error('email'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Contact Number :</label>
        <input type="tel" name="phone"  size="50" value="<?php echo set_value('phone');?>" class="form-control" maxlength="10">
        <span style="color:red" class="danger" ><?php echo form_error('phone'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Employer Company Name:</label>
        <input type="text" name="employer_company_name" size="50" value="<?php echo set_value('employer_company_name');?>" class="form-control">
        <span style="color:red" class="danger" ><?php echo form_error('employer_company_name'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Employee Website :</label>
        <input type="url" name="employer_website"  size="50" value="<?php echo set_value('employer_website');?>" class="form-control">
        <span style="color:red" class="danger" ><?php echo form_error('employer_website'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Submitted By (Recruiter's Name) :</label>
        <input type="text" name="sub_by_rec_name" size="50" value="<?php echo set_value('sub_by_rec_name');?>" class="form-control">
        <span style="color:red" class="danger" ><?php echo form_error('sub_by_rec_name'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Manager Name :</label>
        <input type="text" name="manager_name" size="50" value="<?php echo set_value('manager_name');?>" class="form-control">
        <span style="color:red" class="danger"><?php echo form_error('manager_name'); ?> </span>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label> Upload Multi Files :</label><br>
        <input type="file" name="upload_files[]" multiple="multiple">
        <span style="color:red" class="danger"> <?php echo form_error('upload_files[]'); ?></span>
      </div>
      </div> 
      <br>
      <input type="submit"  style="font-size:15px;" class="btn btn-primary btn-lg"  name="create" value="Submit">
      <a style="font-size:15px;" href="<?php echo base_url().'user/dashboard';?>" class="btn btn-secondary btn-lg">Cancel</a>
    </form>
  </div>
</div>


