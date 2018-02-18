<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Ranking / Admin</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS-->
  <link href="bootstrap-theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="bootstrap-theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="bootstrap-theme/css/sb-admin.css" rel="stylesheet">
</head>

<body>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admin">Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title data-original-title="Admin">
          <a class="nav-link" href="admin">
            <i class="fa fa-fw fa-dashboard">
            </i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title data-original-title="Charts">
          <a class="nav-link" href="adcharts">
            <i class="fa fa-fw fa-area-chart">
            </i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title data-original-title="Tables">
          <a class="nav-link" href="adtables">
            <i class="fa fa-fw fa-table">
            </i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title data-original-title="Create">
          <a class="nav-link nav-link-collapse" data-toggle="collapse" href="#collapseCreate" data-parent="exampleAccordion" aria-expanded="true">
            <i class="fa fa-fw fa-user">
            </i>
            <span class="nav-link-text">Create Account</span>
          </a>
          <ul class="sidenav-second-level collapse show" id="collapseCreate" style>
            <li>
              <a href="c_regional">Regional Account</a>
            </li>
            <li>
              <a href="c_division">Division Account</a>
            </li>
            <li>
              <a href="c_guidance">Guidance Account</a>
            </li>
            <li>
              <a href="c_teacher">Teacher Account</a>
            </li>
            <li>
              <a href="c_student">Student Account</a>
            </li>
          </ul>
        </li>
      </ul>

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-fw fa-search">
                    </i>
                  </button>
                </span>
              </div>
            </form>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=site_url('login/logout')?>">
              <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
          </ul>
        </ul>
      </div>
    </nav>
