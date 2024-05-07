<?php
/* API Manual */
// Query params:
// disc => indice che rappresenta il singolo oggetto ammette interi da 0 a 5
// ese: disc = 0 response {
//     "title": "New Jersey",
//     "author": "Bon Jovi",
//     "year": 1988,
//     "poster": "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
//     "genre": "Rock"
// }

$discsJson = file_get_contents('discs.json');
$discs = json_decode($discsJson, true);

/* response */
$response = $discs;
if(isset($_GET['disc'])) {
    $disc = intval($_GET['disc']);
    $response = $discs[$disc];
}

/* output */
header('Content-Type: application/json');
echo json_encode($response);
?>