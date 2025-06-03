<?php
$base = __DIR__ . '/json';

// Allow CORS so the demo can be used from the original project
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);
$action = null;
if (isset($data['action'])) {
    $action = $data['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case 'getHeatmapMaximums':
        echo json_encode([
            'response' => [4 => 0, 5 => 0, 6 => 0],
            'serialNo' => 0,
            'time' => round(microtime(true) * 1000),
        ]);
        break;
    case 'getByRegionIds':
        readfile($base . '/map/map-level3-zoomoutest.json');
        break;
    case 'getKingdomInfluenceStatistics':
        readfile($base . '/kingdom/map-getKingdomInfluenceStatistics.json');
        break;
    default:
        readfile($base . '/kingdom/map.json');
        break;
}
