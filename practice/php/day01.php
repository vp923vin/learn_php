<?php
/**
 * syntax highlighting
 * basisc php
 */


//  refrence variable  
declare(strict_types=1);
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

$x = 20_000;  // from 7.4 this is added in number that it ignores underscore 
// and its more readable for big numbers.
echo $x;

$text = <<<HTML
<p>hello</p>
HTML;

echo $text;


// indexed arrays
$val = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// associative arrays
$newVal = [ "a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];

echo $val[0];
echo $newVal["a"];

echo "\n";
// implode functon

$proLang = [
    "name" => "vipin patel",
    'email' => "vp@gmail.com",
    'prolangs' => ["php", "javascript", "python", "sql"],
];

foreach($proLang as $key => $val){
    if(is_array($val)){
        echo "${key}: " . implode(", ", $val) . "\n";
    }else{
        echo "${key}: {$val} \n";
    }
}

// $value and &$value  has differece of references
// $value will not have the reference and it will not effect the original value of the array.
// &$value will effect the original value of the array beacuse it has the reference utill you unset.

$proLan = ["php", "javascript", "python", "sql"];
foreach ($proLan as $key => &$value) {  
    echo "${key}: {$value} \n";
}
echo "\n";
$value = "MySQL";
print_r($proLan);

echo "\n";
// match expression php above version 8
$status = '';
$lang = match ($status) {
    1 => "sql",
    2 => "php",
    3 => "javascript",
    4 => "python",
    default => "mysql",
};
echo $lang; // its like switch case but better version


// funnctions and return values expected definitions

function demo() : void {  
    return;   // function is return value is defined  : void, 
    // you can use int|flaot|array or mixed these are the eg.
}


// declare(strict_types=1);  // this must be first statement in the page.
function speak(string $name): string 
{
    return "Hello {$name}!";
}
// speak(1); // This fires the error "Uncaught TypeError"
speak("Valerio"); // This prints "Hello Valerio!"

// require, require_once, include, include_once differences

// require_once, include_once: this will include file one time not multiple times
// require, include: this will include file multiple times.

// include, require
// diff: require will stop the execution of the script after the error occurs 
// but include will not stop the execution.

// spread operator
$ary = [3, 4, 5];
$new = [1, 2, ...$ary, 6];
var_dump($new);


// function definitions with type 
// function sumAll(int $x, float $y): int|float {
//     $val = (string) $x + $y;
//     return $val;
// }

// $x = 8;
// $y = 6.5;
// echo sumAll($x, $y);

// function definitions with name arguments 
// i.e. passing arguments in any order

// example of named arguments
function sumNums(int $x, int $y): int|float {
    echo "{$x}, ${y}\n";
    $val = $x + $y;
    return $val;
}

$x = 8;
$y = 6;
echo sumNums(y: $x, x: $y);

?>

