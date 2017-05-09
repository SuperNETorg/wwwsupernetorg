$(document).ready(function() {

$.ajaxSetup({
  async: false
});

function get_json(url) {
    var result;
    $.getJSON(url, function(data) {
        result = data;
        return false;
    });
    return result;
}

var nxtdata = get_json("../../nav/nxt.json");
var heatdata = get_json("../../nav/heat.json");
var bitstamp = get_json("../../nav/bitstamp.json");
var poloniex = get_json("../../nav/poloniex.json");
var bittrex = get_json("../../nav/bittrex.json");

// console.log(nxtdata);
// console.log(heatdata);
// console.log(bitstamp);
// console.log(poloniex);
// console.log(bittrex);

var nxt = nxtdata.nxt;
var nxtassets = nxtdata.assets;

var accountnxt1 = nxt[0].accountRS;
var accountnxt2 = nxt[1].accountRS;
var accountnxt3 = nxt[2].accountRS;
var accountvrc = "VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2";
var accountsys = "SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y";
var accountiota = "OZSHBYNQLLKOUDQMZRHMYZQFC9JPXIWNITEOMX9NBDWBBIIWDPBHAZTCQBTOSAYION9RMUIXMIYGZVNXF";

var nxtqty1 = nxt[0].balance; //NXT-MRBN-8DFH-PFMK-A4DBM
var nxtqty2 = nxt[1].balance; //NXT-USU4-92UY-KEYT-4H649
var nxtqty3 = nxt[2].balance; //NXT-H8AL-VEG7-4FL5-G2L4W
var nxtqty = nxtqty1 + nxtqty2 + nxtqty3;

var ardrqty1 = nxtassets[accountnxt1]['12422608354438203866'].qty;
var ardrqty2 = nxtassets[accountnxt2]['12422608354438203866'].qty;
var ardrqty3 = nxtassets[accountnxt3]['12422608354438203866'].qty;
var ardrqty = ardrqty1 + ardrqty2 + ardrqty3;

var kmdqty = 3000000; // Komodo share
var vrcqty = 2199368; //VDAQoJHiANmBDBC94MqqLYXosUEZqfk1p2
var sysqty = 20000000; //SRhwEU1aQk2DPJSC6NTySTdCEtGpS7UF4Y
var wavesqty = 700000;
var heatqty = heatdata.heat.balance; // ~ 4% of all Heat
var stratqty = 1800000; // ~2% of Stratis, ScBpQqL2fxiJPjnpQRoSBtatZxtPVVUgvi
var iotaqty = 31000; //Gi //tangle.ninja

// Get Ticker Prices
// ---------------------------
var btc_usd = bitstamp.btcusd.price;
var btc_eur = bitstamp.btceur.price;

var nxt_btc = poloniex.NXT.price;
var ardr_btc = poloniex.ARDR.price;
var sys_btc = poloniex.SYS.price;
var vrc_btc = poloniex.VRC.price;
var strat_btc = poloniex.STRAT.price;

var waves_btc = bittrex.WAVES.price;
var kmd_btc = bittrex.KMD.price;

var heat_btc = 1 / heatdata.heat.price; // Heat AE price

var iota_btc = 0.025; // Manual OTC price of Gi

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

var assets = [];

assets[0] = {
    id:"13476425053110940554",  name:"Crypto777",
    website:"http://www.crypto777.com/"
};
assets[1] = {
    id:"15344649963748848799",  name:"Instantdex",
    website:"http://www.instantdex.org/"
};
assets[2] = {
    id:"6883271355794806507",   name:"Pangea",
    website:"http://pangeapoker.net/"
};
assets[3] = {
    id:"6854596569382794790",   name:"SkyNET",
    website:"http://www.finhive.com/"
};
assets[4] = {
    id:"8688289798928624137",   name:"Jay",
    website:"http://jnxt.org/"
};
assets[5] = {
    id:"2176003302076381931",   name:"MyNXT",
    website:"https://www.mynxt.info/"
};
assets[6] = {
    id:"12071612744977229797",  name:"SuperNET",
    website:"http://www.supernet.org/"
};
assets[7] = {
    id:"13502152099823770958",  name:"SuperNETx2",
    website:"https://nxtforum.org/unity/supernetx2-and-the-centralized-product-management-team-(cpmt)/"
};
assets[8] = {
    id:"1976421459488798622",   name:"SNcoinv1",
    website:"https://nxtforum.org/assets-board/sncoinv1-supernet-silver-bullion-coin/"
};
assets[9] = {
  id:"16353645177223876977",    name:"LazyTweeps",
  website:"https://nxtforum.org/asset-exchange-general/(ann)-lazytweeps-(asset-id-16353645177223876977)/"
};
assets[11] = {
    id:"17911762572811467637",  name:"NXTprivacy",
    website:"https://nxtforum.org/nxtventures/nxtprivacy-asset-that-includes-privacy-related-projects/"
};
assets[12] = {
    id:"17571711292785902558",  name:"NXTcoinsco",
    website:"https://nxtforum.org/nxtventures/nxtcoinsco-nodecoin-svmcoin-and-more-coins/"
};
assets[13] = {
    id:"3006420581923704757",   name:"sharkfund0",
    website:"https://nxtforum.org/nxtventures/shark-report-sharktales-and-other-musings/"
};
assets[14] = {
    id:"6932037131189568014",   name:"JL777hodl",
    website:"https://nxtforum.org/nxtventures/(official)-jlh-jl777hodl-description-news/"
};
// assets[15] = {
//     id:"12422608354438203866",  name:"ARDR",
//     website:"https://www.ardorplatform.org"
// };
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
assets[100] = {
    id:"12659653638116877017",  decimals:8, name:"superBTC",
    website:"https://www.bitcoin.org/"
};


var assetstotalnxt = 0;
var assetstotalbtc = 0;

// Get Last Price from NXT AE
// Calculate Asset Shares Value
// ---------------------------
for (var i in assets) {

  assets[i].data1 = nxtassets[accountnxt1][assets[i].id];
  assets[i].data2 = nxtassets[accountnxt2][assets[i].id];
  assets[i].data3 = nxtassets[accountnxt3][assets[i].id];

  if (assets[i].data1 === undefined) {
    assets[i].balance1 = 0;
  } else {
    assets[i].balance1 = assets[i].data1.qty;
    assets[i].price = assets[i].data1.lastprice;
  }

  if (assets[i].data2 === undefined) {
    assets[i].balance2 = 0;
  } else {
    assets[i].balance2 = assets[i].data2.qty;
    assets[i].price = assets[i].data2.lastprice;
  }

  if (assets[i].data3 === undefined) {
    assets[i].balance3 = 0;
  } else {
    assets[i].balance3 = assets[i].data3.qty;
    assets[i].price = assets[i].data3.lastprice;
  }

  // Calculate Asset Balance
  assets[i].balance = assets[i].balance1 + assets[i].balance2 + assets[i].balance3;
  // Calculate Asset NXT price
  assets[i].totalnxt = assets[i].price * assets[i].balance;
  // Calculate Asset BTC price
  assets[i].totalbtc = assets[i].totalnxt * nxt_btc;


  // ARDOR
  if (assets[i].id == "12422608354438203866") {
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


var nxtbtcbalance = nxt_btc * nxtqty;
var ardrbtcbalance = ardr_btc * ardrqty;
var kmdbtcbalance = kmd_btc * kmdqty;
var vrcbtcbalance = vrc_btc * vrcqty;
var sysbtcbalance = sys_btc * sysqty;
var wavesbtcbalance = waves_btc * wavesqty;
var iotabtcbalance = iota_btc * iotaqty;
var heatbtcbalance = heat_btc * heatqty;
var stratbtcbalance = strat_btc * stratqty;


var totalnxt = (nxtqty).toMoney(0, '.', ',');
var totalardr = (ardrqty).toMoney(0, '.', ',');
var totalkmd = (kmdqty).toMoney(0, '.', ',');
var totalsys = (sysqty).toMoney(0, '.', ',');
var totalvrc = (vrcqty).toMoney(0, '.', ',');
var totalwaves = (wavesqty).toMoney(0, '.', ',');
var totaliota = (iotaqty).toMoney(0, '.', ',');
var totalheat = (heatqty).toMoney(0, '.', ',');
var totalstrat = (stratqty).toMoney(0, '.', ',');

nxtbtc = (nxtbtcbalance).toMoney(1, '.', ',');
ardrbtc = (ardrbtcbalance).toMoney(1, '.', ',');
kmdbtc = (kmdbtcbalance).toMoney(1, '.', ',');
sysbtc = (sysbtcbalance).toMoney(1, '.', ',');
vrcbtc = (vrcbtcbalance).toMoney(1, '.', ',');
wavesbtc = (wavesbtcbalance).toMoney(1, '.', ',');
iotabtc = (iotabtcbalance).toMoney(1, '.', ',');
heatbtc = (heatbtcbalance).toMoney(1, '.', ',');
stratbtc = (stratbtcbalance).toMoney(1, '.', ',');

$('#totalnxt').html(totalnxt);
$('#totalardr').html(totalardr);
$('#totalkmd').html(totalkmd);
$('#totalsys').html(totalsys);
$('#totalvrc').html(totalvrc);
$('#totalwaves').html(totalwaves);
$('#totaliota').html(totaliota);
$('#totalheat').html(totalheat);
$('#totalstrat').html(totalstrat);

$('#nxtbtcbalance').html(nxtbtc);
$('#ardrbtcbalance').html(ardrbtc);
$('#kmdbtcbalance').html(kmdbtc);
$('#sysbtcbalance').html(sysbtc);
$('#vrcbtcbalance').html(vrcbtc);
$('#wavesbtcbalance').html(wavesbtc);
$('#iotabtcbalance').html(iotabtc);
$('#heatbtcbalance').html(heatbtc);
$('#stratbtcbalance').html(stratbtc);


// Populate Coins Balance
// ---------------------------
$('#nxtbalance1').html(nxtqty1.toMoney(0, ".", ","));
$('#nxtbalance2').html(nxtqty2.toMoney(0, ".", ","));
$('#nxtbalance3').html(nxtqty3.toMoney(0, ".", ","));

$('#ardrbalance1').html(ardrqty1.toMoney(0, ".", ","));
$('#ardrbalance2').html(ardrqty2.toMoney(0, ".", ","));
$('#ardrbalance3').html(ardrqty3.toMoney(0, ".", ","));

$('#kmdbalance1').html(kmdqty.toMoney(0, ".", ","));
$('#sysbalance1').html(sysqty.toMoney(0, ".", ","));
$('#vrcbalance1').html(vrcqty.toMoney(0, ".", ","));
$('#wavesbalance1').html(wavesqty.toMoney(0, ".", ","));
$('#iotabalance1').html(iotaqty.toMoney(0, ".", ","));
$('#heatbalance1').html(heatqty.toMoney(0, ".", ","));
$('#stratbalance1').html(stratqty.toMoney(0, ".", ","));

// Calculate NAV
// ---------------------------
var totalbtc = (
                nxtbtcbalance +
                ardrbtcbalance +
                kmdbtcbalance +
                sysbtcbalance +
                vrcbtcbalance +
                wavesbtcbalance +
                iotabtcbalance +
                heatbtcbalance +
                stratbtcbalance +
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
