<?php //se inicia el codigo php
    
    $servidor = "localhost"; //Definición de la variable $servidor que especifica la dirección del servidor de base de datos
    $usuario = "root"; //Definición de la variable $usuario que especifica el nombre de usuario para acceder a la base de datos
    $clave = ""; //Definición de la variable $clave que especifica la contraseña para acceder a la base de datos
    $baseDeDatos = "PROYECTO DROGAS Y SALUD MENTAL (PANTALLAS)"; //// Variable que almacena el nombre de la base de datos a la que se desea conectar

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); // Creación del enlace a la base de datos utilizando mysqli_connect()

//se termina el codigo php
?> 

<?php //se inicia el codigo php

    if(isset($_POST['enviartest1'])){ // Verificar si se ha enviado el formulario con el nombre del boton de html "enviar"

        // Obtener los datos enviados por el formulario y asignarlos a variables
        $nombretest1= $_POST ['nombretest1'];
        $edadtest1= $_POST ['edadtest1'];
        $generotest1= $_POST ['generotest1'];
        $pregunta1test1= $_POST ['pregunta1test1'];
        $pregunta2test1= $_POST ['pregunta2test1'];
        $pregunta3test1= $_POST ['pregunta3test1'];
        $pregunta4test1= $_POST ['pregunta4test1'];
        $pregunta5test1= $_POST ['pregunta5test1'];
        $pregunta6test1= $_POST ['pregunta6test1'];
        $pregunta7test1= $_POST ['pregunta7test1'];
        $pregunta8test1= $_POST ['pregunta8test1'];
        $pregunta9test1= $_POST ['pregunta9test1'];
        $pregunta10test1= $_POST ['pregunta10test1'];

        


        // Crear la consulta SQL para insertar los datos en la tabla "datos"
        $insertarDatos = "INSERT INTO datos2 VALUES('$nombretest1', '$edadtest1','$generotest1','$pregunta1test1','$pregunta2test1','$pregunta3test1','$pregunta4test1','$pregunta5test1','$pregunta6test1','$pregunta7test1','$pregunta8test1','$pregunta9test1','$pregunta10test1','')";
        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos); // Ejecutar la consulta SQL para insertar los datos en la base de datos

        header("Location: {$_SERVER['REQUEST_URI']}");exit; // Redireccionar de nuevo a la misma página después de ejecutar la acción
   } // fin del bloque if

// fin del archivo php
?>