<div class="container">
    <h1 class="well">Assign Lecturers</h1>
  <div class="col-lg-12 well">
    <div class="row">
        <?php echo form_open('head/assign_lec_form_submit');?>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Lecturer</label>
                <select name="lec" class="form-control">
                  <option selected="true" disabled="disabled">-- Select Lecturer --</option>
                  <?php foreach ($lecturers as $lec){ ?>
                  <option value="<?php echo $lec->userId ;?>">
                    <?php 
                      echo $lec->first_name . " ";
                      echo $lec->middle_name . " ";
                      echo $lec->last_name;
                    ?></option>
                  <?php }?>
                </select>
              </div>
              <div class="col-sm-6 form-group">
                <label>Section</label>
                <select name="sec" class="form-control">
                  <option selected="true" disabled="disabled">-- Select Section --</option>
                  <?php foreach ($sections as $sec){ ?>
                  <option value="<?php echo $sec->sectionId ;?>"><?php echo $sec->sectionname;?></option>
                  <?php }?>
                </select>
            </div>
          </div>            
            <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#success">Submit</button> 
        <?php echo form_close();?>

        </div>
      </div>
    </div>
  </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
