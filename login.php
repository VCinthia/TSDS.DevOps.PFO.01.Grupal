<?php

//Verificar si se recibieron los datos
if (isset($_POST['username']) && isset($_POST['password'])) {
    $usuario = $_POST['username'];
    $password = $_POST['password'];

    // Validación simple
    if (!empty($usuario) && !empty($password)) {
        // Devolver respuesta OK
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Campos vacíos']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Datos no recibidos']);
}
?>
