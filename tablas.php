
<?php
$cols = 10;
$rows = 10;

echo "<table border=\"1\">";

        for ($r =10; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 10; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>';

        }

  echo"</table>";
?>
