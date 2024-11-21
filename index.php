<?php
// $variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
 $variable = [];

//-> Использование if..elseif
if (is_bool($variable)) {
    echo 'bool';
} elseif (is_float($variable)) {
    echo 'float';
} elseif(is_int($variable)) {
    echo 'integer';
} elseif (is_numeric($variable)) {
     echo 'numeric';
} elseif (is_string($variable)) {
    echo 'string';
} elseif (is_array($variable)) {
    echo 'array';
} elseif (is_object($variable)) {
    echo 'object';
} else {
    echo 'did not identify the type';
}
?>

<?php
//-> Реализация при помощи switch-case
switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'integert';
        break;
    case is_numeric($variable):
        $type = 'numeric';
        break;
    case is_string($variable):
        $type = 'string';
        break;
    case is_array($variable):
        $type = 'array';
        break;
    case is_object($variable):
        $type = 'object';
        break;     
    default:
        echo 'did not identify the type';
}
if  ($variable !== null) {
    echo "type is $type";
}
?>

<?php
//-> Реализация при помощи match
$result = match (true) {
    is_bool($variable) => 'bool',
    is_float($variable) => 'float',
    is_int($variable) => 'integer',
    is_numeric($variable) => 'numeric',
    is_string($variable) => 'string',
    is_array($variable) => 'array',
    is_object($variable) => 'is_object',
    default => 'did not identify the type',
};
echo $result;
?>