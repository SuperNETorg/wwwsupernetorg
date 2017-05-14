<?php
// function => fetch data from specific open API node
function get_data() {

    $server = "http://data.iotaexchange.com/proxy";
    $data = file_get_contents($server);
    $obj = json_decode($data);
    // $result = $obj->{$value};
    $result = $obj;
    return $result;
}

function get_price() {
  // get last trade
  $json = get_data();
  $price = $json->{"trades"}[0]->{"price"};
  return $price;
}

// get IOTA/BTC last trade price from Heat AE
$price = get_price();

$acc["iota"]["price"] = $price;
$acc["meta"] = [
    "updated"   => date('d-m-Y h:i:s a', time()),
];

$fp = fopen('iota.json', 'w');
fwrite($fp, json_encode($acc, JSON_PRETTY_PRINT));
fclose($fp);

$link =  'http://' . $_SERVER['HTTP_HOST'] . '/nav/iota.json';

echo("<br>JSON file was successfully created<br>");
echo('<a href="' . $link . '">' . $link . '</a>');
echo("<pre><code>" . json_encode($acc, JSON_PRETTY_PRINT) . "</code></pre>");