<?php
// api_opiniones.php
header('Content-Type: application/json; charset=utf-8');

// CONFIGURACION BD - CAMBIA ESTO
$host = "localhost";
$usuario = "a0160084_alplato"; // ej: canaalplato_user
$clave = "c8hxVitEuay/9hU";
$bd = "a0160084_alplato"; // ej: canaalplato_db

$conn = new mysqli($host, $usuario, $clave, $bd);
$conn->set_charset("utf8mb4");
if ($conn->connect_error) { die(json_encode(["error" => "Conexion fallida"])); }

$metodo = $_SERVER['REQUEST_METHOD'];

if($metodo === 'GET'){
    // 1. LEER OPINIONES DE HOY
    $hoy = date('Y-m-d');
    $stmt = $conn->prepare("SELECT id, texto, ciudad, DATE_FORMAT(fecha, '%d/%m/%Y') as fecha, DATE_FORMAT(hora, '%H:%i') as hora FROM opiniones_pique WHERE fecha =? ORDER BY id DESC LIMIT 10");
    $stmt->bind_param("s", $hoy);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}

if($metodo === 'POST'){
    // 2. GUARDAR NUEVA OPINION
    $data = json_decode(file_get_contents('php://input'), true);
    $stmt = $conn->prepare("INSERT INTO opiniones_pique (texto, ciudad, fecha, hora) VALUES (?,?, CURDATE(), CURTIME())");
    $stmt->bind_param("ss", $data['texto'], $data['ciudad']);
    $stmt->execute();
    echo json_encode(["status" => "ok", "id" => $conn->insert_id]);
}

if($metodo === 'DELETE'){
    // 3. BORRAR 1 O TODAS
    $data = json_decode(file_get_contents('php://input'), true);
    if(isset($data['id'])){
        // Borrar 1
        $stmt = $conn->prepare("DELETE FROM opiniones_pique WHERE id =?");
        $stmt->bind_param("i", $data['id']);
    } else {
        // Borrar todas de hoy
        $hoy = date('Y-m-d');
        $stmt = $conn->prepare("DELETE FROM opiniones_pique WHERE fecha =?");
        $stmt->bind_param("s", $hoy);
    }
    $stmt->execute();
    echo json_encode(["status" => "ok"]);
}

$conn->close();
?>