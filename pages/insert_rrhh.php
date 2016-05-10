<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP 2DAM - Insertar Empleado</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Inicio</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="prod_list.php">Listar</a>
                                </li>
                                <li>
                                    <a href="Prod_edit.php">Editar</a>
                                </li>
                                <li>
                                    <a href="Prod_insert.html">Insertar</a>
                                </li>
                                <li>
                                    <a href="Prod_delete.php">Borrar</a>
                                </li>
                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="cust_list.php">Listar</a>
                                </li>
                                <li>
                                    <a href="cust_edit.php">Editar</a>
                                </li>
                                <li>
                                    <a href="cust_insert.php">Insertar</a>
                                </li>
                                <li>
                                    <a href="cust_delete.php">Borrar</a>
                                </li>
                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Pedidos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pedidolista.php">Listar</a>
                                </li>
                                <li>
                                    <a href="editarpedido.php">Editar</a>
                                </li>
                                <li>
                                    <a href="nuevopedido.php">Insertar</a>
                                </li>
								<li>
                                    <a href="confirmarpedido.php">Confirmar</a>
                                </li>
                                <li>
                                    <a href="pedidodelete.php">Borrar</a>
                                </li>
                             
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Ventas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sales_list.php">Listar</a>
                                </li>
                                <li>
                                    <a href="sales_graph.php">Gráficos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil fa-fw"></i> Recurso Humanos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="employ_list.html">Listar</a>
                                </li>
                                <li>
                                    <a href="employ_edit.html">Editar</a>
                                </li>
                                <li>
                                    <a href="employ_insert.html">Insertar</a>
                                </li>
								<li>
                                    <a href="employ_print.html">Imprimir</a>
                                </li>
                                <li>
                                    <a href="employ_delete.html">Borrar</a>
                                </li>
								<li>
                                    <a href="employ_config.html">Configuracion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
       
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blank</h1>
                        <?php
  
function insert(){
    ////echo "<h1> Ejemplo - Insertar datos en una tabla </h1>";
    //Base de datos sobre la que vamos a crear la tabla
     if ($_POST['radio_departamento']) {
            if($_POST['radio_departamento']=="option1"){
            $id_departamento = 1;

            }
             elseif($_POST['radio_departamento']=="option2"){
            $id_departamento = 2;

            }
             elseif($_POST['radio_departamento']=="option3"){
            $id_departamento = 3;

            }
     }
     if ($_POST['radio_contrato']) {
            if($_POST['radio_contrato']=="option1"){
            $id_contrato = 1;

            }
             elseif($_POST['radio_contrato']=="option2"){
            $id_contrato = 2;

            }
             elseif($_POST['radio_contrato']=="option3"){
            $id_contrato = 3;

            }
     }
     if ($_POST['radio_puesto']) {
              if($_POST['radio_puesto']=="option1"){
            $id_puesto = 1;

            }
             elseif($_POST['radio_puesto']=="option2"){
            $id_puesto = 2;

            }
             elseif($_POST['radio_puesto']=="option3"){
            $id_puesto = 3;

            }
     }
    
    
    $basedatos = "ERPDB";
    //conectamos con el servidor
    $link = mysqli_connect("localhost", "root", "", $basedatos);
    // comprobamos que hemos estabecido conexión en el servidor
    if (!$link){
    //echo "<h2 align='center'>ERROR: Imposible establecer conección con el servidor</h2>";
    exit;
    }
    // creamos el INSERT sobre la tabla FACTURAS
    $query = 'INSERT INTO empleados (dni,nombre,apellido1,apellido2,direccion,fecha_nacimiento,fecha_entrada,id_departamento,id_contrato,id_puesto_trab) VALUES ("'. $_POST['dni'] .'", "'. $_POST['nombre'].'", "'. $_POST['apellido'].'", "'. $_POST['apellido2'].'", "'. $_POST['direccion'].'", "'. $_POST['fecha_nac'].'", "'. $_POST['fecha_ent'].'", '.$id_departamento.', '.$id_contrato.', '.$id_puesto.')';
    // Realizamos la query
    if (mysqli_query($link, $query)) {
    echo "Datos guardados";
        return true;
    } else {
        $cadena = mysqli_error($link);
        $buscar = "Duplicate entry";
        $resultado = strpos($cadena, $buscar);
 
        if($resultado !== FALSE){
            echo "Ese usuario ya existe";
            return false;
        }
        echo "<h1>Registro Fallido</h1>";
        printf("Error: %s\n", mysqli_error($link));
    }
    
}



        
        if ($_POST['enviar']) {
           
                echo "Guardando en BBDD...</br>";
                insert();
                    
                }
			
?> 
                          <div class="panel panel-default">
                        <div class="panel-heading">
                            Empleados de la empresa
                        </div>
						
						
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nº Empleado</th>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Apellido 1</th>
                                            <th>Apellido 2</th>
                                            <th>Direccion</th>
											<th>Fecha de nacimiento</th>
											<th>Antiguedad</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr> \n";  
											}
										}
										
										?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
