<?php include 'header.php'; ?>


<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    <div class = "card-header"><center><h2>Create Section</center></h2></div><br>
	<div class="col-lg-12 well">
	<div class="row">
				
					<div class="col-sm-12" >
						<div class="form-group">
						<label>Educational Stage Level</label>
						<select class="form-control" required>
							<option>-- Select Gender --</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>	
					<div class="row">
							<div class="col-sm-8 form-group">
								<label>Section Name</label>
								<input type="text" placeholder="Section Name" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Capacity</label>
								<input type="text" placeholder="Capacity" class="form-control">
							</div>	
						</div>
									
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>	
				</div>
	</div>
	<br>
          </div>
        </div>
<?php include 'footer.php';