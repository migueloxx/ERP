<?php

function conectar_bbdd(){
    $basedatos = "erpdb";
    $link = mysqli_connect("localhost", "root", "",$basedatos);
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
            exit;
        }
    }
    $salida = mysqli_connect("localhost", "root", "", $basedatos);
    return $salida;
}


function crear_tabla(){
    if (!conectar_bbdd()){
        echo "<h2 align='center'>ERROR: Imposible establecer conexión con el servidor</h2>";
        exit;
    }
    $table="login";
    $sentencia="SHOW TABLES LIKE '" . $table . "'";
    $resulset=mysqli_query(conectar_bbdd(),$sentencia);
    $resultado=mysqli_num_rows($resulset);
    if($resultado == 0){
        $crear=true;
        echo "No hay tablas como login.";
    }else{
        echo "Login ya existe.";
        $crear=false;
    }
    if($crear){
        $sql = "CREATE TABLE login(User VARCHAR(10) PRIMARY KEY, Password VARCHAR(50) NOT NULL, Email VARCHAR(50) NOT NULL)";
        if (conectar_bbdd()->query($sql) === TRUE) {
            echo "Table Login created successfully<br />";
        } else {
            echo "Error creating table: " .conectar_bbdd()->error."<br />";
        }
    }
}



function checkLogin(){
    crear_tabla();
    $table="login";
    $sql="SELECT * FROM ".$table." WHERE User='".$_POST['user']."' AND Password='".$_POST['password']."'";
    //echo $sql;
    $result = mysqli_query(conectar_bbdd(),$sql) or die ('Error selecting user: '.mysqli_error($result).'\r\n');
    $condition=false;
    while($row = mysqli_fetch_array($result)) {
        if (($row['User'] == $_POST['user']) AND ($row['Password'] == $_POST['password'])) {
            echo "Correct.";
            //session_register("myusername");
            //session_register("mypassword");
           $condition=true;
        }
    }
    if($condition){
        header("location:index.html");
    }else{
        echo "Data input not registered.<br>";
        echo "<a href='login.html'>";
        echo "Try again. </a>";
    }
}

function checkSign(){
    crear_tabla();
    $table = "login";
    $user=$_POST['user'];
    $pass=$_POST['password'];
    $confirmpass=$_POST['confirm_password'];
    $email=$_POST['email'];
    ini_set('display_errors', 'on');
    $condition=true;
        if($pass==$confirmpass) {
            echo "Both passwords are the same.";
            $sql = "SELECT Email FROM ".$table." WHERE Email='".$email."'";
            $result = mysqli_query(conectar_bbdd(),$sql) or die ('Error selecting email: '.mysqli_error($result).'\r\n');
            while($row = mysqli_fetch_array($result)) {
                if ($row['Email'] == $email) {
                    echo "Email already in use.";
                    $condition = false;
                }
                }
            if($condition){
                    echo "New Email.";
                    $sql = "SELECT User FROM ".$table." WHERE User='".$user."'";
                    $result = mysqli_query(conectar_bbdd(),$sql) or die ('Error selecting user: '.mysqli_error($result).'\r\n');
                    while($row = mysqli_fetch_array($result)) {
                        if ($row['User'] == $_POST['user']) {
                            echo "User in use.";
                            $condition=false;
                        }else {
                            echo "Correct.";
                        }
                    }
                }


        }else{
            echo "Different passwords.";
            $condition=false;
        }
        echo "Data input not registered.<br>";
        echo "<a href='login.html'>";
        echo "Try again. </a>";
    
        if($condition) {
            $sql = "INSERT INTO " . $table . " VALUES ('" . $user . "','" . $pass . "','" . $email . "')";
            $result = mysqli_query(conectar_bbdd(), $sql) or die ('Error registering user: ' . mysqli_error($result) . '\r\n');
            if ($result) {
                header('Location:index.html');
            } else {
                echo "Incorrect data.";
                // header('Location:SignUp.html');
            }
        }

}

function changePass(){
    ini_set('display_errors', 'on');
    crear_tabla();
    $table="login";
    $sql="SELECT * FROM ".$table." WHERE User='".$_POST['user']."' AND Password='".$_POST['password']."'";
    $result = mysqli_query(conectar_bbdd(),$sql) or die ('Error selecting user: '.mysqli_error($result).'\r\n');
    $condition=false;
    while($row = mysqli_fetch_array($result)) {
        if (($row['User'] == $_POST['user']) AND ($row['Password'] == $_POST['password'])) {
            echo "Correct.";
            $condition=true;
        }
    }
    if($condition){
        if($_POST['new_password']==$_POST['confirm_new_password']){
                $sql = "Update ".$table." set Password='".$_POST['new_password']."' where Password='".$_POST['password']."' and User='".$_POST['user']."'";
                $result = mysqli_query(conectar_bbdd(), $sql) or die ('Error changing password: ' . mysqli_error($result) . '\r\n');
                if ($result) {
                    header('Location:login.html');
                } else {
                    echo "Error updating passwords.";
                }
        }
    }else{
        header("location:login.html");
    }
}





if($_POST["Login"]=="Login") {
    checkLogin();
}
if($_POST["Login"]=="Sign Up") {
    checkSign();
}
if($_POST["Login"]=="change pass"){
    changePass();
}
?>