<?php
/**
 * Level : Beginner
 *
 * Linear Search : Search a value in a given array by traversing the array
 * from the beginning, till the desired value is found.
 *
 * @param array $words list of words
 * @param string $search searched value
 * @return boolean result of search
 */
function linearSearch($words, $search) {
    // Code here
    $lenght = count($words);
    for ($i=0; $i < $lenght; $i++) { 
        if ($words[$i] == $search) {
            return true;
        }
    }
}

$words = array('book', 'pencil', 'pen', 'note book', 'sharpener', 'rubber');

echo linearSearch($words, 'note book') ? 'Vrai ' : 'Faux ';
echo linearSearch($words, 'dog') ? 'Vrai ' : 'Faux ';
echo "</br>";
/**
 * Level : Elementary
 *
 * Insertion Sort : Arrange the data in ascending order.
 *
 * @param array $numbers list of inordered numbers
 * @return array ascending array of number
 */
function insertionSort($numbers) {
    // Code here
    $lenght = count($numbers);
    for ($i = 1; $i < $lenght ; $i++) { 
        $tab = $numbers[$i];
        $j = $i;
        while ($j > 0 && $numbers[$j - 1] > $tab){
            $numbers[$j] = $numbers[$j - 1];
            $j = $j - 1;
        }
        $numbers[$j] = $tab;
    }
    return $numbers;
}

print_r(insertionSort(array(3, 0, 2, 5, -1, 4, 1)));
echo "</br>";
/**
 * Level : Intermediate
 *
 * Array Flatten : Flattens an Array of Array into a flat Array.
 *
 * @param array $multiArray multidimensional array
 * @return array flattened array
 */
function arrayFlatten($multiArray) {
    // Code here
    $result = array();
    foreach ($multiArray as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, arrayFlatten($value));
        } else {
            $result[$key] = $value;
        }
    }
    return $result;
}

print_r(arrayFlatten(array('a', 'b', array(array(array('c'), 'd', 'e')), array(array('f')))));
echo "</br>";

/**
 * Level : Advanced
 *
 * Look And Say : Look at the number, visually grouping consecutive runs of the
 * same digit. Say the number, from left to right, group by group; as how many
 * of that digit there are - followed by the digit grouped. This becomes the
 * next number of the sequence.
 *
 * @param string $string
 * @return string sequence
 */
function lookAndSay($string) {
    // Code here
    $arr = str_split($string);
    $target = $arr[0];
    $count = 0;
    $res = "";
    foreach($arr as $num){
        if($num == $target){
            $count++;
        }else{
            $res .= $count . $target;
            $count = 1;
            $target = $num;
        }        
    }
    $res .= $count . $target;
    return $res;
}

for ($i = 0, $s = 11; $i < 10; $i++) {
    $s = lookAndSay($s);
    print "$s\n";
}
