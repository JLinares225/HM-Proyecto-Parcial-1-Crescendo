

<?php




    // Verificar si la variable de sesión está establecida y es verdadera
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        if(isset($_REQUEST["btnAgregar"])){
            $producto = $_REQUEST["txtProducto"];
            $cantidad = $_REQUEST["cant"];
            $precio = $_REQUEST["txtPrecio"];
            $imagen = $_REQUEST["txtImg"];


            //$_SESSION["carrito"]["prod"]["nombre"] = $producto;
            $_SESSION["carrito"][$producto]["cant"] = $cantidad;
            $_SESSION["carrito"][$producto]["precio"] = $precio;
            $_SESSION["carrito"][$producto]["imagen"] = $imagen;


           
            }


            echo "<script>alert('Producto $producto agregado con éxito al carrito.')</script>";


    }else{
        echo "<script>alert('Inicia sesión para agregar productos al carrito.')</script>";
    }


?>
