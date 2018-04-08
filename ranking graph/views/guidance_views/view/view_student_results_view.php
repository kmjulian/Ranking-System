<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View Student Result
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
		                      <th>Student Name</th>
		                      <th>Exam ID</th>
		                      <th>Score</th>
		                      <th>Total Score</th>
		                      <th>Grade</th>
		                    </tr>
                 	  </thead>
		              <tbody>
		              	<?php foreach($result as $row) { ?> 
		           			<tr>
		           				<td><?=$row['student_id']?></td>
		           				<td><?=$row['userid']?></td>
		           				<td><?=$row['rawgrade']?></td>
		           				<td></td>
		           				<td></td>
		           			</tr>
		           		<?php } ?>
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