def returnTrue():
    print("True called")
    return True

# 1. How are the boolean values represented?

print("True and False's representations:")

b = True;
print(f"True: {b}")
print(f"False: {not b}\n")

# 2. What operators are short-circuited?

# AND and OR: and, or

print("If operator is short-circuited, 'True called' will get printed less than two times\nelse operator is not short-circuited.")

print("\nand:")
True and returnTrue();
False and returnTrue();

print("\nor:")
True or returnTrue();
False or returnTrue();

print("\n^:")
True ^ returnTrue();
False ^ returnTrue();
