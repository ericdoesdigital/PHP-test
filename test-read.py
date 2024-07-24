
file = open("anothertext.txt", "r")
file2 = open("text.abc", "r")

listOfLines = file2.readlines()

total = 0
for line in file2:
    print(len(line))


print(listOfLines)
print(f"total is {total}")