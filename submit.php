<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $data = [
        'name' => $name,
        'email' => $email,
        'latitude' => $latitude,
        'longitude' => $longitude
    ];

    // Print received data to terminal
    echo "Received data: " . json_encode($data);

    // You can log this to a file as well
    file_put_contents('php://stdout', "Received data: " . json_encode($data) . PHP_EOL);
} else {
    echo "No data received.";
}
?>
