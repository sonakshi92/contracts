
<section class="content">
<div class="container-fluid">
  <!-- SELECT2 EXAMPLE -->
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title"> Edit Contract Form</h3>
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
    <form method="post" enctype="multipart/form-data" action="<?php echo site_url().'user/update';?>" >      
      <div class="form-group">
        <label>Name Of Company :</label><br>
        <input type="text" name="name_of_company" size="50" value="<?php echo $user['name_of_company'];?>" class="form-control">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>"> 
  </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Employer Email :</label><br>
        <input type="email"  name="employer_email" size="50" value="<?php echo $user['employer_email'];?>" class="form-control">   <?php echo form_error('employer_email');?>
  </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Company Website :</label><br>
        <input type="url" name="company_website" size="50" value="<?php echo $user['company_website'];?>" class="form-control">
        <?php echo form_error('company_website');?>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Employer Phone :</label><br>
        <input type="tel" name="employer_phn" size="50" value="<?php echo $user['employer_phn'];?>" class="form-control" maxlength="10">
        <?php echo form_error('employer_phn');?>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Submitted By :</label><br>
        <input type="text" name="sub_by" size="50" value="<?php echo $user['sub_by'];?>" class="form-control">
        <?php echo form_error('sub_by');?>
      </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
         <label>Submitted For Company :</label><br>
      <input style="font-size:15px;" type="radio" name="sub_for_company"  value="CAT SOFTWARE"<?php echo set_radio('sub_for_company','CAT SOFTWARE', TRUE) ?>>
      <label>CAT SOFTWARE</label><span style="width:20px;display:inline-block"></span>
      <?php echo form_error('sub_for_company');?>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Upload File :</label><br>          
        <input type="file" name="upload_file" size="50">  
        <embed src="<?php echo base_url().$user['media_files'];?>" style="width:100px;height:100px;margin-top:3px;">
        <input type="hidden" name="old_img_file" value="<?= $user['media_files'];?>">
        <?php  if($this->session->flashdata('error')){echo $this->session->flashdata('error');}?>
  </div>
      </div>       
      <label>Blacklisted :</label>
      <span style="width:10px;display:inline-block"></span>
      <input type="checkbox" name="blacklisted"  value="YES" <?php echo set_checkbox('blacklisted','YES') ?> />
      <label>Yes</label> <span style="width:20px;display:inline-block"></span>
      <input type="checkbox" name="blacklisted"  value="NO" <?php echo set_checkbox('blacklisted','NO',true) ?>/>
      <label>No</label> <?php echo form_error('blacklisted');?><br>
      </div>
      </div> 
      <div class="col-md-6">
      <div class="form-group"><button type="submit" style="font-size:15px;" class="btn btn-primary btn-lg">Update</button>
      <a style="font-size:15px;" href="<?php echo base_url().'user/listContracts';?>" class="btn btn-secondary btn-lg">Cancel</a>
    </form>
  </div>
</div>

