<?php

// https://stackoverflow.com/questions/14037290/what-does-this-mean-in-php-or

// =>
// The double arrow operator, =>, is used as an access mechanism for arrays. 
// This means that what is on the left side of it will have a corresponding value of what is on the right side of it in array context. 
// This can be used to set values of any acceptable type into a corresponding index of an array. 
// The index can be associative (string based) or numeric.

$myArray = array(
    0 => 'Big',
    1 => 'Small',
    2 => 'Up',
    3 => 'Down'
);

// ->
// The object operator, ->, is used in object scope to access methods and properties of an object.
// It’s meaning is to say that what is on the right of the operator is a member of the object instantiated into the variable on the left side of the operator. 
// Instantiated is the key term here.

// Create a new instance of MyObject into $obj
$obj = new MyObject();
// Set a property in the $obj object called thisProperty
$obj->thisProperty = 'Fred';
// Call a method of the $obj object named getProperty
$obj->getProperty();