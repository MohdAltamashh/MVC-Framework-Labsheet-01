<?php
class CourseModel {
    private PDO $db;
    public function __construct() { $this->db = Database::connect(); }
    public function all(): array {
        return $this->db->query(
            'SELECT c.*, d.department_name FROM courses c
             LEFT JOIN departments d ON d.id=c.department_id ORDER BY c.id'
        )->fetchAll();
    }
}
