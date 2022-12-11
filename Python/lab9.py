#lab9 Slovari
"""Вариант 4.
В файле  en_ru.txt  находятся строки англо-русского словаря в таком формате:
    cat - кошка
    dog - собака
    home - дом
    mouse - мышь
    to do - делать
    to make - изготавливать
Здесь английское слово (выражение) и список русских слов (выражений) разделены двумя табуляциями и минусом.
Требуется создать русско-английский словарь и вывести его в файл ru_en.txt в таком формате:
    делать - to do
    дом - home
    изготавливать - to make
    кошка - cat
    мышь - mouse
    собака - dog
Порядок строк в выходном файле должен быть словарным с человеческой точки зрения (так называемый лексикографический порядок слов).
То есть выходные строки нужно отсортировать.
"""

D = {}
F = open ( "en_ru.txt" )
i=0
#Из файла в словарь
while True:
    word = F.readline().strip()
    if not word: break
    D[word] = D.get( word, i ) + 1
    i +=1
F.close()

arr = []
#Создаем массив
for i in D.keys():
    y=i.split(' - ')
    arr.append(y)

arr2=[]
arr3=[]
#Меняем местами столбцы и записываем в один массив
for i in range(len(arr)):
    arr2.append(arr[i][::-1]) 
    arr3.append(' - '.join(arr2[i]))
di=dict.fromkeys(arr3)
s=sorted(di.keys())
#Запись в файл
F1 = open ( "ru_en.txt", "w")
for k in s:
    F1.write ( "{}\n".format(k))
F1.close()


