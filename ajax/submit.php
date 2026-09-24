<?php
require_once '../classes/Database.php';
require_once '../classes/Candidate.php';
require_once '../classes/CandidateManager.php';



use App\Models\Candidate;
use App\Services\CandidateManager;

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

try {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? null;
    $gender = $_POST['gender'] ?? '';
    
    if (empty($name) || empty($email)) {
        throw new Exception('Name and email are required.');
    }
    
    $candidate = new Candidate($name, $email, $age, $gender);
    $candidateManager = new CandidateManager();
    
    if ($candidateManager->add($candidate)) {
        $response['success'] = true;
        $response['message'] = 'User added successfully.';
    } else {
        throw new Exception('Failed to add user.');
    }
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>