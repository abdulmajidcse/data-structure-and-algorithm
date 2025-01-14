my_array = [7, 3, 9, 12, 11]
print('Unsorted array =', my_array)

n = len(my_array)

for i in range(n-1):
    swaped = False
    for j in range(n-i-1):
        if my_array[j] > my_array[j+1]:
            my_array[j], my_array[j+1] = my_array[j+1], my_array[j]
            swaped = True
    
    if not swaped:
        break

print('Sorted array =', my_array)
