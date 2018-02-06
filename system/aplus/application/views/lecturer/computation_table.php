
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Computation of Grade for <?php echo $subjectname[0]['dept_name'];?></h1>
            <ol class="breadcrumb">
              <li class="active"> <i class="fa fa-lightbulb-o"></i> <?php echo $sectionname[0]['sectionname'];?> </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
       <!-- Number of Columms -->
        <div class='rg-container'>
          <div class='rg-content'>

            <form id='grades' method='post'>
            <table class='rg-table' summary='Hed', id="table">
              <thead>
                <tr>
                <th class='text'>Student ID</th>
                <th class='text'>Name</th>
                <th class='text' colspan="<?php echo $assignment + $seatwork;?>">Written</th>
                <th class='text' colspan="<?php echo $quiz + $recitation + $gwork;?>">Performance</th>
                </tr>
              </thead>
              <tbody>
                
                <tr class=''>
                <td text-centered></td>
                  <td></td>
                  <td colspan="<?php echo $assignment;?>" text-centered>Assignment</td>
                  <td colspan="<?php echo $seatwork;?>" text-centered>Seatwork</td>
                  <td colspan="<?php echo $quiz;?>" text-centered>Quizzes</td>
                  <td colspan="<?php echo $recitation;?>" text-centered>Recitation</td>
                  <td colspan="<?php echo $gwork;?>" text-centered>Group Work</td>
                  <td colspan="1" text-centered>Attendance</td>
                  <td colspan="1" text-centered>Final Grade</td>
                </tr>

                <?php foreach($students as $student) { ?>
                <tr class='start' id='student'>
                  <td class='id'><?php echo $student['userId'];?></td>
                  <td class='notthis'><?php echo $student['last_name'] . ', ' . $student['first_name'];?></td>
                  <?php
                    for($i = 0; $i < $assignment; $i++)
                    {
                      echo "<td class='assignment' contenteditable='true'>0</td>";
                    }

                    for($i = 0; $i < $seatwork; $i++)
                    {
                      echo "<td class='seatwork' contenteditable='true'>0</td>";
                    }

                    for($i = 0; $i < $quiz; $i++)
                    {
                      echo "<td class='quiz' contenteditable='true'>0</td>";
                    }

                    for($i = 0; $i < $recitation; $i++)
                    {
                      echo "<td class='rec' contenteditable='true'>0</td>";
                    }

                    for($i = 0; $i < $gwork; $i++)
                    {
                      echo "<td class='gwork' contenteditable='true'>0</td>";
                    }
                  ?>
                  <td class='attendance' id='attendance' contenteditable='true'>0</td>
                  <td class='f_grade' id='f_grade<?php echo $student['userId'];?>'></td>
                </tr>
                <?php } ?>

              </tbody>
            </table><br/>
            <button class="btn btn-lg btn-primary" type="button" onclick="compute()">Compute</button>
            <button class="btn btn-lg btn-primary" type="submit">Submit Grades</button>
            </form>
          </div>
        </div>
       <!--End Number of Columns -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->