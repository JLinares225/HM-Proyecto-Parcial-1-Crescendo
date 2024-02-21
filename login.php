<?php
   
    // Conexión a la base de datos
    $db = mysqli_connect('sql3.freemysqlhosting.net', 'sql3684862', 'Q1Tbj8JGi6', 'sql3684862');
   
    $errors = [];


    // Verificar si hay errores de conexión
    if (!$db) {
        die("Error de conexión: " . mysqli_connect_error());
    } else {
        //echo "Conexión exitosa a la base de datos";
    }


    // Si se ha enviado el formulario
    if (isset($_POST['login_button'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    $_SESSION['logged_in'] = false;


   
    // Comprobar si el nombre de usuario es válido
    $query = "SELECT * FROM accounts WHERE username='$username'";
    $results = mysqli_query($db, $query);    
   
    //$_SESSION['logged_in'] = 0;


   
    if (mysqli_num_rows($results) == 1) {
        // Nombre de usuario válido, verificar contraseña
        $row = mysqli_fetch_assoc($results);




        if ($password == $row['password']) {
        // Inicio de sesión válido
       
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            //$_SESSION['logged_in'] = 1;
            //$inicio_sesion = true;
            echo "<script>alert('¡Bienvenido, $username!');</script>";
          
           


            //me redirecciona correctamente
            echo"<script language='javascript'>window.location='./prueba'</script>;";
            exit();
       
       
        } else {
        // Contraseña inválida
        $errors[] = "Nombre de usuario/contraseña inválidos";
        $_SESSION['logged_in'] = false;


        }
    } else {
        // Nombre de usuario inválido
        $errors[] = "Nombre de usuario/contraseña inválidos";
        $_SESSION['logged_in'] = false;


    }
    }
?>
