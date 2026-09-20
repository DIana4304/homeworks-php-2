//Задание №2: создание консольного скрипта
<?php
$firstLine = trim(fgets(STDIN));
$secondLine = trim(fgets(STDIN));


if (!filter_var($firstLine, FILTER_VALIDATE_INT) || !filter_var($secondLine, FILTER_VALIDATE_INT)) {
    fwrite(STDERR, "Введите, пожалуйста, число\n");
    exit(1);
}

$a = (int)$firstLine;
$b = (int)$secondLine;


if ($b === 0) {
    fwrite(STDERR, "Делить на 0 нельзя\n");
    exit(1);
}


$result = $a / $b;
echo $result . PHP_EOL;
?>
