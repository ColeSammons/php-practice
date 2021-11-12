
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebsite</title>
</head>
<body>
    <?php
        include_once 'includes/header.php';
        include 'includes/person.inc.php';
    ?>

    <?php
        include_once 'includes/test.php';//throws small error if can't find. Can only include once.
        //require can also be used but will throw a fatal error if not found.
        echo '<br>';
        echo $z;
        echo $x;
    ?>

    <!-- Without Escaping -->
    <?php
        //variables need $ in front
        $a = 1;
        $b = $a . 5;//equals 15
        echo "<p>b: " . $b . "</p>";
        echo "<p>a++: " . $a++ . "</p>";//will echo 1. Adds after echoed out.
        echo "<p>++a: " . ++$a . "</p>";// will now echo 3
        if(1 == 1) {
            echo "<p>Without Escaping</p>";

        }
    ?>

    <!-- With Escaping -->
    <?php if(1 == 1) { ?>
            <p>With Escaping</p>
    <?php } ?>

    <!-- Using classes -->
    <?php
       $person1 = new Person();
       $person1->setName("Cole");
       echo $person1->name . " Sammons"; //concat operator ' . '
    ?>

    <!-- loops -->
    <?php 
    //while loop
    echo '<br>';
    $a = 1;
    $b = 5;
    while($a !== $b) {
        if($a === 4) {
            break;//stops the loop when $a equals 4. Can break out of multiple levels of loops with break *
        }
        echo $a;
        $a++;
    }
    //do-while loop
    echo '<br>';
    $c = 2;
    do {
        echo $c;
        $c++;
    } while ($c === 3);
    //for loop
    echo '<br>';
    for($i = 0; $i < 5; $i++) {
        if($i === 3) {
            continue;//skips the iteration. So 3 will not appear. Doesn't run code below;
            //same as break can skip iteration of multiple loops with continue *
        }
        echo $i;
    }
    //foreach loop
    echo '<br>';
    $array = ["first" =>'cole', "middle" => 'marcus', "last" => 'sammons'];//key: value
    foreach($array as $key => $value) {
        echo "{$key} : {$value} ";
        echo '<br>';
    }
    unset($value);//gets rid of $value declaration
        ?>
    <!-- functions -->
    <?php
    //internal funcitons built-in
        $a = "Hello World ";
        echo str_replace("World", "Cole", $a);//replaces strings
        echo '<br>';
        echo str_repeat($a, 3);//repeats specific string
        echo '<br>';
        echo stripos($a, "lo");//gets position of string within a string
    ?>
    <?php
    //custom made functions
        include_once 'includes/myFunctions.php';
        echo '<br>';
        echo calcAdd(2,4);//output 6
    ?>

    <!-- Example project -->
    <h2>Example Project</h2>
    <form action="functions.php" method="get">
        <input type="text" name="num01" placeholder="Number 1">
        <select name="oper">
            <label>Choose Operation</label>
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
        </select>
        <input type="text" name="num02" placeholder="Number 2">
        <button type="submit">Calculate!</button>
    </form>
    
</body>
</html>