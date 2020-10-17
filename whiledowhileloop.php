<?php
    $title = "While and DoWhile Loop";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php 
        $grade = 0;
        //Pre=Condition Loop
        while($grade < 10){
            echo "<p>I am less than 10!</p>";
            $grade++;
        }

        echo "Exit Loop!";
    ?>

    <h1>PHP Do-While Loop</h1>
    <?php 
        //Post-Condition Loop
        $grade = 0;
        do{
            echo "<p>I am the do while loop!</p>";
            $grade++;
        }while($grade < 10);
        echo "Exit Loop!";
    ?>
    
    <?php require 'includes/footer.php' ?>