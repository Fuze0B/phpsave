<?php
/*
W pliku napisz 6 rekordów (linijek) składających się z nazwiska i liczby będącej wiekiem.
Pobierz dane z plikui wyświetl je w postaci:
{nazwisko} wiek: {wiek}
znajdź najstarszą osobę (nazwisko i wiek);


*/

$input = fopen("osoby.txt", "r");
$oldestName = "";
$oldestAge = 0;
for ($i = 0; $i < 6; $i++) {
    $line = fgets($input);
    $split = explode(";", $line);
    echo $split[0]." wiek: ".$split[1]."<br>";
    if ($split[1] > $oldestAge) {
        $oldestAge = intval($split[1]);
        $oldestName = $split[0];
    }
}
echo "<br>Najstarsza osoba:<br>";
echo $oldestName." wiek: ".$oldestAge."<br>";
?>