<div class="page-heading"><div><p class="eyebrow">Portal module</p><h1>Students</h1></div></div>
<div class="panel table-wrap">
<table><thead><tr><th>Roll No.</th><th>Name</th><th>Email</th><th>Course</th><th>Department</th><th>Profile</th></tr></thead><tbody>
<?php foreach ($students as $student): ?>
<tr>
<td><?= htmlspecialchars($student['roll_no']) ?></td>
<td><?= htmlspecialchars($student['name']) ?></td>
<td><?= htmlspecialchars($student['email']) ?></td>
<td><?= htmlspecialchars($student['course_name'] ?? '—') ?></td>
<td><?= htmlspecialchars($student['department_name'] ?? '—') ?></td>
<td><a class="text-link" href="<?= BASE_URL ?>/index.php?route=student&id=<?= (int)$student['id'] ?>">View</a></td>
</tr>
<?php endforeach; ?>
<?php if (!$students): ?><tr><td colspan="6" class="empty">No student records found. Import the sample database.</td></tr><?php endif; ?>
</tbody></table></div>
