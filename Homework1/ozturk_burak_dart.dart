void dynamicList() {
	List funcList = [4,7,4];
	print("List from dynamicList(): $funcList");
}
void main() {
	// 1. What types are legal for subscripts?
	
	String s = "This is a string!";
	
	print("String: $s\n");
	print("First char of string: "); print(s[0]);
	print("Seventh char of string: "); print(s[6]);
	
	print("\nString is subscriptable\n");
	
	List list = [0,1,2,3,4];
	
	print("List: $list\n");
	print("First element of list: "); print(list[0]);
	print("Third element of list: "); print(list[2]);
	
	print("\nList is subscriptable");

	Map map = {"a": "apple", "b": "banana", "c": "cherry"};
	
	print("Map: $map\n");
	print("Key a: "); print(map["a"]);
	print("Key c: "); print(map["c"]);
	
	print("\nMap is subscriptable");
	
	// 2. Are subscripting expressions in element references range checked?
	
	print("List: $list, Length = 5");
	print("Fifth element: "); print(list[4]); print("");
	
	print("Trying to reach for sixth");
	try {
		print(list[5]);
	}
	on RangeError {
		print("RangeError caught, thus Dart utilizes range checking\n");
	}
	
	// 3. When are subscript ranges bound?
	
	List list2 = [0,1,2,3]; print("Normal list: $list2");
	
	print("Trying to add a fifth item");
	list2.add(4);
	print("Fourth item: "); print(list2[4]);
	
	print("It is possible to add after initialization, thus lists have dynamic range bounding\n");
	
	const List cList = [0,1,2,3]; print("Const list: $cList");
	
	print("Trying to add a fifth item");
	try {
		cList.add(5);
	}
	on UnsupportedError {
		print("UnsupportedError caught, thus const lists have static range bounding\n");
	}
	
	// 4. When does allocation take place?
	
	print("Calling a function that will create a list and print it: ");
	dynamicList();
	
	// This is causing compile error:
	//print("\nThan printing that list from main function: $cFuncList\n");
	
	print("Trying to access same list from main function causes compile-time error\nthus lists have dynamic allocation");
	
	// 5. Are ragged or rectangular multidimensional arrays allowed, or both?
	
	print("Trying to create rectangular MD array");
	List mdArr = [[1,2,3],[4,5,6]];
	print("mdArr: $mdArr");
	
	print("\nThus it is possible to have rectangular multidimensional arrays\n");
	
	print("Trying to add another element to the latter array inside mdArr (mdArr[1])");
	mdArr[1].add(7);
	print("mdArr: $mdArr");
	
	print("\nThus it is possible to have both ragged and rectangular multidimensional arrays\n");
	
	// 6. Can array objects be initialized?
	
	print("Lists can be initialized as they declared or after they declared:\n");
	
	print("afterArr: List afterArr; afterArr = [9,9,9]; print(afterArr);");
	List afterArr; afterArr = [9,9,9]; print(afterArr);
	
	print("\nasArr: List asArr = [4,3,6]; print(asArr);");
	List asArr = [4,3,6]; print(asArr);
	
	// 7. Are any kind of slices supported?
	
	print("\nSlicing with sublist function:\n");
	print("list: $list\n");
	print("list.sublist(2,4): "); print(list.sublist(2,4));
	
	// 8. Which operators are provided?
	
	List list1 = [1,2,3], list2 = [4,5,6];
	print("list1: $list1, list2: $list2");
	
	print("\nlist1 + list2:"); print(list1 + list2);
	
	print("\nlist1 == list2:"); print(list1 == list2);
	
	print("\nlist1[1]:"); print(list1[1]);
	
	print("\nlist1[1] = 56:"); list1[1] = 56; print(list1);
}
