<?php
/** @var App\Model\Vehicle[] $vehicles */
ob_start();
?>
<div class="hero">
    <h2>Réservez votre véhicule en toute simplicité</h2>
    <p>Une large sélection pour tous vos déplacements.</p>
    <a class="btn" href="#vehicles">Voir nos offres</a>
</div>

<section id="vehicles" class="vehicles">
    <h2>Nos véhicules disponibles</h2>
    <ul class="vehicle-list">
    <?php foreach ($vehicles as $vehicle): ?>
        <li><?= htmlspecialchars($vehicle->brand . ' ' . $vehicle->name) ?> - $<?= number_format($vehicle->dailyPrice, 2) ?>/jour</li>
    <?php endforeach; ?>
    </ul>
</section>
<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
