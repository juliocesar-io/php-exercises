<head><title>Ejercicio 1 </title></head>
<body>


<h2>Tablas de multiplicar del 1 al 10</h2>
<?php
$n1=1;
while($n1<=10)
{
echo "<table border=1><tr align=center><td colspan=2>Tabla de multiplicar del ".$n1.":</td></tr>";
$n2=1;
while($n2<=10)
{
$mult=$n1*$n2;
echo "<tr align=center><td>".$n1."</td><td> X </td><td>".$n2."</td><td> = </td><td>".$mult."</td></tr>";
$n2++;
}
echo "</table>";
$n1++;
}

$cols = 11;
$rows = 11;

echo "<h2>Tablas de pitagoras </h2>";

echo "<table border=\"1\">";

        for ($r = 1; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 1; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>';

        }

  echo"</table>";

?>
</body>
