/*Этот код возводит в степень n число x*/
function pow(x, n) {
				let result = x;
				for (let i = 1; i < n; i++) {
				result *= x;
				}
			return result;
			}
//-------------------------------------------------------------------
/*Этот код вычисляет сумму чисел от 1 до n.*/
function sumTo(n) {
  let sum = 0;
  for (let i = 1; i <= n; i++) {
    sum += i;
  }
  return sum;
}
//-------------------------------------------------------------------
/*Этот код возвращает факториал числа n!, используя рекурсивный вызов.*/
function factorial(n) {
  if (n == 1)
	return 1;
	return n * factorial(n-1);  
}
//-------------------------------------------------------------------
/*Этот код возвращает n-е число Фибоначчи.
Возвращаемое значение должно иметь тип BigInt.*/
function fib(n) {
  let a = 1;
  let b = 1;
  for (let i = 3; i <= n; i++) {
    let c = a + b;
    a = b;
    b = c;
  }
  return BigInt(b);
}
//-------------------------------------------------------------------
/*Этот код принимает целочисленное значение x и возвращает анонимную функцию.*/
function compare(n,m){
	if(n < m){
		return true;
	} else if (n > m){
		return false;
	} else {
		return null;
	}
}
//-------------------------------------------------------------------
/*Этот код принимает два целочисленных значения:
	num - конечное число
	cols - количество колонок
и выводит числа от 0 до num */
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