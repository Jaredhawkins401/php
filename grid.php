<?php
$size = mt_rand(0, 10);
$table = "<table>\n";
$table .= "</table>\n"; //string concatenate, like += 

for($rows = 1; $rows <= $size; $rows++)
{
    $table .= "\t<tr>";
    $table .= "\t</tr>\n";
}

echo $table;
?>