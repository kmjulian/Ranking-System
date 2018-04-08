<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Student Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="#">View Informations</a></li>
        <li class="active">View Student Profile</li>
      </ol>
    </section>
		<section class="content">
		      <div class="row">
		        <div class="col-xs-12"> 
				  <div class="box">
		            <!-- /.box-header -->
		            <div class="box-body">
		              <table id="example1" class="table table-bordered table-striped">
		              <thead>
		                    <tr>
		                      <th>Student ID</th>
		                      <th>Student Name</th>
		                      <th>Section ID</th>
		                      <th>Contact Number</th>
		                      <th>Address</th>
		                    </tr>
                 	  </thead>
		              <tbody> 
		            <?php foreach($list as $row): ?>
		                <tr>
		                  <td><?= $row['student_id']?></td>
		                  <td><?= $row['student_fname']," ",$row['student_mname']," ",$row['student_lname']?></td>
		                  <td><?= $row['section_id']?></td>
		                  <td><?= $row['student_contact']?></td>
		                  <td><?= $row['student_address']?></td>
		                </tr>
		             <?php endforeach; ?>
		              </tbody>
	                  </table>
	           	 </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>