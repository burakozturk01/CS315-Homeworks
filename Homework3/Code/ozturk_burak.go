package main

import "fmt"

// Global variable
var a = 3

// 1 Nested subprogram definitions
// Source: https://sharbeargle.gitbooks.io/golang-notes/content/nested-functions.html

// 1.1 Defining a function globally first
func nestedFunctions() {
	// 1.2 Defifining a function under another function is as follows

	// 1.2.1 Direct use without binding to a variable
	func(str string) {
		fmt.Println(str)
	}("Single-use function")

	// 1.2.2 Binding to a variable to being able to use multiple times
	var ordinarySubFunc = func(str string) {
		fmt.Println(str)
	}

	ordinarySubFunc("use1")
	ordinarySubFunc("use2\n")
}

// 2 Scope of local variables
// I experimented for this one, no source used for knowledge.
func func1() {

	// 2.1 Global variable
	fmt.Println("a in func1 before closure: ", a)

	// 2.2 Closure
	{
		fmt.Println("a in closure before local a: ", a)
		var a = 4
		fmt.Println("a in closure after local a = 4: ", a)
	}

	// 2.3 Local variable
	fmt.Println("a in func1 after closure a = 4, before local a: ", a)

	var a = 5

	fmt.Println("a in func1 after local a = 5, before func2: ", a)

	// 2.4 Inside function
	var func2 = func(i int) {
		fmt.Println("a in func2 before local a: ", a)
		var a = 6
		fmt.Println("a in func2 after local a = 6: ", a)

		fmt.Println("i in func2: ", i)
	}

	func2(a)

	fmt.Println("a in func1 before for loop: ", a)

	// 2.5 For loop closure
	fmt.Println("In for loop:")
	for a := 7; a < 10; a++ {
		fmt.Print(a, " ")
	}
	fmt.Println()

	fmt.Println("a in func1 after for loop (a=10): ", a)

}

// 3 Parameter passing methods
// I experimented for this one, no source used for knowledge.

// 3.1 Trivial types
func paramFunc(str string, i int) {
	fmt.Println("str in paramfunc before changing: ", str)
	fmt.Println("i in paramfunc before changing: ", i)
	str = "paramFunc'ed"
	i = 12346789
	fmt.Println("str in paramfunc after changing: ", str)
	fmt.Println("i in paramfunc after changing: ", i)

}

// 3.2 Array type
func arrayFunc(arr []int) {
	fmt.Println("arr[0] in arrayFunc before changing: ", arr[0])
	arr[0] = 343434
	fmt.Println("arr[0] in arrayFunc after changing: ", arr[0])
}

// 3.3 Structs
type ArgStr struct {
	str string
}

func structFunc(str ArgStr) {
	fmt.Println("str in structFunc before changing: ", str)
	str.str = "changed"
	fmt.Println("str in structFunc after changing: ", str)
}

// 4.1 Keyword parameters (named arguments)
// Source: https://groups.google.com/g/golang-nuts/c/oWeeqCJfRzk?pli=1

type fArgs struct{ a, b int }

func structArgsFunc(args fArgs) (m int) {
	m = args.a - args.b
	return
}

// 4.2 Default parameters (Closest to that we can get)
// Source: https://stackoverflow.com/a/19813113
func defParamFunc(a ...int) {
	if len(a) > 0 {
		fmt.Println("a in defParamFunc: ", a[0])
	} else {
		fmt.Println("a in defParamFunc: ", 45)
	}

}

func main() {
	nestedFunctions()

	// 2 Scope of local variables
	fmt.Println("a in main before func1: ", a)
	func1()
	fmt.Println("a in main after func1: ", a, "\n")

	// 3 Parameter passing methods

	// 3.1 For trivial types
	var str string = "abc"
	var i int = 72

	fmt.Println("str in main before changing: ", str)
	fmt.Println("i in main before changing: ", i)

	paramFunc(str, i)

	fmt.Println("str in main after changing: ", str)
	fmt.Println("i in main after changing: ", i, "\n")

	// 3.2 Array type
	arr := []int{1, 2, 3}
	fmt.Println("arr[0] in main before changing: ", arr[0])
	arrayFunc(arr)
	fmt.Println("arr[0] in main after changing: ", arr[0], "\n")

	// 3.3 Struct type
	var struc ArgStr = ArgStr{str: "not changed"}
	fmt.Println("struc in main before changing: ", struc)
	structFunc(struc)
	fmt.Println("struc in main after changing: ", struc, "\n")

	// 4.1 Named arguments
	var args1 = fArgs{3, 4}
	var args2 = fArgs{4, 3}
	fmt.Println("a = 3, b = 4 => a-b = ", structArgsFunc(args1))
	fmt.Println("a = 4, b = 3 => a-b = ", structArgsFunc(args2), "\n")

	// 4.2 Default parameters
	fmt.Println("Default 45:")
	defParamFunc()

	fmt.Println("a[0] = 4:")
	defParamFunc(4)
}
