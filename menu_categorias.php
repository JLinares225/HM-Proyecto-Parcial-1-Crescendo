<!--Menu de categorías-->
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a href="?filtro=" onclick="filtrarProductos('');" data-bs-toggle="tab" role="tab" aria-controls="plant1"
                                        aria-selected="true" data-filter="todos">
                                        Todos
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="filtrarProductos('Instrumentos de cuerda');" data-bs-toggle="tab" role="tab" aria-controls="plant1"
                                        aria-selected="true" data-filter="Instrumentos de cuerda">
                                        Instrumentos de cuerda
                                    </a>
                                                                       
                                </li>


                                <li>
                                    <a href="#" onclick="filtrarProductos('Pianos y teclados');" data-bs-toggle="tab" role="tab" aria-controls="plant2"
                                        aria-selected="false" data-filter="Pianos y teclados">
                                        Pianos & Teclados
                                    </a>
                                </li>


                                <li>
                                    <a href="#" onclick="filtrarProductos('Instrumentos de percusión');" data-bs-toggle="tab" role="tab" aria-controls="plant3"
                                        aria-selected="false" data-filter="Instrumentos de percusión">
                                        Instrumentos de Percusión
                                    </a>
                                </li>


                                <li>
                                    <a href="#" onclick="filtrarProductos('Instrumentos de viento');" data-bs-toggle="tab" href="#plant3" role="tab" aria-controls="plant3"
                                        aria-selected="false" data-filter="Instrumentos de viento">
                                        Instrumentos de Viento
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <script>
                            function filtrarProductos(categoria) {
                                // Obtener la URL actual
                                var url = window.location.href;


                                // Verificar si ya hay parámetros en la URL
                                if (url.indexOf('?') !== -1) {
                                    // Si ya hay parámetros, agregar el filtro de categoría al final de la URL
                                    window.location.href = url + '&filtro=' + encodeURIComponent(categoria) + '&busqueda=';
                                } else {
                                    // Si no hay parámetros, agregar el filtro de categoría al final de la URL
                                    window.location.href = url + '?filtro=' + encodeURIComponent(categoria) + '&busqueda=';
                                }
                            }
                        </script>
    <!--Fin menu categorias -->
