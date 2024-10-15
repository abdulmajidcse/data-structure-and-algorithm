# find minimum value from an array
my_array = [4, 10, 2, 9, 7]
min_value = my_array[0]

for i in my_array:
    if min_value > i:
        min_value = i

print('Minimum value:', min_value)