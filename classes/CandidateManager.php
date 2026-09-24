<?php
namespace App\Services;

use App\Database\Database;
use App\Models\Candidate;

class CandidateManager {
    private $conn;
    
    public function __construct() {
        $this->conn = Database::getConnection();
    }
    
    public function add(Candidate $candidate) {
        $sql = "INSERT INTO users (name, email, age, gender) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$candidate->name, $candidate->email, $candidate->age, $candidate->gender]);
    }
    
    public function update($id, Candidate $candidate) {
        $sql = "UPDATE users SET name = ?, email = ?, age = ?, gender = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$candidate->name, $candidate->email, $candidate->age, $candidate->gender, $id]);
    }
    
    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
    
    public function getAll() {
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    public function getById($id) {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}