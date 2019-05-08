<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acciona | Configuración </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="../../dist/img/favicon.ico"/>
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
    <link rel="stylesheet" href="../../plugins/datatables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../plugins/datatables/buttons.dataTables.min.css">
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
        max-width:100px!important;
      }
      .dataTables_length label { 
        display:none;
      }
      .dataTables_filter{
        display:none;
      }
      </style>
    <!-- Google Font -->
    <link rel="stylesheet" href="../../dist/css/Font.css">
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
                  <img src="../../dist/img/eli.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Eli Álvarez</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/eli.jpg" class="img-circle" alt="User Image">

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
              <img src="../../dist/img/eli.jpg" class="img-circle" alt="User Image">
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

            <li>
              <a href="../../pages/usuarios/index.php">
                <i class="fa fa-users"></i> <span> Usuarios </span>
              </a>
            </li>

            <li class="treeview active">
              <a href="#">
                <i class="fa fa-cog"></i> <span> Configuración </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../pages/configuracion/servidor.php"><i class="fa fa-server"></i> Servidor </a></li>
                <li><a href="../../pages/configuracion/correo.php"><i class="fa fa-envelope "></i> Correo </a></li>
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
                Servidor
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li class="active"> Servidor </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title"> Servidores </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">


                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Usuario</th>
                                        <th>Contraseña</th>
                                        <th>Puerto</th>
                                        <th>Ruta</th>
                                        <th>Editar</th>
                                        <th>Probar</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                    <tr>
                                        <td>1</td>
                                        <td>Servidor 1</td>
                                        <td>server_one</td>
                                        <td>xxxxxxxxx</td>
                                        <td>22</td>
                                        <td>opt/mediciones/cincominutal/</td>
                                        <th></th>
                                        <th></th>
                                    </tr> 
                                    <tr>
                                        <td>2</td>
                                        <td>Servidor 2</td>
                                        <td>server_two</td>
                                        <td>yyyyyyyyy</td>
                                        <td>22</td>
                                        <td>opt/mediciones/cincominutal/</td>
                                        <th></th>
                                        <th></th>
                                    </tr> 
                                    <tr>
                                        <td>3</td>
                                        <td>Servidor 3</td>
                                        <td>server_three</td>
                                        <td>zzzzzzzzz</td>
                                        <td>22</td>
                                        <td>opt/mediciones/cincominutal/</td>
                                        <th></th>
                                        <th></th>
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
                                                      <label>Usuario</label>
                                                      <input type="text" class="form-control" id="text-usuario">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Contraseña</label>
                                                      <input type="text" class="form-control" id="text-contrasena">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Puerto</label>
                                                      <input type="text" class="form-control" id="text-puerto">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Ruta</label>
                                                      <input type="text" class="form-control" id="text-ruta">
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
                                          <h4 class="modal-title"> Nuevo Servidor </h4>
                                      </div>

                                      <div class="modal-body">

                                          <form role="form">

                                              <div class="box-body">

                                                  <div class="form-group">
                                                      <label>Nombre</label>
                                                      <input type="text" class="form-control" id="text-nombre-resgister">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Usuario</label>
                                                      <input type="text" class="form-control" id="text-usuario-resgister">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Contraseña</label>
                                                      <input type="text" class="form-control" id="text-contrasena-resgister">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Puerto</label>
                                                      <input type="number" class="form-control" id="text-puerto-resgister">
                                                  </div>

                                                  <div class="form-group">
                                                      <label>Ruta</label>
                                                      <input type="text" class="form-control" id="text-ruta-resgister">
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
                          <h3 class="box-title">Nuevo Servidor</h3>
                      </div>
                      <div class="box-body">
                          <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModalRegistro"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
          <b>Versión</b> 0.0.0
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
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- Datatables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#example').DataTable({
                language: {
                  "url": "../../plugins/datatables/Spanish.json"
                },
                columns: [

                    {
                        "data": "id"
                    }, {
                        "data": "nombre"
                    }, {
                        "data": "usuario"
                    }, {
                        "data": "contrasena"
                    }, {
                        "data": "puerto"
                    }, {
                        "data": "ruta"
                    }, {
                        "data": "boton_uno",
                        "render": function(data, type, row) {
                            return '<button class="btn btn-info" data-toggle="modal" data-id="' + row.id + '" data-nombre="' + row.nombre + '" data-usuario="' + row.usuario + '" data-contrasena="' + row.contrasena + '" data-puerto="' + row.puerto + '" data-ruta="' + row.ruta + '" data-target="#myModal"><i class="fa fa-pencil" aria-hidden="true"></i></button>'
                        }
                    }, {
                        "data": "boton_dos",
                        "render": function() {
                            return '<button type="button" class="btn btn-success" onclick="myFunctionTest()"><i class="fa fa-exchange" aria-hidden="true"></i></button>'
                        }
                    }
                ]
            });

            $("#myModal").on('show.bs.modal', function(e) {

                var triggerLink = $(e.relatedTarget);
                var id = triggerLink.data("id");
                var nombre = triggerLink.data("nombre");
                var usuario = triggerLink.data("usuario");
                var contrasena = triggerLink.data("contrasena");
                var puerto = triggerLink.data("puerto");
                var ruta = triggerLink.data("ruta");

                $("#text-id").text("Id: " + id);
                $("#text-nombre").val(nombre);
                $("#text-usuario").val(usuario);
                $("#text-contrasena").val(contrasena);

                $("#text-puerto").val(puerto);
                $("#text-ruta").val(ruta);
                
            });

        });

        function myFunctionTest() {
          swal("Conectado", "", "success", {
            button: "OK",
          });
        }

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
