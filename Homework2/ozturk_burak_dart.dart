bool returnTrue() {
	print("True called");
	return true;
}

void main() {
	// 1. How are the boolean values represented?
	bool b = true;
	print("True: $b");
	b = false;
	print("False: $b");
	
	// 2. What operators are short-circuited?
	
	// Bitwise AND and OR: &, |
	
	print("\nIf operator is short-circuited, 'True called' will get printed less than two times\nelse operator is not short-circuited.");
	
	print("\n&&:");
	true && returnTrue();
	false && returnTrue();
	
	print("\n||:");
	true || returnTrue();
	false || returnTrue();
	
	print("\n^:");
	true ^ returnTrue();
	false ^ returnTrue();
}