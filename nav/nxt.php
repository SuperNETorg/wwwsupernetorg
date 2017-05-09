<?php

// function => fetch all open API nodes with hallmark from peerexplorer.com
function get_nodes() {
    $server = "http://peerexplorer.com/api_openapi_hallmark_version";
    $data = file_get_contents($server);
    $obj = json_decode($data, true);
    $result = $obj['peers'];
    return $result;
}

// function => fetch data from specific open API node
function get_node_data($server, $value) {
    $data = file_get_contents($server);
    $obj = json_decode($data);

    $error = $obj->{'errorDescription'};
    if ($error) exit($error);

    $result = $obj->{$value};
    return $result;
}

// function => skip to next node if data is empty, return "Unknown" if all open API nodes return no data
function check_node_data($request, $value) {
    $node = get_nodes();

    //choose random node
    $r = rand(0, count($node) - 1);

    for ($i = 0; $i < count($node); $i++) {

        print_r("Data fetch from NXT node: " . $node[$r] . '<br>');

        $result = get_node_data('http://' . $node[$r] . ':7876/nxt?requestType=' . $request . '', $value);
        if (!empty($result)) {
            break;
        } else {
            $result = 'Unknown';
        }
    }
    return $result;
}

function get_balance($account) {

  // get account balance
  $request = 'getAccount&account=' . $account;
  $response = check_node_data($request, 'balanceNQT');
  $balance = (int)((int)$response / 100000000);
  // var_dump($balance);
  return $balance;
}

function get_asset_info($account,$value) {

  // get account balance
  $request = 'getAccountAssets&account=' . $account . '&includeAssetInfo=true';
  $response = check_node_data($request, $value);
  // $balance = (int)((int)$response / 100000000);
  // var_dump($balance);
  return $response;
}

function nqt2nxt($NQT,$decimals) {
    $q = (int)$NQT / pow(10, 8 - (int)$decimals);
    return $q;
}

function qnt2qty($QNT,$decimals) {
    $q = (int)$QNT / pow(10, (int)$decimals);
    return $q;
}

$accounts = array(
    "NXT-MRBN-8DFH-PFMK-A4DBM",
    "NXT-USU4-92UY-KEYT-4H649",
    "NXT-H8AL-VEG7-4FL5-G2L4W",
);

foreach ($accounts as $key => $value) {

  $acc["nxt"][] = [
      "accountRS"   => $value,
      "balance"     => get_balance($value),
  ];
}

foreach ($accounts as $key => $value) {
    // get assets for all accounts
    $a[$value] = get_asset_info($value,"accountAssets");
    $alist = '';
    // reorganize assets
    foreach ($a[$value] as $k => $v) {
      $assets[$value][$v->{"asset"}]["name" ]    = $v->{"name"};
      // $assets[$value][$v->{"asset"}]["decimals"] = $v->{"decimals"};
      $assets[$value][$v->{"asset"}]["qty"]      = qnt2qty($v->{"quantityQNT"},$v->{"decimals"});
      // construct request from assets ids
      $alist .= '&assets=' . $v->{"asset"};
    }
    // get asset trades
    $request = 'getLastTrades' . $alist;
    $response = check_node_data($request, "trades");
    foreach ($response as $k => $v) {
      $trades[$v->{"asset"}] = $v;
    }
    // append trades data to assets
    foreach ($a[$value] as $k => $v) {
      $lastprice = (int)$trades[$v->{"asset"}]->{"priceNQT"};
      $assets[$value][$v->{"asset"}]["lastprice"] = nqt2nxt($lastprice,$v->{"decimals"});
    }
}

$acc["assets"] = $assets;

$acc["meta"] = [
    "updated"   => date('d-m-Y h:i:s a', time()),
];

$fp = fopen('nxt.json', 'w');
fwrite($fp, json_encode($acc, JSON_PRETTY_PRINT));
fclose($fp);

$link =  'http://' . $_SERVER['HTTP_HOST'] . '/nav/nxt.json';

echo("<br>JSON file was successfully created<br>");
echo('<a href="' . $link . '">' . $link . '</a>');
echo("<pre><code>" . json_encode($acc, JSON_PRETTY_PRINT) . "</code></pre>");

?>
