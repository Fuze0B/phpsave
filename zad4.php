<?php
/*

*/

$arr = Array(
    "Kowalski" => array("j.polski"=>3,"historia"=>4),
    "Nowak" => array("j.polski"=>2,"historia"=>5)
);
echo "<table border='1';>";
$first = true;
foreach($arr as $k => $v) {
    if ($first) {
        echo "<tr>";
        echo "<th></th>";
        foreach($v as $kk => $vv) {
            echo "<th>".$kk."</th>";
        }
        $first = false;
        echo "</tr>";
    }
    echo "<tr>";
    echo "<th>".$k."</th>";
    foreach($v as $kk => $vv) {
        echo "<td>".$vv."</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>
