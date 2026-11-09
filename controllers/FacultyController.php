<?php
class FacultyController extends BaseController {
    public function index(): void {
        $faculties = (new FacultyModel())->all();
        $this->render('faculties/index', ['title' => 'Faculty', 'faculties' => $faculties]);
    }
}
