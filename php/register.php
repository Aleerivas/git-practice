<?php 
include("conexion.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['nombre']; 
    $email = $_POST['correo']; 
    
    // HASH DE CONTRASEÑA 
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO usuarios (nombre, correo, password, rol) VALUES (?, ?, ?, 'usuario')"; 

    $stmt = $conn->prepare($sql); 

    if (!$stmt) {
        die("Error en prepare: " . $conn->error);
    }

    $stmt->bind_param("sss", $nombre, $correo, $password);

    if ($stmt->execute()) { 
        echo "Usuario registrado correctamente"; 
    } else { 
        echo "Error al registrar: " . $stmt->error; 
    } 

    $stmt->close();
    $conn->close();
}
?>
?> 
