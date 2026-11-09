<section class="hero">
    <p class="eyebrow">MCA Semester 3 · MVC Framework</p>
    <h1>Student Information Portal</h1>
    <p>View student profiles, enrolled courses, faculty and department information through a simple PHP MVC application.</p>
</section>
<section class="stats">
    <?php foreach (['students' => 'Students', 'courses' => 'Courses', 'faculty' => 'Faculty', 'departments' => 'Departments'] as $key => $label): ?>
        <article class="stat-card"><span><?= htmlspecialchars($label) ?></span><strong><?= (int)$stats[$key] ?></strong></article>
    <?php endforeach; ?>
</section>
<section class="panel">
    <h2>Portal Modules</h2>
    <div class="module-grid">
        <a class="module" href="<?= BASE_URL ?>/index.php?route=students"><strong>Students</strong><small>Profile and enrolled course details</small></a>
        <a class="module" href="<?= BASE_URL ?>/index.php?route=courses"><strong>Courses</strong><small>Available courses and departments</small></a>
        <a class="module" href="<?= BASE_URL ?>/index.php?route=faculties"><strong>Faculty</strong><small>Faculty member directory</small></a>
        <a class="module" href="<?= BASE_URL ?>/index.php?route=departments"><strong>Departments</strong><small>College department information</small></a>
    </div>
</section>
