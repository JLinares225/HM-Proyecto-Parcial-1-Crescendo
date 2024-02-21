 <!--Buscar-->
                        <div class="search_container">
                            <form action="#" method="GET">                                        
                                <!-- Campo oculto para mantener el valor del filtro -->
                                <input type="hidden" name="filtro" value="<?php echo htmlspecialchars($filtro); ?>">
                                <div class="search_box">
                                    <input placeholder="Buscar producto..." type="text" name="busqueda" value="<?php echo isset($_GET['busqueda']) ? $_GET['busqueda'] : ''; ?>">
                                    <button type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>  