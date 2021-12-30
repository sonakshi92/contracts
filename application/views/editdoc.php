<section class="content">
<div class="container-fluid">

  <!-- SELECT2 EXAMPLE -->
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title"> Edit Documentation Form</h3>
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
    <form method="post" enctype="multipart/form-data" action="<?php echo site_url().'user/updatedoc';?>" >
    <div class="form-group">
        <label>Name Of Candidate :</label><br>
        <input type="text" name="name_of_candidate" size="50" value="<?php echo $paperwork[0]['name_of_candidate'];?>" class="form-control">
        <input type="hidden" name="id" value="<?php echo $paperwork[0]['id']; ?>"  id="id"> 
       </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label> E-mail Address :</label><br>
        <input type="email"  name="email" size="50" value="<?php echo $paperwork[0]['email'];?>" class="form-control">
        <?php echo form_error('email');?>
       </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Contact No :</label><br>
        <input type="tel" name="phone" size="50" value="<?php echo $paperwork[0]['phone'];?>" class="form-control">
        <?php echo form_error('phone');?>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Employee company name :</label><br>
        <input type="text" name="employer_company_name" size="50" value="<?php echo $paperwork[0]['employer_company_name'];?>" class="form-control">
        <?php echo form_error('employer_company_name');?>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Employer Website :</label><br>
        <input type="url" name="employer_website" size="50" value="<?php echo $paperwork[0]['employer_website'];?>" class="form-control">
        <?php echo form_error('employer_website');?>
      </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Submitted By [Recruiter's Name]:</label><br>
        <input type="text" name="sub_by_rec_name" size="50" value="<?php echo $paperwork[0]['sub_by_rec_name'];?>" class="form-control">
        <?php echo form_error('sub_by_rec_name');?>
        </div>
      </div>
      <div class="col-md-6">
      <div class="form-group">
        <label>Manager's Name :</label><br>
        <input type="text" name="manager_name" size="50" value="<?php echo $paperwork[0]['manager_name'];?>" class="form-control">
        <?php echo form_error('manager_name');?>
        </div>
      </div>
      <div class="col-md-12">
      <div class="form-group" id="reload">
        <label>Upload Multi Files :</label><br>          
        <input type="file" name="upload_files[]" multiple="multiple">
        <?php        
        foreach($paperworkdoc as $key=>$docval){
          $imgval = $docval['user_paperwork_document'];
        echo  '<div class="card" id="del-'.$imgval.'"  style="height:100px;width:100px;float:left;margin-top:5px;margin-left:8px;border:0px !important"><span aria-hidden="true" style="position: absolute;color:red;cursor: pointer;" title="delete" onclick="deleteImg('."'".$docval['id']."'".')"><i class="fa fa-times"></i></span><br>';
        echo '<embed class="card-img-top" src="'.base_url().$imgval.'" style="width:60px;height:60px;"></div>';

        }
        echo '<div style="clear:both;"></div>';
        ?> 
        <?php //echo $data['upload_files'];?>
        <?php echo form_error('upload_files');?>
        </div>
      </div>
      <div class="col-md-6">
      <button type="submit" style="font-size:15px;" class="btn btn-primary btn-lg"  name="create">Update</button>
      <a style="font-size:15px;" href="<?php echo base_url().'user/dashboard';?>" class="btn btn-secondary btn-lg">Cancel</a>
    </form>
  </div>
</div>


<script>
function deleteImg(docid){
  var id = $("#id").val();
  if(confirm('Do You want to delete this document?')){
    $.ajax({
      url:"<?= site_url('User/deletepaperworkdoc');?>",
      type:"POST",
      data:{id:id,docid:docid},
      success:function(response){
      // alert(response);
      $('#reload').load(document.URL +  ' #reload')
       // location.reload();
    }
    })
  }
  
}
</script>

