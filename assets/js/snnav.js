$(document).ready(function() {

$.ajaxSetup({
  async: false
});

var urlNXT = '';
urlNXT = 'http://178.150.207.53:7876/nxt';
urlNXT = 'http://humanoide.thican.net:7876/nxt';
urlNXT = 'http://localhost:7876/nxt';


var accountnxt1 = "NXT-MRBN-8DFH-PFMK-A4DBM";
var accountnxt2 = "NXT-USU4-92UY-KEYT-4H649";
var accountnxt3 = "NXT-H8AL-VEG7-4FL5-G2L4W";
var accountbtcd1 = "RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J";
var accountbtcd2 = "RM5NNYdGee6X65aFGkyaRkYocSxQVNsB8d";
var accountvrc = "VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2";
var accountvpn = "VdHevSrSsdFn5Mrbrf7xxM99uthTEhiEpJ";
var accountsys = "SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y";
var accountiota = "OZSHBYNQLLKOUDQMZRHMYZQFC9JPXIWNITEOMX9NBDWBBIIWDPBHAZTCQBTOSAYION9RMUIXMIYGZVNXF";
var iotaqty = 0;

var nxtqty1 = 16466762.17452034; //NXT-MRBN-8DFH-PFMK-A4DBM
var nxtqty2 = 80963.61359188; //NXT-USU4-92UY-KEYT-4H649
var nxtqty3 = 85454.51868197; //NXT-H8AL-VEG7-4FL5-G2L4W
var nxtqty = nxtqty1 + nxtqty2 + nxtqty3;

var btcdqty1 = 37145.57109913; //RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J
var btcdqty2 = 2074.55789051; //RM5NNYdGee6X65aFGkyaRkYocSxQVNsB8d
var btcdqty3 = 1190.0636; //NXT-MRBN-8DFH-PFMK-A4DBM - superBTCD
var btcdqty4 = 573.5468; //NXT-MRBN-8DFH-PFMK-A4DBM - mgwBTCD
var btcdqty = btcdqty1 + btcdqty2 + btcdqty3 + btcdqty4;

var vrcqty = 2149879.41454445; //VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2
var vpnqty = 19050518.15875554; //VdHevSrSsdFn5Mrbrf7xxM99uthTEhiEpJ
var sysqty = 20000000; //SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y
var bbrqty = 200000; //Poloniex


function getratio (ticker) {
  $.getJSON('http://api.cryptocoincharts.info/tradingPair/' + ticker, {}, function(request5) {
    ratio = request5.price;
  });
  return ratio;
}

function getassetprice(assetid,decimals) {
    var priceNQT = 0;
    $.getJSON(urlNXT, {"requestType": "getLastTrades", "assets": assetid}, function(request) {
        var trades = request.trades;
        //console.log(trades);
        var NQT = 8 - decimals;
        $.each(trades, function(key, data) {
          priceNQT = data.priceNQT / Math.pow(10, NQT);
        });
    });
    return priceNQT;
}

// Get Ticker Prices
// ---------------------------
var nxt_btc = getratio('nxt_btc');
var btcd_btc = getratio('btcd_btc');
var vrc_btc = getratio('vrc_btc');
var vpn_btc = getratio('vpn_btc');
var sys_btc = getratio('sys_btc');
var bbr_btc = getratio('bbr_btc');
var btc_usd = getratio('btc_usd');
var btc_eur = getratio('btc_eur');



var assets = [];

assets[0] = {
    id:"13476425053110940554",  decimals:3, name:"Crypto777",
    balance1:75102.582, balance2:241532.103, balance3:0.627,
    website:"http://www.crypto777.com/"
};
assets[1] = {
    id:"15344649963748848799",  decimals:0, name:"Instantdex",
    balance1:241485, balance2:0, balance3:0,
    website:"http://www.instantdex.org/"
};
assets[2] = {
    id:"6883271355794806507",   decimals:4, name:"Pangea",
    balance1:647.6954, balance2:415125.8674, balance3:0,
    website:"http://pangeapoker.net/"
};
assets[3] = {
    id:"6854596569382794790",   decimals:4, name:"SkyNET",
    balance1:105777.2576, balance2:214132.8273, balance3:0,
    website:"http://www.finhive.com/"
};
assets[4] = {
    id:"8688289798928624137",   decimals:4, name:"Jay",
    balance1:9560.2556, balance2:410197.1452, balance3:77.9929,
    website:"http://jnxt.org/"
};
assets[5] = {
    id:"2176003302076381931",   decimals:0, name:"MyNXT",
    balance1:21886, balance2:30100, balance3:0,
    website:"https://www.mynxt.info/"
};
assets[6] = {
    id:"12071612744977229797",  decimals:4, name:"SuperNET",
    balance1:36700.4002, balance2:105376.9874, balance3:398.627,
    website:"http://www.supernet.org/"
};
assets[7] = {
    id:"13502152099823770958",  decimals:4, name:"SuperNETx2",
    balance1:1028, balance2:3315.8329, balance3:1584.4264,
    website:"https://nxtforum.org/unity/supernetx2-and-the-centralized-product-management-team-(cpmt)/"
};
assets[8] = {
    id:"1976421459488798622",   decimals:4, name:"SNcoinv1",
    balance1:55, balance2:0, balance3:0,
    website:"https://nxtforum.org/assets-board/sncoinv1-supernet-silver-bullion-coin/"
};
// assets[9] = {};
// assets[10] = {};
assets[11] = {
    id:"17911762572811467637",  decimals:4, name:"NXTprivacy",
    balance1:241485, balance2:0, balance3:0,
    website:"https://nxtforum.org/nxtventures/nxtprivacy-asset-that-includes-privacy-related-projects/"
};
assets[12] = {
    id:"17571711292785902558",  decimals:0, name:"NXTcoinsco",
    balance1:241485, balance2:0, balance3:0,
    website:"https://nxtforum.org/nxtventures/nxtcoinsco-nodecoin-svmcoin-and-more-coins/"
};
// assets[13] = {};
// assets[14] = {};
// assets[15] = {};
assets[90] = {
    id:"7441230892853180965",  decimals:4, name:"Omnigames",
    balance1:75000, balance2:400000, balance3:0,
    website:"https://nxtforum.org/nxtventures/omnigames-asset/"
};
assets[91] = {
    id:"8217222248380501882",  decimals:4, name:"SpaceMesh",
    balance1:108615, balance2:241485, balance3:0,
    website:"https://nxtforum.org/nxtservices-releases/spacemesh-org-and-supermesh-io-asset/"
};
assets[92] = {
    id:"15113552914305929842",  decimals:0, name:"SNN",
    balance1:75000, balance2:600000, balance3:0,
};
// assets[93] = {};
assets[100] = {
    id:"12659653638116877017",  decimals:8, name:"superBTC",
    balance1:11, balance2:0, balance3:0,
    website:"https://www.bitcoin.org/"
};
// assets[101] = {};
assets[200] = {
    id:"15131486578879082754",  decimals:2, name:"BTCDdev",
    balance1:0, balance2:47102.88, balance3:627.03,
    website:"https://nxtforum.org/unity/supernet-dev-assets/"
};
assets[201] = {
    id:"10955830010602647139",  decimals:2, name:"Longzai",
    balance1:50146.79, balance2:627.03, balance3:0,
    website:"https://nxtforum.org/unity/supernet-dev-assets/"
};


var assetstotalnxt = 0;
var assetstotalbtc = 0;

// Get Last Price from NXT AE
// Calculate Asset Shares Value
// ---------------------------
for (var i in assets) {

  // Get Last Price from NXT AE
  var assetprice = getassetprice(assets[i].id,assets[i].decimals);
  assets[i].price = assetprice;
  // Calculate Asset Balance
  assets[i].balance = assets[i].balance1 + assets[i].balance2 + assets[i].balance3;
  // Calculate Asset NXT price
  assets[i].totalnxt = assetprice * assets[i].balance;
  // Calculate Asset BTC price
  assets[i].totalbtc = assets[i].totalnxt * nxt_btc;

  // Clone container for Asset
  $( ".asset-id-" ).clone().appendTo(".assets .row:first").removeClass("asset-id-").addClass("asset-id-" + i).show();

  // Format and populate Assets data
  var assetbalance = assets[i].balance.toMoney(0, '.', ',');
  var assetnxt = assets[i].totalnxt.toMoney(0, '.', ',');
  var assetbtc = assets[i].totalbtc.toMoney(0, '.', ',');
  $('.asset-id-' + i + ' .name').html(assets[i].name);
  $('.asset-id-' + i + ' .shares').html(assetbalance);
  $('.asset-id-' + i + ' .nxt').html(assetnxt);
  $('.asset-id-' + i + ' .btc').html(assetbtc);

  // Asset Tooltip content
  // ----------------------------
  $('.asset-id-' + i + ' .asset-name a').attr("href", assets[i].website).attr("onmouseover", "tooltip.pop(this, '#asset-info-" + i + "')");
  $('.asset-id-' + i + ' .asset-tooltip').attr("id", "asset-info-" + i);
  // Asset ID
    $('.asset-id-' + i + ' .asset-tooltip').append('Asset ID: <a href="https://nxtportal.org/assets/' + assets[i].id + '" target="_blank">' + assets[i].id + '</a><br>');
  // Asset website
  if (assets[i].website !== undefined) {
    $('.asset-id-' + i + ' .asset-tooltip').append('Website: <a href="' + assets[i].website + '" target="_blank">' + assets[i].name + "</a><br>");
  }

  // Shares Tooltip content
  // ----------------------------
  $('.asset-id-' + i + ' .asset-info a').attr("onmouseover", "tooltip.pop(this, '#shares-info-" + i + "')");
  $('.asset-id-' + i + ' .shares-tooltip').attr("id", "shares-info-" + i);
  // Account 1
  if (assets[i].balance1 > 0) {
    var assetbalance1 = assets[i].balance1.toMoney(0, ".", ",");
    $('.asset-id-' + i + ' .shares-tooltip').append('Account: <a href="https://nxtportal.org/accounts/' +
    accountnxt1 + '" target="_blank">' + accountnxt1 + '</a> : ' + assetbalance1 + ' shares<br>');
  }
  // Account 2
  if (assets[i].balance2 > 0) {
    var assetbalance2 = assets[i].balance2.toMoney(0, ".", ",");
    $('.asset-id-' + i + ' .shares-tooltip').append('Account: <a href="https://nxtportal.org/accounts/' +
    accountnxt2 + '" target="_blank">' + accountnxt2 + '</a> : ' + assetbalance2 + ' shares<br>');
  }
  // Account 3
  if (assets[i].balance3 > 0) {
    var assetbalance3 = assets[i].balance3.toMoney(0, ".", ",");
    $('.asset-id-' + i + ' .shares-tooltip').append('Account: <a href="https://nxtportal.org/accounts/' +
    accountnxt3 + '" target="_blank">' + accountnxt3 + '</a> : ' + assetbalance3 + ' shares<br>');
  }

  // Calculate Assets Total NXT
  assetstotalnxt = assetstotalnxt + assets[i].totalnxt;

  // Calculate Assets Total BTC
  assetstotalbtc = assetstotalbtc + assets[i].totalbtc;
}


var nxtbtcbalance = nxt_btc * nxtqty; // totalsumnav
var btcdbtcbalance = btcd_btc * btcdqty;
var vrcbtcbalance = vrc_btc * vrcqty;
var vpnbtcbalance = vpn_btc * vpnqty;
var sysbtcbalance = sys_btc * sysqty;
var bbrbtcbalance = bbr_btc * bbrqty;

var totalnxt = (nxtqty).toMoney(0, '.', ',');
var totalbtcd = (btcdqty).toMoney(0, '.', ',');
var totalsys = (sysqty).toMoney(0, '.', ',');
var totalvrc = (vrcqty).toMoney(0, '.', ',');
var totalvpn = (vpnqty).toMoney(0, '.', ',');
var totalbbr = (bbrqty).toMoney(0, '.', ',');

nxtbtc = (nxtbtcbalance).toMoney(0, '.', ',');
btcdbtc = (btcdbtcbalance).toMoney(0, '.', ',');
sysbtc = (sysbtcbalance).toMoney(0, '.', ',');
vrcbtc = (vrcbtcbalance).toMoney(0, '.', ',');
vpnbtc = (vpnbtcbalance).toMoney(0, '.', ',');
bbrbtc = (bbrbtcbalance).toMoney(0, '.', ',');

$('#totalnxt').html(totalnxt);
$('#totalbtcd').html(totalbtcd);
$('#totalsys').html(totalsys);
$('#totalvrc').html(totalvrc);
$('#totalvpn').html(totalvpn);
$('#totalbbr').html(totalbbr);

$('#nxtbtcbalance').html(nxtbtc);
$('#btcdbtcbalance').html(btcdbtc);
$('#sysbtcbalance').html(sysbtc);
$('#vrcbtcbalance').html(vrcbtc);
$('#vpnbtcbalance').html(vpnbtc);
$('#bbrbtcbalance').html(bbrbtc);


// Populate Coins Balance
// ---------------------------
$('#nxtbalance1').html(nxtqty1.toMoney(0, ".", ","));
$('#nxtbalance2').html(nxtqty2.toMoney(0, ".", ","));
$('#nxtbalance3').html(nxtqty3.toMoney(0, ".", ","));

$('#btcdbalance1').html(btcdqty1.toMoney(0, ".", ","));
$('#btcdbalance2').html(btcdqty2.toMoney(0, ".", ","));
$('#btcdbalance3').html(btcdqty3.toMoney(0, ".", ","));
$('#btcdbalance4').html(btcdqty4.toMoney(0, ".", ","));

$('#sysbalance1').html(sysqty.toMoney(0, ".", ","));
$('#vrcbalance1').html(vrcqty.toMoney(0, ".", ","));
$('#vpnbalance1').html(vpnqty.toMoney(0, ".", ","));
$('#bbrbalance1').html(bbrqty.toMoney(0, ".", ","));

// Calculate NAV
// ---------------------------
var totalbtc = (nxtbtcbalance + btcdbtcbalance + vrcbtcbalance + vpnbtcbalance + sysbtcbalance + bbrbtcbalance + assetstotalbtc);

var navbtc = totalbtc / 816061;
var navnxt = navbtc / nxt_btc;
var navusd = navbtc * btc_usd;
var naveur = navbtc * btc_eur;

navnxt = (navnxt).toMoney(2, '.', ',');
$('#navnxt').html(navnxt);

navbtc = (navbtc).toMoney(4, '.', ',');
$('#navbtc').html(navbtc);

navusd = (navusd).toMoney(2, '.', ',');
$('#navusd').html(navusd);

naveur = (naveur).toMoney(2, '.', ',');
$('#naveur').html(naveur);


console.log(assets);
console.log(urlNXT);

});
