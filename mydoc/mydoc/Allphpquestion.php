<?php
//Questio 1 : reveser  a string without using any inbuid function
$string = "My name is umesh";
 // echo $total_count= strrev($string);
$reverse ='';
$i=0;
while(!empty($string[$i])){
       $reverse=$string[$i].$reverse;
       $i++; 

}

echo $reverse;


//Questio 1 : reveser  a string without using any inbuid function ends 

<?php 
//Questio 1.1 want to rever the string using call back function start
function callbackcheck($string)
{


  $reverse ='';
$i=0;
while(isset($string[$i])){
   $string[$i]; 
    $reverse=$string[$i].$reverse;
       $i++; 


    }
     return $reverse;
  // return "My name is umesh";
}
function reverstr($string,$callback){
    echo $callback($string);
}
reverstr("My name is umesh", "callbackcheck");

?>
<!-- Questio 1.1 want to rever the string using call back function ends -->


  ?>
<!-- Questio 2 : Check even or odd number  or check even and odd number between 1 to 100 start -->
  <?php
// function evenodd($check){
$even=array();
$odd=array();
for($i=1;$i<100;$i++){
    if($i%2== 0){
      // echo  "number is even";
      array_push($even,$i);
    } else {
     // echo "number is odd";
     // echo count($i);
      array_push($odd,$i);
    }
  }

// }

// evenodd(24);


// echo "<pre>";
print_r(count($odd));
 // Questio 2 : Check even or odd number  or check even and odd number between 1 to 100 end -->
?>    

 <!-- Questio 2 : Check number is prime or not start --> 

 <!-- Function that uses a callback to check if a number is prime -->


 <?php 

function check($num)
     {
        $bCheck = True; 
        for ($i = 2; $i < $num; $i++)
        {
            if ($num % $i == 0) 
            {
               $bCheck = False;
                 break;
            }               
        }
        return $bCheck;
     }  
function callback($num,$checks){
    $number = $checks($num);
    if($number == 1){
      echo "prime number";
    }else{
      echo "not prime";
    }

}

callback(729,"check");
  ?>
<!-- Questio 2 : Check number is prime or not end --> 
<!-- Questio 3 : What is synchronous and asynchronous in php with example start --> 


<!-- PHP primarily operates in a synchronous or blocking manner. However, you can simulate asynchronous behavior using techniques like multi-threading or forking processes, or by making use of asynchronous libraries and extensions. Here's an example of both synchronous and asynchronous PHP code: -->

<!-- Synchronous Example:
In a synchronous PHP script, each operation is executed one after the other, blocking the execution until each operation is completed. Here's a simple example:
 -->
<?php
function taskA() {
    sleep(2); // Simulate a time-consuming task
    echo "Task A completed.\n";
}

function taskB() {
    sleep(1); // Simulate another task
    echo "Task B completed.\n";
}

taskA();
taskB();
echo "All tasks are done.\n";
// In this example, taskA is executed first, and then taskB is executed after taskA is completed.

// Asynchronous Example:
// In PHP, true asynchronous behavior is not native, but you can simulate it using libraries or extensions. One way to achieve asynchronous behavior is by using a library like ReactPHP. Here's an example using ReactPHP:


<?php
require 'vendor/autoload.php'; // You need to install the ReactPHP library first

$loop = React\EventLoop\Factory::create();

$loop->addTimer(2, function () {
    echo "Task A completed.\n";
});

$loop->addTimer(1, function () {
    echo "Task B completed.\n";
});

$loop->run();

echo "All tasks are done.\n";
// In this example, we use ReactPHP's event loop to run timers asynchronously. Task A and Task B are executed independently and don't block the main thread. The loop->run() function starts the event loop, allowing asynchronous execution.

// Please note that true asynchronous programming in PHP often requires third-party libraries or extensions, and it's not as common as in some other languages designed for asynchronous operations.

 // Questio 3 : What is synchronous and asynchronous in php with example end --> 



// server performance data 
// Using top Command:
// Open your terminal and run the following command:

// css

// top
// This command will display a dynamic and real-time view of system performance, including CPU utilization. You can see the CPU usage at the top of the top output.

// Using htop Command:
// If you have the htop tool installed, it provides a more user-friendly and interactive interface for monitoring system performance. To install and use htop, you can run:

// csharp

// sudo apt-get install htop  # On Debian/Ubuntu
// sudo yum install htop      # On CentOS/RHEL
// htop
// htop provides a real-time view of CPU and memory utilization, as well as other system statistics.


 // Questio 3 : Number is palindrome or not  --> 
<?php  
function palindrome($n){  
$Rnumber = strrev($n);  

return $Rnumber;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
 
// modify this query and check both request email and table email and request password and database password
//  $user = Contact::where('email', $request->email)->first();


// if i have upload setup in php and only .docx file is allwoed so suppose someone have  .doc file and he edited that file as .docx and upload is that file uploaded in in php ? if yes how can we validate that it should be original docx file or  other file which modified as .docx  


// Create a function to find the factorial of a number?


function factorial($num){
  $fact=1;
 
  for($i=$num;$i>1;$i--){
   
      $fact *=$i;
     
      
  }
  return $fact;
}
 echo  factorial(6);


 // what is fibonacci numer and Write a function to find the nth Fibonacci number.?

// The Fibonacci sequence is a series of numbers where each number is the sum of the two preceding ones, usually starting with 0 and 1. The sequence typically looks like this: 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib[$n];
}

echo fibonacci(8);



 // Write a program to find the common elements between two arrays.


  function compairetwo($arr1,$arr2){
    $common=array();
    foreach($arr1 as $element){
    if(in_array($element,$arr2)){
      array_push($common,$element);
      // $common[]=$element;
    }
    }
    return $common;
  }

  $array1=[1,2,3,4,5,6];
  $array2=[3,5];
 $result  =compairetwo($array1,$array2);
print_r($result);



//Create a function to remove duplicates from an array.

 function removeDuplicates($array) {
    $uniqueArray = array();
    foreach ($array as $element) {
        if (!in_array($element, $uniqueArray)) {
            $uniqueArray[] = $element;
        }
    }
    return $uniqueArray;
}

// Example usage:
$array = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates($array);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


//Implement a function to sort an array in ascending order.
 function shortArray($num){
  usort($num, function($a, $b) {
    return $a - $b; // Comparison function for numeric sorting
  });
  return $num;
}

$array = [1, 3, 6, 2, 4];
$result = shortArray($array);
print_r($result); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 6 )


//other ways of shorting directly by functions

// sort: Sorts an array in ascending order. Keys are not preserved.

$array = [1, 3, 6, 2, 4];
sort($array);
print_r($array); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 6 )
// rsort: Sorts an array in descending order. Keys are not preserved.

$array = [1, 3, 6, 2, 4];
rsort($array);
print_r($array); // Output: Array ( [0] => 6 [1] => 4 [2] => 3 [3] => 2 [4] => 1 )
// asort: Sorts an array in ascending order, maintaining index association.
$array = ['a' => 1, 'b' => 3, 'c' => 6, 'd' => 2, 'e' => 4];
asort($array);
print_r($array); // Output: Array ( [a] => 1 [d] => 2 [b] => 3 [e] => 4 [c] => 6 )
// arsort: Sorts an array in descending order, maintaining index association.

$array = ['a' => 1, 'b' => 3, 'c' => 6, 'd' => 2, 'e' => 4];
arsort($array);
print_r($array); // Output: Array ( [c] => 6 [e] => 4 [b] => 3 [d] => 2 [a] => 1 )
// ksort: Sorts an array by keys in ascending order, maintaining key association.

$array = ['b' => 3, 'a' => 1, 'c' => 6, 'e' => 4, 'd' => 2];
ksort($array);
print_r($array); // Output: Array ( [a] => 1 [b] => 3 [c] => 6 [d] => 2 [e] => 4 )
// krsort: Sorts an array by keys in descending order, maintaining key association.

$array = ['b' => 3, 'a' => 1, 'c' => 6, 'e' => 4, 'd' => 2];
krsort($array);
print_r($array); // Output: Array ( [e] => 4 [d] => 2 [c] => 6 [b] => 3 [a] => 1 )



// what is anagrams ? Write a function to check if two strings are anagrams.

// An anagram is a word or phrase formed by rearranging the letters of another word or phrase, using all the original letters exactly once. In other words, two words are anagrams of each other if they contain the same letters in a different order.

// For example:

// "listen" and "silent" are anagrams.
// "rail safety" and "fairy tales" are anagrams.
// Here's a PHP function to check if two strings are anagrams:


function areAnagrams($str1, $str2) {
    // Remove spaces and convert both strings to lowercase
    $str1 = strtolower(str_replace(' ', '', $str1));
    $str2 = strtolower(str_replace(' ', '', $str2));

    // Check if the length of both strings is the same
    if (strlen($str1) != strlen($str2)) {
        return false;
    }

    // Sort the characters of both strings
    $sortedStr1 = str_split($str1);
    sort($sortedStr1);
    $sortedStr2 = str_split($str2);
    sort($sortedStr2);

    // Check if the sorted strings are identical
    return $sortedStr1 === $sortedStr2;
}

// Example usage:
$str1 = "listen";
$str2 = "silent";
if (areAnagrams($str1, $str2)) {
    echo "The strings '$str1' and '$str2' are anagrams.";
} else {
    echo "The strings '$str1' and '$str2' are not anagrams.";
}
// This function works by removing spaces and converting both strings to lowercase to make the comparison case-insensitive and ignoring spaces. Then, it checks if the lengths of the two strings are equal. If they are, it sorts the characters of both strings and compares them. If the sorted strings are identical, the original strings are anagrams.


// Create a program to find the longest word in a sentence.

function longestWord($sentence) {
    // Split the sentence into an array of words
    $words = explode(" ", $sentence);

    // Initialize variables to store the longest word and its length
    $longestWord = "";
    $maxLength = 0;

    // Iterate through each word in the array
    foreach ($words as $word) {
      $cleanWord='';
        for ($i = 0; $i < strlen($word); $i++) {
            if (ctype_alnum($word[$i])) {
                $cleanWord .= $word[$i];
            }
          }
        // Check if the length of the cleaned word is greater than the current maximum length
        if (strlen($cleanWord) > $maxLength) {
            // Update the longest word and its length
            $longestWord = $cleanWord;
            $maxLength = strlen($cleanWord);
        }
    }

    // Return the longest word
    return $longestWord;
}

// Example usage:
$sentence = "The quick brown fox jumps over the lazy dog";
$longest = longestWord($sentence);
echo "The longest word in the sentence is: $longest"; // Output: The longest word in the sentence is: jumps


// Write a program to generate a random password.


function generateRandomPassword($length = 10) {
    // Define the set of characters to use in the password
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';

    // Initialize an empty string to store the password
    $password = '';

    // Get the number of characters in the set
    $charLength = strlen($chars);

    // Generate random characters to form the password
    for ($i = 0; $i < $length; $i++) {
        // Choose a random index within the range of the set
        $randomIndex = rand(0, $charLength - 1);

        // Append the randomly chosen character to the password
        $password .= $chars[$randomIndex];
    }

    // Return the generated password
    return $password;
}

// Example usage:
$randomPassword = generateRandomPassword();
echo "Random Password: $randomPassword";


