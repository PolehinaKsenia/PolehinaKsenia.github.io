function pow(x, n) {
				let result = x;
				for (let i = 1; i < n; i++) {
				result *= x;
				}
			return result;
			}
			'use strict';
			let x, n;
			x = prompt("Введите х (число возводимое в степень)",1);
			n = prompt("Введите n (степень)",1);
			alert(x + "^" + n + " = "+pow(x, n));