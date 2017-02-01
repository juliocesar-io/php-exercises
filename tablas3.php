<head><title>Tablas de multiplicar </title></head>
<body>
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
?>
</body>
