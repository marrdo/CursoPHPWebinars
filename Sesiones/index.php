<?php 
/* Para usar sesiones primero hay que inicializarlas   */
    session_start();

    /*Paso super importante, para pasar de una pagina a otra pondremos la funcion session_id() para que nos devuelva el id de la sesion y nos 
    gewnere un id unico. */
    session_id();
    $_SESSION['mi sesion'] ="Valor de mi sesion";
    $_SESSION['segunda sesion'] ="Valor de mi sesion 2";

?>

<a href="sesiones2.php">Pruebas de sesion</a>