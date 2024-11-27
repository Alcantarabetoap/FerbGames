<?php //se inicia el codigo php
    
    $servidor = "localhost"; //Definición de la variable $servidor que especifica la dirección del servidor de base de datos
    $usuario = "root"; //Definición de la variable $usuario que especifica el nombre de usuario para acceder a la base de datos
    $clave = ""; //Definición de la variable $clave que especifica la contraseña para acceder a la base de datos
    $baseDeDatos = "PROYECTO DROGAS Y SALUD MENTAL (PANTALLAS)"; //// Variable que almacena el nombre de la base de datos a la que se desea conectar

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); // Creación del enlace a la base de datos utilizando mysqli_connect()

//se termina el codigo php
?> 

<?php //se inicia el codigo php

    if(isset($_POST['enviartest2'])){ // Verificar si se ha enviado el formulario con el nombre del boton de html "enviar"

        // Obtener los datos enviados por el formulario y asignarlos a variables
        $nombretest2= $_POST ['nombretest2'];
        $edadtest2= $_POST ['edadtest2'];
        $generotest2= $_POST ['generotest2'];
        $pregunta1test2= $_POST ['pregunta1test2'];
        $pregunta2test2= $_POST ['pregunta2test2'];
        $pregunta3test2= $_POST ['pregunta3test2'];
        $pregunta4test2= $_POST ['pregunta4test2'];
        $pregunta5test2= $_POST ['pregunta5test2'];
        $pregunta6test2= $_POST ['pregunta6test2'];
        $pregunta7test2= $_POST ['pregunta7test2'];
        $pregunta8test2= $_POST ['pregunta8test2'];
        $pregunta9test2= $_POST ['pregunta9test2'];
        $pregunta10test2= $_POST ['pregunta10test2'];

        


        // Crear la consulta SQL para insertar los datos en la tabla "datos"
        $insertarDatos = "INSERT INTO datos3 VALUES('$nombretest2', '$edadtest2','$generotest2','$pregunta1test2','$pregunta2test2','$pregunta3test2','$pregunta4test2','$pregunta5test2','$pregunta6test62','$pregunta7test2','$pregunta8test2','$pregunta9test2','$pregunta10test2','')";
        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos); // Ejecutar la consulta SQL para insertar los datos en la base de datos

        header("Location: {$_SERVER['REQUEST_URI']}");exit; // Redireccionar de nuevo a la misma página después de ejecutar la acción
   } // fin del bloque if

// fin del archivo php
?>