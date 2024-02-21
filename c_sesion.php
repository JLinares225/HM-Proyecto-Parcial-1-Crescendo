<?php
                                                //session_start(); // Iniciar la sesión al principio de cada script que utilice sesiones


                                                // Verificar si la variable de sesión está establecida y es verdadera
                                                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                                                    // La sesión está iniciada
                                                    // Aquí puedes mostrar contenido o funcionalidades para usuarios con sesión iniciada
                                                    echo '<a href="./cerrar-sesion">Cerrar sesión</a>';
                                                } else {
                                                    // La sesión no está iniciada
                                                    // Aquí puedes mostrar contenido o funcionalidades para usuarios sin sesión iniciada
                                                    echo '<a href="./login">Iniciar sesión</a>';
                                                }
                                            ?>
