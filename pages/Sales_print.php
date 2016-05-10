<html>
<head>
</head>
<body>
 <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ERPDB";
    $arrayDatos = [];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

     $sql = "SELECT Id_venta, Empleados.Nombre as Empleado, Clientes.Nombre_cliente as Cliente, Productos.Denominacion as Producto,Pedidos.Cantidad as Cantidad,Ventas.Date_Complete as Fecha FROM Ventas INNER JOIN Pedidos ON Ventas.Id_pedido=Pedidos.Id_pedido INNER JOIN Empleados ON Pedidos.Fk_Empleado=Empleados.Id_empleado INNER JOIN Clientes ON Pedidos.Fk_Cliente=Clientes.Id_cliente INNER JOIN Productos ON Pedidos.Fk_Producto=Productos.Id_Producto";
    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
                                               
            // output data of each row
                         while($row = $result->fetch_assoc()) {
                        $arrayDatos[] = $row['Id_venta'];
                        $arrayDatos[] = $row['Empleado'];
                        $arrayDatos[] = $row['Cliente'];
                        $arrayDatos[] = $row['Producto'];
                        $arrayDatos[] = $row['Cantidad'];
                        $arrayDatos[] = $row['Fecha'];
                    }
                    } else {
                     echo "0 results";
                                            }

                                            
                                            



ob_start();
require ('fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
 
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(30);
    // Título
    $this->Cell(30,10,'Informe de ventas');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function TablaColores($header, $datos)
{
 $logitud = count($datos);

//Colores, ancho de línea y fuente en negrita
$this->SetFillColor(7,0,141);
$this->SetTextColor(255);
$this->SetDrawColor(224,224,224);
$this->SetLineWidth(.3);
$this->SetFont('','B',8);
//Cabecera

for($i=0;$i<count($header);$i++)
$this->Cell(30,7,$header[$i],1,0,'C',1);
$this->Ln();
//Restauración de colores y fuentes
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
//Datos
$fill=false;

for($i = 0; $i < $logitud; $i += 6){
$this->Cell(30,6,$datos[$i],'LR',0,'L',$fill);
$this->Cell(30,6,$datos[$i + 1],'LR',0,'L',$fill);
$this->Cell(30,6,$datos[$i + 2],'LR',0,'L',$fill);
$this->Cell(30,6,$datos[$i + 3],'LR',0,'L',$fill);
$this->Cell(30,6,$datos[$i + 4],'LR',0,'L',$fill);
$this->Cell(30,6,$datos[$i + 5],'LR',0,'L',$fill);
$this->Ln();
$fill=!$fill;
}

//FIN DE BUCLE
//nueva linea ln
//$this->Ln();
$this->Cell(180,0,'','T');
$this->Ln();
}


}

// Títulos de las columnas
$header = array('id_venta', 'Empleado', 'Cliente', 'Producto','Cantidad','Fecha');
$totalVentas = count($arrayDatos)/6;
$totalCantidad = 0;
for($i = 0; $i < count($arrayDatos); $i += 6){
$totalCantidad += $arrayDatos[$i + 4];
}



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->TablaColores($header,$arrayDatos);
$pdf->Multicell(0,8,"Total de ventas: ".$totalVentas."\nTotal de Cantidad de Ventas: ".$totalCantidad);
$pdf->Output("informe_ventas.pdf","D");
echo "<script language='javascript'> window.open('informe_ventas.pdf','_self'); </script>";
exit;
ob_end_flush();
$conn->close(); 
?>
</body>
</html>