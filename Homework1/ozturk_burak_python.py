import numpy as np

def dynamicList():
    funcArr = np.array([13,2,35,3])
    print(f"Array from dynamicList(): {funcArr}")

# 1. What types are legal for subscripts?

arr = np.array([i**2-3 for i in range(10)])

print(f"arr: {arr}")
print(f"arr[2]: {arr[2]}\narr[5]: {arr[5]}")

print("np.array supports subscripting\n")

# 2. Are subscripting expressions in element references range checked?

print(f"arr's length = {len(arr)}")
print(f"Tenth element: {arr[9]}")

print("Trying to reach for eleventh")
try:
    print(arr[10])
except IndexError:
    print("IndexError caught thus nd.arrays have range checking\n")

# 3. When are subscript ranges bound?

print("np.arrays doesn't have any way to put new items\nTherefore numpy array ranges are staticly bound")

# 4. When does allocation take place?

print("Calling a function that will create a list and print it:")
dynamicList()

try:
    print("Than trying to print that array from main function:")
    print(funcArr)
except NameError:
    print("NameError caught thus arrays have dynamic allocation\n")

# 5. Are ragged or rectangular multidimensional arrays allowed, or both?

print("Trying to create rectangular MD array")
mdArr = np.array([[1,2,3],[4,5,6]])
print(mdArr)

print("Thus it is possible to have rectangular multidimensional arrays")

print("Trying to create ragged MD array")
mdArr = np.array([[1,2,3],[4,5,6,7]], dtype=object)
print(mdArr)

print("Thus it is possible to have both ragged and rectangular multidimensional arrays")
print("But ragged arrays are deprecated in numpy\n")

# 6. Can array objects be initialized?

print("Python doesn't have not-initialized variables\nthus arrays need to be initialized as declared")

print("asArr: asArr = np.array([9,9,9]) print($asArr)\n")
asArr = np.array([9,9,9])
print(asArr)

# 7. Are any kind of slices supported?

print("Slicing with arr[start:end]")
print(f"arr: {arr}")
print(f"arr[2:8]: {arr[2:8]}")
print(f"arr[8:2:-1]: {arr[7:1:-1]}\n")

# 8. Which operators are provided?

arr1 = np.array([1,2,3])
print(f"arr1: {arr1}")
arr2 = np.array([4,5,6])
print(f"arr2: {arr2}")

print(f"arr1+arr2: {arr1+arr2}")
print(f"arr1-arr2: {arr1-arr2}")
print(f"arr1*arr2: {arr1*arr2}")
print(f"arr1/arr2: {arr1/arr2}\n")

arr1 += arr2
print(f"arr1 += arr2\narr1: {arr1}")
print("...\n")

print(f"arr1 < arr2: {arr1 < arr2}")
print(f"arr1 % arr2: {arr1 % arr2}")
print("...")
