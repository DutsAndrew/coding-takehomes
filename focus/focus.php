<?php

// 1. How would you access the number 10 in the $arr array? <?php $val = ‘1.2.3.4.5.6.7.8.9.10.11.12’; $arr[] = array(‘a’ => explode(‘.’,$val));

$number_ten = (int) $arr[0]['a'][9];

// however, that's knowing the index. To make the code more reusable and readable I'd take the following approach:

// $value = '10';
// $index_of_number = array_search($value, $arr[0]['a'];

// if ($index_of_number !== false) {
//     return $arr[0]['a'][$index_of_number];
// } else {
//     return 'Value not found';
// };

// practical answer

function findValueInArray(string $string_array, string $searchValue): string {
  $arr[] = array('a' => explode('.', $string_array)); // $string_array is sent in as: '1.2.3.4...'

  $index_of_number = array_search($searchValue, $arr[0]['a']); // index of item if found or false if no match is found

  if ($index_of_number !== false) {
      return $arr[0]['a'][$index_of_number];
  } else {
      return 'Value not found';
  };
};

$val = '1.2.3.4.5.6.7.8.9.10.11.12';
$search_value = '10';
$found_value = findValueInArray($val, $search_value);
echo $found_value;

// 2. Write a foreach loop for array $numbers that will modify each entry by adding 10 to the value. $numbers = array(1,2,3,4,5,6); *

$numbers = array(1,2,3,4,5,6);

foreach ($numbers as &$number) {
  $number += 10;
};

// 3. Write a function Counter() that keeps track of the number of times it is called. This function should not take any parameters and return the number of times that it has been called. <pre> Example: echo Counter();//1 echo Counter(); //2 </pre> *

function Counter() {
  static $count = 0;
  $count++;

  return $count;
};

// 8. Write a PHP function that outputs the even numbers from the following array in ascending order with one number per line: <?php $numbers = [ 73, 22, 19, 62, 14, 3, 96, 88, 17, 41, 44, 1, 4, 31, 30, 24, 108, 37 ];

function sortNumbersArray($numbers) {
  $even_numbers = [];

  foreach($numbers as $number) {
    if ($number % 2 == 0) { // if number is divisible by 2 with no remainder it is even
      $even_numbers[] = $number;
    };
  };

  sort($even_numbers);
  return $even_numbers;
};

// 13. Below the Foo class, write code that will output the sum of $num_1, $num_2, and $num_3 from the Foo class. Feel free to instantiate an object of Foo if necessary. <?php class Foo { public static $num_1 = 7; public $num_2 = 4; private $num_3 = 9; public function getNum3() { return $this->num_3; } }

class Foo {
  public static $num_1 = 7;
  public $num_2 = 4;
  private $num_3 = 9;

  public function getNum3() {
      return $this->num_3;
  }
}

$fooObject = new Foo();

$sum = 0;
$sum += Foo::$num_1;
$sum += $fooObject->num_2;
$sum += $fooObject->getNum3();

echo $sum; // returns 20

// 18. Write a PHP function isValidPhone() that returns Boolean and uses regex to determine if a string is in the phone number format ###-###-#### (e.g. 727-999-0001). Example: <?php echo isValidPhone("727-999-0001"); // 1 echo isValidPhone("727-9990001"); // 0 *

function isValidPhone($phone) {
  $pattern = '/^\d{3}-\d{3}-\d{4}$/';
  return preg_match($pattern, $phone) === 1;
};

var_dump(isValidPhone("727-999-0001")); // bool(true)
var_dump(isValidPhone("727-9990001")); // bool(false)