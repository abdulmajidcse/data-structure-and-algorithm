# find a minimum value from an array/list
my_array = [7, 15, 12, 5, 14]
min_value = my_array[0]

for i in my_array:
    if min_value > i:
        min_value = i

print("Minimum value =", min_value)