    <div class="container">
      <h1 class="well">Generate Key</h1>
      <div class="col-lg-12 well">
        <div class="row">
          <form>
           <div class="col-sm-12">
             <div class="row">
              <div class="col-sm-10 form-group">
               <div class="input-group margin-bottom-sm">
               <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>

               <?php if (!isset($key)) { ?>
                <input class="form-control" type="text" placeholder="Generate Key" readonly>
               <?php } else { ?>
                <input class="form-control" type="text" value="<?php echo $key;?>" readonly>
                <?php } ?>
               </div>
              </div>    
              <div class="col-sm-2 form-group">
                <a class="btn btn-primary " href="<?php echo base_url();?>registrar/generatekey">
                  <i class="fa"></i> Generate</a>
              </div>  
            </div>   

          </div>
        </form> 
        </div>
  </div>
  </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->