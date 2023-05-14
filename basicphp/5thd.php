<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i;
}
?>
<br>

<!-- do while and while statement -->
<?php
$c = 8;
while ($c < 8) {
    echo $c;
    $c++;
}
?>
<br>

<?php

for ($i = 1; $i <= 10; $i++) {

    $multiply = 2 * $i;

    echo "2 x " . $i . " = " . $multiply . "<br>";
}

$i = 1;
$t = 5;
while ($i <= 10) {

    $multiply = $t * $i;

    echo "$t x " . $i . " = " . $multiply . "<br>";
    $i++;
}
?>
<?php
$i = 1;
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
?>
<table width=50% border="1">
    <tr>
        <th>SN</th>
        <th>sqr</th>
    </tr>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        $sq = $i * $i;

    ?>
        <tr>
            <td>
                <?php
                echo $i; ?>
            </td>

            <td>
                <?php
                echo $sq; ?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<!-- using while loop -->

<?php

$i = 1;

while ($i <= 10) {
    echo $i;
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