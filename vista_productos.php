<div class="row shop_wrapper grid_4"> <!--id para tienda.js-->
                    <?php foreach ($productos as $producto): ?>
                        <div class="col-lg-3 col-md-4 col-12 ">


                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product-details.html">
                                            <img src="<?php echo $producto['imagen']; ?>" alt="">
                                        </a>
                                        <div class="action_links">
                                            <ul>
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
               
                                                <!--<li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"  @click="showProductModal(p)"> <i
                                                            class="icon-eye"></i></a></li>-->
                                            </ul>
                                        </div>
                                        <!--<div class="action_links list_action">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal_box" title="quick view"> <i
                                                            class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product_content grid_content">
                                        <div class="product_price_rating">
                                            <div class="product_rating">
                                                <ul>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <h4 class="product_name"><a href="#"><?php echo $producto['nombre']; ?></a></h4>
                                            <div class="price_box">
                                                <span class="current_price">$<?php echo $producto['precio']; ?></span>
                                                <!--<span class="old_price">{{p.PRECIO_ORIGINAL}}</span>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <div class="product_rating">
                                            <ul>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html"><?php echo $producto['nombre']; ?></a>
                                        </h4>
                                        <div class="price_box">
                                                <span class="current_price"><?php echo $producto['precio']; ?></span>
                                        </div>
                                        <div class="product_desc">
                                            <?php echo $producto['descripcion']; ?>
                                        </div>
                                        <div class="action_links list_action_right">
                                            <ul>
                                                <!--<li class="add_to_cart"><a href="cart.html" title="Add to cart">Agregar al carrito</a></li>-->


                                                <li class="add_to_cart">
                                                    <form action="./prueba" method="post">
                                                        <input type="hidden" name="txtProducto" value="<?php echo $producto['nombre']; ?>">
                                                        <input type="hidden" name="cant" value=1>
                                                        <input type="hidden" name="txtPrecio" value=<?php echo $producto['precio']; ?>>
                                                        <input type="hidden" name="txtImg" value=<?php echo $producto['imagen']; ?>>


                                                        <input type="submit" name="btnAgregar" title="Add to cart" value="Agregar al carrito">  
                                                    </form>                                                    
                                                </li>                                                






                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    <?php endforeach; ?>
                    </div>                    
            
