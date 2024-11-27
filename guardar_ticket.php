<?php
// Conexión a la base de datos
    $servidor = "localhost";
    $usuario = "root"; // Usuario de MySQL (por defecto: root)
    $clave = ""; // Contraseña de MySQL (por defecto: vacío)
    $baseDeDatos = "centergame"; // Nombre de la base de datos
 
    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?> 
<?php
// Verificar conexión


    if(isset($_POST['enviar'])){ // Verificar si se ha enviado el formulario con el nombre del boton de html "enviar"     
        // Obtener datos del formulario
        $consola = $_POST['consola'];
        $cantidad_consola = $_POST['cantidad-consola'];
        $video = $_POST['video'];
        $cantidad_video = $_POST['cantidad-video'];
        $acces = $_POST['acces'];
        $cantidad_acces = $_POST['cantidad-acces'];
        $total = $_POST['total'];

// Insertar datos en la base de datos
        $insertarDatos = "INSERT INTO ticket
         VALUES('', '$consola','$cantidad_consola','$video','$cantidad_video','$acces','$cantidad_acces','$total')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

        if ($ejecutarInsertar) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error: " . mysqli_error($enlace);
        }

        header("Location: ticket.html"); // Cambia 'gracias.php' por la página a la que deseas redirigir
        exit();

        mysqli_close($enlace);
    }
?>
