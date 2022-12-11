#lab 10 File
"""Вариант 11
1. Дан файл, в котором записан текст.
В другой  файл выводятся только те строки, в которых есть слова,
начинающиеся  и заканчивающиеся на одну букву."""

with open('input.txt','r', encoding='utf-8') as t:
    text = t.read().split()
arr=[]
for x in text:
    if x[0]==x[-1]:
        arr.append(x)
arr = ' '.join(arr)
with open('output.txt', 'w') as w:
    print(arr, file=w)    

"""2.Создать текстовый файл с произвольной информацией.
Организовать просмотр содержимого файла.
«Автомобиль»:марка; цвет; серийный номер; регистрационный номер; год выпуска;
год техосмотра; цена. Вывести данные про автомобили, которым больше 2 лет.
Организовать чтение и обработку данных из файла в соответствии с индивидуальным заданием.
Сохранить полученные результаты в новый текстовый файл.
"""
d = {}
with open("avto.txt", encoding='utf-8') as file:
    for line in file:
        key, *value = line.split()
        d[key] = value
print(d)
arr=[]
arr1=[]
#разделяем на 2 массива
for k,v in d.items():
    arr.append(k)
    arr1.append(v)
arr2=[]
arr3=[]
#Вывести данные про автомобили, которым больше 2 лет.
for i in range(len(arr1)):
    for j in range(len(arr1)):
        if 2022 - int(arr1[i][2]) >= 2:
            arr3.append(arr[i])
            arr2.append(arr1[i][j])
#разделяем один массив на несколько
def razdel(lst, n):
    for x in range(0, len(lst), n):
        e_c = lst[x : n + x]
        if len(e_c) < n:
            e_c = e_c + [None for y in range(n - len(e_c))]
        yield e_c
arr2=list(razdel(arr2, 4))
#делаем словарь из массивов
s={}
s=dict(zip(arr, arr2))
print(s)
#запись в файл
F1 = open ( "avto1.txt", "w")
for k, v in s.items():
    F1.write ( "{}: {}\n".format(k,v))
F1.close()
