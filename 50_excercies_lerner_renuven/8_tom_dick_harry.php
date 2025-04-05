<?php


$inputString = 'Tom Dick Harry';
$wordsArray = explode(' ', $inputString);
sort($wordsArray);
print_r(
    implode(',', $wordsArray)
);