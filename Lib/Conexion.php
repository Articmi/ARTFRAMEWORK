<?php

# - NameSpace
    namespace Lib;
    use Lib\Logger;

# - Conexion MySQLI
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "name_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        Logger::log("[ARTICMI/ART0006]", "MySQLI connection error: " . mysqli_connect_error());
        die();
    } else {
        echo "Connection successfull.";
    }

    // Example of use:
    $sql = "SELECT * FROM users";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        // Iterar sobre los resultados
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $fila["id"] . " - Name: " . $fila["name"] . "<br>";
        }
    } else {
        echo "No records found.";
    }

    mysqli_free_result($resultado);
    mysqli_close($conn);
