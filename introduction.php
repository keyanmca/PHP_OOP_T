<?php
	// So.. great
	require_once("includes/layout.php");
	// Important to use the class AFTER the call so not before the line 3 in this case
	
	// Instantiate the class through a variable
	$myvar = new Layout();
	// Echo the property input of the class Layout
	echo $myvar->input;
	
	// Change the value of the property input through the method
	$myvar->set_input("NO hello world any more Dx,");
	
	echo "<br />";
	
	// Echo
	echo $myvar->input;
	
	// change the property directly
	$myvar->input = "What ever we want";
	
	echo "<br />";
	
	// echo
	echo $myvar->input;
	
	echo "<br />";
	
	echo "<hr />"; // -------------------------------
	
	// Instantiating a new layout variable
	
	$othervar = new Layout();
	
	echo $othervar->input;
	echo "<br />";
	
	$othervar->set_input("this is the other instance through method");
	
	echo $othervar->input;
	echo "<br />";
	
	$othervar->input = "This is the other instance through direct value changing";
	
	echo $othervar->input;
	echo "<br />";
	
	// Interact with each instance
	
	// Setting the new instance input to be copied from the old one
	$othervar->input = $myvar->input;
	
	echo $othervar->input;
	echo "<br />";
	
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP OOP Concepts Tutorial</title>
</head>
<body>
	<h1>Welcome</h1>
	<p>We all know about the basics of PHP.. how about stepping a little further to the 'back-end' of the PHP which I will introduce you to in this stream</p>
	<p>This stream will be about PHP OOP (Object-Oriented-Langauge) Concepts</p>
	<hr />
	<h2>Toturial text</h2>
<pre>
Lets start by inventing Classes
We will create a class.. and I will explain later what it's structure is like
That is how we create a simple-blank-empty class
lets add var's into that class and rename it to something we can use

To create a var we use those identifying keywords:
public, private, protected

Public let it be like every var's we have been creating using the basic PHP

That is an example of what I am talking about

That part is optional, but for this example I recommend using it

For names, it should be like: Name, Myclass, so the first letter should be always capital letter

for further rules about classes, I will use a website..

so this is the rule:
Class names use both the camelCase and PascalCase rules. 

-----------------

So, lets talk about classes and their uses:

We use classes, for the intermediate/advanced kind of PHP which will provide us more organizing and more re-using it is similar to what functions are used for, but is more less complicated..

So if we have a file with a lot of functions, it will be more complicated once we do bigger projects..

I can show some examples of how classes works in some projects that I have been using (once I started)

That is the starting of a class
That is the whole class
That is the Var's
This is a function to be executed once the class is called..
And those are the /We wont call them/(functions)/any more/ they are:
Methods

That is a public method, which can be accessed anywhere though out the project (or where the file database.php is called)
We know that because it has this "public" keyword in front of it

Private one as you all guessed

Public "property" / we won't call them variables any more /

Private yay you guessed ;)

We can implement classes (I mean create, I don't know why I use the word implement instead of create)
We can create classes in an existing file, or create one for that class, or create a file for all classes..

The best method (specially when you get to a big-er projects) is to use:
Create a file for each class
Let's create a class to use that array inside of it

By the way, when creating a class, we should be aware that, there is names/words who are reserved to PHP, so like functions.. lets check if the name Print or even print is reserved

We always need to separate a file that contains a class from the public files.. so hackers or exploiters can't access it (if we restrict access to it) / it will be harder for them to access it /

Now all we do is include that file (I recommend requiring it once ;) )

now, lets create a (not var) property :p

Now. let's create the METHOD, method (which is function in the basic PHP)

We will set it a parameter 


Now to access a property from inside a class.. we use the variable (it isn't an actual variable) $this

Then we point to the property we are using with the characters ->

Now we point it to the property WITHOUT $

Now it is equivalent with 

But, we can't use $input right away, because we are inside of the class.. and by the time we get to the instantiation we will know the reason..

Now, we are using it as we use $input outside the class, we can set a value to it, we can do whatever we want with it

We will set it's value to the value of the function..

By the way, we access the functions parameter by simply $ so, $value

Now, we will use that class

Lets go over to index.php

We need to use that class.. to use it, we need to make an instance of it..
Classes cannot be used and modified directly.. which is, because it is like a template of code..

To make an instance we use.. a variable (yes its a variable because it's outside of the class)

Steps:
1- make a variable
2- for the value of that var use "new" then the name of the class then use "()" after the class's name.. so it will be like a call to a function

Now, our access to the class will be through our var right there

we will try access the input variable (we made it public if u remember)

To access a property.. we use:
The variable name (the instance)
followed by, ->
followed by, the property's name


To access a method, we use the same thing, except, it is a function remember..
We need to use () for it

We will use that parameter 

Why? because we hadn't echo-ed it yet

What about changing the value of input directly, because it is public

----------

Why we are using classes, we can accomplish this through functions?!

Yes, but, we haven't used the instance feature quite yet..

We can use that class over milions of times with just one code.. (one class)
</pre>
</body>
</html>