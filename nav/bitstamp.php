<?php

function get_json($ticker) {
  // Get cURL resource
  $curl = curl_init();
  // Set some options - we are passing in a useragent too here
  curl_setopt_array($curl, array(
     CURLOPT_RETURNTRANSFER => 1,
     CURLOPT_URL => 'https://www.bitstamp.net/api/v2/ticker/' . $ticker . '/',
     CURLOPT_USERAGENT => 'Sample cURL Request'
  ));
  // Send the request & save response to $resp
  $resp = curl_exec($curl);
  // Close request to clear up some resources
  curl_close($curl);

  return $resp;
}

function get_price($ticker) {
  $data = json_decode(get_json($ticker));
  return $data->{"last"};
}

$coins = array(btcusd,btceur);

foreach ($coins as $key => $value) {
  $cex[$value]["price"] = get_price($value);
}

$cex["meta"] = [
    "updated"   => date('d-m-Y h:i:s a', time()),
];

$fp = fopen('bitstamp.json', 'w');
fwrite($fp, json_encode($cex, JSON_PRETTY_PRINT));
fclose($fp);

$link =  'http://' . $_SERVER['HTTP_HOST'] . '/nav/bitstamp.json';

echo("<br>JSON file was successfully created<br>");
echo('<a href="' . $link . '">' . $link . '</a>');
echo("<pre><code>" . json_encode($cex, JSON_PRETTY_PRINT) . "</code></pre>");

?>
