<?php
    //abrimos sesión
    session_start();

    //CAPTURO LOS INPUTS
    $user=$_POST["correo"];
    $passw=$_POST["pass"];

    //CONECTAMOS CON LA BBDD
    $conn = oci_connect('portafolio', 'portafolio', 'localhost/XE');
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }else{
        echo"conexion realizada";
    }


    $resultado = oci_parse($conn, "SELECT * FROM usuarios WHERE nombre='$user' and passwd='$passw'");
    oci_execute($resultado);
    $row = oci_fetch($resultado);


    if($row >0){
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
        header('location:usuario.html');
        exit;

    } else {
        echo "<script>alert('Usuario y/o Contraseña incorrectas.');
        window.location='index.html'</script>";
        session_destroy();
    }

    ?>