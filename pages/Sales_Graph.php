<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP 2DAM - Ventas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ERPDB";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 

    $sqlProducto = "SELECT Productos.Denominacion as Producto, COUNT(*) as NumVentas FROM Ventas INNER JOIN Pedidos ON Ventas.Id_pedido=Pedidos.Id_pedido INNER JOIN Empleados ON Pedidos.Fk_Empleado=Empleados.Id_empleado INNER JOIN Clientes ON Pedidos.Fk_Cliente=Clientes.Id_cliente INNER JOIN Productos ON Pedidos.Fk_Producto=Productos.Id_Producto GROUP by Productos.Denominacion";

    $resultProducto = $conn->query($sqlProducto);

    $sqlEmpresa = "SELECT Clientes.Nombre_cliente as Cliente, COUNT(*) as Compras_empresa FROM Ventas INNER JOIN Pedidos ON Ventas.Id_pedido=Pedidos.Id_pedido INNER JOIN Empleados ON Pedidos.Fk_Empleado=Empleados.Id_empleado INNER JOIN Clientes ON Pedidos.Fk_Cliente=Clientes.Id_cliente INNER JOIN Productos ON Pedidos.Fk_Producto=Productos.Id_Producto GROUP BY Clientes.Nombre_cliente";

    $resultEmpresa = $conn->query($sqlEmpresa);
    
    $sqlFecha = "SELECT YEAR(Ventas.Date_Complete) as Fecha, COUNT(*) as VentasAnio FROM Ventas INNER JOIN Pedidos ON Ventas.Id_pedido=Pedidos.Id_pedido INNER JOIN Empleados ON Pedidos.Fk_Empleado=Empleados.Id_empleado INNER JOIN Clientes ON Pedidos.Fk_Cliente=Clientes.Id_cliente INNER JOIN Productos ON Pedidos.Fk_Producto=Productos.Id_Producto GROUP BY YEAR(Ventas.Date_Complete) ORDER BY YEAR(Ventas.Date_Complete) ASC";

    $resultFecha = $conn->query($sqlFecha);

    $arrayProducto = [];
    $arrayEmpresa = [];
    $arrayFecha = [];
    
    $datosProducto ="";
    $datosEmpresa="";
    $datosFecha="";

    if ($resultProducto->num_rows > 0) {
                                               
    // output data of each row
    while($row = $resultProducto->fetch_assoc()) {
        //ARRAY DE DATOS
        $arrayProducto[] = $row['Producto'];
        $arrayProducto[] = $row['NumVentas'];
    
     }
    } else {
    echo  "0 results";
    }

    if ($resultEmpresa->num_rows > 0) {
                                               
    // output data of each row
    while($row = $resultEmpresa->fetch_assoc()) {
        //ARRAY DE DATOS
        $arrayEmpresa[] = $row['Cliente'];
        $arrayEmpresa[] = $row['Compras_empresa'];
    
     }
    } else {
    echo  "0 results";
    }

    if ($resultFecha->num_rows > 0) {
                                               
    // output data of each row
    while($row = $resultFecha->fetch_assoc()) {
        //ARRAY DE DATOS
        $arrayFecha[] = $row['Fecha'];
        $arrayFecha[] = $row['VentasAnio'];
    
     }
    } else {
    echo  "0 results";
    }

    //FORMATEAR EL TEXTO
    //
    //
    //['Producto1', 45],
    //['Producto2', 40],
    //['Producto3', 30],
    // ['Producto4', 98],
    // ['Producto5', 78],
    // ['Producto6',56]
    //
    //
    //
    //
    $longitud = count($arrayProducto);
    for($i=0; $i<$longitud - 2; $i += 2)
      {
      //saco el valor de cada elemento
      $datosProducto .="['".$arrayProducto[$i]."', ".$arrayProducto[$i + 1]."],";
      
      }
      $datosProducto .="['".$arrayProducto[$longitud -2]."', ".$arrayProducto[$longitud -1]."]"; 

      //EMPRESA 

      $longitud = count($arrayEmpresa);
    for($i=0; $i<$longitud - 2; $i += 2)
      {
      //saco el valor de cada elemento
      $datosEmpresa .="['".$arrayEmpresa[$i]."', ".$arrayEmpresa[$i + 1]."],";
      
      }
      $datosEmpresa .="['".$arrayEmpresa[$longitud -2]."', ".$arrayEmpresa[$longitud -1]."]"; 

      //ANIO 
      $longitud = count($arrayFecha);
    for($i=0; $i<$longitud - 2; $i += 2)
      {
      //saco el valor de cada elemento
      $datosFecha .="['".$arrayFecha[$i]."', ".$arrayFecha[$i + 1]."],";
      
      }
      $datosFecha .="['".$arrayFecha[$longitud -2]."', ".$arrayFecha[$longitud -1]."]"; 




    //INICIO DE LAS GRAFICAS
    $flotScript =  "
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript'>

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(productosChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(empresasChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(ventasChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function productosChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Productos');
        data.addColumn('number', 'Cantidad');
        data.addRows([
          ".$datosProducto."
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:''};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('productosChart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function empresasChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Empresas');
        data.addColumn('number', 'Compras');
        data.addRows([
          ".$datosEmpresa."
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:''};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('empresasChart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function ventasChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Fecha');
        data.addColumn('number', 'Ventas');
        data.addRows([ 
            ".$datosFecha."
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:''};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.AreaChart(document.getElementById('ventasChart_div'));
        chart.draw(data, options);
      }
    </script> ";

    echo $flotScript;

    $conn->close();

    ?>

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

        <!-- TERMINAN LAS POLLAS --><!-- TERMINAN LAS POLLAS --><!-- TERMINAN LAS POLLAS --><!-- TERMINAN LAS POLLAS -->
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gráficos de ventas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

           
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Línea de progreso cronológico de ventas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="ventasChart_div" style="width: 100%; height: 100%;"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cantidad de productos vendidos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="productosChart_div"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                
              
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            Cantidad de ventas a empresas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="empresasChart_div"></div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

                

                
                <!-- /.col-lg-6 -->
            <!-- /.row -->
           &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-outline btn-danger" onclick="window.print()">Imprimir en PDF</button>
           <br><br>
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

    <!-- Flot Charts JavaScript -->
    <script src="../bower_components/flot/excanvas.min.js"></script>
    <script src="../bower_components/flot/jquery.flot.js"></script>
    <script src="../bower_components/flot/jquery.flot.pie.js"></script>
    <script src="../bower_components/flot/jquery.flot.resize.js"></script>
    <script src="../bower_components/flot/jquery.flot.time.js"></script>
    <script src="../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>


</html>
