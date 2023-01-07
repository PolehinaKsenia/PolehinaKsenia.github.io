#lab8 Mnojestva
#Вариант 4.
"""Задача 1.(Общая для всех вариантов) Составить программу, задающую 4 множества,
и демонстрирующую все операции над множествами."""

A = {1, 2, 3, 4}
B = {9, 8, 7, 6, 5, 4}
C = {1, 5, 9}
D = {0, 9}

print("Объединение: ", A | B)
print("Разность: ", A - B)
print("Пересечение: ", A & C)
print("Симметрическая разность: ", C ^ B)

C.add(4)    #добавить в C 4
print(C)
D.discard(0)    #Удалить элемент множества
print(D)

"""Задача 2
type  nomer = 1..4;
matr = array [nomer, nomer] of real;
nom = set of nomer;
Описать функцию sum(A, s1,s2), вычисляющую сумму тех элементов матрицы А,
номера строк и столбцов которых принадлежат соответственно непустым множествам s1 и s2
типа nom. Составить программу, использую-щую эту функцию."""

import random
def suma(A, s1, s2):
    s = 0
    for i in range(4):
        if i in s1:     # если i является членом s1
            for j in range(3):
                if j in s2:
                    s += A[i][j]
    return s

n = 4
a = [[random.randint(1, 9) for j in range(3)] for i in range(4)]
print(a)
""""будут считаться элементы
    [00 no* 03]
    [10 no* 13]
    * элемент не входит"""
m1 = {0, 1} #Строки
m2 = {0, 2} #Столбцы
print(m1, m2)
print(suma(a,m1,m2))

"""Задача 3. Дано 50 целых чисел от 1 до 100.
Определить сколько чисел не содержат ни одной из следующих цифр: 3, 5, 9."""

import random
m={random.randint(1, 100) for i in range(50)}
print(m)
arr = list(map(int,m))
c=0
for i in range(len(arr)):
    if (arr[i]//10 != 3 and arr[i]//10 !=5 and arr[i]//10 !=9):
        if(arr[i]%10 != 3 and arr[i]%10 !=5 and arr[i]%10 !=9):
            c += 1
print(c)

   


        


   
