<?php
$sum = 0;
$counter = 100;
$stepDownNumber = 7;
while ($counter > 3) {
	$sum += $counter;
	$counter -= $stepDownNumber;
}
echo "the final sum is ". $sum;


<?php
        //Enter your code here, enjoy!

$sum = 0;
for ($x = 100; $x>3; $x-=7){
    echo "<p>debugger: $sum is ".$sum;
    echo "<p>debugger: $x is ".$x;
    
	$sum += $x;
}	
echo "<p> *** The answer is ". $sum;

$favoritecolors = array();
$array[0] = 'Blue';
$array[1] = 'Red';
$array[2] = 'Green';
$array[3] = 'Purple';
$array[4] = 'Orange';
echo count($favoritecolors);
print_r($favoritecolors);
