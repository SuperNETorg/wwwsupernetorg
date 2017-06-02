<?php
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_URL => 'https://poloniex.com/public?command=returnTicker',
   CURLOPT_USERAGENT => 'Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);

// Close request to clear up some resources
curl_close($curl);

$json = json_decode($resp);

function get_price($alt,$json) {
  $pair = 'BTC_' . $alt;
  $price = $json->{$pair}->{'last'};
  return $price;
}

$coins = array(SYS,VRC,NXT,ARDR,STRAT,ZEC,DCR);

foreach ($coins as $key => $value) {
  $polo[$value]["price"] = get_price($value,$json);
}

$polo["meta"] = [
    "updated"   => date('d-m-Y h:i:s a', time()),
];

$fp = fopen('poloniex.json', 'w');
fwrite($fp, json_encode($polo, JSON_PRETTY_PRINT));
fclose($fp);

$link =  'http://' . $_SERVER['HTTP_HOST'] . '/nav/poloniex.json';

echo("<br>JSON file was successfully created<br>");
echo('<a href="' . $link . '">' . $link . '</a>');
echo("<pre><code>" . json_encode($polo, JSON_PRETTY_PRINT) . "</code></pre>");

?>
