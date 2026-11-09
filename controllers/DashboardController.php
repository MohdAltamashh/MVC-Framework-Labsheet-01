<?php
class DashboardController extends BaseController {
    public function index(): void {
        $db = Database::connect();
        $stats = [
            'students' => (int)$db->query('SELECT COUNT(*) FROM students')->fetchColumn(),
            'courses' => (int)$db->query('SELECT COUNT(*) FROM courses')->fetchColumn(),
            'faculty' => (int)$db->query('SELECT COUNT(*) FROM faculties')->fetchColumn(),
            'departments' => (int)$db->query('SELECT COUNT(*) FROM departments')->fetchColumn()
        ];
        $this->render('dashboard/index', ['title' => 'Dashboard', 'stats' => $stats]);
    }
}
