<?php 
 /*  
 
    Following are the array functions which are used to do array operations
    1. array();
        Description: The array() function is used to create an array,
        Basically there are three types of array:
       1. Indexed array
        Description: Arrays with numeric index
        Syntax: array(value1, value2, value3);
        Code:  
        */
        // Displaying the array elements according to the index using for loop
            $cars = array("BMW", "Mercedes", "Audi", "RollsRoyce", "Ferrari");
            for($i = 0; $i < count($cars); $i++){
                echo $cars[$i] . "<br>";
            }
        /*
       2. Associative array:
       Description: Arrays with named keys
       Syntax: array(key1 => value1, key2 => value2, key3 => value3);
       Code:
       */
        // Displaying array elements using foreach loop
            $person = array("name" => "Sangam", "age" => 20);
            foreach($person as $inf => $info){
                echo $inf . " : " . $info . "<br>";
            }
       /*

       3. Multidimensional array
       Description: It is a kind of array which contains one or more arrays in one array
       Syntax: array(array1, array2, array3);
       Code: 
       */
        // A two dimensional array
            $cars=array
            (
                array("Volvo",100,96),
                array("BMW",60,59),
                array("Toyota",110,100)
            );
            echo $cars[0][0].": Ordered: ".$cars[0][1].". Sold: ".$cars[0][2]."<br>";
            echo $cars[1][0].": Ordered: ".$cars[1][1].". Sold: ".$cars[1][2]."<br>";
            echo $cars[2][0].": Ordered: ".$cars[2][1].". Sold: ".$cars[2][2]."<br>";
        /*
        4. Multidimensional Associative Array
        Description: It is a kind of array which contains two or more associative arrays in a array
        Syntax: array(key1 => array1, key2 => array2, key3 => array3);
        Code: 
        */
            $assosiativeMulti = [
                "ram" => ["name" => "Ram", "age" => 26, "email" => "rambahadur@gmail.com"],
                "hari" => ["name" => "Hari", "age" => 39, "email" => "hariprasad@gmail.com"],
                "geeta" => ["name" => "Geeta", "age" => 23, "email" => "geetakumari@gmail.com"]
            ];
            print_r($assosiativeMulti);
        /*
        5> Multidimensional Numeric-Associative Array
        Description: Mixed multidimensional associative numeric array
        Syntax: array(array1(key=>value), array2(key=>value));
        Code: 
        */
            $mixed = [
                ["fname" => "Sangam", "lname" => "Shrestha", "age" => 20],
                ["fanme" => "Rajaram", "lname" => "Silwal", "age" => 21]
            ];
            print_r($mixed);
        /*

    2. array_change_key_case();
    Description:  changes the case of characters in array, i.e uppercase to lowercase and lowercase to uppercase
    syntax: array_change_key_case(array, case);
    code
    */
    
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        $newDetails = array_change_key_case($age, CASE_UPPER);
        print_r($newDetails);
        $againNew = array_change_key_case($age, CASE_LOWER);
        print_r($againNew);
        echo "<br>";
    /*
    3. array_chunk();
    Description: Returns a multidimensionap array containg the arrays with size of number given to be cunked inside it
    Syntax: array_chunk(array, size);
    Code: 
    */
        $fruits = array("apple", "banana", "cherry", "mango",  "grape");
        $chunked = array_chunk($fruits, 2);
        print_r($chunked);
        echo "<br>";
    /* 
    4. array_combine();
    Description: Combines the two ot more arrays into a single array and returns an associative array
    Syntax: array_combine(array1, array2);
    Code: 
    */
        $fname = array("Sangam", "Dhiraj", "Gaurav");
        $roll_no = array(54, 67, 53);
        print_r(array_combine($fname, $age));
        echo "<br>";
    /*
    5. array_count();
    Dexcription: Counts how many times the element of array is repeated inside the array
    Syntax: array_count_values(array);
    Code:
    */
        $animals = array("Dog", "Cat", "Cow", "Cat", "Cow", "Dog", "Cow");
        print_r(array_count_values($animals));
        echo "<br>";
    /*
    6. array_diff();
    Dexcription: Returns the difference between two or more arrays
        array1 : the array to be compared from
        array2 : the array to be compared against
        array3 : more array ton be compared against
    Syntax: array_diff(array1, array2);
    Code:
    */
        $group1 = array("red", "yellow", "black", "blue", "green");
        $group2 = array("purple", "green", "black");
        $group3 = array("navy", "white", "red", "blue");
        print_r(array_diff($group1, $group2, $group3));
        echo "<br>";

    /*
    7. array_diff_assoc();
    Dexcription: Returns the difference between two or more arrays
        array1 : the array to be compared from
        array2 : the array to be compared against
        array3 : more array ton be compared against
    Syntax: array_diff_assoc(array1, array2);
    Code:
    */
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"red","b"=>"green","c"=>"blue");
        $result=array_diff_assoc($a1,$a2);
        print_r($result);
        echo "<br>";
    /*
    8. array_reverse();
    Dexcription: Returns the array in reverse order
    Syntax: array_reverse(array);
    Code:
    */
        $colors = array("red", "green", "blue", "yellow");
        print_r(array_reverse($colors));
        echo "<br>";
    /*
    9. array_search();
    Dexcription: Searches for a value in the array and returns the key of the first occurrence ofthe value
    Syntax: array_search(value, array);
    Code: 
        */
        $fruits = array("apple", "mango", "orange", "banana", "cherry");
        print_r(array_search("banana", $fruits));
        echo "<br>";
    /*
    10. array_sum();
    Dexcription: Returns the sum of all values in an array
    Syntax: array_sum(array);
    Code: 
    */
        $numbers = array(1, 2, 3, 4, 5);
        echo array_sum($numbers);
        echo "<br>";
    /*
    11. array_slice();
    Description: slice of the array from the specific array element and returns the rest of the elements
    Syntax: array_slice(index, array);
    Code: 
    */
        $colors = array("red", "green", "blue", "yellow", "white", "black");
        print_r(array_slice($colors, 3));
        echo "<br>";
    /*
    12. array_flip();
    Description: Returns an array with the keys and values swapped
    Syntax: array_flip(array);
    Code:
    */
        $colors = array("red" => 1, "green" => 2, "yellow" => 3, "blue" => 4);
        print_r(array_flip($colors));
        echo "<br>";
    /*
    13: array_merge();
    Description: Merge the elements of one or more arrays together so that the values of one are appended
    Syntax: array_merge(array1, array2);
    Code: 
    */
        $colors1 = array("red", "green");
        $colors2 = array("blue", "yellow");
        print_r(array_merge($colors1, $colors2));
        echo "<br>";
    /*
    14: array_pop();
    Description: Removes the last element from an array and returns it
    Syntax: Deletes the last element from the array
    Code: 
    */
        $sports = array("football", "cricket", "volleyball", "baseball", "hockey");
        print_r(array_pop($sports));
        echo "<br>";
    /*
    15: array_push();
    Description: Adds one or more elements to the end of an array
    Syntax: array_push(array, value1, value2);
    Code:
    */
        $sports = array("football", "cricket", "volleyball", "baseball");
        array_push($sports, "hockey", "basketball");
        print_r($sports);
        echo "<br>";
    /*
    16: array_rand();
    Description: Returns a random key from the array
    Syntax: array_rand(array);
    Code:
    */
        $colors = array("red", "green", "blue", "yellow", "white","black");
        $random_key = array_rand($colors);
        echo $colors[$random_key];
        echo "<br>";
    /*
    17: array_product();
    Description: Returns the product of all values in an array
    Syntax: array_product(array);
    Code:
    */
        $numbers = array(1, 2, 3, 4, 5);
        echo array_product($numbers);
        echo "<br>";
    /*
    18: array_pad();
    Description: Pads the array with a specified value until it reaches a specified length
    Syntax: array_pad(array, length, value);
    Code:
    */
        $numbers = array("Java", "Python", "C++", "C#", "php");
        $numbers = array_pad($numbers, 9, "Javascript");
        print_r($numbers);
        echo "<br>";
    /*
    19: array_map();
    Description: Applies a callback function to each element of an array
    Syntax: array_map(callback, array1, array2);
    Code:
    */
        $numbers1 = array(1, 2, 3, 4, 5);
        $numbers2 = array(6, 7, 8, 9, 10);
        $result = array_map(function($a, $b) {
            return $a + $b;
        }, $numbers1, $numbers2);
            
        print_r($result);
        echo "<br>";

    /*
    20: array_keys();
    Description: This function returns the array containing the keys
    Syntax: array_keys(array, value, strict)
    Code:
    */
        $cars = array("Rolls Royce" => "Phantom", "Mercedes" => "GLS", "Audi" => "Q8");
        $keys = array_keys($cars);
        print_r($keys);
        echo "<br>";
    /*
    21: array_values();
    Description: This function returns the array containing the values
    Syntax: array_values(array)
    Code:
    */
        $cars = array("Rolls Royce" => "Phantom", "Mercedes"=> "GLS", "Audi" => "Q8");
        $values = array_values($cars);
        print_r($values);
        echo "<br>";
    /*
    
    */
?>