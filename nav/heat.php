<?php
// function => fetch data from specific open API node
function get_data($request) {

    $server = "https://heatwallet.com:7734";
    $data = file_get_contents($server . $request);
    $obj = json_decode($data);

    $error = $obj->{'errorDescription'};
    if ($error) exit($error);

    // $result = $obj->{$value};
    $result = $obj;
    return $result;
}

function get_heat_balance($account) {

  $request = '/api/v1/account/balance/virtual/' . $account . '/0/0/0';
  $response = get_data($request);
  $balance = qtydec($response->{"balance"},$response->{"decimals"});
  return $balance;
}

function qtydec($qty,$dec) {
    // quantity divided by decimals exponent
    $q = (int)$qty / pow(10, (int)$dec);
    return $q;
}

function get_price($currency, $asset) {
  // get last trades for currency/asset/from/to
  $request = '/api/v1/trade/' . $currency . '/' . $asset .  '/0/0';
  $response = get_data($request);
  $price = $response[0]->{"price"};
  return $price;
}

// get heat balance of SuperNET account
$balance = get_heat_balance(8034838408066485608);
// get HEAT/BTC last trade price from Heat AE
$price = get_price(5592059897546023466,0);

$acc["heat"]["balance"] = $balance;
$acc["heat"]["price"] = $price;
$acc["meta"] = [
    "updated"   => date('d-m-Y h:i:s a', time()),
];

$fp = fopen('heat.json', 'w');
fwrite($fp, json_encode($acc, JSON_PRETTY_PRINT));
fclose($fp);

$link =  'http://' . $_SERVER['HTTP_HOST'] . '/nav/heat.json';

echo("<br>JSON file was successfully created<br>");
echo('<a href="' . $link . '">' . $link . '</a>');
echo("<pre><code>" . json_encode($acc, JSON_PRETTY_PRINT) . "</code></pre>");