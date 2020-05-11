<?PHP

require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;

echo 666;
echo"<br>";
print (66.6);
echo"<br>";
echo "pórek";
echo"<br>";
print(TRUE);
 echo"koprovka"." segedín";
 echo"<img src=\"GRW_ghosts_1920x1080.jpg\">";
 echo"\\";
 
 $a = 8;
echo"<br>";
$b = 4;

echo "<br>";

dump($a+$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a-$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a*$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a/$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a+=$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a-=$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a*=$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a/=$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a==$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a!=$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a>$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a<$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a||$b);

echo "<br>";

$a = 8;
echo"<br>";
$b = 4;

dump($a&&$b);

$ladislavKraus1 = 1;
$ladislavKraus2 = 1;

if($ladislavKraus1 < $ladislavKraus2){
    echo"Ladislav Kraus <br>";
}
if($ladislavKraus1 > $ladislavKraus2){
    echo"Ladislav <br>";
}

else{
    echo"Kraus <br>";
}

if($ladislavKraus1 >= $ladislavKraus2){
    echo"Ladislav <br>";
if($ladislavKraus1 == $ladislavKraus2){
    echo"Kraus <br>";
}
}

switch ($ladislavKraus1) {
    case 0:
    break;
    case 1:
    echo"zlutej banan";
    break;
    case 2: 
    break;
    case 3:
    break;
    case 4:
    break;
    case 5:
    default:
        break;
}  
$produkty = array (1 =>"banan", 2 =>"banann",3 =>"bannan2", 4 =>"banann3", 5 =>"banan4", 6 =>"bbanan5", 7 =>"baanan6", 8 =>"banaann", 9 =>"banann8", 10 =>"banannnn9");
dump($produkty);
$produkty ["x"] = array();
$produkty ["y"] = array();
$produkty ["z"] = array(
    array('jméno' => 'a', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'smeták', 'věk' => 2),
    array('jméno' => 'e', 'pohlaví' => 'Ž', 'druh' => 'kočka', 'rasa' => 'perská', 'věk' => 8),
    array('jméno' => 'i', 'pohlaví' => 'N', 'druh' => 'pavián', 'rasa' => 'oranžová', 'věk' => 7),
    array('jméno' => 'o', 'pohlaví' => 'UH', 'druh' => 'člověk', 'rasa' => 'bílá', 'věk' => 3),
    array('jméno' => 'u', 'pohlaví' => 'N', 'druh' => 'kobliha', 'rasa' => 'jahodová', 'věk' => 9),
    array('jméno' => 'm', 'pohlaví' => 'M', 'druh' => 'párek', 'rasa' => 'mletá', 'věk' => 5),
    array('jméno' => 'n', 'pohlaví' => 'Ž', 'druh' => 'klokan', 'rasa' => 'skakavi', 'věk' => 585),
    array('jméno' => 'b', 'pohlaví' => 'M', 'druh' => 'losos', 'rasa' => 'obecna', 'věk' => 5876975),
    array('jméno' => 'g', 'pohlaví' => 'N', 'druh' => 'kapusta', 'rasa' => 'listnata', 'věk' => 257),
    array('jméno' => 'f', 'pohlaví' => 'M', 'druh' => 'ananas', 'rasa' => 'dobry', 'věk' => 9),
);
dump($produkty);

$radekLadislavKraus=11;
$sloupecLadislavKraus=17;
            echo "<table border=1>";
            for($i=1;$i<=$radekLadislavKraus;$i++) {
                echo "<tr>";
for($x=1;$x<=$sloupecLadislavKraus;$x++){
    echo "<td>".$i."-".$x."</td>";
}
                echo "</tr>";
            }
            echo "</table><br><br><br>";

$a = array(1,2,5,6,7,8);
echo"<br>";
$a = abs($a[3]);
echo "<br>". $a;

$a = array(1,2,5);
echo"<br>";
$a = max($a);
echo "<br>". $a;
         
echo "<br>";
$jmena = "Audi, Honda, Ferrari, Citroen";

$jmena = ucwords($jmena);
var_dump($jmena);
echo"<br>";
$jmena = strtolower($jmena);
var_dump($jmena);

echo sizeof($produkty);
array_splice($produkty, 0, 1, "banan");

echo"<br>";
echo"<br>";

function mocniny($cislo , $exponent){
            $vysledek=pow($cislo, $exponent);
            return $vysledek;
        }
echo mocniny(5, 10);
  
?>

