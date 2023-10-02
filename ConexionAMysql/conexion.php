
<?php
/*Estas lineas obligan a que se muestren los errores en la consola, por si hay alguno y se queda la pantalla en blanco*/ 
error_reporting(E_ALL);
ini_set('display_errors', 1);

/* Para hacer las conexiones a la base de datos,  necesitaremos varios parametros.

Hostname Servidor --> localhost (es lo que estamos trabajando ahora) IP(en caso de servidor remoto ej: 192.168.82.241)*/

/*Username --> en nuestro caso: userdev*/

/*Password de mysql --> mysql --> */

/*Nombre de la base de datos   */

/*La conexion la hacemos con: */
$con = mysqli_connect('localhost', 'userdev','mysql','pruebas');/*A este comando le pasamos los parametros*/
if(!$con){
    die ('No se ha podido conectar a la base de datos por el siguiente error'. mysqli_connect_error());
}
echo 'Conexion exitosa';

echo '<pre>';
print_r($con);
echo '</pre>';
mysqli_close($con);
?>