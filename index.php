<?php
$booleanVar = false;

//$variable = 3.14;
 $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

if (is_bool($booleanVar)) {
    echo 'bool'. "\n";
} else {
    echo 'not bool'. "\n";
} 
// -> bool
if (is_float($variable)) {
    echo 'float'. "\n";
} elseif(is_int($variable)) {
    echo 'integer'. "\n";
} 
if (is_int($variable)){
    echo 'integer'. "\n";
} else {
    echo 'not integer'. "\n";
}
// -> float

?>






<?php
// $variable = 3.14;

// switch (true) {
//     case ...(...):
//         $type = ...
//         break;
//     ...
//     default:
//         ... 
// }

// echo "type is $type"
//is_bool() - Проверяет, является ли переменная булевой
//is_int() - Проверяет, является ли переменная переменной целочисленного типа
//is_numeric() - Проверяет, является ли переменная числом или строкой, содержащей число
//is_string() - Проверяет, является ли переменная строкой
//is_array() - Определяет, является ли переменная массивом
//is_object() - Проверяет, является ли переменная объектом 
?>