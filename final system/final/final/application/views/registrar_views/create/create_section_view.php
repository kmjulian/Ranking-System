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
            <form class="form-horizontal" action="<?= site_url('registrar/create/create_section/create_account');?>" method="post">
              <div class="box-body">
                <div class="col-lg-6">
                 	<div class="form-group">
	                	<label for="SectionName" class="col-sm-10">Section Name</label>
	                	<div class="col-sm-10">
		                	<input type="text" name="schoolname" class="form-control" id="SchoolName" placeholder="Section Name">
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
</div><div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
      <?php echo "create registrar"; ?>
    </section>
</div>
<div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
    	<?php echo "create section"; ?>
    </section>
</div>