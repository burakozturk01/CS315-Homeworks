fn return_true() -> bool {
    println!("True called");
    return true;
}

fn main() {
	// 1. How are the boolean values represented?
	
    let b = true;
    println!("True: {}", b);
    println!("False: {}", !b);
    
    // 2. What operators are short-circuited?
	
	// AND and OR: &&, ||
	
	println!("\nIf operator is short-circuited, 'True called' will get printed less than two times\nelse operator is not short-circuited.");
	
	println!("\n&&:");
	true && return_true();
	false && return_true();
	
	println!("\n||:");
	true || return_true();
	false || return_true();
	
	println!("\n^:");
	true ^ return_true();
	false ^ return_true();
}