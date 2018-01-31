
    <div id="page-wrapper">
      <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Generate Grading Table </h1>
            <ol class="breadcrumb">
              <li class="active"> <i class="fa fa-lightbulb-o"></i> Section 1 </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
       <!-- Number of Columms -->
        <form action="<?php echo base_url();?>lecturer/computation_table" method="post">

        <div class="container-fluid" style="margin-top: 5%; margin-bottom: 5%">
         <span><b>Written Works:</b> </span><input type="textbox" name="ww_percentage" id="ww_percentage" placeholder="Percentage (e.g. 0.5)" required></input></br>
        <div class="row">
            <div class="col-sm-4">
                  <p>Assignment</p>
                 <select name="assignment" class="form-control" style="width: 50%" required>
                  <option selected="true" disabled="disabled" >-- Select Number --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
             </div>
              <div class="col-sm-4">
                 <p>Seatwork</p>
                 <select name="seatwork" class="form-control" style="width: 50%" required>
                  <option selected="true" disabled="disabled" >-- Select Number --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select></br>
              </div>
                </div>
              </div>

            <div class="container-fluid" style="margin-bottom: 5%">
               <span><b>Performance:</b> </span><input type="textbox" name="perf_percentage" id="perf_percentage" placeholder="Percentage (e.g. 0.5)" required></input></br>
              <div class="row">
              <div class="col-sm-4">
                 <p>Group Work</p>
                 <select name="gwork" class="form-control" style="width: 50%" required>
                  <option selected="true" disabled="disabled" >-- Select Number --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                </div>

                <div class="col-sm-4">
                 <p>Quizzes</p>
                 <select name="quiz" class="form-control" style="width: 50%" required>
                  <option selected="true" disabled="disabled" >-- Select Number --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                </div>

              <div class="col-sm-4">
                 <p>Recitation</p>
                 <select name="recitation" class="form-control" style="width: 50%" required>
                  <option selected="true" disabled="disabled" >-- Select Number --</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                </div>
                </div>
            </div>

                <input class="btn btn-lg btn-primary" type="submit" value="Generate!" />
            </form><!-- /form -->
               
       <!--End Number of Columns -->
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->