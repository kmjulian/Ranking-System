<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
    	<div class="col-lg-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create School Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= site_url('district/create/create_school/create_account');?>" method="post">
              <div class="box-body">
                <div class="col-lg-12">
                 	<div class="form-group">
	                	<label for="SchoolName" class="col-sm-10">School Name</label>
	                	<div class="col-sm-11">
		                	<input type="text" name="schoolname" class="form-control" id="SchoolName" placeholder="School Name">
		            	</div>
	            	</div>               
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="Budget" class="col-sm-10">Distributed Budget</label>
                    <div class="col-sm-10">
                      <select name="budget" class="form-control">
                          <option selected="true" disabled="disabled">-- Select Amount --</option> 
                          <option value="Micro budget"?>Below 100,000 PHP</option>
                          <option value="Small budget"?>100,000 PHP - 400,000 PHP</option>
                          <option value="Average budget"?>400,001 PHP - 800,000 PHP</option>
                          <option value="Large budget"?>Above 800,000 PHP</option>
                    </select>
                  </div>
                </div>               
                </div>
                <div class="col-lg-6">
                 	<div class="form-group">
	                	<label for="Contact" class="col-sm-10">Contact Number</label>
	                	<div class="col-sm-10">
		                	<input type="text" name="contact" class="form-control" id="Contact" placeholder="Contact Number">
		            	</div>
	            	</div>               
                </div>
                <div class="col-lg-12">
                 	<div class="form-group">
	                	<label for="add" class="col-sm-10">School Address</label>
	                	<div class="col-sm-11">
		                	<input type="text" name="schooladdress" class="form-control" id="add" placeholder="School Address">
		            	</div>
	              </div>
	          	</div>
	     	  </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Create School</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
</div>
</div>
