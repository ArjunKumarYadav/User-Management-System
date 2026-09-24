<?php
require_once '../classes/Database.php';
require_once '../classes/Candidate.php';
require_once '../classes/CandidateManager.php';

use App\Services\CandidateManager;

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

try {
    $id = $_POST['id'] ?? 0;
    
    if (empty($id)) {
        throw new Exception('User ID is required.');
    }
    
    $candidateManager = new CandidateManager();
    
    if ($candidateManager->delete($id)) {
        $response['success'] = true;
        $response['message'] = 'User deleted successfully.';
    } else {
        throw new Exception('Failed to delete user.');
    }
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>