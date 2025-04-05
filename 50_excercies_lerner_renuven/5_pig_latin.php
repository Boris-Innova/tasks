<?php

const EN_LETTERS = [
    'a', 'e', 'i', 'o', 'u', 'y',
    'A', 'E', 'I', 'O', 'U', 'Y'
];

function convertWordToPigLatin(string $word): string
{
    $word = trim($word);
    if (empty($word)) {
        return '';
    }

    $firstLetter = $word[0];
    if (in_array($firstLetter, EN_LETTERS)) {
        $wordInPigLatinFormat = $word . 'way';
    } else {
        $wordInPigLatinFormat = substr_replace($word, '', 0, 1) . $firstLetter . 'ay';
    }

    return $wordInPigLatinFormat;
}


$wordsForTest = ['fuck', 'donal', 'GAlexandr_', 'apple', 'any', 'x', 'a'];
foreach ($wordsForTest as $wordForTest) {
    $result = convertWordToPigLatin($wordForTest);
    print_r("WORD FOR TEST: $wordForTest, RESULT: $result \n");
}