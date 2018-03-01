<?php include 'header.php'; ?>
<form action="" method="POST">
<div class="content-wrapper">
    <div class="container-fluid">
    <div class = "card-header"><center><h2>Create Registrar Account</center></h2></div><br>
	<div class="col-lg-12 well">
	<div class="row">
				
					<div class="col-sm-12" >
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="(ex. Kyla)" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Middle Name</label>
								<input type="text" placeholder="(ex. Morales)" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="(ex. Julian)" class="form-control">
							</div>
						</div>		
						<div class="form-group">
						<label>Gender</label>
						<select class="form-control" required>
							<option>-- Select Gender --</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>		
					<div class="form-group">
						<label>Address</label>
						<textarea class=form-control></textarea>
					</div>	
					<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="City" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="State" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip Code</label>
								<input type="text" placeholder="Zip" class="form-control">
							</div>	
						</div>						
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Phone Number</label>
								<input type="text" placeholder="(ex. +639034574971)" class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Email Address</label>
								<input type="text" placeholder="(ex. email@email.com)" class="form-control">
							</div>	
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Username</label>
								<input type="text" placeholder="Username" class="form-control">
							</div>	
							<div class="col-sm-6 form-group">
								<label>Password</label>
								<input type="password" placeholder="Password" class="form-control">
							</div>	
						</div>			
									
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				
				</div>
	</div>
	<br>
          </div>
        </div>
    </form>
<?php include 'footer.php';