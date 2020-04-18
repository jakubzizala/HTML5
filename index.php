<?PHP
$a = 2;
$b = 2;

$vypnuto=true;
$klavesnice="asus";
$cena=10.5;
$cena2=5;
echo "<img src=\"img/NBA.png\" title='NBA basket' alt='NBA'/>";
echo "<a>ahoj\<a>";
//aritmeticke operatory

echo "<br> Sčítání";
var_dump($a + $b);
echo "<br>";

echo "<br> Odčítání";
var_dump($a - $b);
echo "<br>";

echo "<br> Dělení";
var_dump($a / $b);
echo "<br>";

echo "<br> Násobení";
var_dump($a * $b);
echo "<br>";

//prirovnavaci operatory

echo "<br>";
var_dump($a++);

echo "<br>";
var_dump($a--);

echo "<br>";
var_dump($a += $b);

echo "<br>";
var_dump($a -= $b);

echo "<br>";
var_dump($a *= $b);

echo "<br>";
var_dump($a /= $b);

//provnavaci operatory

echo "<br> Rovná se";
echo "<br>";
var_dump($a == $b);

echo "<br> Má jinou hodnotu";
echo "<br>";
var_dump($a != $b);

echo "<br> A je větší než B";
echo "<br>";
var_dump($a > $b);

echo "<br> B je větší než A";
echo "<br>";
var_dump($a < $b);

?>







