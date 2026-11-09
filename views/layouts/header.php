<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Student Portal') ?> | Student Information Portal</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/style.css">
</head>
<body>
<header class="topbar">
    <a class="brand" href="<?= BASE_URL ?>/index.php">Student Portal <span>MVC</span></a>
    <nav>
        <a href="<?= BASE_URL ?>/index.php">Dashboard</a>
        <a href="<?= BASE_URL ?>/index.php?route=students">Students</a>
        <a href="<?= BASE_URL ?>/index.php?route=courses">Courses</a>
        <a href="<?= BASE_URL ?>/index.php?route=faculties">Faculty</a>
        <a href="<?= BASE_URL ?>/index.php?route=departments">Departments</a>
    </nav>
</header>
<main class="container">
