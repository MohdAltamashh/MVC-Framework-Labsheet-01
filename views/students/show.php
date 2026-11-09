<p class="eyebrow"><a href="<?= BASE_URL ?>/index.php?route=students">← Back to students</a></p>
<section class="panel profile">
    <h1><?= htmlspecialchars($student['name']) ?></h1>
    <p><b>Roll Number:</b> <?= htmlspecialchars($student['roll_no']) ?></p>
    <p><b>Email:</b> <?= htmlspecialchars($student['email']) ?></p>
    <p><b>Phone:</b> <?= htmlspecialchars($student['phone'] ?? '—') ?></p>
    <p><b>Enrolled Course:</b> <?= htmlspecialchars($student['course_name'] ?? '—') ?></p>
    <p><b>Department:</b> <?= htmlspecialchars($student['department_name'] ?? '—') ?></p>
</section>
