<!DOCTYPE html>
<html>
	<body>
		<h1>Variable</h1>
		<p>A variable is an abstract storage location paired with an associated symbolic name, which contains some known or unknown quantitiy of information refferred to as a value; (a variable is a named container for a particular set of bits or types of data (like integer, float, string etc..))</p>
		<p>A variable can eventually be associated with or identified by a memory address.</p>
		<p>The variable name is the usual way to reference the stored value, in addition to referring to the variable itself, depending on the context. This separation of name and content allows the name to be used independently of the exact information it represents.</p>
		<p>The identifier in computer source code can be bound to a value during run time, and the value of the variable may thus change during the course of program execution.</p>
		<p>A variable's storage location may be referenced by several different identifiers, a situation known as aliasing. Assigning a value to the variable using one of the identifiers will change the value that can be accessed through the other identifiers.</p>
		<p>Compilers have to replace variables' symbolic names with the actual locations of the data. While a variable's name, type, and location often remain fixed, the data stored in the location may be changed during program exexution.</p>
		<p>Variables are represented by a dollar sign followed by the name of the variable in PHP.</p>
		<p>Variable names are <b>case-sensitive</b> and follow the same rules as other labels in PHP. A valid variable name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. As a regexp: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$</p>
		<p>$this is a special variable that can't be assigned.</p>
		<p>By default, variables are always assigned by value. That is to say, when you assign an expression to a variable, the entire value of the original expression is copied into the destination variable. This means, for instance, that after assigning one variable's value to another, changing one of those variables will have no effect on the other.</p>
		<p>PHP also have another way to assign values to variables: assign by reference. This means that the new variable simply references (becomes an alias or points to) the original variable. Change to the new variable affect the original, and vice versa. To assign by reference, simply prepend an ampersand to the beginning of the variable which is being assigned(the source variable). Only named variables may be assigned by reference.</p>
		<p>It is not necessary to initalize variables in PHP however it is a very good practice. Uninitialized variables have a default value of their types depending on the context in which they are used:
<ul>
<li>booleans default to false</li>
<li>integers and floats default to zero</li>
<li>strings (e.g. used in echo) are set as an empty string</li>
<li>arrays become to an empty array.</li>
<li>unset and unreferenced (no use context) variables output null</li>
<li>objects create new stdClass object</li>
</ul>
Relying on the default value of an uninitialized variable is problematic in the case of including one file into another which uses the same variable name. isset() language construct can be used to detect if a variable has been already initalized.
</p>
	</body>
