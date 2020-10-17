<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
?>
    <h1><?php echo $title ?></h1>
    <?php 
        //Concatenation of strings
        $phrase1 = "The student who came late";
        $phrase2 = "in class, put herself at an disadvantage.";
        $name = "jah barry";

        echo $phrase1 . ", named Nicky, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';
        //Strings transformation
        echo "Uppercase first letter: " . ucfirst($name).'<br/>';
        echo "Uppercase first letter of each word: " . ucwords($name).'<br/>';
        echo "Upper case: " . strtoupper($name). '<br/>';
        echo "Upper case: " . strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo "Repeat String: " . str_repeat('a', 10) . '<br/>';
        echo "Repeat String - Nested Function: " . strtoupper(str_repeat('a', 10)) . '<br/>';
        echo "Get a Substring: " . substr($name, 4, 6). '<br/>';

        echo "Get position of string: " . strpos($name, 'b').'<br/>';
        // Returns Null
        // echo 'Get position of string: ' . strpos($combine, 'z'). '<br/>';
        echo "Find Character 'R': " . strchr($name, 'R').'<br/>';
        echo "Find Character 'h': " . strchr($name, 'h').'<br/>';
        echo "Find Character 'b': " . strchr($name, 'b').'<br/>';
        echo "Find Character 'y': " . strchr($name, 'y').'<br/>';

        echo "Find Length of string: " . strlen($name).'<br/>';

        echo "Without Trim: " . 'A' . ' B C D ' . "E" . '<br/>';
        echo "Trim spaces on both sides: " . 'A' . trim(' B C D ') . "E" . '<br/>';
        echo "Trim spaces to the left: " . 'A' . ltrim(' B C D ') . "E" . '<br/>';
        echo "Trim spaces to the right: " . 'A' . rtrim(' B C D ') . "E" . '<br/>';

        echo " Replace string with another: " . str_replace("put", "place",
        $phrase2 ) . '<br/>';
    ?>
    
    <?php require 'includes/footer.php' ?>