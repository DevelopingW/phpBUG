<?php

$homePath = realpath(dirname(__FILE__));
$dS= DIRECTORY_SEPARATOR;

require_once($homePath.$dS.'core'.$dS.'abstracts'.$dS.'traits'.$dS.'TraitSetGetForClass.php');

class TestClass
{
    use \core\abstracts\traits\TraitSetGetForClass;
}

$test = new TestClass();
$test->varTest = 10;

if (empty($test->varTest)) {
    echo "1) Переменная равна нулю, значение: (" . $test->varTest . ")\n";
}

if (empty(($test->varTest))) {
    echo "2) Переменная равна нулю, значение: (" . $test->varTest . ")\n";
}

$varTest = $test->varTest;
if (empty($varTest)) {
    echo "3) Переменная равна нулю, значение: (" . $test->varTest . ")\n";
}