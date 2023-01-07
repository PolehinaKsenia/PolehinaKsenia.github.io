stack = [];
while (True):
    Sstack = map(str, input("ф> ").split())
    for i in Sstack:   
        if i == ".":
            if len(stack) == 0:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                print (stack.pop(-1))
            
        elif i == "+":
            if len(stack) < 2:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack.append(stack.pop(-1) + stack.pop(-1))
            
        elif i == "-":
            if len(stack) < 2:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack.append(stack.pop(-2) - stack.pop(-1))
            
        elif i == "*":
            if len(stack) < 2:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack.append(stack.pop(-1) * stack.pop(-1))
            
        elif i == "/":
            if stack[-1] == 0:
                print ("ERROR, YOU CAN NOT DELIT' NA 0!!!")
            elif len(stack) < 2:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack.append(stack.pop(-2) // stack.pop(-1))
                
        elif i == "ДУБ":
            if len(stack) == 0:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack.append(stack[-1])
                
        elif i == "УДАЛ":
            if len(stack) == 0:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack.pop(-1)
            
        elif i == "ОБМЕН":
            if len(stack) < 2:
                print ("ERROR, NEHVATAYET EL-OV V STACK")
            else:
                stack[-1],stack[-2] = stack[-2],stack[-1]
        elif i.isdigit(): 
            stack.append(int(i))
        else:
            print(i, "неизвестная команда")
