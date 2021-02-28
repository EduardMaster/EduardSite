<h1>Calculadora</h1>"
<table>
    <thead>
        <tr>
            <th>Conta
            </th>
            <th> Resultado
            </th>
        </tr>
    </thead>
    <tbody>
<?php
for ($x = 1;$x <=10;$x++){
	
	for ($y = 1;$y <=10;$y++){
		echo "<tr>";
		echo "<td>$x x $y = </td> <td>" . ($x*$y) . "</td>";
		echo "</tr>\n";
	}
}
?>
</tbody>
</table>