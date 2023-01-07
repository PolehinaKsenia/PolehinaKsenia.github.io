stack = []
dictionary = {} #Создаем словарь

def fort(elem):
    global k
    if elem.isdigit() or (elem[0] == '-' and elem[1:].isdigit()):
        stack.append(int(elem))
        k += 1
    elif elem == '.' and k != 0:
        length = k - 1
        print(stack[length])
        del stack[length]
        k -= 1
    elif elem == '-' and k >= 2:
        stack[k-2] = stack[k-2] - stack[k-1]
        del stack[k-1]  
        k -=1
    elif elem == "+" and k >= 2:
        stack[k-2] = stack[k-2] + stack[k-1]
        del stack[k-1]
        k -=1   
    elif elem == "*" and k >= 2:
        stack[k-2] = stack[k-2] * stack[k-1]
        del stack[k-1]
        k -=1
    elif elem == "/" and k>=2 and stack[k-1] != 0:
        stack[k-2] = stack[k-2] // stack[k-1]
        del stack[k-1]
        k -= 1
    elif elem == "/" and k>=2:
        print("Ошибка: на ноль делить нельзя")
    elif elem in ["+","-","*","/", "ОБМЕН"] and k < 2:
        print("Ошибка: не хватает операндов")
    elif elem == "ДУБ":
        stack.append(int(stack[k-1]))
        k+= 1   
    elif elem == "УДАЛ" and k>= 1:
        del stack[k-1]
        k -= 1
    elif elem == "УДАЛ" and k<1:
        print("Ошибка: нет элементов в стеке")
    elif elem == "ОБМЕН" and k>=2:
        stack[k-2], stack[k-1] = stack[k-1], stack[k-2]
    elif elem in ['.'] and k<1:
        print()
    elif elem not in dictionary.keys():
        print("Неизвестная операция", elem)
    elif elem in dictionary.keys():
        arr = dictionary[elem].split()
        for j in range(len(arr)):
            fort(arr[j])

k = 0
flag = False
while True:
    a = input("Ф> ").split()
    for i in range(len(a)):
        if a[i] != ":" and a[i] != ";" and flag != True: 
            fort(a[i])
        elif a[i] == ":":
            flag = True
        elif i >= 1 and a[i-1] == ":":
            p = a[i]
            dictionary[p] = ""
        elif flag and a[i] !=";":
            dictionary[p] += " " + a[i]
        elif flag and a[i] == ";":
            flag = False
