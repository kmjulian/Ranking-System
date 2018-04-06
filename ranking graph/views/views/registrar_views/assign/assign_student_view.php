<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
    	<div class="col-lg-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Assign Student Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= site_url('registrar/assign/assign_student/assign_student_account');?>" method="post">
              
              <div class="box-body">
	               <div class="col-lg-6">
                    <div class="form-group">
	                <label>Student</label>
	                    <select name="student" class="form-control">
	                          <option selected="true" disabled="disabled">-- Select Student --</option>
	                          <?php foreach ($students as $student){ ?>
	                          <option value="<?php echo $student['student_id'] ;?>"><?php echo $student['student_fname'] . " " .$student['student_mname'] . " " . $student['student_lname'];?></option>
	                          <?php }?>
	                    </select>
	                </div> 
                  </div> 
	                <div class="col-lg-6 form-group">
  	                <label>Section</label>
  	                    <select name="section" class="form-control">
  	                          <option selected="true" disabled="disabled">-- Select Section --</option>
  	                          <?php foreach ($sections as $section){ ?>
  	                          <option value="<?php echo $section['section_id'] ;?>"><?php echo $section['section_name'];?></option>
  	                          <?php }?>
  	                    </select>
	                </div>   
           	 </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Assign Student</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
</div>