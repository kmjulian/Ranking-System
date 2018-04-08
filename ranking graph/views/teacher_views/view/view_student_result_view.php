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
		           				<td><?=$row['student_fname'] . ' ' . $row['student_lname']?></td>
		           				<td><?php
		                        if(($row['itemid'] - 1) == 5){
		                          echo "1st Quarterly Exam for Filipino";
		                        }elseif(($row['itemid'] - 1) == 6){
		                          echo "1st Quarterly Exam for English";
		                        }elseif(($row['itemid'] - 1) == 10){
		                          echo "1st Quarterly Exam for Mathematics";
		                        }elseif(($row['itemid'] - 1) == 16){
		                          echo "1st Quarterly Exam for Aralin Panglipunan";
		                        }elseif(($row['itemid'] - 1) == 20){
		                          echo "1st Quarterly Exam for Science";
		                        }elseif(($row['itemid'] - 1) == 24){
		                          echo "2nd Quarterly Exam for Filipino";
		                        }elseif(($row['itemid'] - 1) == 28){
		                          echo "2nd Quarterly Exam for English";
		                        }elseif(($row['itemid'] - 1) == 32){
		                          echo "2nd Quarterly Exam for Mathematics";
		                        }elseif(($row['itemid'] - 1) == 36){
		                          echo "2nd Quarterly Exam for Aralin Panglipunan";
		                        }elseif(($row['itemid'] - 1) == 41){
		                          echo "2nd Quarterly Exam for Science";
		                        }elseif(($row['itemid'] - 1) == 55){
		                          echo "3rd Quarterly Exam for Filipino";
		                        }elseif(($row['itemid'] - 1) == 52){
		                          echo "3rd Quarterly Exam for English";
		                        }
		                        elseif(($row['itemid'] - 1) == 58){
		                          echo "3rd Quarterly Exam for Mathematics";
		                        }
		                        elseif(($row['itemid'] - 1) == 62){
		                          echo "3rd Quarterly Exam for Aralin Panglipunan";
		                        }
		                        elseif(($row['itemid'] - 1) == 66){
		                          echo "3rd Quarterly Exam for Science";
		                        }elseif(($row['itemid'] - 1) == 68){
		                          echo "4th Quarterly Exam for Filipino";
		                        }elseif(($row['itemid'] - 1) == 72){
		                          echo "4th Quarterly Exam for English";
		                        }elseif(($row['itemid'] - 1) == 76){
		                          echo "4th Quarterly Exam for Mathematics";
		                        }elseif(($row['itemid'] - 1) == 80){
		                          echo "4th Quarterly Exam for Aralin Panglipunan";
		                        }elseif(($row['itemid'] - 1) == 84){
		                          echo "4th Quarterly Exam for Science";
		                        }
		                       ?> 
		                      </td>
		           				<td><?= $row['rawgrade']?></td>
		           				<td><?= $row['rawgrademax']?></td>
		           				<td><?= $row['rawgrade'] / $row['rawgrademax'] * 100 . '%' ?></td>
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