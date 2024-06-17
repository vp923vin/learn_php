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
    return;   // function is return value is defined  : void, you can use int|flaot|array or mixed these are the eg.
}

?>

