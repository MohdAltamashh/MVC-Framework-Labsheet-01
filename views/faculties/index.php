<div class="page-heading"><div><p class="eyebrow">Portal module</p><h1>Faculty</h1></div></div>
<div class="panel table-wrap"><table><thead><tr><th>Name</th><th>Email</th><th>Designation</th><th>Department</th></tr></thead><tbody>
<?php foreach ($faculties as $faculty): ?><tr><td><?= htmlspecialchars($faculty['name']) ?></td><td><?= htmlspecialchars($faculty['email']) ?></td><td><?= htmlspecialchars($faculty['designation']) ?></td><td><?= htmlspecialchars($faculty['department_name'] ?? '—') ?></td></tr><?php endforeach; ?>
<?php if (!$faculties): ?><tr><td colspan="4" class="empty">No faculty records found.</td></tr><?php endif; ?>
</tbody></table></div>
