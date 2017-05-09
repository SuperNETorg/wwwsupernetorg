<?php
// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
   CURLOPT_RETURNTRANSFER => 1,
   CURLOPT_URL => 'https://bittrex.com/api/v1.1/public/getmarketsummaries',
   CURLOPT_USERAGENT => 'Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

$json = json_decode($resp);

foreach ($json->{'result'} as $key => $value) {
  $ticker[$value->{'MarketName'}] = array(
      "name" => $value->{'MarketName'},
      "price" => $value->{"Last"});
}

// print_r($ticker);

function get_price($alt,$ticker) {
  $pair = 'BTC-' . $alt;
  $price = $ticker[$pair]["price"];
  return number_format($price,8,'.','');
}

$coins = array(SYS,VRC,NXT,ARDR,STRAT,KMD,WAVES);

foreach ($coins as $key => $value) {
  $rex[$value]["price"] = get_price($value,$ticker);
}

$fp = fopen('bittrex.json', 'w');
fwrite($fp, json_encode($rex, JSON_PRETTY_PRINT));
fclose($fp);

$link =  'http://' . $_SERVER['HTTP_HOST'] . '/nav/bittrex.json';

echo("<br>JSON file was successfully created<br>");
echo('<a href="' . $link . '">' . $link . '</a>');
echo("<pre><code>" . json_encode($rex, JSON_PRETTY_PRINT) . "</code></pre>");

?>
