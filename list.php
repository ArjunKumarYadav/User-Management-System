<?php
require_once 'classes/Database.php';
require_once 'classes/Candidate.php';
require_once 'classes/CandidateManager.php';

use App\Services\CandidateManager;

$candidateManager = new CandidateManager();
$users = $candidateManager->getAll();

if (count($users) > 0) {
    echo '<table>';
    echo '<tr><th>Name</th><th>Email</th><th>Age</th><th>Gender</th><th>Actions</th></tr>';
    
    foreach ($users as $user) {
        echo '<tr>';
        // echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . htmlspecialchars($user['name']) . '</td>';
        echo '<td>' . htmlspecialchars($user['email']) . '</td>';
        echo '<td>' . $user['age'] . '</td>';
        echo '<td>' . $user['gender'] . '</td>';
        echo '<td class="action-buttons">';
        echo '<button class="btn-edit" onclick="editUser(' . $user['id'] . ')">Edit</button>';
        echo '<button class="btn-delete" onclick="deleteUser(' . $user['id'] . ')" style="background-color: #f44336;">Delete</button>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<p>No users found.</p>';
}


?>
