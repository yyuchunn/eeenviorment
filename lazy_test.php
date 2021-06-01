<?php
// $Temp=$_GET['search'];
// $SheetIndex=0;
switch ($_GET['search']) {
    case 159:
        $SheetIndex = 1;
        break;
    case 169:
        $SheetIndex = 2;
        break;
    case 179:
        $SheetIndex = 3;
        break;
    case 189:
        $SheetIndex = 4;
        break;
    case 259:
        $SheetIndex = 5;
        break;
    case 269:
        $SheetIndex = 6;
        break;
    case 279:
        $SheetIndex = 7;
        break;
    case 289:
        $SheetIndex = 8;
        break;
    case 359:
        $SheetIndex = 9;
        break;
    case 369:
        $SheetIndex = 10;
        break;
    case 379:
        $SheetIndex = 11;
        break;
    case 389:
        $SheetIndex = 12;
        break;
    case 459:
        $SheetIndex = 13;
        break;
    case 469:
        $SheetIndex = 14;
        break;
    case 479:
        $SheetIndex = 15;
        break;
    case 489:
        $SheetIndex = 16;
        break;
    case 1510:
        $SheetIndex = 17;
        break;
    case 1610:
        $SheetIndex = 18;
        break;
    case 1710:
        $SheetIndex = 19;
        break;
    case 1810:
        $SheetIndex = 20;
        break;
    case 2510:
        $SheetIndex = 21;
        break;
    case 2610:
        $SheetIndex = 22;
        break;
    case 2710:
        $SheetIndex = 23;
        break;
    case 2810:
        $SheetIndex = 24;
        break;
    case 3510:
        $SheetIndex = 25;
        break;
    case 3610:
        $SheetIndex = 26;
        break;
    case 3710:
        $SheetIndex = 27;
        break;
    case 3810:
        $SheetIndex = 28;
        break;
    case 4510:
        $SheetIndex = 29;
        break;
    case 4610:
        $SheetIndex = 30;
        break;
    case 4710:
        $SheetIndex = 31;
        break;
    case 4810:
        $SheetIndex = 32;
        break;
    case 1511:
        $SheetIndex = 33;
        break;
    case 1611:
        $SheetIndex = 34;
        break;
    case 1711:
        $SheetIndex = 35;
        break;
    case 1811:
        $SheetIndex = 36;
        break;
    case 2511:
        $SheetIndex = 37;
        break;
    case 2611:
        $SheetIndex = 38;
        break;
    case 2711:
        $SheetIndex = 39;
        break;
    case 2811:
        $SheetIndex = 40;
        break;
    case 3511:
        $SheetIndex = 41;
        break;
    case 3611:
        $SheetIndex = 42;
        break;
    case 3711:
        $SheetIndex = 43;
        break;
    case 3811:
        $SheetIndex = 44;
        break;
    case 4511:
        $SheetIndex = 45;
        break;
    case 4611:
        $SheetIndex = 46;
        break;
    case 4711:
        $SheetIndex = 47;
        break;
    case 4811:
        $SheetIndex = 48;
        break;
    case 1512:
        $SheetIndex = 49;
        break;
    case 1612:
        $SheetIndex = 50;
        break;
    case 1712:
        $SheetIndex = 51;
        break;
    case 1812:
        $SheetIndex = 52;
        break;
    case 2512:
        $SheetIndex = 53;
        break;
    case 2612:
        $SheetIndex = 54;
        break;
    case 2712:
        $SheetIndex = 55;
        break;
    case 2812:
        $SheetIndex = 56;
        break;
    case 3512:
        $SheetIndex = 57;
        break;
    case 3612:
        $SheetIndex = 58;
        break;
    case 3712:
        $SheetIndex = 59;
        break;
    case 3812:
        $SheetIndex = 60;
        break;
    case 4512:
        $SheetIndex = 61;
        break;
    case 4612:
        $SheetIndex = 62;
        break;
    case 4712:
        $SheetIndex = 63;
        break;
    case 4812:
        $SheetIndex = 64;
        break;
    case 16:
        $SheetIndex = 1;
        break;
    case 17:
        $SheetIndex = 2;
        break;
    case 18:
        $SheetIndex = 3;
        break;
    case 19:
        $SheetIndex = 4;
        break;
    case 26:
        $SheetIndex = 5;
        break;
    case 27:
        $SheetIndex = 6;
        break;
    case 28:
        $SheetIndex = 7;
        break;
    case 29:
        $SheetIndex = 8;
        break;
    case 36:
        $SheetIndex = 9;
        break;
    case 37:
        $SheetIndex = 10;
        break;
    case 38:
        $SheetIndex = 11;
        break;
    case 39:
        $SheetIndex = 12;
        break;
    case 46:
        $SheetIndex = 13;
        break;
    case 47:
        $SheetIndex = 14;
        break;
    case 48:
        $SheetIndex = 15;
        break;
    case 49:
        $SheetIndex = 16;
        break;
    case 56:
        $SheetIndex = 17;
        break;
    case 57:
        $SheetIndex = 18;
        break;
    case 58:
        $SheetIndex = 19;
        break;
    case 59:
        $SheetIndex = 20;
        break;
}

$KEY = "1Zq77uCdE_TCmChC6JVr2lJEvkVlj4Zma2IknqcoG0Z4";
// $SheetIndex = 1;
$json_url = "https://spreadsheets.google.com/feeds/list/".$KEY."/".$SheetIndex."/public/values?alt=json";
$string = file_get_contents($json_url);
$data_json = json_decode($string,true);
//print_r($data_json['feed']['entry']/*[0]['gsx$_cokwr']['$t']*/ );
//$title =  $data_json['feed']['entry'][0]['gsx$_cokwr']['$t'];
$item1 =  $data_json['feed']['entry'][1]['gsx$_cokwr']['$t'];
$item2 =  $data_json['feed']['entry'][2]['gsx$_cokwr']['$t'];
$item3 =  $data_json['feed']['entry'][3]['gsx$_cokwr']['$t'];
$price1 =  $data_json['feed']['entry'][4]['gsx$_cokwr']['$t'];
$item4 =  $data_json['feed']['entry'][5]['gsx$_cokwr']['$t'];
$item5 =  $data_json['feed']['entry'][6]['gsx$_cokwr']['$t'];
$item6 =  $data_json['feed']['entry'][7]['gsx$_cokwr']['$t'];
$price2 =  $data_json['feed']['entry'][8]['gsx$_cokwr']['$t'];
$item7 =  $data_json['feed']['entry'][9]['gsx$_cokwr']['$t'];
$item8 =  $data_json['feed']['entry'][10]['gsx$_cokwr']['$t'];
$item9 =  $data_json['feed']['entry'][11]['gsx$_cokwr']['$t'];
$price3 =  $data_json['feed']['entry'][12]['gsx$_cokwr']['$t'];
$item10 =  $data_json['feed']['entry'][13]['gsx$_cokwr']['$t'];
$item11 =  $data_json['feed']['entry'][14]['gsx$_cokwr']['$t'];
$item12 =  $data_json['feed']['entry'][15]['gsx$_cokwr']['$t'];
$price4 =  $data_json['feed']['entry'][16]['gsx$_cokwr']['$t'];

$arr = [
    'plan1' => [
        'washingMachine' => $item1,
        'refrigerator' => $item2,
        'tv' => $item3,
        'total' => $price1,
    ],
    'plan2' => [
        'washingMachine' => $item4,
        'refrigerator' => $item5,
        'tv' => $item6,
        'total' => $price2,
    ],
    'plan3' => [
        'washingMachine' => $item7,
        'refrigerator' => $item8,
        'tv' => $item9,
        'total' => $price3,
    ],
    'plan4' => [
        'washingMachine' => $item10,
        'refrigerator' => $item11,
        'tv' => $item12,
        'total' => $price4,
    ]
];
echo json_encode($arr);
// echo $SheetIndex;
// print_r($arr);
//print($title.'<br>');
 //print_r($arr);
//print($name.'<br>');
//print($content.'<br>');
//print($price.'<br>');
