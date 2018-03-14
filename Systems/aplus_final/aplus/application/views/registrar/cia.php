
<div class="container">
    <h1 class="well">Create Teacher Account</h1>
  <div class="col-lg-12 well">
  <div class="row">

        <?php
        $attributes = array('id => myform'); 
        echo form_open('registrar/cia_form_submit',$attributes);
        ?>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name" class="form-control" required>
              </div>
              <div class="col-sm-6 form-group">
                <label>Middle Name</label>
                <input type="text" name="mname" placeholder="Middle Name" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
              </div>
            </div>  
            <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control" required>
                  <option selected="true" disabled="disabled">-- Select Gender --</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
          </div>         
            <div class="form-group">
              <label>Address</label>
              <textarea placeholder="Address" name="address" rows="3" class="form-control" required></textarea>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>City</label>
                <input type="text" placeholder="City" name="city" class="form-control" required>
              </div>  
              <div class="col-sm-4 form-group">
                <label>State</label>
                <input type="text" placeholder="State" name="state" class="form-control" required>
              </div>  
              <div class="col-sm-4 form-group">
                <label>Zip Code</label>
                <input type="text" placeholder="Zip" name="zip" class="form-control" required>
              </div>    
            </div>      
          <div class="row">
              <div class="col-sm-6 form-group">
                <label>Phone Number</label>
                <input type="text" placeholder="(ex. 09123456789)" name="number" class="form-control" required>
              </div>
              <div class="col-sm-6 form-group">
                <label>Email Adress</label>
                <input type="text" placeholder="(ex. helloworld@gmail.com)" name="email" class="form-control" required>
              </div>  
            </div> 
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control" required>
              </div>    
              <div class="col-sm-6 form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control" required>
              </div>
            </div>
            <div class ="row">
              <div class="col-sm-6 from-goup">                   
                <label>Department</label>
              </br>
                <input type="checkbox" name="check_list[]" value="1"><label>Math</label>
                <input type="checkbox" name="check_list[]" value="2"><label>English</label>
                <input type="checkbox" name="check_list[]" value="3"><label>Science</label>
                <input type="checkbox" name="check_list[]" value="4"><label>Filipino</label>
                <input type="checkbox" name="check_list[]" value="5"><label>MAPEH</label> 
                <input type="checkbox" name="check_list[]" value="6"><label>AP</label>
                <input type="checkbox" name="check_list[]" value="7"><label>EsP</label>
                <input type="checkbox" name="check_list[]" value="8"><label>EPP</label>
              </div>
            </div>
            
            <!--<button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#success">Submit</button>-->
            <button type="submit" name="submitbutton" class="btn btn-info btn-lg" data-toggle='modal'>Submit</button> 
        

             <div class="modal fade" id="success" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Success!!</h4>
                    </div>
                    <div class="modal-body">
                      <p>ID Number: <?php echo $inst->userId;?> </p>
                      <p>Username: <?php echo $inst->username;?></p>
                      <p>Name: <?php echo $inst->first_name;?></p>
                      <p>Address: <?php echo $inst->address;?></p>
                      <p>Phone Number: <?php echo $inst->number;?></p>
                      <p>Email Address: <?php echo $inst->email;?></p>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>             

<?php echo form_close();?>

          </div>
        </div>
  </div>
  </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

  <script src="<?php echo base_url(); ?>scripts/login.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript">

  jQuery('#myform').on('submit', function(ev) {

    $('#success').modal('show'); 


    var data = $(this).serializeObject();
    json_data = JSON.stringify(data);
    $("#results").text(json_data); 
    $(".modal-body").text(json_data); 

    // $("#results").text(data);

    ev.preventDefault();
});


jQuery(document).on('click', 'submitbutton', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $(".form").attr('action'),
        data: $(".form").serialize(),
        success: function(response) {
             if (response === "success") {
                  window.reload;
             } else {
                   alert("invalid username/password.  Please try again");
             }
        }
    });
});
</script>

