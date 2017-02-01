
<?php
$cols = 10;
$rows = 10;

echo "<table border=\"1\">";

        for ($r =0; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 0; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>';

        }

  echo"</table>";



  <?php
$start = 1;
$end = 10;

echo ‘<table border=”1″ cellspacing=”0″ cellpadding=”5″>’;
for ($y = $start – 1; $y <= $end; ++$y) {
echo “<tr>”;
for ($x = $start – 1; $x <= $end; ++$x) {
if ($y == $start – 1) {
echo “<td><b>$x</b></td>”;

} else if ($x == $start – 1) {
echo “<td><b>$y</b></td>”;
} else {
echo “<td>”;
echo $x*$y;
echo “</td>”;
}
}
print “</tr>”;
}
print “</table>”;?>
