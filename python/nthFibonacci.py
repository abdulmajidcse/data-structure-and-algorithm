# nth fibonacci number
# here the starting index of nth is 0
def nthFibonacci(n):
    if n <= 1:
        return n
    else:
        return nthFibonacci(n - 1) + nthFibonacci(n - 2)

# get 20th fibonacci number
print(nthFibonacci(19))