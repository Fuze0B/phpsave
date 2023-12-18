<?php

/*
Z pliku pobierz 2 liczby naturalne:
ilośc wierszy,
ilość kolumn
w tablicy dwówymiarowej

tablica tę wypełnij tak, aby na pierwszym miejscu (0,0) była liczba 2 a każda następna wartość idąc po wierszach
była o 3  większa od wartości poprzedniej
otrzymaną tablicę wyświetl na stronie
i zapisz do pliku
*/


$plik = fopen("wymiary.txt","r");
$w = fgets($plik);
$k = fgets($plik);
$wp=2;
$tab = Array();

$zapis = fopen("WYMIARY1.txt","w");
for($i=0;$i<$w;$i++)
{
    for($j=0;$j<$k;$j++)
    {
        $tab[$i][$j]=$wp;
        $wp+=3;
        echo $tab[$i][$j]." ";
        fwrite($zapis,$tab[$i][$j]." ");

    }
    echo "<br>";
    fwrite($zapis,"\n");
}
?>


<?php
// Otwórz plik do odczytu
$plik = fopen('rozmiar.txt', 'r');

// Odczytaj liczbę z pliku
$rozmiar = fgets($plik);

// Zamknij plik
fclose($plik);

// Usuń białe znaki z odczytanej liczby
$rozmiar = trim($rozmiar);

// Wyświetl rozmiar tablicy
echo "Rozmiar tablicy: $rozmiar\n";

// Inicjalizuj tablicę o podanym rozmiarze
$tablica = array();

// Wypełnij tablicę zgodnie z wymaganiami
for ($i = 0; $i < $rozmiar; $i++) {
    // Jeśli indeks jest podzielny przez 3, ustaw wartość na 9, w przeciwnym razie na 5
    $tablica[$i] = ($i % 3 == 0) ? 9 : 5;
}

// Wyświetl tablicę
echo "Tablica:\n";
print_r($tablica);
?>

<?php
// Deklaruj i wypełnij tablicę asocjacyjną z cenami przedmiotów
$cenyPrzedmiotow = array(
    "Książka" => 29.99,
    "Telefon" => 899.99,
    "Laptop" => 1499.99,
    "Słuchawki" => 79.99,
    "Kubek" => 9.99,
    "Koszula" => 49.99
);

// Wyświetl nazwy przedmiotów i ich ceny
foreach ($cenyPrzedmiotow as $nazwa => $cena) {
    echo "$nazwa cena: $cena zł </br>";
}

// Oblicz sumę cen przedmiotów
$sumaCen = array_sum($cenyPrzedmiotow);

// Wyświetl sumę cen
echo "Suma cen przedmiotów: $sumaCen zł\n";
?>
<?php
$kraje = Array(
    "Kowalski" => array("j.polski" => 3, "historia" => 4),
    "Nowak" => array("j.polski" => 2, "historia" => 5)
);
echo"<table border='1'>";
$a = 1;
foreach ($kraje as $klucz => $wartosc) 
{
if($a==1)
 {
    echo"<tr>";
    echo "<th></th>";
    $a++;
    foreach($wartosc as $klucz2 =>$wartosc2){
        echo "<th>".$klucz2."</th>";
    }
    echo"</tr>";
 }
 echo "<tr>";
 echo "<th>".$klucz."</th>";
 foreach($wartosc as $klucz2 =>$wartosc2){
    echo "<td>".$wartosc2."</td>";
 }
 echo"</tr>";
}
echo"</table>";

?>
<?php
// Wylosuj liczby wierszy i kolumn
$liczbaWierszy = rand(5, 10);
$liczbaKolumn = rand(5, 10);

// Wyświetl wylosowane liczby
echo "Liczba wierszy: $liczbaWierszy\n";
echo "Liczba kolumn: $liczbaKolumn\n";

// Inicjalizuj tablicę o wylosowanych wymiarach
$tablica = array();
for ($i = 0; $i < $liczbaWierszy; $i++) {
    for ($j = 0; $j < $liczbaKolumn; $j++) {
        // Wypełnij pierwszy i ostatni wiersz jedynkami, resztę zerami
        if ($i == 0 || $i == $liczbaWierszy - 1) {
            $tablica[$i][$j] = 1;
        } else {
            $tablica[$i][$j] = 0;
        }
    }
}

// Wyświetl tablicę
echo "\nTablica:\n";
foreach ($tablica as $wiersz) {
    echo implode(' ', $wiersz) . "\n";
}

// Zapisz tablicę do pliku
$file = fopen('tablica.txt', 'w');
foreach ($tablica as $wiersz) {
    fwrite($file, implode(' ', $wiersz) . "\n");
}
fclose($file);

echo "\nTablica została zapisana do pliku 'tablica.txt'.\n";
?>
