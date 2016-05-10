<!DOCTYPE html>
<?php
	function conectar_bbdd(){
		$basedatos = "ERPDB";
		$link = mysqli_connect("localhost", "root", "");
		if (!$link){
			echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
			exit;
		}
		$salida = mysqli_connect("localhost", "root", "", $basedatos);
		return $salida;	
	}
	function mostrarProductos(){
		$sql = "select Denominacion , Pvp , Stock from productos";
		$result=mysqli_query(conectar_bbdd(),$sql);
		if($result){
			$i=0;
			while($row = mysqli_fetch_array($result)) {
				$nombreinput = "Producto" . $i;
				echo "<tr>";
				echo "<td>" . $row["Denominacion"] . "</td>";
				echo "<td align='center'>" . $row["Pvp"] . "&euro;</td>";
				echo "<td align='center'><input type='number'  value='0'  name='" . $nombreinput . "' min='0' max=" . $row["Stock"] . " required></td>";
				echo "</tr>";
				$i++;
			}
		}
	}
	function mostrarClientes(){
		echo "<select name='clientes' required>";
		$sql = "select 	Id_cliente , Nombre_cliente , Apellido_cliente from clientes";
		$result=mysqli_query(conectar_bbdd(),$sql);
		if($result){
			while($row = mysqli_fetch_array($result)) {
				$nombreCliente = $row["Nombre_cliente"] . " " . $row["Apellido_cliente"];
				echo "<option value=". $row["Id_cliente"] .">" . $nombreCliente . "</option>";
			}
		}
		echo "</select>";
	}


	function mostrarEmpleados(){
		echo "<select name='empleados' required>";
		$sql = "select Id_empleado , Nombre , Apellido1 , Apellido2 from empleados";
		$result=mysqli_query(conectar_bbdd(),$sql);
		if($result){
			while($row = mysqli_fetch_array($result)) {
				$nombreEmpleado = $row["Nombre"] . " " . $row["Apellido1"] . " " . $row["Apellido2"];
				echo "<option value=". $row["Id_empleado"] .">" . $nombreEmpleado . "</option>";
			}
		}
		echo "</select>";
	}

    
    function calcuPedidos(){      

      $sql = 'SELECT DISTINCT Id_pedido FROM Pedidos WHERE Id_pedido IS NOT NULL';
      $result=mysqli_query(conectar_bbdd(),$sql);
      $numero_filas = 0;
      while($row = mysqli_fetch_array($result)) {
          $numero_filas++;
      }
          return $numero_filas;
    }  

   





?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP 2DAM - Nuevo Pedido</title>

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
	</div>

        <!-- *********************************************************************Page Content -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nuevo Pedido</h1>
                        
                        
                        <!-- PANEL DE PEDIDOS -->
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><p><?php  echo calcuPedidos() ?></p></div>
                                    <div>Total Pedidos</div> 
                                </div>
                            </div>
                        </div>
                    </div><!--  FIN PANEL PEDIDOS-->
            
                        
                      <div class="panel panel-default"><!--  PANEL DEFAULT CON BOTONES DE IMPRIMIR-->
                        <div class="panel-heading">
                            <b>REGISTRANDO UN NUEVO PEDIDO</b> <br>
                            <font color=#337AB7><b>Pedidos Registrados: <?php  echo calcuPedidos() ?> </b></font>
                              <!-- BOTONES REFRESH Y PRINT -->
                            <div align="right" >
                                
                                <button type="button" class="btn btn-primary btn-circle" onclick="window.print();">
                                    <i class="glyphicon glyphicon-print"></i>
                                </button>
                                
                                <button type="button" class="btn btn-primary btn-circle" onclick="document.location.reload();">
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </div>  
                        
                            <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                                    <form method="post" action="confirmarPedido.php">
                                        
                                     <!-- TABLA DE INSERT DE REGISTRO : ID,EMPLE,CLIENT,FECHA,  -->   
                                    <div class="row">
                                        <div class="col-sm-12">
                                            
                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                     <thead>
                                        <tr role="row">
                                            <tr>
									           <td>Número de Pedido</td>
                                                <?php  $idAuto= calcuPedidos() +1 ?> 
                                           <!-- <td><?php $idAuto ?></td>-->
                                                
                                                   
				                            <td><input type="number" name="nPedido" min="1"  value="<?php echo $idAuto ?>" required></td>
                                            
									           <td>Cliente</td>
									           <td>
										          <?php
											         mostrarClientes();
										          ?>
									           </td>
								            </tr>
								            <tr>
									           <td>Vendedor</td>
									           <td>
										          <?php
											         mostrarEmpleados();
										           ?>
									           </td>
									           <td>Fecha de Pedido</td>
									           <td><input type="date" name="fecha_pedido" required></td>
								            </tr>
                                         
                                        </tr>
                                    </thead>
                                </table>
                             </div>             
                        </div><!-- FIN TABLA INSERT DE REGISTRO  -->
                                        
  
                                
<!--  NUEVA TABLA CON FILTROS **********************************************-->
                                        
             <div class="panel panel-default">
                        <div class="panel-heading">
                            LISTA DE PRODUCTOS
                       </div> 
                 
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                
                                <!-- /.PANEL de Búsqueda Y Cantidad de Registros x pag -->
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div></div>
                                    
                                    <!-- /.TABLA CON CABECERA Y CELDAS -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                <!-- /.cabeceras de columnas -->            
                                   <thead> 
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 168.2px;">Denominación</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 205.2px;">Precio</th>
                                            
                                            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187.2px;">Cantidad(s)</th>

                                        </tr>
                                    </thead>
                                                
                                     <!-- filas y celdas -->             
                                    <tbody align="center">  
                                    <tr class="gradeA odd" role="row">
                                     
                                        </tr>
                                        <?php
										mostrarProductos();
									   ?>
                                        
                                    </tbody>
                                    
                                </table>
                 
                                </div>
                            </div> <!-- /. FIN TABLA CON CABECERA Y CELDAS -->
                                
                        <div>        
                            <table style="width:50%" align="center">
                                <tr align="center">
                                    <td><input class="btn btn-outline btn-info" type="submit" value="Generar Pedido" name="enviar"></td>
                                    <td><input type="reset"  class="btn btn-outline btn-default" value="Resetear" name="reset"></td>
                                </tr>
                            </table>
                        </div>
 
</div>                                 
                                    
             <!--  COMIENZA LA PAGINACIÓN ******-->                       
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of <?php  echo calcuPedidos() ?> entries</div>
                                            
                                        </div>
                                                                            
                                        <div class="col-sm-6">
                                            <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                                <ul class="pagination">
                                                    
                                                    <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                                                    
                                                    <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                                                    
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                                                    
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                                    
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li>
                                                    
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li>
                                                    
                                                    <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li>
                                                    
                                                    <li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> <!--  TERMINA PAGINACIÓN ******-->
                                    
                </div><!-- FIN PANEL BODY.panel-heading -->
                 
                 
                            
                                
                                
    </form> <!-- ***********  TERMINA formulario  -->
                            </div> <!-- TERMINA /.dataTable_wrapper -->
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
        <!-- *********************************************************************Page Content -->
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
                    
                    
                    
                   
