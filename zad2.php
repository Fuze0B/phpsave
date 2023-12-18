<?php
/*
Utwórz tabelę asocjacyjną gdzie kluczami są nazwy towarów natomiast wartościami ich cena.
Wypełnij tą tablicę 20 rekordami gdzie nazwy towarów będą pobrane z pliku a ceny będą liczbami losowymi
z przedziału <10:99> wypisz tą tablicę w postaci:
{nazwa} cena: {cena}zł
*/

$input = fopen("towary.txt", "r");
$ceny = Array();
for ($i = 0; $i < 20; $i++) {
    $line = fgets($input);
    $ceny[$line] = rand(10, 99);
    echo $line." cena: ".$ceny[$line]."zł<br>";
}
?>