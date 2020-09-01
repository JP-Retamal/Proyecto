<?php
    //include_once 'Conexion.php'; ver coneccion a la BD 
  
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        header('location: ../Capa_Interfaz/Index.html'); 
          // destroy the session 
        session_destroy(); 
    }
    //ver inicio de sesión por rol.
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: ../Paginas/usuario.html'); 
            break;

            case 2:
            header('location: Productor.php');
            break;

            case 3:
                header('location: ClienteExterno.php');
            break;

            case 4:
                header('location: ClienteInterno.php');
            break;

            case 5:
                header('location: Consultor.php');
            break;

            case 6:
                header('location: Transportista.php');
            break;

            default:
        }
    }

    if(isset($_POST['correo']) && isset($_POST['pass'])){
        $username = $_POST['correo'];
        $password = $_POST['pass'];

       // $db = new Database(); ver archivo conexion
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;

                case 2:
                header('location: colab.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
        

    }
?>