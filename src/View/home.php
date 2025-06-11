<?php
/** @var App\Model\Vehicle[] $vehicles */
ob_start();
?>
<h2>Available Vehicles</h2>
<ul>
<?php foreach ($vehicles as $vehicle): ?>
    <li><?= htmlspecialchars($vehicle->brand . ' ' . $vehicle->name) ?> - $<?= number_format($vehicle->dailyPrice, 2) ?>/day</li>
<?php endforeach; ?>
</ul>
<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
