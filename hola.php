<?php 
/**
* Comentario de varias lineas
*/
$message = 'Hola mundo';//Comentario en linea

# El punto y coma se puede omitir al final de un bloque
ECHO "$message\n";

define('PUBLISHER', 'Springer');

echo PUBLISHER;

$pi = 0.0314E2;

echo "\n$pi\n";
echo '\n$pi';

$people = ['Luis', 'Misraim', 'Noe', 1234, false, [2]];
$old = array(2,3,4);

$product = [
    'name' => 'Ajax',
	'price' => 230,
	'available' => true,
];

foreach ($product as $field => $value) {
    echo "\n$field: $value";
}
	
echo "\nEste es el precio del producto{$product['price']}\n";
echo $product['name'];

print_r($product);
print_r($old);	
print_r($people);

//Variables variables
$foo = 'bar';
$$foo = 'baz';

echo "\n$foo";
echo "\n$bar";

$bigVariable = 'PHP';
$short = &$bigVariable;
$bigVariable .= ' Rocks!';
echo "Short is $short";
echo "Long is $bigVariable";


function update_counter()
{
    global $counter;
	$counter++;
}
$counter = 10;
update_counter();
echo $counter;



























$password = 'Letmein';
if ($password === 'letmein') {

    echo 'Password is correct';
}  else {
      echo 'Try again';
}

$color = 'red';
switch ($color)
{
    case 'green':
	    echo 'Green';
		break;
	case 'blue':
        echo 'Blue';
        break;		
	default:
	    echo $color;
}


function test()
{
    $parameter1 = 'foo';
    $parameter2 = 'bar';
    if ($parameter1 === 'baz') {
	    die('Terminate script');
	}
	
	return "\n$parameter1 $parameter2";
}
//return 'Luis';
echo test();
exit(0);

$configuration = require 'configuration.php';
print_r($configuration);
	