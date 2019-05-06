<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acciona | Usuarios </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Datatables
    <link rel="stylesheet" href="../../plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../plugins/datatables/buttons.dataTables.min.css">
    -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .skin-red .main-header .logo {
            background-color: #FFF!important;
            color: #fff!important;
            border-bottom: 0 solid transparent!important;
        }
        
        .logo-custom {
            max-width: 100px!important;
        }
        
        .dataTables_length label {
            display: none;
        }
    </style>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-red">

    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="../../index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels
          <span class="logo-mini"><b>A</b>LT</span>
          -->
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="../../dist/img/logo_acciona.PNG" alt="Logo Image" class="logo-custom"></span>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://lh3.googleusercontent.com/-O247xUodcSo/UWT2jHwdqAI/AAAAAAAAACI/-F8G06uP2dkZWUsHXpc-M5zmR8RKqN-awCEwYBhgL/w139-h140-p/61682_269127713209446_1039898510_n.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Eli Álvarez</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="https://lh3.googleusercontent.com/-O247xUodcSo/UWT2jHwdqAI/AAAAAAAAACI/-F8G06uP2dkZWUsHXpc-M5zmR8RKqN-awCEwYBhgL/w139-h140-p/61682_269127713209446_1039898510_n.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Eli Álvarez - Administrador
                                        <small>Miembro desde Feb. 2019</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Configuración</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Salir</a>
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
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://lh3.googleusercontent.com/-O247xUodcSo/UWT2jHwdqAI/AAAAAAAAACI/-F8G06uP2dkZWUsHXpc-M5zmR8RKqN-awCEwYBhgL/w139-h140-p/61682_269127713209446_1039898510_n.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Eli Álvarez</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> En línea </a>
                    </div>
                </div>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="header">MENÚ DE NAVEGACIÓN</li>

                    <li>
                        <a href="../../index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="../../pages/mediciones/index.php">
                            <i class="fa fa-clock-o"></i> <span>Mediciones</span>
                        </a>
                    </li>

                    <li>
                        <a href="../../pages/bitacora/index.php">
                            <i class="fa fa-list"></i> <span> Bitácora </span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="../../pages/usuarios/index.php">
                            <i class="fa fa-users"></i> <span> Usuarios </span>
                        </a>
                    </li>

                    <li>
                        <a href="../../pages/configuracion/index.php">
                            <i class="fa fa-cog"></i> <span> Configuración </span>
                        </a>
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
            Usuarios
            <small>Control panel</small>
          </h1>
                <ol class="breadcrumb">
                    <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                    <li class="active"> Usuarios </li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-danger">

                            <div class="box-header">
                                <h3 class="box-title"> Administrador de usuarios </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                <table id="example" class="display nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Rol</th>
                                            <th>Contraseña</th>
                                            <th>Estatus</th>
                                            <th>Configuración</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1000</td>
                                            <td>África Sofía Álvarez Hénandez</td>
                                            <td>africa@acciona.com</td>
                                            <td>Administrador</td>
                                            <td>asar</td>
                                            <td>Activo</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1001</td>
                                            <td>Eli Álvarez Romero</td>
                                            <td>eli@acciona.com</td>
                                            <td>Operador</td>
                                            <td>ear</td>
                                            <td>Activo</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1002</td>
                                            <td>Juan Manuel Roque Jacinto</td>
                                            <td>juan@acciona.com</td>
                                            <td>Operador</td>
                                            <td>jmrj</td>
                                            <td>Inactivo</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="modal modal-danger fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">

                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="text-id"></h4>
                                            </div>

                                            <div class="modal-body">

                                                <form role="form">

                                                    <div class="box-body">

                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" id="text-nombre">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" id="text-email">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rol</label>
                                                            <select class="form-control" id="text-rol">
                                                                <option>Administrador</option>                                                                
                                                                <option>Operador</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Contraseña</label>
                                                            <input type="text" class="form-control" id="text-contrasena">
                                                        </div>

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="text-estatus"> Activo
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="box-body" id="data-server-edit">

                                                        <div class="form-group">
                                                            <label>Servidor</label>
                                                            <select class="form-control" id="text-servidor-resgister">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Servidor 1</option>
                                                                <option>Servidor 2</option>
                                                                <option>Servidor 3</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <!-- /.box-body -->
                                                </form>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                                <button type="button" class="btn btn-outline">Guardar Cambios</button>
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>


                                <div class="modal modal-danger fade" id="myModalRegistro" tabindex="-1" role="dialog" aria-hidden="true">

                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title"> Nuevo Usuario </h4>
                                            </div>

                                            <div class="modal-body">

                                                <form role="form">

                                                    <div class="box-body">

                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input type="text" class="form-control" id="text-nombre-resgister">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" id="text-email-resgister">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Rol</label>
                                                            <select class="form-control" id="text-rol-resgister">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Administrador</option>
                                                                <option>Operador</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Contraseña</label>
                                                            <input type="text" class="form-control" id="text-contrasena-resgister">
                                                        </div>

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" id="text-estatus-resgister"> Activo
                                                            </label>
                                                        </div>

                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="box-body" id="data-server-register">

                                                        <div class="form-group">
                                                            <label>Servidor</label>
                                                            <select class="form-control" id="text-servidor-resgister">
                                                                <option selected>Seleccionar...</option>
                                                                <option>Servidor 1</option>
                                                                <option>Servidor 2</option>
                                                                <option>Servidor 3</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <!-- /.box-body -->

                                                </form>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                                <button type="button" class="btn btn-outline">Guardar Cambios</button>
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                        <!-- Block buttons -->
                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">Nuevo Usuario</h3>
                            </div>
                            <div class="box-body">
                                <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModalRegistro"><i class="fa fa-user-plus" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 0.0.0
            </div>
            <strong>Prototipo &copy; 2011-2019 <a href="https://www.acciona.com/" target="blank">Acciona business as unusual</a></strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Tareas Automatizadas</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Envio datos cincominutal</h4>
                                    <p>2019-11-11 12:00:00 pm</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-red"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Envio datos cincominutal</h4>
                                    <p>2019-11-12 12:00:00 pm</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-blue"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Envio datos cincominutal</h4>
                                    <p>2019-11-13 12:00:00 pm</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->
                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">Configuración general</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Panel de informes de uso
                                <input type="checkbox" class="pull-right" checked>
                            </label>
                            <p>
                                Alguna información sobre esta opción de configuración general
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
          immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
     -->
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.min.js"></script>
    -->
    <!-- Sparkline -->
    <script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../bower_components/moment/min/moment.min.js"></script>
    <script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Datatables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables/buttons.flash.min.js"></script>
    <script src="../../plugins/datatables/jszip.min.js"></script>
    <script src="../../plugins/datatables/pdfmake.min.js"></script>
    <script src="../../plugins/datatables/vfs_fonts.js"></script>
    <script src="../../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables/buttons.print.min.js"></script>
    <script>





        $(document).ready(function() {

            $("#data-server-edit").hide();
            $("#data-server-register").hide();

            $("#text-rol-resgister").change(function() {
              var rol = $("#text-rol-resgister").val();            
              if(rol == "Operador") {
                console.log(rol);
                $("#data-server-register").show();
              }
              if(rol == "Administrador") {
                console.log(rol);
                $("#data-server-register").hide();
              }
            });

            $("#text-rol").change(function() {
              var rol = $("#text-rol").val();            
              if(rol == "Operador") {
                console.log(rol);
                $("#data-server-edit").show();
              }
              if(rol == "Administrador") {
                console.log(rol);
                $("#data-server-edit").hide();
              }
            });

            $('#example').DataTable({
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
                columns: [

                    {
                        "data": "id"
                    }, {
                        "data": "nombre"
                    }, {
                        "data": "email"
                    }, {
                        "data": "rol"
                    }, {
                        "data": "contrasena"
                    }, {
                        "data": "estatus"
                    }, {
                        "data": "release_date",
                        "orderable": false,
                        "render": function(data, type, row) {
                            return '<button class="btn btn-info" data-toggle="modal" data-id="' + row.id + '" data-nombre="' + row.nombre + '" data-email="' + row.email + '" data-rol="' + row.rol + '" data-contrasena="' + row.contrasena + '" data-estatus="' + row.estatus + '" data-target="#myModal"><i class="fa fa-cog" aria-hidden="true"></i></button>'
                        }
                    }
                ]
            });

            $("#myModal").on('show.bs.modal', function(e) {

                var triggerLink = $(e.relatedTarget);
                var id = triggerLink.data("id");
                var nombre = triggerLink.data("nombre");
                var email = triggerLink.data("email");
                var rol = triggerLink.data("rol");
                var contrasena = triggerLink.data("contrasena");
                var estatus = triggerLink.data("estatus");
                
                if(rol == "Operador"){
                  $("#data-server-edit").show();
                }
                
                if(rol == "Administrador"){
                  $("#data-server-edit").hide();
                }
                
                $("#text-id").text("Id: " + id);
                $("#text-nombre").val(nombre);
                $("#text-email").val(email);
                $("#text-rol").val(rol);
                $("#text-contrasena").val(contrasena);

                if (estatus == "Activo") {
                    $('#text-estatus').prop('checked', true);
                }

                if (estatus == "Inactivo") {
                    $('#text-estatus').prop('checked', false);
                }

            });

        });
        /*

        $('#list-of-product').DataTable({
            "ajax": {
                url: "https://api.deezer.com/artist/1232/albums?output=jsonp",
                type: "GET",
                jsonp: 'callback',
                dataType: 'jsonp',
                crossDomain: true
            },
            "columns": [
                    { "data": "title", "orderable": true },
                    { "data": "link", "orderable": true },
                    { "data": "cover", "orderable": true, "render": function(data, type, row) {return '<img class="img-fluid" src="'+data+'" />'} },
                    { "data": "release_date", "orderable": true, "render": function(data, type, row) {return '<button class="btn btn-primary" data-toggle="modal" data-id="'+row.id+'" data-title="'+row.title+'" data-cover_small="'+row.cover_small+'" data-target="#myModal">'+data+'</button>'} },
                    { "data": "cover_small", "orderable": true, "render": function(data, type, row) {return '<img src="'+data+'" />'}},
                    { "data": "id", "orderable": true }
            ],
            "order": [[0, "asc"]],
        });

        $("#myModal").on('show.bs.modal', function (e) {
            var triggerLink = $(e.relatedTarget);
            var id = triggerLink.data("id");
            var title = triggerLink.data("title");
            var cover_small = triggerLink.data("cover_small");

            $("#modalTitle").text(title);
            $(this).find(".modal-body").html("<h5>id: "+id+"</h5><img src='"+cover_small+"'/>");
        });
        */
    </script>

</body>

</html>