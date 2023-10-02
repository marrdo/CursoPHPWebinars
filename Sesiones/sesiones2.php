<?php 
    /*Las sesiones se incializan en TODAS las paginas que las usen*/
    session_start();
    echo "<pre>";
    echo $_SESSION['mi sesion'];
    echo '<br>';
    echo $_SESSION['segunda sesion'];
    echo '<br>';
    print_r($_SESSION);
    echo '<br>';
    echo 'Numero de la sesion: '.session_id();
    echo "</pre>";
?>