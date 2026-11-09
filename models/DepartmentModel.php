<?php
class DepartmentModel {
    private PDO $db;
    public function __construct() { $this->db = Database::connect(); }
    public function all(): array {
        return $this->db->query('SELECT * FROM departments ORDER BY department_name')->fetchAll();
    }
}
