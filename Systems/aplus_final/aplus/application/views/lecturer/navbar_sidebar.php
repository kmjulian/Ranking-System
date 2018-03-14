<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>A+ - Public School Grading System</title>
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url(); ?>css/plugins/morris.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo base_url(); ?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>css/sampletabs.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/table-computation.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="<?php echo base_url();?>lecturer/index">A+</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>

          <?php echo $this->session->userdata('username');?>

          <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li>
              <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li>
              <a href="<?php echo base_url();?>selectlocation/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li class="active">
            <a href="<?php echo base_url();?>lecturer/index"><i class="fa fa-fw fa-home"></i> Home</a>
          </li>
          <li class="active">
            <a href="#"><i class="fa fa-fw fa-file"></i> How to Use</a>
          </li>



          <li class="active">
          	<a href="<?php echo base_url();?>lecturer/powerbi"><i class="fa fa-fw fa-file"></i> Power Bi</a>

         </li>

          <li class="active">
            <a href="<?php echo base_url();?>lecturer/full_rank"><i class="fa fa-fw fa-file"></i> Ranks</a>

         </li>

         <!--Advisory-->
          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#elementary"><i class="fa fa-fw fa-lightbulb-o"></i> Advisory Class <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="elementary" class="collapse">
            <!--Section 1 -->
              <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#e_section1"><i class="fa fa-fw fa-lightbulb-o"> </i> <?php foreach($adv as $ad) echo $ad['sectionname'] . " (" . $ad['stage'] . ")";?><i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="e_section1" class="collapse">
                  <li>
                    <a href="<?php echo base_url()?>lecturer/view_adv_class_grades">View Submitted Grades</a>
                  </li>
                </ul>
              </li>
            </ul>

            <?php if (in_array('Primary Level', $sections[0])) {?>
            <a href="javascript:;" data-toggle="collapse" data-target="#elementary"><i class="fa fa-fw fa-lightbulb-o"></i> Primary Level <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="elementary" class="collapse">
            <!--Section 1 -->
              <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#e_section1"><i class="fa fa-fw fa-lightbulb-o"> </i> Section 1 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="e_section1" class="collapse">
                  <li>
                    <a href="section-1stgrading.html">1st Grading</a>
                  </li>
                  <li>
                    <a href="section-2ndgrading.html">2nd Grading</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <?php  } else if (in_array('Intermediate Level', $sections[0])) { ?>
          <!--High school-->
          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#highschool"><i class="fa fa-fw fa-lightbulb-o"></i> Intermediate Level <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="highschool" class="collapse">
            <!--Section 1 -->
            <?php foreach($sections as $sec) { ?>
              <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#hs_section1"><i class="fa fa-fw fa-lightbulb-o"> </i> <?php echo $sec['sectionname'];?> <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="hs_section1" class="collapse">
                  <li>
                    <a href="<?php echo base_url('lecturer/first_grading/'.$sec['sectionId']);?>">1st Grading</a>
                  </li>
                  <li>
                    <a href="#">2nd Grading</a>
                  </li>
                </ul>
              </li>
            <?php } ?>
            </ul>
          </li>
          <?php } else if (in_array('Junior High Level', $sections[0])) {?>
          <!-- Senior High -->
          <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#shs"><i class="fa fa-fw fa-lightbulb-o"></i> Junior High School <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="shs" class="collapse">
            <!--Section 1 -->
              <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#shs_section1"><i class="fa fa-fw fa-lightbulb-o"> </i> Section 1 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="shs_section1" class="collapse">
                  <li>
                    <a href="section-1stgrading.html">1st Grading</a>
                  </li>
                  <li>
                    <a href="#">2nd Grading</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <?php } ?>
          <li>
            <a href="<?php echo base_url();?>lecturer/about"><i class="fa fa-fw fa-file"></i> About</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>

