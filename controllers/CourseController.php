<?php
class CourseController extends BaseController {
    public function index(): void {
        $courses = (new CourseModel())->all();
        $this->render('courses/index', ['title' => 'Courses', 'courses' => $courses]);
    }
}
