<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina2PHP</title>
</head>
<body>
    <?php 
    echo "Pagina 2";
    /*Para irnos a otra pagina usamos: */
    //header("location: pagina3.php"); 
    /*Lo que hace es llevarnos a la pagina3.php sin necesidad de hacer nada, realmente ni pasamos por aqui a verlo*/
    print_r($_GET);
    /*Ahora para pasar los valores a la pagina3.php activamos de nuevo el header, y le pasamos los valores de la pagina2.php que vienen en la URL de la pagina index.html
    con el metodo GET   */
    header("location: pagina3.php?name=".$_GET['name']); 
    ?>
</body>
</html>