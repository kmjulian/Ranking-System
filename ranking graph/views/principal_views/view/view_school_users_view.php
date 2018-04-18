<div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
    	<section class="content">
		      <div class="row">
		        <div class="col-xs-12"> 
				  <div class="box">

		            <!-- /.box-header -->
		            <div class="box-body">
		              <table id="example1" class="table table-bordered table-striped">
		              <thead>
		                    <tr>
		                      <th>User ID</th>
		                      <th>Username</th>
		                      <th>Position</th>
		                    </tr>
                 	  </thead>
		              <tbody> 
		            <?php foreach($list as $row): ?>
		                <tr>
		                  <td><?= $row['user_id']?></td>
		                  <td><?= $row['user_username']?></td>
		                  <td><?= $row['user_position']?></td>
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
    </section>
</div>s