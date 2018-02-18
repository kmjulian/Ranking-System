<div class="container">
    <h1 class="well">Create Section</h1>
  <div class="col-lg-12 well">
  <div class="row">
          <?php echo form_open('admin/cs_form_submit');?>
          <div class="col-sm-12">
           <div class="form-group">
            <label>Educational Stage</label>
            <label>Level</label>
            <select name="level" class="form-control">
              <option selected="true" disabled="disabled">-- Select Level --</option>
              <option value="1">Grade 1</option>
              <option value="2">Grade 2</option>
              <option value="3">Grade 3</option>
              <option value="4">Grade 4</option>
              <option value="5">Grade 5</option>
              <option value="6">Grade 6</option>
              <option value="7">Grade 7</option>
              <option value="8">Grade 8</option>
              <option value="9">Grade 9</option>
              <option value="10">Grade 10</option>
              <option value="11">Grade 11</option>
              <option value="12">Grade 12</option>
            </select>
          </div>   
            <div class="row">
              <div class="col-sm-8 form-group">
                <label>Section Name</label>
                <input type="text" name="sec_name" placeholder="Section Name" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Capacity</label>
                <input type="text" name="capacity" placeholder="Capacity" class="form-control">
              </div>
            </div>  

            <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sucess">Submit</button> 
  
          </div>
          <?php echo form_close();?>
        </div>
  </div>
  </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

