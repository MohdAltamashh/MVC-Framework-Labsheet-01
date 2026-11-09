<?php
class StudentModel {
    private PDO $db;
    public function __construct() { $this->db = Database::connect(); }

    public function all(): array {
        return $this->db->query(
            'SELECT s.id, s.roll_no, s.name, s.email, s.phone, s.course_id, s.department_id,
                    c.course_name, d.department_name
             FROM students s
             LEFT JOIN courses c ON c.id = s.course_id
             LEFT JOIN departments d ON d.id = s.department_id
             ORDER BY s.id DESC'
        )->fetchAll();
    }

    public function find(int $id): ?array {
        $stmt = $this->db->prepare(
            'SELECT s.*, c.course_name, d.department_name
             FROM students s
             LEFT JOIN courses c ON c.id=s.course_id
             LEFT JOIN departments d ON d.id=s.department_id
             WHERE s.id=?'
        );
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}
