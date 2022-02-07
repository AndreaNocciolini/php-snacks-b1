<?php
include __DIR__ . '/db.php';
$usedCarsFiltered = $usedCars;

if (isset($_GET['brand']) !== false) {
    $type = $_GET['brand'];
    if ($type === 'all') {
        $usedCarsFiltered = $usedCars;
    } else {
        $usedCarsFiltered = [];
        foreach ($usedCars as $car) {
            if ($car['brand'] === $type) {
                $usedCarsFiltered[] = $car;
            }
        }
    }
}
?>
