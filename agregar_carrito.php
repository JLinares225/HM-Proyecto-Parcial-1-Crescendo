<li class="add_to_cart">  <!--<a title="Agregar al carrito">
                                                    <i class="icon-shopping-bag"> -->
                                                    <form action="./prueba" method="post">
                                                        <input type="hidden" name="txtProducto" value="<?php echo $producto['nombre']; ?>">
                                                        <input type="hidden" name="cant" value=1>
                                                        <input type="hidden" name="txtPrecio" value=<?php echo $producto['precio']; ?>>
                                                        <input type="hidden" name="txtImg" value=<?php echo $producto['imagen']; ?>>


                                                       
                                                        <!-- Botón con ícono -->
                                                        <button type="submit" name="btnAgregar" title="Add to cart">
                                                            <i class="icon-shopping-bag"></i>
                                                        </button>
                                                    </form>                                                    
                                                <!--</i></a> -->
                                           
                                            </li>