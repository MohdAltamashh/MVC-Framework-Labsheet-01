<div class="page-heading"><div><p class="eyebrow">Portal module</p><h1>Courses</h1></div></div>
<div class="card-grid">
<?php foreach ($courses as $course): ?>
<article class="panel"><p class="eyebrow"><?= htmlspecialchars($course['course_code']) ?></p><h2><?= htmlspecialchars($course['course_name']) ?></h2><p><?= htmlspecialchars($course['department_name'] ?? 'Department not assigned') ?></p><span class="pill"><?= (int)$course['duration_years'] ?> year(s)</span></article>
<?php endforeach; ?>
<?php if (!$courses): ?><div class="panel empty">No course records found.</div><?php endif; ?>
</div>
