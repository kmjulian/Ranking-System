<!--Start-->
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Ranking in <?php echo $subjectname[0]['dept_name'];?> </h1>
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-8">
          <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
        </div>
       <!-- Number of Columms -->
        <div class='rg-container'>
          <div class='rg-content'>
                <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Id Number</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Final Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;
                        foreach($students as $student) { 
                      ?>
                        <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $student['userId'];?></td>
                            <td><?php echo $student['username'];?></td>
                            <td><?php echo $student['first_name'];?></td>
                            <td><?php echo $student['last_name'];?></td>
                            <td><?php echo $student['final_grade'];?></td>
                        </tr>
                      <?php $count++; } ?>
                    </tbody>
                </table>   
          </div>
        </div>
       <!--End Number of Columns -->
    </div>
   <!--End-->
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->
  </div>
  </div>