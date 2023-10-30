<?php
$secretFilePath = '/app/Sup3rs3cr3tFlag.txt';

$secretKey = 'Kismet-Abzee-Berrywuxxxxx';

$requestedFile = isset($_GET['file']) ? $_GET['file'] : '';

$providedKey = isset($_GET['key']) ? $_GET['key'] : '';

$decodedFile = urldecode($requestedFile);

if ($providedKey !== $secretKey) {
    header("HTTP/1.0 403 Forbidden");
    echo "Access denied!";
    exit;
}

if ($decodedFile === 'Sup3rs3cr3tFlag.txt') {
    $secretContent = file_get_contents($secretFilePath);
    echo $secretContent;
} else {
    header("HTTP/1.0 403 Forbidden");
    echo "Access denied!";
}
?>
