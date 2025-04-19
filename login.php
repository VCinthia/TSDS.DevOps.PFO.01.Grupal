<?php
// backend.php

// Paso ii) Verificar si se recibieron los datos
if (isset($_POST['username']) && isset($_POST['password'])) {
    $usuario = $_POST['username'];
    $password = $_POST['password'];

    // Validación simple
    if (!empty($usuario) && !empty($password)) {
        // Paso iii) Devolver respuesta OK
        echo json_encode(['status' => 'ok', 'message' => 'Datos recibidos correctamente']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Campos vacíos']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Datos no recibidos']);
}
?>
