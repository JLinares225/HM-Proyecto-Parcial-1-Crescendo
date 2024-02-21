<h3>Tu orden</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                            <?php
                                                       $total_acumulado = 0;                        
                                            // Ahora puedes usar $total_acumulado sin generar el error de "Undefined variable"
                                                if(isset($_SESSION["carrito"]) && !empty($_SESSION["carrito"])) {
                                                    foreach($_SESSION["carrito"] as $indice => $producto) {
                                            ?>
                                        <tr>
                                            <th>Productos</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                            <?php
                                                $precio = floatval($producto['precio']);
                                                $cantidad = intval($producto['cant']);


                                                $total_producto = $precio * $cantidad;  // Calcular el total del producto


                                                // Luego, puedes sumar este total al total acumulado
                                                $total_acumulado += $total_producto;
                                                                                 
                                            ?>
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $indice; ?> <strong> × <?php echo $producto['cant']; ?> </strong></td>
                                            <td> $ <?php echo $total_producto; ?></td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>    
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>$ <?php echo $total_acumulado; ?> </td>
                                        </tr>
                                        <!--<tr>
                                            <th>Envío</th>
                                            <td><strong>$150.00</strong></td>
                                        </tr>-->
                                        <tr class="order_total">
                                            <th>Total</th>
                                            <td><strong>$ <?php echo $total_acumulado; ?> </strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>