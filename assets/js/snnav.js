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
              url: 'node.php',
              async: false,
              jsonpCallback: 'nxtpeers',
              contentType: "application/json",
              dataType: 'jsonp',
              timeout: 30000,
              success: function (nxtPeersResult) {
							         totalPeerIP = nxtPeersResult.peers.length;

                       // console.log(nxtPeersResult.peers);
                       // Remove non reliable peers
                       // =========================
                       for (var i = 0; i < totalPeerIP; i++) {
                         if (nxtPeersResult.peers[i] == "178.150.207.53") {
                           nxtPeersResult.peers.splice(i,1);
                         }
                         if (nxtPeersResult.peers[i] == "82.165.145.37") {
                           nxtPeersResult.peers.splice(i,1);
                         }
                       }

                       var random = Math.floor((Math.random() * (nxtPeersResult.peers.length - 1)) + 0);
                       urlNXT = "http://" + nxtPeersResult.peers[random] + ":7876/nxt";
                       console.log(nxtPeersResult.peers);

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
// urlNXT = 'http://localhost:7876/nxt';
// urlNXT = 'http://192.168.1.149:7876/nxt';
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

var btcdqty1 = 37986; //RA7FDvaNFXZNLqosSbCWFbypuvijJNQw5J
var btcdqty2 = 2040; //RM5NNYdGee6X65aFGkyaRkYocSxQVNsB8d
var btcdqty3 = 0; //NXT-MRBN-8DFH-PFMK-A4DBM - superBTCD
var btcdqty4 = 574.5468; //NXT-MRBN-8DFH-PFMK-A4DBM - mgwBTCD
var btcdqty5 = 20000; //Latest increase
var btcdqty = btcdqty1 + btcdqty2 + btcdqty3 + btcdqty4 + btcdqty5;

var vrcqty = 2172993.7055; //VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2
var vpnqty = 19884231.2655; //VdHevSrSsdFn5Mrbrf7xxM99uthTEhiEpJ
var sysqty = 20000000; //SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y

var wavesqty = 700000;
var heatqty = 1400000; // ~ 4% of Heat
var stratqty = 2000000; // ~2% of Stratis, ScBpQqL2fxiJPjnpQRoSBtatZxtPVVUgvi

var iotaqty = 37600; //Gi //tangle.ninja


function getratio (ticker) {
  $.getJSON('http://api.cryptocoincharts.info/tradingPair/' + ticker, {}, function(request5) {
    ratio = request5.price;
  });
  return ratio;
}


function getpoloniex () {
  var ticker = '';
  $.getJSON('nav-poloniex.php', {}, function(json) {
    // console.log(json);
    ticker = json;
  });
  return ticker;
}

  var getpolo1 = getpoloniex();

function getbittrex () {
  var ticker = '';
  $.getJSON('nav-bittrex.php', {}, function(json) {
    // console.log(json);
    ticker = json;
  });
  return ticker;
}

var getpolo = getpoloniex();
var gettrex = getbittrex();

function getprice (alt, polo, rex) {

  var polopair = 'BTC_' + alt;
  var poloticker = polo;
  var poloprice = '';

  if (poloticker[polopair]) {
    poloprice = poloticker[polopair].last;
  }

  var trexpair = 'BTC-' + alt;
  var trexticker = rex;
  var trexprice = '';

  for (var key in trexticker.result) {

    if (trexticker.result[key].MarketName == trexpair) {
        trexprice = trexticker.result[key].Last;
    }
  }

  // Polo price first
  var price = poloprice;

  // Fallback to Bittrex
  if (!isNumeric(price)) {
    price = trexprice;
  }

  console.log(alt + ' - Polo: ' + poloprice + ' Rex: ' + trexprice);

  return price;

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
var btc_usd = getratio('btc_usd');
var btc_eur = getratio('btc_eur');

var nxt_btc = getprice('NXT',getpolo,gettrex);
var btcd_btc = getprice('BTCD',getpolo,gettrex);
var sys_btc = getprice('SYS',getpolo,gettrex);
var vrc_btc = getprice('VRC',getpolo,gettrex);
var waves_btc = getprice('WAVES',getpolo,gettrex);
var strat_btc = getprice('STRAT',getpolo,gettrex);
var vpn_btc = getprice('VPN',getpolo,gettrex);

var iota_btc = 0.012; // Manual OTC price of Gi

var heat_btc = getprice('HEAT',getpolo,gettrex);
if (!isNumeric(heat_btc)) {
  heat_btc = 0.000071429; // ICO price
}


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
    website:"http://www.instantdex.org/"
};
assets[2] = {
    id:"6883271355794806507",   decimals:4, name:"Pangea",
    website:"http://pangeapoker.net/"
};
assets[3] = {
    id:"6854596569382794790",   decimals:4, name:"SkyNET",
    website:"http://www.finhive.com/"
};
assets[4] = {
    id:"8688289798928624137",   decimals:4, name:"Jay",
    website:"http://jnxt.org/"
};
assets[5] = {
    id:"2176003302076381931",   decimals:0, name:"MyNXT",
    website:"https://www.mynxt.info/"
};
assets[6] = {
    id:"12071612744977229797",  decimals:4, name:"SuperNET",
    website:"http://www.supernet.org/"
};
assets[7] = {
    id:"13502152099823770958",  decimals:4, name:"SuperNETx2",
    website:"https://nxtforum.org/unity/supernetx2-and-the-centralized-product-management-team-(cpmt)/"
};
assets[8] = {
    id:"1976421459488798622",   decimals:4, name:"SNcoinv1",
    website:"https://nxtforum.org/assets-board/sncoinv1-supernet-silver-bullion-coin/"
};
assets[9] = {
  id:"16353645177223876977",   decimals:4, name:"LazyTweeps",
  website:"https://nxtforum.org/asset-exchange-general/(ann)-lazytweeps-(asset-id-16353645177223876977)/"
};
// assets[10] = {};
assets[11] = {
    id:"17911762572811467637",  decimals:4, name:"NXTprivacy",
    website:"https://nxtforum.org/nxtventures/nxtprivacy-asset-that-includes-privacy-related-projects/"
};
assets[12] = {
    id:"17571711292785902558",  decimals:0, name:"NXTcoinsco",
    website:"https://nxtforum.org/nxtventures/nxtcoinsco-nodecoin-svmcoin-and-more-coins/"
};
assets[13] = {
    id:"3006420581923704757",  decimals:4, name:"sharkfund0",
    website:"https://nxtforum.org/nxtventures/shark-report-sharktales-and-other-musings/"
};
assets[14] = {
    id:"6932037131189568014",  decimals:0, name:"JL777hodl",
    website:"https://nxtforum.org/nxtventures/(official)-jlh-jl777hodl-description-news/"
};
assets[15] = {
    id:"12422608354438203866",  decimals:4, name:"ARDR",
    website:"https://www.ardorplatform.org"
};
//
//
// assets[50] = {};
//
//
assets[90] = {
    id:"7441230892853180965",  decimals:4, name:"Omnigames",
    website:"https://nxtforum.org/nxtventures/omnigames-asset/"
};
assets[91] = {
    id:"8217222248380501882",  decimals:4, name:"SpaceMesh",
    website:"https://nxtforum.org/nxtservices-releases/spacemesh-org-and-supermesh-io-asset/"
};
assets[92] = {
    id:"15113552914305929842",  decimals:0, name:"SNN",
};
// assets[93] = {};
assets[100] = {
    id:"12659653638116877017",  decimals:8, name:"superBTC",
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
var wavesbtcbalance = waves_btc * wavesqty;
var iotabtcbalance = iota_btc * iotaqty;
var heatbtcbalance = heat_btc * heatqty;
var stratbtcbalance = strat_btc * stratqty;


var totalnxt = (nxtqty).toMoney(0, '.', ',');
var totalbtcd = (btcdqty).toMoney(0, '.', ',');
var totalsys = (sysqty).toMoney(0, '.', ',');
var totalvrc = (vrcqty).toMoney(0, '.', ',');
var totalvpn = (vpnqty).toMoney(0, '.', ',');
var totalwaves = (wavesqty).toMoney(0, '.', ',');
var totaliota = (iotaqty).toMoney(0, '.', ',');
var totalheat = (heatqty).toMoney(0, '.', ',');
var totalstrat = (stratqty).toMoney(0, '.', ',');

nxtbtc = (nxtbtcbalance).toMoney(1, '.', ',');
btcdbtc = (btcdbtcbalance).toMoney(1, '.', ',');
sysbtc = (sysbtcbalance).toMoney(1, '.', ',');
vrcbtc = (vrcbtcbalance).toMoney(1, '.', ',');
vpnbtc = (vpnbtcbalance).toMoney(1, '.', ',');
wavesbtc = (wavesbtcbalance).toMoney(1, '.', ',');
iotabtc = (iotabtcbalance).toMoney(1, '.', ',');
heatbtc = (heatbtcbalance).toMoney(1, '.', ',');
stratbtc = (stratbtcbalance).toMoney(1, '.', ',');

$('#totalnxt').html(totalnxt);
$('#totalbtcd').html(totalbtcd);
$('#totalsys').html(totalsys);
$('#totalvrc').html(totalvrc);
$('#totalvpn').html(totalvpn);
$('#totalwaves').html(totalwaves);
$('#totaliota').html(totaliota);
$('#totalheat').html(totalheat);
$('#totalstrat').html(totalstrat);

$('#nxtbtcbalance').html(nxtbtc);
$('#btcdbtcbalance').html(btcdbtc);
$('#sysbtcbalance').html(sysbtc);
$('#vrcbtcbalance').html(vrcbtc);
$('#vpnbtcbalance').html(vpnbtc);
$('#wavesbtcbalance').html(wavesbtc);
$('#iotabtcbalance').html(iotabtc);
$('#heatbtcbalance').html(heatbtc);
$('#stratbtcbalance').html(stratbtc);


// Populate Coins Balance
// ---------------------------
$('#nxtbalance1').html(nxtqty1.toMoney(0, ".", ","));
$('#nxtbalance2').html(nxtqty2.toMoney(0, ".", ","));
$('#nxtbalance3').html(nxtqty3.toMoney(0, ".", ","));

$('#btcdbalance1').html(btcdqty1.toMoney(0, ".", ","));
$('#btcdbalance2').html(btcdqty2.toMoney(0, ".", ","));
$('#btcdbalance3').html(btcdqty3.toMoney(0, ".", ","));
$('#btcdbalance4').html(btcdqty4.toMoney(0, ".", ","));
$('#btcdbalance5').html(btcdqty5.toMoney(0, ".", ","));

$('#sysbalance1').html(sysqty.toMoney(0, ".", ","));
$('#vrcbalance1').html(vrcqty.toMoney(0, ".", ","));
$('#vpnbalance1').html(vpnqty.toMoney(0, ".", ","));
$('#wavesbalance1').html(wavesqty.toMoney(0, ".", ","));
$('#iotabalance1').html(iotaqty.toMoney(0, ".", ","));
$('#heatbalance1').html(heatqty.toMoney(0, ".", ","));
$('#stratbalance1').html(stratqty.toMoney(0, ".", ","));

// Calculate NAV
// ---------------------------
var totalbtc = (
                nxtbtcbalance +
                btcdbtcbalance +
                sysbtcbalance +
                vrcbtcbalance +
                wavesbtcbalance +
                iotabtcbalance +
                heatbtcbalance +
                stratbtcbalance +
                vpnbtcbalance +
                assetstotalbtc
              );

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
