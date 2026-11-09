<?php
class BaseController {
    protected function render(string $view, array $data = []): void {
        extract($data, EXTR_SKIP);
        require __DIR__ . '/../views/layouts/header.php';
        require __DIR__ . '/../views/' . $view . '.php';
        require __DIR__ . '/../views/layouts/footer.php';
    }
}
