 <tr>
                                            <td class="product_remove"><a href="./carrito?eliminar=<?php echo $indice; ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>


                                            <?php
                                                // Verificar si se ha enviado un índice para eliminar un producto
                                                if(isset($_GET["eliminar"])) {
                                                    $indice_eliminar = $_GET["eliminar"];
                                                    // Verificar si el índice existe en el carrito
                                                    if(isset($_SESSION["carrito"][$indice_eliminar])) {
                                                        // Eliminar el producto del carrito
                                                        unset($_SESSION["carrito"][$indice_eliminar]);
                                                        echo "<script>alert('Se eliminó el producto: $indice_eliminar');</script>";
                                                        echo "<script>window.location='./carrito';</script>";
                                                    } else {
                                                        echo "<script>alert('El producto $indice_eliminar que intenta eliminar no existe en el carrito');</script>";
                                                        echo "<script>window.location='./carrito';</script>";
                                                    }
                                                }
                                                ?>
