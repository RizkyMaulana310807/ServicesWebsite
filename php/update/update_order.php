<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');
include "../koneksi.php"; // Sesuaikan path ke file koneksi.php

// Enable error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Terima data JSON
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!$data) {
        throw new Exception('Invalid JSON data');
    }

    if (!isset($data['id']) || !isset($data['action'])) {
        throw new Exception('Missing required fields');
    }

    $id = $data['id'];
    $action = $data['action'];

    // Update status berdasarkan action
    $newStatus = '';
    switch($action) {
        case 'Terima':
            $newStatus = 'Pending';
            break;
        case 'Tolak':
            $newStatus = 'Drop';
            break;
        case 'Selesai':
            $newStatus = 'Selesai';
            break;
        case 'Drop':
            $newStatus = 'Drop';
            break;
        default:
            throw new Exception('Invalid action');
    }

    // Prepare statement
    if (!($stmt = $conn->prepare("UPDATE user_order SET status = ? WHERE id = ?"))) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    if (!$stmt->bind_param("si", $newStatus, $id)) {
        throw new Exception("Binding parameters failed: " . $stmt->error);
    }

    // Execute statement
    if (!$stmt->execute()) {
        throw new Exception("Execute failed: " . $stmt->error);
    }

    // Check if any rows were affected
    if ($stmt->affected_rows === 0) {
        throw new Exception("No rows were updated");
    }

    $stmt->close();
    $conn->close();

    echo json_encode(['success' => true, 'message' => 'Order updated successfully']);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?>