<!-- <table width="100%" border=1>
    <tr>
        <td>sn</td>
        <td>sqr</td>
    </tr>
    <?php
    // $i = 1;
    // while ($i <= 10) {
    //     echo $i;

    // ?>
    //     <tr>
    //         <td> .$i</td>
    //         <td> $sq</td>
    //     </tr>
    // <?php
   
    //     $i++;
    // }
    ?>
</table> -->

<?php



$i = 1;

while ($i <= 10) {
    $sq=$i*$i;
    echo$i."sqr is:".$sq."</br>";
    $i++;
}

echo "<table width=50% border='1'>";
echo "<tr><th>SN</th><th>sqr</th></tr>";

$i = 1;

while ($i <= 10) {
    $sq = $i * $i;
    echo "<tr> 

    <td>" . $i . "</td>
    <td>" . $sq . "</td>
    </tr>";
    $i++;
}
echo "</table>";

?>
