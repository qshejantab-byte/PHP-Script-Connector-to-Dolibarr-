<?php

$url = "https://alphacomputer.rw/dolibarr/htdocs/api/index.php/ticket";



$data = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "phone" => $_POST['phone'],
    "client" => 2
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "DOLAPIKEY: Ny5N20J9igXON01dBu2wxz6b4ITa7pEM",
    "Content-Type: application/json"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);

echo "Ticket Created Successfully";


?>

