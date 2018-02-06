
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Breakdown of Student: (Student Name) </h1>
            <ol class="breadcrumb">
              <li class="active"> <i class="fa fa-lightbulb-o"></i> Section 1 </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
       <!-- Number of Columms -->
 <div class='rg-container'>
          <div class='rg-content'>
            <table class='rg-table' summary='Hed'>
             
              <thead>
                <tr>
                <th class='text' >ID Number</th>
                 <th class='text' >Last Name</th>
                 <th class='text' >First Name</th>
                <th class='text' colspan="<?php echo $ass + $seat;?>">Written</th>
                <th class='text' colspan="<?php echo $quiz + $rec + $gwork;?>">Performance</th>
                <th class='text' colspan="1">Attendance</th>
                <th class='text' colspan="1">Final Grade</th>
                </tr>
              </thead>
              <tbody>
                
                <tr class=''>
                <td text-centered></td>
                  <td text-centered></td>
                  <td text-centered></td>
                  <td colspan="<?php echo $ass;?>" text-centered>Assignment</td>
                   <td colspan="<?php echo $seat;?>" text-centered>Seatwork</td>
                   <td colspan="<?php echo $quiz;?>" text-centered>Quizzes</td>
                   <td colspan="<?php echo $rec;?>" text-centered>Recitation</td>
                   <td colspan="<?php echo $gwork;?>" text-centered>Group Work</td>
                  <td  colspan="1" text-centered>Attendance</td>
                </tr>
              

                <tr class=''>
                  <td><?php echo $breakdown[0]['userId'];?></td>
                  <td><?php echo $breakdown[0]['last_name'];?></td>
                  <td><?php echo $breakdown[0]['first_name'];?></td>
                  <?php foreach($breakdown as $grade) { ?>
                  <td><?php echo $grade['grade'];?></td>
                  <?php } ?>
                  <td><?php echo $breakdown[0]['final_grade'];?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
       <!--End Number of Columns -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

