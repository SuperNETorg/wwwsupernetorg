$(document).ready(function() {

$.ajaxSetup({
  async: false
});

function getnxtserver(){
  	// var server = "";
    // var nxtPeersUrl = "";
    var totalPeerIP = 0;

    $.ajax({
              type: 'GET',
              url: 'snnav/node.php',
              async: false,
              jsonpCallback: 'nxtpeers',
              contentType: "application/json",
              dataType: 'jsonp',
              timeout: 30000,
              success: function (nxtPeersResult) {
							         totalPeerIP = nxtPeersResult.peers.length;
                       var random = Math.floor((Math.random() * (nxtPeersResult.peers.length - 1)) + 0);
                       urlNXT = "http://" + nxtPeersResult.peers[random] + ":7876/nxt";
              },
        });
    }
//server end

function getbalance(account){
  var balance = null;
  $.getJSON(urlNXT, {"requestType": "getBalance", "account": account}, function(request2) {
      balance = request2.balanceNQT / 100000000;
  });
  return balance;
}

var urlNXT = '';
getnxtserver();
urlNXT = 'http://192.168.1.149:7876/nxt';
console.log(urlNXT);

var accountnxt1 = "NXT-MRBN-8DFH-PFMK-A4DBM";
var accountnxt2 = "NXT-USU4-92UY-KEYT-4H649";
var accountnxt3 = "NXT-H8AL-VEG7-4FL5-G2L4W";
var accountbtcd1 = "RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J";
var accountbtcd2 = "RM5NNYdGee6X65aFGkyaRkYocSxQVNsB8d";
var accountvrc = "VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2";
var accountvpn = "VdHevSrSsdFn5Mrbrf7xxM99uthTEhiEpJ";
var accountsys = "SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y";
var accountiota = "OZSHBYNQLLKOUDQMZRHMYZQFC9JPXIWNITEOMX9NBDWBBIIWDPBHAZTCQBTOSAYION9RMUIXMIYGZVNXF";

var nxtqty1 = getbalance(accountnxt1); //NXT-MRBN-8DFH-PFMK-A4DBM
var nxtqty2 = getbalance(accountnxt2); //NXT-USU4-92UY-KEYT-4H649
var nxtqty3 = getbalance(accountnxt3); //NXT-H8AL-VEG7-4FL5-G2L4W
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
var bitsqty = 1000000; //Poloniex
var fibreqty = 31944.375367616; //5% of Fibre supply

var wavesqty = 210778;
var iotaqty = 18058346; //tangle.ninja
// Old IOTA to New IOTA coversion
iotaqty = iotaqty * 2779530.28606;

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
var bits_btc = getratio('bits_btc');
var fibre_btc = getratio('fibre_btc');

var btc_usd = getratio('btc_usd');
var btc_eur = getratio('btc_eur');


var waves_btc = getratio('waves_btc');
if (!isNumeric(waves_btc)) {
    waves_btc = 0.000368634;
}

var iota_btc = getratio('iota_btc');
if (!isNumeric(iota_btc)) {
    iota_btc = 0.000000004 / btc_usd;
}
console.log(nxt_btc);


function getassets (account,asset){
      var output = null;
      $.getJSON(urlNXT, {"requestType": "getAccountAssets", "account": account, "asset": asset, "includeAssetInfo": "true"}, function(request) {
          output = request;
          // var nxtTime = 1385294400;
      });
      return output;
}

function nxtqnt (quantityQNT,decimals) {
    var balance = null;
    balance = quantityQNT / Math.pow(10, decimals);

    if (!isNumeric(balance)){
        balance = 0;
    }
    return balance;
}

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

var assets = [];

assets[0] = {
    id:"13476425053110940554",  decimals:3, name:"Crypto777",
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
    balance1:31.4562, balance2:105376.9874, balance3:398.627,
    website:"http://www.supernet.org/"
};
assets[7] = {
    id:"13502152099823770958",  decimals:4, name:"SuperNETx2",
    balance1:1028, balance2:3315.8329, balance3:1584.4264,
    website:"https://nxtforum.org/unity/supernetx2-and-the-centralized-product-management-team-(cpmt)/"
};
assets[8] = {
    id:"1976421459488798622",   decimals:4, name:"SNcoinv1",
    balance1:0, balance2:55, balance3:0,
    website:"https://nxtforum.org/assets-board/sncoinv1-supernet-silver-bullion-coin/"
};
assets[9] = {
  id:"16353645177223876977",   decimals:4, name:"LazyTweeps",
  balance1:0, balance2:100000, balance3:0,
  website:"https://nxtforum.org/asset-exchange-general/(ann)-lazytweeps-(asset-id-16353645177223876977)/"
};
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
assets[13] = {
    id:"3006420581923704757",  decimals:4, name:"sharkfund0",
    balance1:358, balance2:0, balance3:0,
    website:"https://nxtforum.org/nxtventures/shark-report-sharktales-and-other-musings/"
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

// assets[200] = {
//     id:"15131486578879082754",  decimals:2, name:"BTCDdev",
//     balance1:0, balance2:47102.88, balance3:627.03,
//     website:"https://nxtforum.org/unity/supernet-dev-assets/"
// };
// assets[201] = {
//     id:"10955830010602647139",  decimals:2, name:"Longzai",
//     balance1:0, balance2:50146.79, balance3:627.03,
//     website:"https://nxtforum.org/unity/supernet-dev-assets/"
// };


var assetstotalnxt = 0;
var assetstotalbtc = 0;

// Get Last Price from NXT AE
// Calculate Asset Shares Value
// ---------------------------
for (var i in assets) {

  assets[i].data1 = getassets(accountnxt1,assets[i].id);
  assets[i].data2 = getassets(accountnxt2,assets[i].id);
  assets[i].data3 = getassets(accountnxt3,assets[i].id);
  assets[i].balance1 = nxtqnt(assets[i].data1.quantityQNT,assets[i].data1.decimals);
  assets[i].balance2 = nxtqnt(assets[i].data2.quantityQNT,assets[i].data2.decimals);
  assets[i].balance3 = nxtqnt(assets[i].data3.quantityQNT,assets[i].data3.decimals);
  if (isNaN(assets[i].balance1)) {
      assets[i].balance1 = 0;
  }
  if (isNaN(assets[i].balance1)) {
      assets[i].balance1 = 0;
  }
  if (isNaN(assets[i].balance1)) {
      assets[i].balance1 = 0;
  }


  // Get Last Price from NXT AE
  var assetprice = getassetprice(assets[i].id,assets[i].decimals);
  assets[i].price = assetprice;
  // Calculate Asset Balance
  assets[i].balance = assets[i].balance1 + assets[i].balance2 + assets[i].balance3;
  // Calculate Asset NXT price
  assets[i].totalnxt = assetprice * assets[i].balance;
  // Calculate Asset BTC price
  assets[i].totalbtc = assets[i].totalnxt * nxt_btc;

  // SuperBTC price = BTC price
  if (assets[i].id == "12659653638116877017") {
    assets[i].totalbtc = assets[i].balance1 + assets[i].balance2 + assets[i].balance3;
  }

  // Clone container for Asset
  $( ".asset-id-" ).clone().appendTo(".assets .row:first").removeClass("asset-id-").addClass("asset-id-" + i).show();

  // Format and populate Assets data
  var assetbalance = assets[i].balance.toMoney(0, '.', ',');
  var assetnxt = assets[i].totalnxt.toMoney(0, '.', ',');
  var assetbtc = assets[i].totalbtc.toMoney(1, '.', ',');
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
  // Latest price
  // $('.asset-id-' + i + ' .asset-tooltip').append('Latest price: ' + assets[i].price.toMoney(2, '.', ',') + ' NXT');

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
var bitsbtcbalance = bits_btc * bitsqty;
var fibrebtcbalance = fibre_btc * fibreqty;
var wavesbtcbalance = waves_btc * wavesqty;
var iotabtcbalance = iota_btc * iotaqty;


var totalnxt = (nxtqty).toMoney(0, '.', ',');
var totalbtcd = (btcdqty).toMoney(0, '.', ',');
var totalsys = (sysqty).toMoney(0, '.', ',');
var totalvrc = (vrcqty).toMoney(0, '.', ',');
var totalvpn = (vpnqty).toMoney(0, '.', ',');
var totalbbr = (bbrqty).toMoney(0, '.', ',');
var totalbits = (bitsqty).toMoney(0, '.', ',');
var totalfibre = (fibreqty).toMoney(0, '.', ',');
var totalwaves = (wavesqty).toMoney(0, '.', ',');
var totaliota = (iotaqty).toMoney(0, '.', ',');

nxtbtc = (nxtbtcbalance).toMoney(1, '.', ',');
btcdbtc = (btcdbtcbalance).toMoney(1, '.', ',');
sysbtc = (sysbtcbalance).toMoney(1, '.', ',');
vrcbtc = (vrcbtcbalance).toMoney(1, '.', ',');
vpnbtc = (vpnbtcbalance).toMoney(1, '.', ',');
bbrbtc = (bbrbtcbalance).toMoney(1, '.', ',');
bitsbtc = (bitsbtcbalance).toMoney(1, '.', ',');
fibrebtc = (fibrebtcbalance).toMoney(1, '.', ',');
wavesbtc = (wavesbtcbalance).toMoney(1, '.', ',');
iotabtc = (iotabtcbalance).toMoney(1, '.', ',');

console.log(wavesbtcbalance);
console.log(wavesbtc);

$('#totalnxt').html(totalnxt);
$('#totalbtcd').html(totalbtcd);
$('#totalsys').html(totalsys);
$('#totalvrc').html(totalvrc);
$('#totalvpn').html(totalvpn);
$('#totalbbr').html(totalbbr);
$('#totalbits').html(totalbits);
$('#totalfibre').html(totalfibre);
$('#totalwaves').html(totalwaves);
$('#totaliota').html(totaliota);

$('#nxtbtcbalance').html(nxtbtc);
$('#btcdbtcbalance').html(btcdbtc);
$('#sysbtcbalance').html(sysbtc);
$('#vrcbtcbalance').html(vrcbtc);
$('#vpnbtcbalance').html(vpnbtc);
$('#bbrbtcbalance').html(bbrbtc);
$('#bitsbtcbalance').html(bitsbtc);
$('#fibrebtcbalance').html(fibrebtc);
$('#wavesbtcbalance').html(wavesbtc);
$('#iotabtcbalance').html(iotabtc);


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
$('#bitsbalance1').html(bitsqty.toMoney(0, ".", ","));
$('#fibrebalance1').html(fibreqty.toMoney(0, ".", ","));
$('#wavesbalance1').html(wavesqty.toMoney(0, ".", ","));
$('#iotabalance1').html(iotaqty.toMoney(0, ".", ","));

// Calculate NAV
// ---------------------------
var totalbtc = (nxtbtcbalance + btcdbtcbalance + vrcbtcbalance + vpnbtcbalance + sysbtcbalance + wavesbtcbalance + iotabtcbalance + bbrbtcbalance + bitsbtcbalance + fibrebtcbalance + assetstotalbtc);

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


// console.log(assets);

});
