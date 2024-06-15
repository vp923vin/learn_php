<?php
/**
 * syntax highlighting
 * basisc php
 */


//  refrence variable  

$x = 5;
$y = $x;
$x = 4;
echo "${x} and ${y} \n";

$u = 2;
$v = &$u;
$u = 5;
echo "${u} and ${v}\n"; // <--- this syntax can be used only inside double quotes.

# shorthand echo syntax
?>

<?php echo "Hello World\n"; ?>
<?= "Hello World\n"; ?>
<?php 
    // constants
    define("STATUS", "PAID");
    echo STATUS;
    echo "\n";
    const order = "placed";
    echo order;
    echo "\n";
    echo PHP_VERSION;
    echo "\n";
    echo __LINE__;
?>

<?php 

echo gettype(STATUS);  // get the type of variable.
echo "\n";
var_dump(is_bool(STATUS)); // boolean check

$x = 20_000;  // from 7.4 this is added in number that it ignores underscore and its more readable for big numbers.
echo $x;


?>

