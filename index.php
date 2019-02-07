<?php

/**
 * this is comment
 */
$a = 1; // int
$b = "Behruz Muyassarov";
$c = true;
$f = 1.1;
$arr = [];
$object = new stdClass();

echo '<p>For loop example:<br/></p>';

for ($i = 0; $i < 100; $i+=2) {
    $arr[] = $i * 2;
}

echo '<p>Foreach loop example:<br/></p>';

foreach ($arr as $key => $value) {
    if ($key > 0 && $key % 2 == 0)
    {
        echo '$key[' . $key . '] = $value[' . $value . ']<br/>';
    }
    if ($key == 10)
    {
        break;
        echo 'Behruz';
    }
}


echo '<p>While loop example:<br/></p>';

$k = 0;
while ($k < 100)
{
    echo 'Value $k is ' . $k . '<br/>';
    $k++;
}

echo '<p>Switch case example:<br/></p>';

$a = 11;
switch ($a) {
    case $a < 2:

        break;
    case $a < 10:
        break;
    case 10:
        echo '$a is ' . $a;
        break;
    default:
        echo 'Default case<br/>';
        break;
}

$name = 'Behruz';
$last_name = 'Muyassarov';

echo $name . ' ' . $last_name . '<br/>';

$full_name = "{$name} {$last_name}";
$full_name1 = '$name $last_name<br/>';
echo $full_name1;

$object = new stdClass();
$object->name = 'Behruz';
echo $object->name;


