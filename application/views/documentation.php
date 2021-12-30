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
                  <h3 class="card-title">List of Documents </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="table-responsive">
				<div  id="doclist"></div>
                <table id="doc" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name Of Candidate</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Employer Company Name</th>
                            <th>Employer Website</th>
                            <th>Action</th>
                            <th>Submitted By</th>
                            <th>Manager Name</th>
                            <th>Upload File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=0;
                            foreach($paperwork as $data){
                                $id = $data['id'];
                                $i++;
                        ?>
                        <tr>
                            <td><?= $i;?></td>
                            <td><?php echo $data['name_of_candidate'];?></td>
                            <td><?php echo $data['email'];?></td>
                            <td><?php echo $data['phone'];?></td>
                            <td><?php echo $data['employer_company_name'];?></td>
                            <td> <span style="color:dodgerblue" type=button onClick="parent.open" ><?php echo $data['employer_website'];?></span></td>
                            <td>
                              <a href="<?php echo base_url().'user/editdoc?x='.$data['id']?>" class="btn  btn-sm btn-warning"style="font-size:15px;"><i class="fa fa-edit"></i></a>
                              <button onclick="deletePaperDoc(<?php echo $id;?>)" class="btn btn-sm btn-danger" style="font-size:15px;"><i class="fa fa-trash"></i></button>
                            </td>
                            <td><?php echo $data['sub_by_rec_name'];?></td>
                            <td><?php echo $data['manager_name'];?></td>
                            <td>
                                <table>
                                    <tbody>
                                <?php 
                                    foreach ($paperworkdoc as $key => $docval) {
                                        if($id===$docval['paper_work_id']){
                                            $link = base_url().$docval['media_files'];
                                           echo '<tr><td><a href="'.$link.'" target="_blank"><embed style="width:200px;height:100px;" src="'.$link.'" ></a></td></tr>' ;
                                        }
                                    }
                                ?>
                                    </tbody>
                                 </table>   
                            </td>
                           
                        </tr>
                        <?php
                            }
                        ?>  
                    </tbody>        
                </table>
            </div>
        </div>
    </div>
</div>  