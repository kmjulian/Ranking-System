<div class="container">
    <h1 class="well">Add School</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <?php echo form_open('regional/add_school_submit')?>
          <div class="col-sm-12">
            <form id="school">
                <label>Region</label>
                  <select name="region" id="region" class="form-control">
                      <option selected="true" disabled="disabled">-- Select Region --</option>
                        <?php foreach($regions as $region){  ?>
                          <option value = "<?php echo $region->regionId;?>"><?php echo $region->regionName;?></option> 
                        <?php } ?>
                  </select></br>
             
                <label>Province</label>
                  <select name="province" id="province" class="form-control">
                      <option selected="true" disabled="disabled">-- Select Province --</option>
                  </select></br>
              
                <label>City</label>
                  <select name="city" id="city" class="form-control">
                      <option selected="true" disabled="disabled">-- Select City --</option>
                  </select></br>
             
                <label>Barangay</label>
                  <select name="barangay" id="barangay" class="form-control">
                      <option selected="true" disabled="disabled">-- Select Barangay --</option>
                      </select></br>
             
                <label>Education Level</label>
                  <select name="ed_level" id="ed_level" class="form-control">
                      <option selected="true" disabled="disabled">-- Select Level --</option>
                      <option value="female">Female</option>
                      <option value="male">Male</option>
                  </select></br>
            
               <label>School Name</label>
                <input type="text" name="school" id="school" placeholder="School Name" class="form-control"></br>
               
            <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sucess">Submit</button>
            <?php echo form_close();?>

          </div>
        
        </div>
  </div>
  </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

