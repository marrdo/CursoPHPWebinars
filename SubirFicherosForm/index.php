<?php 
    echo '<pre>';
    print_r($_POST);
    echo '<br>';
    print_r($_FILES);
    echo '<br>';
    print_r($_FILES['fichero']['name']);
    echo '<br>';
    print_r($_FILES['fichero2']['name']);
    echo '</pre>';
?>