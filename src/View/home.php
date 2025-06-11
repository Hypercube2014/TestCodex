<?php
/** @var App\Model\Vehicle[] $vehicles */
ob_start();
?>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
