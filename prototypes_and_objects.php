<?php
	require_once("includes/layout.php");
	
	// Instanciate
	$myvar = new layout("new thing");
	echo $myvar->get_input() ."<br />";
	//-------
	
	echo $myvar->firstvar ."<br />";
	
	
	echo "<hr />";//----------------------
	
	
	$othervar = new LayoutTweeks("My other new text");
	
	echo $othervar->get_input() ."<br />";
	
	$othervar->set_input("This is the other other new text");
	
	echo $othervar->get_input() ."<br />";
	
	echo $myvar->get_input() ."<br />";
	
	echo "<hr />";//-----------------------
	
	echo $othervar->get_protected() ."<br />";
	
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP OOP Concepts Tutorial</title>
</head>
<body>
	<hr />
	<h2>Toturial text</h2>
<pre>
Okie, what next?!

Well, lets get more into the public, protected, and private

If we went to make this property a private/protected property we cannot have access to it any-more outside the class (there is somewhere we can access it by other than inside the class, will talk about that later..

so, lets try

That is what we can get..

BUT!!

we can have access to it.. THROUGH the function..

Why nothing happens? because we didn't echo it.. and we can't.. because it is private..

So the alternative is..
we all know about the return keyword inside of functions and others..

Come on. whats the purpose of that..
If you agree.. then, why won't we have another function that return it?

Even more?

By this point, lets introduce the construct function..

The way this works is:
When we instantiate the instance/class, we pass variables at that time, this function will work automatically, and will do what ever it is supposed to do.. then..
complete as normal..

OK..

So, we pass the values in that () so, that is why it is there, and why we treat it like a function..

I want to point out to a cool feature of Dreamweaver (maybe just for the newer versions of it) CC 14.1 is my current one..
It has this referencing feature..

Empty now.. we can add description 

oh sorry, I did it with functions, it is supposed to be done with classes that are withing files

Okie, moving along..

What's the difference between private and protected..

Public can be accessed anywhere as long as the class is called and instantiated..

Protected has a little more privileges..

We will start learning them, by introducing the inheritance of classes

By the way, classes are called objects that is why it is OOP (object-oriented-programming)

To inherit an object, we use the keyword "extends".. :p 
lets demonstrate 

We want that new object to inherit its properties and methods from the Layout (old) object..

And we can use it right away
It is a new different class/object

What benefits will we earn by this?!

We won't be typing the whole thing (re-using) + (plus) we can edit methods, add methods, edit properties, and add properties..

Been passing a long time guy's sorry..
Let's complete the tutorial while chatting..

Oh yea..

OK, so back to the tutorial

We were accessing Public from anywhere..
Now we will access Protected from the child (extends) object..

Because protected means, it will be accessible from: The object itself, and any object that extends from this object

We can edit it there (inside the object) but we cant outside..

Because this method was public, we had access to that protected property THROUGH that method..

Private: Cannot be accessed from anywhere, except from the main object


Okie, one asked.. why is this feature is available?
If u ever have to  build a secured website/project/app for.. lets say, a bank.. u don't want your properties and classes to be accessed everywhere.. u need it to be accessed when it is necessary to do so..
Like, keep all of your private properties, and methods private, and the more common ones less private (protected) and the safe ones public..

Well.. it also affects the CPU and the RAM of the sever.. yes.. but, in the other hand.. if offers the security to your website/app/project

So.. lets make another file now
</pre>
</body>
</html>