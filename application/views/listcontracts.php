<!--  -->

<section class="content">
	<div class="container-fluid">
        <?php if(isset($_SESSION['success'])) { ?>
        <div id="success"> <?php echo $_SESSION['success']; echo "<script>setTimeout(function(){ $('#success').html(''); }, 3000);</script>";?></div>
        <?php }  ?>
      </div>
        <div class="container-fluid">
          <div class="row">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List of Contracts </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
				<div  id="conlist"></div>
                  <table class="table table-bordered table-striped" id="contract">
                      <thead class="border">
					  <tr>
								<th>Sr.NO</th>
								<th>User Email</th>
								<th>Name Of Company</th>
								<th>Employer Email</th>
								<th>Company Website</th>
								<th>Employer Phone</th>
								<th>Submitted By</th>
								<th>Submitted For Company</th>
								<th>Upload File</th>
								<th>Blacklisted</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 0;
								foreach($contractor as $data){
                            	$files = $data['media_files']; 
                            	$i++;
                            ?>
							<tr>
								<td><?= $i;?></td>
								<td><?= $data['user_email_id'];?></td>
								<td><?= $data['name_of_company'];?></td>
								<td><?= $data['employer_email'];?></td>
								<td><?= $data['company_website'];?></td>
								<td><?= $data['employer_phn'];?></td>
								<td><?= $data['sub_by'];?></td>
								<td><?= $data['sub_for_company'];?></td>
								<td><a href ="<?= base_url().$files;?>" target="_blank"><?= substr($files,strrpos($files,'/',0)+1);?></td>
								<td>blacklisted_<?= $data['blacklisted'];?></td>
								<td>
									<a href="<?php echo base_url().'user/editContract?v='.$data['id'];?>" class="btn btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
									<button onclick="deleteContractor(<?= $data['id']?>);" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


