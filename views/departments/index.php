<div class="page-heading"><div><p class="eyebrow">Portal module</p><h1>Departments</h1></div></div>
<div class="card-grid">
<?php foreach ($departments as $department): ?><article class="panel"><h2><?= htmlspecialchars($department['department_name']) ?></h2><p><b>Code:</b> <?= htmlspecialchars($department['department_code']) ?></p><p><?= htmlspecialchars($department['description'] ?? '') ?></p></article><?php endforeach; ?>
<?php if (!$departments): ?><div class="panel empty">No department records found.</div><?php endif; ?>
</div>
