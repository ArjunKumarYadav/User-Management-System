<?php
require_once '../classes/Database.php';
require_once '../classes/Candidate.php';
require_once '../classes/CandidateManager.php';

use App\Models\Candidate;
use App\Services\CandidateManager;

header('Content-Type: application/json');

$response = ['success' => false, 'message' => ''];

try {
    // Handle GET request for fetching user data
    if (isset($_GET['id'])) {
        $candidateManager = new CandidateManager();
        $user = $candidateManager->getById($_GET['id']);
        
        if ($user) {
            $response['success'] = true;
            $response['user'] = $user;
        } else {
            throw new Exception('User not found.');
        }
    }
    // Handle POST request for updating user data
    else if ($_POST) {
        $id = $_POST['id'] ?? 0;
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $age = $_POST['age'] ?? null;
        $gender = $_POST['gender'] ?? '';
        
        if (empty($id) || empty($name) || empty($email)) {
            throw new Exception('ID, name, and email are required.');
        }
        
        $candidate = new Candidate($name, $email, $age, $gender);
        $candidateManager = new CandidateManager();
        
        if ($candidateManager->update($id, $candidate)) {
            $response['success'] = true;
            $response['message'] = 'User updated successfully.';
        } else {
            throw new Exception('Failed to update user.');
        }
    }
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);
?>