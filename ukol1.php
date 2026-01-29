<?php
$num = 10;
$num2 = $num - 6;
echo $num2;

echo'<br>Checkbox <input type="checkbox" name="a" id="a">';
echo "<br><br><br>";

echo"<table border=2>";
for($i = 0; $i < 10; ++$i)
{
    echo "<tr>";
    for($j = 0; $j < 10; ++$j)
    {
        if($j == 0)
        {echo "<td>Radek $i: </td>";}
        else
        {echo "<td>sloupec $j </td>";}
    }
    echo "</tr>";
}
echo "</table>";


echo "";
?> 

<!DOCTYPE html>
<html>
<body>

<form action="" method="get"></form>

</body>
</html>
