<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
    	<div class="col-lg-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Section Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= site_url('registrar/create/create_section/create_section_account');?>" method="post">
              <div class="box-body">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="grade_level" class="col-sm-10">Grade Level</label>
                      <select name="grade_level" class="form-control">
                            <option selected="true" disabled="disabled">-- Select a grade level --</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                      </select>
                  </div>
                </div>
                <div class="col-lg-6">
                 	<div class="form-group">
	                	<label for="section_name" class="col-sm-10">Section Name</label>
	                	<div class="col-sm-10">
		                	<input type="text" name="sname" class="form-control" id="sname" placeholder="Section Name">
		            	</div>
	            	</div>               
                </div>
	     	  </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Create Section</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
</div><