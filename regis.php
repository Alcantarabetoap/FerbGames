<?php //se inicia el codigo php
    
    $servidor = "localhost"; //Definición de la variable $servidor que especifica la dirección del servidor de base de datos
    $usuario = "root"; //Definición de la variable $usuario que especifica el nombre de usuario para acceder a la base de datos
    $clave = ""; //Definición de la variable $clave que especifica la contraseña para acceder a la base de datos
    $baseDeDatos = "centergame"; //// Variable que almacena el nombre de la base de datos a la que se desea conectar

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos); // Creación del enlace a la base de datos utilizando mysqli_connect()

//se termina el codigo php
?> 

<?php //se inicia el codigo php

    if(isset($_POST['enviar'])){ // Verificar si se ha enviado el formulario con el nombre del boton de html "enviar"

        // Obtener los datos enviados por el formulario y asignarlos a variables
        $name= $_POST ['name'];
        $apelli= $_POST ['apelli'];
        $correo= $_POST ['correo'];
        $tel= $_POST ['tel'];
        $password= $_POST ['password'];

        


        // Crear la consulta SQL para insertar los datos en la tabla "datos"
        $insertarDatos = "INSERT INTO regis VALUES('', '$name','$apelli','$correo','$tel','$password')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos); // Ejecutar la consulta SQL para insertar los datos en la base de datos

        header("Location: index.html"); // Cambia 'gracias.php' por la página a la que deseas redirigir
        exit(); // Asegura que el script se detenga después de la redirección

   } // fin del bloque if

// fin del archivo php
?>