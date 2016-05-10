<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP 2DAM - Editar Productos</title>

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

        <!-- Page Content -->
        
    
<?php
        /*
        Comenzamos el codigo PHP de nuestra pagina.
        Crearemos varias funciones para la conexion y mostrar todos los datos de la base de datos
        */
                
       echo"<form method=\"post\" action=\"editar.php\">";
		function conectar_bbdd(){
				$basedatos = "erpdb";
				$link = mysqli_connect("localhost", "root", "");
				if (!$link){
					echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
					exit;
				}
				$existe = false;
				$sql="SHOW DATABASES";
				$result=mysqli_query($link,$sql);
				while( $row = mysqli_fetch_row( $result ) and !$existe ):
					if ($row[0]== $basedatos) {
						$existe = true ;
					}
				endwhile;
				if (!$existe) {
					$sql = "CREATE DATABASE ". $basedatos;
					if (!mysqli_query($link, $sql)){
						echo "<h2 align='center'>ERROR2: Imposible crear base dedatos</h2>";
                        printf("Error: %s\n", mysqli_error($link));
						exit;
					}
				}
				$salida = mysqli_connect("localhost", "root", "", $basedatos);
                
				return $salida;	
			}
        
        todos_datos();
        
        function todos_datos(){
				$sql = "select * from productos";
				$result=mysqli_query(conectar_bbdd(),$sql);

				if (!$result) {
					echo "No hay datos que mostrar";
				}else{
					echo "<div id=\"page-wrapper\">";
            echo "<div class=\"row\">";
                echo "<div class=\"col-lg-12\">";
                    echo "<h1 class=\"page-header\">Editar Productos</h1>";
                echo "</div>";
                echo "<!-- /.col-lg-12 -->";
            echo "</div>";
            echo "<!-- /.row -->";
            echo "<div class=\"row\">";
                echo "<div class=\"col-lg-12\">";
                    echo "<div class=\"panel panel-default\">";
                        echo "<div class=\"panel-heading\">";
                         echo "<!--   DataTables Advanced Tables  -->";
                        echo "</div>";
                        echo "<!-- /.panel-heading -->";
                        echo "<div class=\"panel-body\">";
                            echo "<div class=\"dataTable_wrapper\">";
                                echo "<table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">";
                                    echo "<thead>";
                                        echo "<tr>";
											echo "<th> </th>";
                                            echo "<th>#</th>";
                                            echo "<th>Producto ID</th>";
                                            echo "<th>Denominacion</th>";
                                            echo "<th>Precio Unitario</th>";
											echo "<th>Precio Coste c/u</th>";
                                            echo "<th>Ubicacion</th>";
                                            echo "<th>Proveedor</th>";	
                                            echo "<th>Stock</th>";	
                                        echo "</tr>";
                                    echo "</thead>";
                    echo "<tbody>";
                    $indice = 1;
                    $array_post[]=null;
					while($row = mysqli_fetch_array($result)) {
                        
                                            echo "<tr>";
											echo "<td>";                                              
								            echo "<label>";
                                            echo "<input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios\" value=".$row['Id_Producto'].">";
                                           // echo "<input type='checkbox' name='checkbox[]'  id='checkbox[]' value= ".$row['Id_Producto'].">";
                                            echo "</label></td>";
                                            echo "<td>" . $indice . "</td>";
                                            echo "<td>" . $row["Id_Producto"] . "</td>";
                                            echo "<td>" . $row["Denominacion"] . "</td>";
                                            echo "<td>" . $row["Pvp"] . "</td>";
                                            echo "<td>" . $row["Precio_Coste"] . "</td>";
                                            echo "<td>" . $row["Ubicacion"] . "</td>";
                                            echo "<td>" . $row["Nombre_Proveedor"] . "</td>";
                                            echo "<td>" . $row["Stock"] . "</td>";
                                            echo "</tr>";
                        $array_pos[$indice]=$row["Id_Producto"];
                        $indice ++;
                        
					}
                    echo "</tbody>";
					 echo "</table>";
                            echo "</div>";   
                                echo "<button type=\"submit\" value=\"Editar Producto\" name=\"editar\" class=\"btn btn-default\">Edit Product</button>";
                            echo "<!-- /.table-responsive -->";
                        echo "</div>";
                        echo "<!-- /.panel-body -->";
                    echo "</div>";
                    echo "<!-- /.panel -->";
                echo "</div>";
                    echo "</div>";
                    echo "<!-- /.col-lg-12 -->";
                echo "</div>";
                echo "<!-- /.row -->";
            echo "</div>";
            echo "<!-- /.container-fluid -->";
        echo "</div>";
        echo "<!-- /#page-wrapper -->";

    echo "</div>";
    echo "<!-- /#wrapper -->"; 
				}

			}
               

        
          if(isset ($_POST['editar'])){
              
              if (isset ($_POST["optionsRadios"])){
                  $edit_id= $_POST["optionsRadios"]; 
                                    //ESTE FUNCIONA      VVVVVVVVVVVVVV
                                //<input type="hidden" name="seleccionado" value="10" />
          //     echo  " <input type='hidden' name='seleccionado' value='$edit_id' />";
                  
                  $sql = "select * FROM Productos WHERE Id_Producto='$edit_id'"; 
                        $result=mysqli_query(conectar_bbdd(),$sql); 
                       
              }
        //  editar_producto();
          }
      
        
        
        
        
        echo"</form>";
?>                
                
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
