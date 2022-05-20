<?php
function papancatur($baris, $kolom) {
    $col=1;
    echo "<table align=center border=1 cellspacing=0>";
    while ($col <= $baris) {
        echo "<tr>";
        $row=1;
        while ($row <= $kolom) {
            if (($col+$row) %2 > 0)
            echo "<td width=50 height=50  bgcolor=#000000>
                </td>";
            else
            echo "<td width=50 height=50 bgcolor=#ffffff>
                </td>";
            $row++;
        }
        echo "</tr>";
        $col++;
    }
    echo "</table><br><br>";
}
papancatur(8 ,8)
?>