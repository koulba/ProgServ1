<h1>Exercices</h1>

<h3>Exercice 1</h3>
<?php
function greet($name) {
    echo "Hello, $name!<br>";
}

greet("Alice");

?>

<h3>Exercice 2</h3>

<?php
function square($number){
    return $number * $number;
}
echo square(4);

?>

<h3>Exercice 3</h3>
<?php
function multiply($a,$b){
    return $a*$b;
}
echo multiply(6,7);

?>

<h3>Exercice 4</h3>
<?php
function divide($a,$b){
    if($b == 0){
        return "Division par zero non autorisé !";
    } else {
        return $a / $b;  
    }
}
echo divide(6,3);

?>


<h3>Exercice 5</h3>
<?php
function absoluteValue($number){
    return abs($number);
}
echo absoluteValue(-15);

?>

<h3>Exercice 6</h3>
<?php
function maxOfTwo($a,$b){
    return max($a,$b);
}
echo maxOfTwo(6, 12);
?>

<h3>Exercice 7</h3>
<?php
function isEven($number) {
    return $number % 2 == 0;
}
$result = isEven(10);

if ($result) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}
?>

<h3>Exercice 8</h3>
<?php
function grade($pointsObt, $pointsMax){
    return ($pointsObt / $pointsMax)*5 + 1;
}
echo grade(47, 66);

?>

<h3>Exercice 9</h3>
<?php
function isPassing($grade){
    if($grade>= 4.0){
        return "true";
    } else {
        return "false";
    }
}
echo isPassing(3.5)
?>

<h3>Exercice 10</h3>
<?php
function isLeapYear($year){
    if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0){
        return "Bissextile";
    } else {
        return "Non-bissextile";
    }
}
echo isLeapYear(2020);
?>
<h3>Exercice 11</h3>
<h3>Exercice 12</h3>
<h3>Exercice 14</h3>
<h3>Exercice 15</h3>
<h3>Exercice 16</h3>
<h3>Exercice 17</h3>
<h3>Exercice 18</h3>
<h3>Exercice 19</h3>
<h3>Exercice 20</h3>
<h3>Exercice 21</h3>
<h3>Exercice 22</h3>
<h3>Exercice 23</h3>
<h3>Exercice 24</h3>
<h3>Exercice 25</h3>
