EN_LETTERS = [
    'a', 'e', 'i', 'o', 'u', 'y',
    'A', 'E', 'I', 'O', 'U', 'Y'
]

def convertWordToPigLatin(word: str):
    word = word.strip()
    if len(word) == 0:
        return ''

    firstLetter = word[0]
    if firstLetter in EN_LETTERS:
        wordInPigLatinFormat = word + 'way'
    else:
        wordInPigLatinFormat = word[1::] + firstLetter + 'ay'

    return wordInPigLatinFormat

wordsForTest = ['fuck', 'donal', 'GAlexandr_', 'apple', 'any', 'x', 'a']
for wordForTest in wordsForTest:
    result = convertWordToPigLatin(wordForTest)
    print('WORD FOR TEST: ' + wordForTest + ', RESULT: ' + result)