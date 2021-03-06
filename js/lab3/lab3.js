/**
 * Эта функция возвращает дробную часть числа num.
 * @param {number} num 
 * @returns строку
 */
 function getDecimal(num) {
    let str = "" + num;
    let zeroPos = str.indexOf(".");
    if (zeroPos == -1) return 0;
    str = str.slice(zeroPos);
    return +str;
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

    if (string.includes(firstWord) || string.includes(secondWord)) {
        return true;
    }
    return false;
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
 * 6.Эта функция для натурального n возвращает массив, 
 * заполненный числами Фибоначчи до n-го 
 * (не включая его).
 * @param {number} N 
 * @returns массив
 */
const script = document.createElement('script');
script.src = '/lab2/lab2.js';
document.head.appendChild(script);
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
    
    function fib(n) {
        let a = 1n;
        let b = 1n;
        let c;
        if (n==0) return 0;
        if (n==1) return 1;
        if (n==2) return 1;
        for (let i = 3; i <= n; i++) {
          c = a + b;
          a = b;
          b = c;
        }
        if (b==1n)
          b = 0;
        return b; 
      }

}
//-------------------------------------------------
/**
 * Эта функция  возвращает массив из тех же элементов, 
 * но отсортированный по убыванию
 * @param {num} arr 
 * @returns arr
 */
function arrReverseSorted(arr){
        let x = arr.slice();
        x.sort((a, b) => b-a);
    return x;
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