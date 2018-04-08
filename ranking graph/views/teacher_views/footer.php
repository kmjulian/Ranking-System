<?php
        class datab {
                PROTECTED $host   = 'localhost';
                PROTECTED $user   = 'root';
                PROTECTED $passwd = 'root';
                PROTECTED $db     = 'ranking';
                PROTECTED $dbCon;
 
        public function __construct(){
                $this->dbCon = new mysqli($this->host, $this->user, $this->passwd, $this->db);
        }
 
        public function __destruct(){
                mysqli_close($this->dbCon);
        }
 
        public function fil(){
                $myQuery = ('SELECT AVG(sumgrades) as fil FROM mdl_quiz WHERE name="1st Quarterly Exam for Filipino"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function fil2(){
                $myQuery = ('SELECT AVG(sumgrades) as fil FROM mdl_quiz WHERE name="2nd Quarterly Exam for Filipino"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function fil3(){
                $myQuery = ('SELECT AVG(sumgrades) as fil FROM mdl_quiz WHERE name="3rd Quarterly Exam for Filipino"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function fil4(){
                $myQuery = ('SELECT AVG(sumgrades) as fil FROM mdl_quiz WHERE name="4th Quarterly Exam for Filipino"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function eng(){
                $myQuery = ('SELECT AVG(sumgrades) as eng FROM mdl_quiz WHERE name="1st Quarterly Exam for English"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function eng2(){
                $myQuery = ('SELECT AVG(sumgrades) as eng FROM mdl_quiz WHERE name="2nd Quarterly Exam for English"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function eng3(){
                $myQuery = ('SELECT AVG(sumgrades) as eng FROM mdl_quiz WHERE name="3rd Quarterly Exam for English"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function eng4(){
                $myQuery = ('SELECT AVG(sumgrades) as eng FROM mdl_quiz WHERE name="4th Quarterly Exam for English"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function math(){
                $myQuery = ('SELECT AVG(sumgrades) as math FROM mdl_quiz WHERE name="1st Quarterly Exam for Mathematics"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function math2(){
                $myQuery = ('SELECT AVG(sumgrades) as math FROM mdl_quiz WHERE name="2nd Quarterly Exam for Mathematics"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function math3(){
                $myQuery = ('SELECT AVG(sumgrades) as math FROM mdl_quiz WHERE name="3rd Quarterly Exam for Mathematics"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function math4(){
                $myQuery = ('SELECT AVG(sumgrades) as math FROM mdl_quiz WHERE name="4th Quarterly Exam for Mathematics"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function ap(){
                $myQuery = ('SELECT AVG(sumgrades) as ap FROM mdl_quiz WHERE name="1st Quarterly Exam for Araling Panlipunan"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function ap2(){
                $myQuery = ('SELECT AVG(sumgrades) as ap FROM mdl_quiz WHERE name="2nd Quarterly Exam for Araling Panlipunan"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function ap3(){
                $myQuery = ('SELECT AVG(sumgrades) as ap FROM mdl_quiz WHERE name="3rd Quarterly Exam for Araling Panlipunan"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function ap4(){
                $myQuery = ('SELECT AVG(sumgrades) as ap FROM mdl_quiz WHERE name="4th Quarterly Exam for Araling Panlipunan"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
         public function sci(){
                $myQuery = ('SELECT AVG(sumgrades) as sci FROM mdl_quiz WHERE name="1st Quarterly Exam for Science"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function sci2(){
                $myQuery = ('SELECT AVG(sumgrades) as sci FROM mdl_quiz WHERE name="2nd Quarterly Exam for Science"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function sci3(){
                $myQuery = ('SELECT AVG(sumgrades) as sci FROM mdl_quiz WHERE name="3rd Quarterly Exam for Science"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results;
        }
        public function sci4(){
                $myQuery = ('SELECT AVG(sumgrades) as sci FROM mdl_quiz WHERE name="4th Quarterly Exam for Science"');
                $results = mysqli_query($this->dbCon, $myQuery);
                return $results; 
        }
 
    }

    $db_fil_1st_quarter = new datab();
    
    $fil_1st_quarter = $db_fil_1st_quarter->fil();
    
    $row1 = $fil_1st_quarter->fetch_assoc();
    
    $total_fil_first = $row1['fil'];


    $db_fil_2nd_quarter = new datab();
    
    $fil_2nd_quarter = $db_fil_2nd_quarter->fil2();
    
    $row1 = $fil_2nd_quarter->fetch_assoc();
    
    $total_fil_second = $row1['fil'];


    $db_fil_3rd_quarter = new datab();
    
    $fil_3rd_quarter = $db_fil_3rd_quarter->fil3();
    
    $row1 = $fil_3rd_quarter->fetch_assoc();
    
    $total_fil_third = $row1['fil'];


    $db_fil_4th_quarter = new datab();
    
    $fil_4th_quarter = $db_fil_4th_quarter->fil4();
    
    $row1 = $fil_4th_quarter->fetch_assoc();
    
    $total_fil_fourth = $row1['fil'];
    
    // echo $total_fil;
    

    $db_eng_1st_quarter = new datab();
    
    $eng_1st_quarter = $db_eng_1st_quarter->eng();
    
    $row2 = $eng_1st_quarter->fetch_assoc();
    
    $total_eng_first = $row2['eng'];


    $db_eng_2nd_quarter = new datab();
    
    $eng_2nd_quarter = $db_eng_2nd_quarter->eng2();
    
    $row2 = $eng_2nd_quarter->fetch_assoc();
    
    $total_eng_second = $row2['eng'];
    

    $db_eng_3rd_quarter = new datab();
    
    $eng_3rd_quarter = $db_eng_3rd_quarter->eng3();
    
    $row2 = $eng_3rd_quarter->fetch_assoc();
    
    $total_eng_third = $row2['eng'];


    $db_eng_4th_quarter = new datab();
    
    $eng_4th_quarter = $db_eng_4th_quarter->eng4();
    
    $row2 = $eng_4th_quarter->fetch_assoc();
    
    $total_eng_fourth = $row2['eng'];
    // echo $total_eng;
    

    $db_math_1st_quarter = new datab();
    
    $math_1st_quarter = $db_math_1st_quarter->math();
    
    $row3 = $math_1st_quarter->fetch_assoc();
    
    $total_math_first = $row3['math'];


    $db_math_2nd_quarter = new datab();
    
    $math_2nd_quarter = $db_math_2nd_quarter->math2();
    
    $row3 = $math_2nd_quarter->fetch_assoc();
    
    $total_math_second = $row3['math'];


     $db_math_3rd_quarter = new datab();
    
    $math_3rd_quarter = $db_math_3rd_quarter->math3();
    
    $row3 = $math_3rd_quarter->fetch_assoc();
    
    $total_math_third = $row3['math'];


     $db_math_4th_quarter = new datab();
    
    $math_4th_quarter = $db_math_4th_quarter->math4();
    
    $row3 = $math_4th_quarter->fetch_assoc();
    
    $total_math_fourth = $row3['math'];
    
    // echo $total_math;
    
 
    $db_ap_1st_quarter = new datab();
    
    $ap_1st_quarter = $db_ap_1st_quarter->ap();
    
    $row4 = $ap_1st_quarter->fetch_assoc();
    
    $total_ap_first = $row4['ap'];


    $db_ap_2nd_quarter = new datab();
    
    $ap_2nd_quarter = $db_ap_2nd_quarter->ap2();
    
    $row4 = $ap_2nd_quarter->fetch_assoc();
    
    $total_ap_second = $row4['ap'];


    $db_ap_3rd_quarter = new datab();
    
    $ap_3rd_quarter = $db_ap_3rd_quarter->ap3();
    
    $row4 = $ap_3rd_quarter->fetch_assoc();
    
    $total_ap_third = $row4['ap'];


    $db_ap_4th_quarter = new datab();
    
    $ap4th_quarter = $db_ap_4th_quarter->ap4();
    
    $row4 = $ap4th_quarter->fetch_assoc();
    
    $total_ap_fourth = $row4['ap'];
    
    // echo $total_ap;
    

    $db_sci_1st_quarter = new datab();
    
    $sci_1st_quarter = $db_sci_1st_quarter->sci();
    
    $row5 = $sci_1st_quarter->fetch_assoc();
    
    $total_sci_first = $row5['sci'];


    $db_sci_2nd_quarter = new datab();
    
    $sci_2nd_quarter = $db_sci_2nd_quarter->sci2();
    
    $row5 = $sci_2nd_quarter->fetch_assoc();
    
    $total_sci_second = $row5['sci'];


    $db_sci_3rd_quarter = new datab();
    
    $sci_3rd_quarter = $db_sci_3rd_quarter->sci3();
    
    $row5 = $sci_3rd_quarter->fetch_assoc();
    
    $total_sci_third = $row5['sci'];
    

    $db_sci_4th_quarter = new datab();
    
    $sci_4th_quarter = $db_sci_4th_quarter->sci4();
    
    $row5 = $sci_4th_quarter->fetch_assoc();
    
    $total_sci_fourth = $row5['sci'];

?>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 3
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Ranking Studio</a>.</strong> All rights
    reserved.
  </footer>

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/dist/js/demo.js"></script>

<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?=base_url()?>public/AdminLTE-2.4.2/bower_components/Flot/jquery.flot.categories.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
    $(function () {
    
     /* BAR CHART */
     <?php $round = round($total_fil_first)/1;?>
    var bar_data = {
      data : [['Filipino',<?=$total_fil_first;?>], ['English',<?=$total_eng_first?>], ['Mathematics',<?=$total_math_first?>], ['Araling Panlipunan',<?=$total_ap_first?>], ['Science',<?=$total_sci_first?>]],
      color: '#0457b9',
  //     tooltips: 
  // mode: 'label'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.7,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })

    var bar_data2 = {
      data : [['Filipino', <?=$total_fil_second;?>], ['English', <?=$total_eng_second?>], ['Mathematics', <?=$total_math_second?>], ['Araling Panlipunan', <?=$total_ap_second?> ], ['Science', <?=$total_sci_second?>]],
      color: '#be0501'
    }
    $.plot('#bar-chart2', [bar_data2], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.7,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })

    var bar_data3 = {
      data : [['Filipino', <?=$total_fil_third;?>], ['English', <?=$total_eng_third;?>], ['Mathematics', <?=$total_math_third;?>], ['Araling Panlipunan', <?=$total_ap_third;?>], ['Science', <?=$total_sci_third;?>]],
      color: '#78b002'
    }
    $.plot('#bar-chart3', [bar_data3], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.7,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })

    var bar_data4 = {
      data : [['Filipino', <?=$total_fil_fourth;?>], ['English', <?=$total_eng_fourth;?>], ['Mathematics', <?=$total_math_fourth;?>], ['Araling Panlipunan', <?=$total_ap_fourth;?>], ['Science', <?=$total_sci_fourth;?>]],
      color: '#4c05a0'
    }
    $.plot('#bar-chart4', [bar_data4], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.7,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */
  })
  </script>
</body>
</html>
