<div class="content-wrapper">
    <section class="content-header">

    </section>
    <section class="content">
    	<div class="col-lg-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create Principal Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= site_url('district/create/create_principal/create_principal_account');?>" method="post">
              <div class="box-body">
                <div class="col-lg-4">
                	<div class="form-group">
	                  <label for="firstname" class="col-sm-10">First Name</label>
	                  <div class="col-sm-10">
	                    <input type="text" name="fname" class="form-control" id="firstname" placeholder="First Name">
	                  </div>
                	</div>
                </div>

                <div class="col-lg-4">
                	<div class="form-group">
	                  <label for="middlename" class="col-sm-10">Middle Name</label>
	                  <div class="col-sm-10">
	                    <input type="text" name="mname" class="form-control" id="middlename" placeholder="Middle Name">
	                  </div>
                	</div>
                </div>

                <div class="col-lg-4">
                	<div class="form-group">
	                  <label for="lastname" class="col-sm-10">Last Name</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" id="lastname" name="lname" placeholder="Last Name">
	                  </div>
                	</div>
                </div>

                <div class="col-lg-6">
                	<div class="form-group">
	                	<label for="dist" class="col-sm-10">District</label>
		                  <div class="col-sm-10">
		                    <input type="text" name="district" class="form-control" id="dist" placeholder="District">
		                  </div>
	              	</div>
                </div>
                <div class="col-sm-6 form-group">
                <label>School</label>
                    <select name="school" class="form-control">
                          <option selected="true" disabled="disabled">-- Select School --</option>
                          <?php foreach ($schools as $school){ ?>
                          <option value="<?php echo $school['school_name'] ;?>"><?php echo $school['school_name'];?></option>
                          <?php }?>
                    </select>
                </div>
                 <div class="col-lg-12">
                 	<div class="form-group">
	                	<label for="add" class="col-sm-10">User's Address</label>
	                	<div class="col-sm-10">
		                	<input type="text" name="address" class="form-control" id="add" placeholder="User's Address">
		            	</div>
	            	</div>               
                </div>
                <div class="col-lg-6">
                 	<div class="form-group">
	                	<label for="Email" class="col-sm-10">Email</label>
	                	<div class="col-sm-10">
		                	<input type="Email" name="email" class="form-control" id="Email" placeholder="Email">
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
                <div class="col-lg-6">
                 	<div class="form-group">
	                	<label for="Username" class="col-sm-10">Username</label>
	                	<div class="col-sm-10">
		                	<input type="text" name="username" class="form-control" id="Email" placeholder="Username">
		            	</div>
	            	</div>               
                </div>
                <div class="col-lg-6">
                 	<div class="form-group">
	                	<label for="Password" class="col-sm-10">Password</label>
	                	<div class="col-sm-10">
		                	<input type="password" name="password" class="form-control" id="Contact" placeholder="Password">
		            	</div>
	            	</div>               
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Register Account</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </section>
</div>