<?php require_once('includes/header.php'); ?>

<?php require_once('includes/sidebar.php'); ?>
<title>Dashboard | Project</title>
<div class="col-md-5">
<?php if(isset($_SESSION['msg'])) { ?>
      <div id="msg"> <?php echo $_SESSION['msg']; echo "<script>setTimeout(function(){ $('#msg').html(''); }, 3000);</script>";?></div>
    <?php }  ?>   
</div>
    <div class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $this->db->count_all_results('contracts'); ?></h3>
                <p>Contracts</p>
              </div>
              <div class="icon">
              <i class="fas fa-file-contract"></i>
              </div>
              <a href="addContracts" class="small-box-footer"> Add More Contracts <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $this->db->count_all_results('paper_work'); ?></h3>
                <p>Documents</p>
              </div>
              <div class="icon">
              <i class="fa fa-files-o"></i>
              </div>
              <a href="addpaperwork" class="small-box-footer">Add More Documents <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
            </div>
          </div>
          <!-- ./col -->
    </section>
    <section class="content">
        <?php if(isset($_SESSION['success'])) { ?>
        <div id="success" class="alert alert-success h3"> <?php echo $_SESSION['success']; echo "<script>setTimeout(function(){ $('#success').html(''); }, 3000);</script>"; ?></div>
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
                        <th>No.</th>
                        <th>Name Of Company</th>
                        <!-- <th>Employer Email</th> -->
                        <th>Company Website</th>
                        <th>Employer Phone</th>
                        <th>Submitted By</th>
                        <!-- <th>Submitted For Company</th> -->
                        <!-- <th>Uploaded File</th> -->
                        <th>Blacklisted</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i=1;
                        if(!empty($data)){ foreach($data as $user) { 
                        $mfile = $user['media_files'];
                        echo "<tr>";
                        echo "<td>".$i."</td>";
                        echo "<td>".$user['name_of_company']."</td>";
                        // echo "<td>".$user['employer_email']."</td>"; 
                        echo "<td><span style='color:dodgerblue' type=button onClick='parent.open'>".$user['company_website']."</span></td>";
                        echo "<td>".$user['employer_phn']."</td>";
                        echo "<td>".$user['sub_by']."</td>";
                        // echo "<td>".$user['sub_for_company']."</td>";
                        // echo "<td>".substr($mfile,strrpos($mfile,'/',0)+1)."</td>";
                        echo "<td>".$user['blacklisted']."</td>";
                        $i++;
                      ?>
                              <td>
                              <a href="<?php echo base_url().'user/editContract?v='.$user['id']?>" class="btn btn-sm btn-primary fa fa-pencil"></a>
                                  <button onclick="deleteContractor(<?= $user['id']?>);" class="form btn btn-sm btn-danger fa fa-trash"> </button>
                              </td>
                          </tr>
                          <?php } } else { ?>
                          <tr>
                              <td colspan="15"><br><h1><b>No Contracts To Display :(</b></h1></td>
                          </tr>
                          <?php } ?>
                    </tbody>
                  </table>
                  </div>
          </div>
      </div>
    </section>
</div>  