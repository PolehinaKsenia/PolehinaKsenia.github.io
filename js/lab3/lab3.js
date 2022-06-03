/**
 * Эта функция возвращает дробную часть числа num.
 * @param {number} num 
 * @returns дробную часть числа num 
 */
function getDecimal(num) {
    let a = num.slice(num.indexOf('.'));
    if (num.indexOf(".") == -1) {
        return 0;
    }
    let str = 0 + a;
    if (Number(num) < 0) {
        str = 1 - Number(str);
        str = str.toFixed(a.length - 1);
    }
    return str;
}
//-------------------------------------------------
/**
 * Эта функция возвращает строку str с заглавным первым символом.
 * @param {number} str 
 * @returns строку str с заглавным первым символом
 */
function ucFirst(str) {
    if (!str) return str;

    return str[0].toUpperCase() + str.slice(1);
}
//-------------------------------------------------
/**
 * Эта функция возвращает true, если строка str содержит 'viagra' или 'XXX', а иначе false.
 * @param {string} str 
 * @returns true||false
 */
function checkSpam(str) {
    let firstWord = 'viagra';
    let secondWord = 'xxx';
    let string = str.toLowerCase();
    let result;

    if (firstWord.includes() || checkTheWord(secondWord)) {
        return true;
    }
    return false;

    function checkTheWord(word) {
        for (let i = 0; i < string.length - 1; i++) {
            if (string[i] == word[0]) {
                result = string.slice(i, i + word.length);
                if (result == word) {
                    return true;
                }
                else return false;
            }
            else return false;
        }
    }
}
//-------------------------------------------------
/**
 * Эта функция проверяет длину строки str, и если 
 * она превосходит maxlength – заменяет конец str 
 * на символ многоточие "…" (номер в Юникоде U+2026), 
 * так чтобы ее длина стала равна maxlength. 
 * @param {string} str 
 * @param {number} maxlength 
 * @returns строку
 */
function truncate(str, maxlength) {
    if (str.length > maxlength)
        str = str.slice(0, maxlength - 1) + '\u{2026}';
    return str;
}
//-------------------------------------------------
/**
 * Эта функция преобразуeт строку вида 'var-test-text'
 * в 'varTestText'. То есть, дефисы удаляются, 
 * а все слова после них получают заглавную букву.
 * @param {string} str 
 * @returns строку
 */
function camelize(str) {
    return str
        .split('-')
        .map(
            (word, index) => index == 0 ? word : word[0].toUpperCase() + word.slice(1)
        )
        .join('');
}
//-------------------------------------------------
/**
 * Эта функция для натурального n возвращает массив, 
 * заполненный числами Фибоначчи до n-го 
 * (не включая его).
 * @param {number} N 
 * @returns массив
 */
function fibs(N) {
    let a = [];
    let str = '';
    if (!Number.isNaN(N))
        if (N == 0) str = 0;
        else
            for (let j = 0; j < N; ++j) {
                a[j] = fib(j);
                str += a[j] + ' ';
            }
    else str = NaN;
    return str;
}
//-------------------------------------------------
/**
 * Эта функция возвращает сумму всех своих аргументов
 * @returns сумму всех своих аргументов
 */
function sum() {
    let result = 0;

    for (let i = 0; i < arguments.length; i++) {
        result += arguments[i];
    }

    return result;
}