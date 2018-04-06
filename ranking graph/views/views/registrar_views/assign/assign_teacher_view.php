<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
    	<div class="col-lg-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Assign Teacher Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= site_url('registrar/assign/assign_teacher/assign_teacher_account');?>" method="post">
              <div class="box-body">
	                <div class="col-lg-6 form-group">
	                <label>Teacher</label>
	                    <select name="teacher" class="form-control">
	                          <option selected="true" disabled="disabled">-- Select Teacher --</option>
	                          <?php foreach ($teachers as $teacher){ ?>
	                          <option value="<?php echo $teacher['teacher_id'] ;?>"><?php echo $teacher['teacher_fname'];?></option>
	                          <?php }?>
	                    </select>
	                </div>  
	                <div class="col-lg-6 form-group">
	                <label>Section</label>
	                    <select name="section" class="form-control">
	                          <option selected="true" disabled="disabled">-- Select Section --</option>
	                          <?php foreach ($sections as $section){ ?>
	                          <option value="<?php echo $section['section_id'] ;?>"><?php echo $section['grade_level'] . ", Section: " . $section['section_name'];?></option>
	                          <?php }?>
	                    </select>
	                </div>   
           	 </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Assign Teacher</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
</div>