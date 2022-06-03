/**
 * 1.Этот код возводит в степень n число x
 * @param {number} x основание
 * @param {number} n степень
 * @returns x^n
 */
function pow(x, n) {
				let result = x;
        if(n > 0){
				 result *=x;
        } else if (n < 0) {
          result *= x;
          result = 1/result;
        }
        else result = 1;
	return result;
}
//-------------------------------------------------------------------
/**
 * 2.Этот код вычисляет сумму чисел от 1 до n.
 * @param {number} n натуральное число
 * @returns сумма чисел от 1 до n
 */
function sumTo(n) {
  let sum = 0;
  for (let i = 1; i <= n; i++) {
    sum += i;
  }
  return sum;
}
//-------------------------------------------------------------------
/**
 * 3.Этот код возвращает факториал числа n!, используя рекурсивный вызов.
 * @param {number} n число
 * @returns факториал числа n!
 */
function factorial(n) {
  if (n) 
    return (n * factorial(n-1));
  else 
    return 1; 
}
//-------------------------------------------------------------------
/**
 * 4.Этот код возвращает n-е число Фибоначчи.
 * Возвращаемое значение должно иметь тип BigInt.
 * @param {number} n число
 * @returns n-е число Фибоначчи
 */
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
//-------------------------------------------------------------------
/**
 * 5.Эта функция должена возвратить функцию, которая сравнивает свой аргумент с числом 5.
 * @param {number} x 
 * @returns функцию сравнения
 */
function compare(x){
	let result = function(y){
    if (y > x) return true;
    else if (y < x) return false;
    else return 0;
  }
  return result;
}
//-------------------------------------------------------------------
/**
 * 6.Этот код принимает два целочисленных значения и выводит числа от 0 до num 
 * @param {number} num конечное число
 * @param {number} cols количество колонок
 * @returns строку
 */
function printNumbers(num, cols) {
  let str1 = ""
  let rows = Math.ceil(num / cols); //кол-во строк округлено в большую сторону
  for (let row = 0; row < rows; ++row) {
      let str = '';
      for (let col = 0; col < cols; ++col) {
          if ((row + rows * col) < num)
              str += (row + rows * col) + ' ';
      }
      str1+=str+"\n";       
  }
  return str1;
}