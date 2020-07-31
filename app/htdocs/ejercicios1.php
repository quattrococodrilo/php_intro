<h1>Exercise 1</h1>
<?php
// Exercise 1
// --------------------------------------
$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

$inter_frases = [
    'decirlo al revés lo dudo.',
    '¡Qué trabajo me ha costado!',
]
?>


<div>
    <?php foreach ($inter_frases as $val1) { ?>
        <p>
            <?php
            $frase = '';
            foreach ($arreglo as $key => $val) {
                $frase .= "$val ";
            };
            echo ucfirst($frase);
            ?>
        </p>
        <p>
            <?php echo $val1 ?>
        </p>
    <?php } ?>
</div>

<h1>Exercise 2</h1>

<?php
// Exercise 2
// ----------------------------------------

$countries = [
    'México' => ['Monterrey', 'Querétaro', 'Guadalajara'],
    'Colombia' => ['Bogota', 'Cartagena', 'Medellin'],
]

?>

<div>
    <? foreach ($countries as $country_name => $cities) {?>
    <p>
        <strong>
            <? echo $country_name ?></strong>
        <ul>
            <? foreach($cities as $names) {?>
            <li>
                <? echo $names ?>
            </li>
            <? } ?>
        </ul>
    </p>
    <?}?>
</div>

<h1>Exercise 3</h1>

<? 
$vals = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
$last_val = count($vals) - 1;
sort($vals);
echo implode(', ', $vals);
echo "<br>";
echo implode(',', array_slice($vals, 0, 3));
echo "<br>";
echo implode(',', array_slice($vals, $last_val - 2, $last_val - 2 + 3));
?>