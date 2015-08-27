<?php
	require_once("includes/layout.php");
	
	function test_results() {
		global $myLayoutVariable, $myvar, $othervar;
		echo "Longname: ". $myLayoutVariable->input ."<br />";
		echo "Myvar: ". $myvar->input ."<br />";
		echo "Othervar: ". $othervar->input ."<br />";
		echo "<br /";
	}
	
	// The instance ▼
	$myLayoutVariable = new Layout();
	
	// The nickname/reference/short-name ▼
	$myvar = &$myLayoutVariable;
	// This ▲ is what we should be aware of..
	
	$othervar = clone $myLayoutVariable;
	
	
	$myLayoutVariable->input = "This is the longname";
	test_results();
	
	
	$myvar->input = "this is the myvar";
	test_results();
	
	$othervar->input = "This is the other var";
	test_results();
	
	$myLayoutVariable->input = "This is the longname";
	test_results();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP OOP Concepts Tutorial</title>
</head>
<body>
	<h2>Toturial text</h2>
<pre>
Lets use the feature which is called linking (I forgot the name which most developers call it)

Yup. references..

Ok, so now, we will use references..

Oh yea, referencing is actually.. when you want a variable to link/point to an existing instance..

we use the character &

Hmm.. that is actaully a long name to use..
we don't want to type each type myLayoutVariable, instead we want a short name for that instance.. lets create a nickname for it xD

As I forgot this, I will test to see, if this will work.. actually, it will.. but, let's try

There is something wrong, which is again, why you need to practise programming even when you don't have a project ;P

Let me use google for a sec

Okay, so, as I refreshed xD it should be after the = which means, &$myvar is the right form


So, what this allows us to do, is to use that name instead of the long one.. lets try?
Let's make another nickname without the & and see what's the difference..

Something is wrong?

OMG, sorry, it has changed for the new versons of PHP.. xD
Now, even if you do $myvar = $longname;
it will make a reference xD
Much easier hah?

Okie, nevermind about this subject for now..
</pre>
</body>
</html>