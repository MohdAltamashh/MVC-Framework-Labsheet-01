<?php
class FacultyModel {
    private PDO $db;
    public function __construct() { $this->db = Database::connect(); }
    public function all(): array {
        return $this->db->query(
            'SELECT f.*, d.department_name FROM faculties f
             LEFT JOIN departments d ON d.id=f.department_id ORDER BY f.id'
        )->fetchAll();
    }
}
