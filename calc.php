<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}
if (empty($_GET['operation'])) {
    return 'Не передана операция';
}

if (empty($_GET['x']) || empty($_GET['y'])) {
    return 'Не переданы аргументы';
}
$x = $_GET['x'];
$y = $_GET['y'];

$expression = $x . ' ' . $_GET['operation'] . ' ' . $y . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x + $y;
        break;
    case '-':
        $result = $x - $y;
        break;
    case '*':
        $result = $x * $y;
        break;
    case '/':
    if ($x == 0 or $y ==0 ) {
    	return 'Одно из значений равно 0, пожалуйста замените занчение';} //Была добавлена ситуация с введением 0 значения, но она не работает так как есть первоначальная проверка на нулевые значения.
    	else {
        $result = $x / $y;}
        break;
    default:
        return 'Операция не поддерживается';
}
return $expression . $result;