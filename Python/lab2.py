#lab 2 Разветвления
"""
Задание 1. Вариант 11(1)
Даны числа а1, b1, c1, а2, b2, c2, напечатать точки пересечения прямых,
заданных уравнениями прямых a1x+b1y+c1=0 и a2x+b2y+c2=0, либо сообщить,
что эти прямые совпадают, или не пересекаются, или не существуют."""

a1=int(input("Введите a1: "))
b1=int(input("Введите b1: "))
c1=int(input("Введите c1: "))
a2=int(input("Введите a2: "))
b2=int(input("Введите b2: "))
c2=int(input("Введите c2: "))

if((a1==0) and (b1==0)) or ((a2==0) and (b2==0)):
    print("прямых не существуeт")
else:
    if(a1==a2) and (b1==b2) and (c1==c2):
        print("прямые совпадают")
    elif a1*b2-b1*a2==0:
        print("прямые параллельны")
    else:
        x=(b1*c2-b2*c1)/(a1*b2-b1*a2);
        y=(a2*c1-a1*c2)/(a1*b2-b1*a2);
        print("Координаты точки пересечения: ")
        print("x= ",round(x,3), "y= ",round(y,3))

"""
Задание 2. Вариант 11.
Используя пять вариантов наборов карт 1)«6», «7», «8» 2)«7», «8», «9»
3) «6», «9», «10» 4)«6», «9», «8» 5)«7», «6», «10», сыграйте с компьютером.
Введите с клавиатуры свой вариант и сравните с вариантом компьютера,
который создайте, используя функцию генератора случайных чисел
(три цифры от 6 до 10 включительно без повторения цифры в варианте).
Если сумма цифр вашего варианта больше суммы цифр компьютера, вы выиграли."""

import random
 
seq = [6, 7, 8, 9, 10]
rand = random.sample(seq, 3)
a = int(input('a: '))
b = int(input('b: '))
c = int(input('c: '))
print("Комп: ",rand, "Вы: ",(a,b,c))

if sum(rand)== a+b+c:
    print("Вы выиграли")
else:
    print("Вы проиграли")
