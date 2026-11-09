<?php
class DepartmentController extends BaseController {
    public function index(): void {
        $departments = (new DepartmentModel())->all();
        $this->render('departments/index', ['title' => 'Departments', 'departments' => $departments]);
    }
}
