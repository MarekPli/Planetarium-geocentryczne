<?php
/**
 * Created by PhpStorm.
 * User: marek
 * Date: 19.05.2018
 * Time: 11:36
 */

include_once __DIR__ . '/Planet.php';

//$pdo = myOpenDB();
echo "Planety: " ;

$arr = Planet::readAllPlanets() ;
//$planets = [];

foreach ($arr as $planet) {
    $planets[] = new Planet($planet);
}
echo implode($arr, ' ');
echo "<hr>";
// trzeba czekać..
//foreach ($planets as $planet) {
//    echo "('" . $planet->getName() . "', '"
//        . $planet->getMaxId() . "', '"
//        . $planet->getDistAUInfo("MIN") . "', '"
//        . $planet->getDistAUInfo("MAX") . "', '"
//        . $planet->getDistAUInfo("AVG")
// . "'),<br>";
//}
echo "<hr>";
//
$venus = new Planet('Venus');
echo "Data: " . $venus->getDate() . '<br>';
echo "Longtitude: " . $venus->getLongt() . '<br>';
$i = $venus->getMaxId();
echo "Max: " .  $i. '<br>';
echo "Data dla Max: " .  $venus->getDate($i) . '<hr>';
echo "Najwięcej: " . $venus->getDistAUInfo('MAX') . "<br>";
echo "Data 01.02.1234: " . $venus->searchDate("01.02.1234") . "<br>";
$list = explode ('.', "12.12.1234");
echo  implode("-", $list);

//$name, $angle, $nr
$pluton = new Planet('Pluto');

echo "<br>Stopnie początkowe dla planety " . $pluton->getName().
    ': '. ceil($pluton->getLongt(2213458)) . "&deg: ";
$i = $pluton->getDate();
echo ' ' . $pluton->getCurrId();
echo "<br>Odszedłem od początkowych ku 160&deg: "
    . $pluton->askDailyPlanet(160, 2213458) . "<br>";
$j = $pluton->getDate();
echo "Minął czas od " . $i . " do " . $j . "<br>";
echo "<hr>";
$i = $pluton->getLongt();
$nr = $pluton->getCurrId();
$angle = 10;
$oldDate = $pluton->getDate();
$pluton->askDailyPlanet($angle,$nr);
$newDate = $pluton->getDate();
$j = $pluton->getLongt();
echo "Wybrano kąt $angle<br>";
echo "Był kąt $i..." . $oldDate . "<br>";
echo "Jest kąt $j..." . $newDate . "<br>";