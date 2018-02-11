<div class="container">
    <h1 class="well">Create Teacher Account</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <?php echo form_open('admin/cta_form_submit');?>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Middle Name</label>
                <input type="text" name="mname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" class="form-control">
              </div>
            </div>  
            <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control">
                  <option selected="true" disabled="disabled">-- Select Gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
          </div>         
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Address" name="address" rows="3" class="form-control"></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>City</label>
                <input type="text" placeholder="City" name="city" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>State</label>
                <input type="text" placeholder="State" name="state" class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Zip Code</label>
                <input type="text" placeholder="Zip" name="zip" class="form-control">
              </div>    
            </div>      
          <div class="row">
              <div class="col-sm-6 form-group">
                <label>Phone Number</label>
                <input type="text" placeholder="(ex. 09123456789)" name="number" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Email Adress</label>
                <input type="text" placeholder="(ex. helloworld@gmail.com)" name="email" class="form-control">
              </div>  
            </div> 
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
              </div>  
            </div>   
            
                           
            <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#success">Submit</button> 
        <?php echo form_close();?>

             <div class="modal fade" id="success" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Success!!</h4>
                    </div>
                    <div class="modal-body">
                      <p>ID Number:</p>
                      <p>Username:</p>
                      <p>Name:</p>
                      <p>Address:</p>
                      <p>Phone Number:</p>
                      <p>Email Address:</p>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>   
          </div>
        </div>
  </div>
  </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
