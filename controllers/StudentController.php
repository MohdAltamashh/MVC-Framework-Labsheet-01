<?php
class StudentController extends BaseController {
    public function index(): void {
        $students = (new StudentModel())->all();
        $this->render('students/index', ['title' => 'Students', 'students' => $students]);
    }
    public function show(): void {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $student = $id ? (new StudentModel())->find($id) : null;
        if (!$student) {
            http_response_code(404);
            $this->render('students/not_found', ['title' => 'Student not found']);
            return;
        }
        $this->render('students/show', ['title' => 'Student Profile', 'student' => $student]);
    }
}
