import random
#Уровень 1.
"""
Вариант 1
1.  Дана матрица A(N, M). Найдите её наибольший элемент и номера строки и столбца,
    на пересечении которых он находится."""

N=int(input('Введите N: '))
M=int(input('Введите M: '))
A = [[random.randint(0, 2) for j in range(M)] for i in range(N)]
print(A)
imax, jmax, maximum = 0, 0, A[0][0]
for i in range(N):
    for j in range(M):
        if A[i][j] > maximum:
            imax = i
            jmax = j
            maximum = A[i][j]
            
            
print(A[imax][jmax], imax+1, jmax+1)

"""
2.  В каждой строке заданной матрицы A(N, M) вычислите сумму положительных элементов."""

print('2.Сумма положительных элементов в каждой строке')
for i in range(N):
    sump = 0
    for j in range(M):
        if A[i][j] > 0:
            sump += A[i][j]
    print(sump)

"""
3.  Дана квадратная матрица A(N, N) целых чисел.
    Найти сумму S1 элементов в первом столбце матрицы.
    Определить количество элементов над главной диагональю матрицы,
    значения которых больше S1."""

s1 = 0    
for i in range(N):
    s1 += A[i][0]    
count = 0
for i in range(N):
    for j in range(N):
        if A[i][j] > s1 and i < j:
            count += 1
    
print("3.Наша матрица:")
for i in range(N):
    for j in range(N):
        print(A[i][j], end=" ")
    print()
print('Сумма: ',s1)
print('Искомое количество элементов', count)

#Уровень 2
"""
Вариант 1 
1.Дана матрица размера M × N и целые числа K1 и K2 (1 ≤ K1 < K2 ≤ M).
    Поменять местами строки матрицы с номерами K1 и K2. """

N=int(input('Введите N: '))
M=int(input('Введите M: '))
A = [[random.randint(1, 15) for j in range(M)] for i in range(N)]
print(A)
K1=int(input('Введите K1: '))
K2=int(input('Введите K2: '))
for j in range(N):
    A[K1-1],A[K2-1] = A[K2-1],A[K1-1]
print(*A)

"""
2.Дана матрица размера M × M. Удалить строку, содержащую минимальный элемент матрицы."""

M=int(input('Введите M: '))
A = [[random.randint(1, 5) for j in range(M)] for i in range(M)]
print(A)
mini=A[0][0]
imax, jmax = 0, 0
for i in range(M):
    for j in range(M):
        if A[i][j] < mini:
            mini = A[i][j]
            imin = i
            jmin = j
del A[imin]
print(*A)

"""
3.Дана матрица размера M × M. Вставить в нее столбец из некоторого числа K
    перед столбцом, содержащим наибольшее количество нулевых элементов."""

M=int(input('Введите M: '))
A = [[random.randint(1, 5) for j in range(M)] for i in range(M)]
print(A)
k=int(input('Введите K: '))
maxzero = 0
jmaxzero = 0
for i in range(M):
    count = 0
    for j in range(M):
        if A[j][i] == 0: 
            count += 1
    if count > maxzero:
        maxzero = count
        jmaxzero = i
        
for i in range(M):
    A[i].insert(jmaxzero, k)
print(*A)

#Уровень 3
"""
Вариант 1 
1.  Дана целочисленная матрица A(N, N), заполненная целыми числами.
    Все ее элементы, кратные трем, записать в одномерный массив, а остальные в другой."""

N=int(input('Введите N: '))
A = [[random.randint(1, 9) for j in range(N)] for i in range(N)]
print(A)
arr1 = []
arr2 = []
for i in range(N):
    for j in range(N):
        if A[i][j] % 3 == 0:
            arr1.append(A[i][j])
        else:
            arr2.append(A[i][j])
print(arr1)
print(arr2)

"""
2.  Дана целочисленная матрица A(N, N), заполненная целыми числами.
    Отсортировать по возрастанию элементы матрицы, от первого элемента
    до первого минимального элемента матрицы."""
N=int(input('Введите N: '))
A = [[random.randint(1, 9) for j in range(N)] for i in range(N)]
print(A)
arr3 = []
minimum = A[0][0]
imin = 0
jmin = 0
for i in range(N):
    for j in range(N):
        if A[i][j] < minimum:
            minimum = A[i][j]
            imin = i
            jmin = j      # Нашли минимальный элемент матрицы
        
for i in range(imin+1):
    for j in range(jmin+1):
        arr3.append(A[i][j])
arr3.sort()

k=0
for i in range(imin+1):
    for j in range(jmin+1):
        A[i][j] = arr3[k]
        k += 1
print(*A)
