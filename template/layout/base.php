<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hebergement Etudiant</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="public/assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="public/assets/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="public/assets/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="public/assets/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="public/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>HE</b>B</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>H</b>EBERGEMENT</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                    </li>


                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="public/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">USER USER</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="public/assets/dist/img/user2-160x160.jpg" class="img-circle"
                                     alt="User Image">

                                <p>
                                    amdy diop

                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <form method="post">
                                        <input type="submit" name="deconnexion" class="btn btn-default btn-flat"
                                               value="Deconnexion">
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section id="option" class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../../public/assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>amdy diop</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">NAVIGATION PRINCIPALE</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-bed"></i> <span>CHAMBRES</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul id="ul" class="treeview-menu">
                        <li id="listeChambre" class="active"><a href="#"><i class="fa fa-circle-o"></i>Liste des
                                chambres</a>
                        </li>
                        <li id="addChambre"><a href="#"><i class="fa fa-circle-o"></i> Créer Chambre</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-circle"></i>
                        <span>ETUDIANTS</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="addEtudiant"><a href="#"><i class="fa fa-circle-o"></i> Ajouter Etudiant </a></li>
                        <li id="listEtudiant"><a href="#"><i class="fa fa-circle-o"></i> Liste Etudiants </a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tableau de bord
                <small>Panneau de configuration</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Tableau de bord</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>
                            <p>nouvelles commandes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">plus info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>
                            <p>nouvelles commandes</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">plus info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>
                            <p>visiteurs uniques</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">plus info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- chargement des pages ici -->
                <section id="content" class="col-lg-12 connectedSortable">
                    <?=include ('template/listeChambre.php')?>
                </section>
            </div>
        </section>
    </div>
</div>

<!-- jQuery 3 -->
<script src="public/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="public/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/assets/dist/js/pages/dashboard.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js "></script>
<script src="public/assets/dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        //charger la page du li  avec on click
        $('#option').on('click', 'li', function () {
            var link = $(this).attr('id');
            if (link == "listeChambre") {
                $("#content").load("template/listeChambre.php");
            } else if (link == "addChambre") {
                $("#content").load("template/addChambre.php");
            } else if (link == "listEtudiant") {
                $("#content").load("template/listEtudiant.php");
            } else if (link == "addEtudiant") {
                $("#content").load("template/addEtudiant.php");
            }
        });
    });
</script>
</body>
</html>
