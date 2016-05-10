<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP 2DAM - Editar Empleado</title>

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
	
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Empleado</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Empleado a editar
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="insert_rrhh_edit.php">
                                        <div class="form-group">
                                            <label>ID Empleado</label>
                                            <input class="form-control" name="id" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[0];  
											}
										}
										
										?>"required></input>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input class="form-control" name="nombre" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[2];  
											}
										}
										
										?>"required></input>
                                        </div>
                                         <div class="form-group">
                                            <label>Primer Apellido:</label>
                                            <input class="form-control" name="apellido" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[3];  
											}
										}
										
										?>" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Segundo Apellido:</label>
                                            <input class="form-control" name="apellido2" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[4];  
											}
										}
										
										?>" required>
                                        </div>
                                         <div class="form-group">
                                            <label>DNI</label>
                                            <input class="form-control" name="dni" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[1];  
											}
										}
										
										?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Nacimiento</label>
                                            <input class="form-control" name="fecha_nac" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[6];  
											}
										}
										
										?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha Entrada</label>
                                            <input class="form-control" name="fecha_ent" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[7];  
											}
										}
										
										?>" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Direccion</label>
                                            <input class="form-control" name="direccion" value="<?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
											echo $row[5];  
											}
										}
										
										?>" required>
                                        </div>
                                        <div class="form-group">
                            
                                            <label>Departamento: </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline1" name="radio_departamento" value="option1" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[8]==1) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Desarrollo
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline2"
                                                name="radio_departamento" value="option2" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[8]==2) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Sistemas
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline3" name="radio_departamento" value="option3" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[8]==3) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Testing
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Contrato: </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline1" 
                                                name="radio_contrato" value="option1" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[9]==1) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Indefinido
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline2" 
                                                name="radio_contrato" value="option2" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[9]==2) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Temporal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" 
                                                name="radio_contrato" value="option3" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[9]==3) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Beca Estudios
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto trabajo: </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline1" 
                                                name="radio_puesto" value="option1" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[10]==1) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Junior
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline2" 
                                                name="radio_puesto" value="option2" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[10]==2) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Senior
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline3" 
                                                name="radio_puesto" value="option3" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[10]==3) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Manager 
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" id="optionsRadiosInline3" 
                                                name="radio_puesto" value="option4" <?php
						
										
										$dir="localhost:3306";
										$usr="root";
										$nom="erpdb";
										
										$link = mysqli_connect($dir, $usr, "", $nom);
										
										// comprobamos que hemos establecido conexión en el servidor
										if (!$link){
											exit;
											echo "error";
										}
											
										$ssql = "select * from empleados where Id_empleado=". $_POST['id'].";";
										$rs = mysqli_query($link, $ssql);
										
										if (mysqli_num_rows($rs)!=0){
											while ($row = mysqli_fetch_array($rs)){
                                                if ($row[10]==4) {
											     echo "checked";
                                                }
											}
										}
										
										?>>Directivo
                                            </label>
                                        </div>
                                        <input type="submit" class="btn btn-default" name="enviar"></input>
                                        <input type="reset" class="btn btn-default"></input>
                                            </div>
                                  
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                              
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
