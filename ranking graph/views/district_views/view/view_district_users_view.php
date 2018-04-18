<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        View District Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">View Informations</a></li>
        <li class="active">View District Users</li>
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
		                      <th>User ID</th>
		                      <th>Username</th>
		                      <th>Position</th>
		                      <th>School Id</th>
		                    </tr>
                 	  </thead>
		              <tbody> 
		            <?php foreach($list as $row): ?>
		                <tr>
		                  <td><?= $row['user_id']?></td>
		                  <td><?= $row['user_username']?></td>
		                  <td><?= $row['user_position']?></td>
		                  <td><?= $row['school_id']?></td>
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