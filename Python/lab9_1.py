def extract_en_ru_dict(en_ru_path):
    words = dict()
    text = open(en_ru_path, 'r', encoding="utf-8")
    line = text.readline().strip().split('\t-\t')
    while line:
        words[line[0]] = line[1].split(',')
        line = text.readline().strip().split('\t-\t')
        if line == [""]:
            break
    text.close()
    return words
 
 
def make_ru_en_dict(words):
    ru_en_dict = {}
    while len(words) > 0:
        pair = words.popitem()
        for i in pair[1]:
            if i not in ru_en_dict:
                ru_en_dict[i] = pair[0]
            else:
                ru_en_dict[i] += pair[0] + ', '
    return ru_en_dict
 
 
def write_dict_in_file(ru_en_path, ru_en_dict):
    ru_en_list = []
    for key in ru_en_dict.keys():
        ru_en_list.append([key, ru_en_dict[key]])
    ru_en_list.sort(key=lambda i: i[0])
    ru_en = open(ru_en_path, 'w')
    for i in range(len(ru_en_list)):
        for y in ru_en_list[i][0]:
            ru_en.write(y)
        ru_en.write(' : ')
        for y in ru_en_list[i][1]:
            ru_en.write(y)
        ru_en.write('\n')
    return
 
 
en_ru_path = input("Enter en-ru dictionary location: ")
ru_en_path = input("Enter new ru-en dictionary location: ")
 
en_ru_dict = extract_en_ru_dict(en_ru_path)
ru_en_dict = make_ru_en_dict(en_ru_dict)
write_dict_in_file(ru_en_path, ru_en_dict)
