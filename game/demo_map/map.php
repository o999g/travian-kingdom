<?php
$base = __DIR__ . '/json';

if ($data['action'] == 'getHeatmapMaximums') {
    echo json_encode([
        'response' => [
            4 => 0,
            5 => 0,
            6 => 0,
        ],
        'serialNo' => 0,
        'time' => round(microtime(true) * 1000),
    ]);
} elseif ($data['action'] == 'getByRegionIds') {
    readfile($base . '/map/map-level3-zoomoutest.json');
} elseif ($data['action'] == 'getKingdomInfluenceStatistics') {
    readfile($base . '/kingdom/map-getKingdomInfluenceStatistics.json');
} else {
    readfile($base . '/kingdom/map.json');
}
