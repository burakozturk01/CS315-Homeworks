fn dynamicList() {
  let funcArr = [4,6,7,4,7];
  println!("Array from dynamicList(): {:?}", funcArr);
}

fn main() {
	// 1. What types are legal for subscripts?
	
	let arr = [56,435,7,6,45,58,3];
	println!("arr: {:?}", arr);
	println!("arr[3]: {}\narr[5]: {}", arr[3], arr[5]);
	
	println!("Rust arrays support subscripting\n");
	
	// 2. Are subscripting expressions in element references range checked?
	
	println!("arr's length = {}", arr.len());
	println!("Tenth element: {}", arr[6]);

	println!("Trying to reach for eighth will give a index out of bounds error\nthus Rust arrays have range checking\n");
	// println!("{}", arr[7]); <- Does not compile
  
	// 3. When are subscript ranges bound?
	
	println!("Rust array doesn't have any way to put new items in place\nTherefore rust array ranges are staticly bound\n");
	
	// 4. When does allocation take place?
	
	println!("Calling a function that will create a list and print it:");
  dynamicList();
  
  println!("Trying to print that array from main function causes error thus arrays have dynamic allocation\n");
	// println!("{:?}", funcArr); <- Does not compile
	
	// 5. Are ragged or rectangular multidimensional arrays allowed, or both?
	
	println!("Trying to create rectangular MD array");
	let mdArr = [[1,2,3],[4,5,6]];
	println!("{:?}", mdArr);
	
	println!("Thus it is possible to have rectangular multidimensional arrays");
	
	println!("Trying to create ragged MD array causes error\nthus ragged multidimensional arrays are not available in Rust\n");
	// let mdArr2 = [[1,2,3],[4,5,6,7]]; <- Does not compile
	
	// 6. Can array objects be initialized?
	
	println!("Arrays can be initialized after they declared");
	
	println!("let afterArr: [i32; 5]; afterArr = [45; 5]; println!(\"{{:?}}\", afterArr);");
	let afterArr: [i32; 5];
	afterArr = [45; 5];
	println!("{:?}\n", afterArr);
	
	println!("Arrays can be initialized as they declared");
	
	println!("let asArr: [i32; 5] = [45; 5]; println!(\"{{:?}}\", asArr);");
	let asArr: [i32; 5] = [45; 5];
	println!("{:?}\n", asArr);
	
	// 7. Are any kind of slices supported?
	
	println!("Slicing with &arr[start..end]");
  println!("arr: {:?}", arr);
  println!("arr[1..4]: {:?}\n", &arr[1..4]);
	
	// 8. Which operators are provided?
	
	let mut arr1 = [1,2,3];
  println!("arr1: {:?}", arr1);
  let mut arr2 = [4,5,6];
  println!("arr2: {:?}", arr2);
  
  println!("arr1 == arr2: {}", arr1 == arr2);
  arr2 = arr1;
  println!("arr2 = arr1 => arr2: {:?}", arr2);
  println!("arr1 == arr2: {}", arr1 == arr2);
  
  println!("== operator returns true if both arrays have the same values");
}