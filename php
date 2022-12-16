Lesson 1: Setting up a PHP development environment

    Download and install a local server environment such as XAMPP or WAMP. These programs allow you to run PHP scripts on your own computer rather than on a live server.

    Create a new folder on your computer where you will store all of your PHP files. This is where you will write and save your PHP code.

    Open your local server program and start the Apache server. This allows your computer to run PHP scripts.

    In your PHP folder, create a new file and name it "index.php". This will be the main file that will be run when you access your PHP scripts.

    In your index.php file, type the following code:

<?php

echo "Hello, World!";

?>

    Save the file and then open your web browser. In the address bar, type "localhost" followed by the name of your PHP folder. For example, if your PHP folder is named "php_lessons", you would type "localhost/php_lessons" in the address bar.

    You should see the message "Hello, World!" displayed in your browser. This indicates that your PHP script has been successfully executed.

Congratulations, you have successfully set up your PHP development environment and run your first PHP script!





Lesson 2: Variables and Data Types

    A variable is a container that stores a value. In PHP, variables are denoted by a dollar sign followed by the variable name. For example:

$name = "John";

    There are several different data types in PHP, including strings, integers, floats, and booleans.

    Strings are pieces of text, such as names or addresses. They are denoted by either single or double quotes. For example:

$name = "John";
$address = '123 Main Street';

    Integers are whole numbers, such as 1 or -5. They do not have decimal points.

$age = 26;
$count = -10;

    Floats are numbers with decimal points, such as 3.14 or -0.5.

$price = 19.99;
$temperature = -32.5;

    Booleans are true or false values. They are often used in conditional statements to determine whether a certain condition is met.

$is_admin = true;
$is_logged_in = false;

    You can change the value of a variable by reassigning it a new value. For example:

$name = "John";
$name = "Jane";

Now, the value of the variable $name is "Jane".

    You can also perform operations on variables. For example:

$x = 10;
$y = 5;
$z = $x + $y; // $z is now 15

    You can use the var_dump() function to see the data type and value of a variable. For example:

$name = "John";
var_dump($name); // Outputs: string(4) "John"

$age = 26;
var_dump($age); // Outputs: int(26)

$is_admin = true;
var_dump($is_admin); // Outputs: bool(true)




