
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">  - 1st grading </h1>
            <ol class="breadcrumb">
              <li class="active"> <i class="fa fa-lightbulb-o"></i> Section 1 </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
        <div class="col-sm-6 col-md-11 offset-md-2">
          <h3><?php echo $sectionname[0]['level'] . " - " . $sectionname[0]['sectionname'];?></h3>
          <hr>
          <div class="col-xs-9 col-md-10">
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="home-vr">
              <!--Table-->
               <div id="table" class="table-editable">
                <span class="table-add glyphicon glyphicon-plus"></span>
                <table class="table">
                  <tr>
                    <th>Student ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                  </tr>
                  <?php foreach($section_students as $student) { ?>
                  <tr>
                    <td><a href="<?php echo base_url().'lecturer/view_breakdown/';
                                        echo $student['userId'];?>" /> <?php echo $student['userId'];?></td>
                    <td><?php echo $student['last_name']; ?></td>
                    <td><?php echo $student['first_name']; ?></td>
                  </tr>
                  <?php } ?>
                  <!-- This is our clonable table line -->
                  <tr class="hide">
                    <td>Untitled</td>
                    <td>undefined</td>
                    <td>
                      <span class="table-remove glyphicon glyphicon-remove"></span>
                    </td>
                    <td>
                      <span class="table-up glyphicon glyphicon-arrow-up"></span>
                      <span class="table-down glyphicon glyphicon-arrow-down"></span>
                    </td>
                  </tr>
                </table>            
              </div>
               <!--Table end-->
              </div>
              <!--Math Tab-->
             

              <!--Buttons-->
              <div class="col-xs-6 col-md-6 ">
                <button class="btn btn-lg btn-primary" onclick="window.location='<?php echo base_url();?>lecturer/rank'" type="submit">View Ranking</button> 
              </div>
              <div class="col-xs-6 col-md-6 ">
                <button class="btn btn-lg btn-primary" onclick="window.location='<?php echo base_url();?>lecturer/computation_menu'" type="submit">Computation</button> 
              </div>
              <!--End Button-->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->