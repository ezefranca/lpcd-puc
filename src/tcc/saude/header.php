<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de gestão de saúde integrada</title>
  <link rel="icon" type="image/png" href="favicon.png" />

  <!-- Compressed CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">

<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"> <img src="faviconBranco.png" height="20px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">  <img src="../assets/img/logo.png">
</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
          <a href="reset-password.php" class="btn btn-warning">Resetar minha senha</a>
          </li>

          <li class="dropdown user user-menu">
  </hr>
          </li>

          <li class="dropdown user user-menu">
          <a href="logout.php" class="btn btn-danger">Logout</a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de Navegação</li>
        <li id="funcionarios" class="treeview">
          <a href="#">
            <i class="fa fa-user-md"></i> <span>Profissionais da Saúde</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="funcionariovisualizar"><a href="funcionarios.php"><i class="fa fa-circle-o"></i> Visualizar</a></li>
            <li id="funcionariocadastrar"><a href="./cadastrarFuncionario.php"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
          </ul>
        </li>
         <li id="produtos" class="treeview">
          <a href="#">
            <i  class="fa fa-heartbeat"></i> <span>Prontuário</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="produtosvisualizar"><a href="visualizarProntuario.php"><i class="fa fa-circle-o"></i> Visualizar</a></li>

          </ul>
        </li>

        </li>
         <li id="produtos" class="treeview">
          <a href="#">
            <i  class="fa fa-heartbeat"></i> <span>Medicamentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="produtosvisualizar"><a href="visualizarProntuario.php"><i class="fa fa-circle-o"></i> Visualizar</a></li>

          </ul>
        </li>

        </li>
         <li id="produtos" class="treeview">
          <a href="#">
            <i  class="fa fa-heartbeat"></i> <span>Procedimentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="produtosvisualizar"><a href="visualizarProntuario.php"><i class="fa fa-circle-o"></i> Visualizar</a></li>

          </ul>
        </li>

        </li>
         <li id="produtos" class="treeview">
          <a href="#">
            <i  class="fa fa-heartbeat"></i> <span>Campanhas de Vacinação</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="produtosvisualizar"><a href="visualizarProntuario.php"><i class="fa fa-circle-o"></i> Visualizar</a></li>

          </ul>
        </li>

        <li id="fornecedores" class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Relatórios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li id="fornecedoresvisualizar"><a href="visualizarRelatorio.php"><i class="fa fa-circle-o"></i> Visualizar</a></li>

          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>