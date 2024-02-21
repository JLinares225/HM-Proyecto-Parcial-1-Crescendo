<?php


    // Iniciar sesión
    //session_start();
   
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
    if (isset($_POST['login_submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']); ///lo mismo
    $email = mysqli_real_escape_string($db, $_POST['email']); ///lo mismo




    // Verificar si ya existe un usuario con el mismo nombre
    $query_check = "SELECT * FROM accounts WHERE username='$username'";
    $result_check = mysqli_query($db, $query_check);
    if (mysqli_num_rows($result_check) > 0) {
        //echo "Ya existe un usuario con ese nombre de usuario.";
        echo "<script>alert('Ya existe un usuario con ese nombre de usuario. Intenta con otro nombre.');</script>";
        echo"<script language='javascript'>window.location='./registro'</script>;";
        exit(); // Detener la ejecución del script si ya existe un usuario con ese nombre
    }


   
    // Insertar los datos en la base de datos
    $query = "INSERT INTO accounts (username, password, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($db, $query)) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar usuario: " . mysqli_error($db);
    }


    // Cerrar la conexión a la base de datos
    mysqli_close($db);


    echo"<script language='javascript'>window.location='./login'</script>;";
    }
?>






<!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Registrarse</h3>
                        <ul>
                            <li><a href="./index">Inicio</a></li>
                            <li>Mi cuenta</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">                  
                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Registrate</h2>
                        <form action="./registro" method="post">
                            <p>
                                <label for='username'>Usuario<span>*</span></label>
                                <input type="text" name="username" required>
                            </p>
                            <p>
                                <label for='password'>Contraseña <span>*</span></label>
                                <input type="password" name="password" required>
                            </p>
                            <p>
                                <label for='email'>Correo electrónico <span>*</span></label>
                                <input type="text" name="email" required>
                            </p>
                            <div class="login_submit">
                                <button type="submit" name="login_submit">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->            
           


            </div>
        </div>
    </div>
    <!-- customer login end -->
