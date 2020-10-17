<?php 
    $title = "If Statements";
    include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php 
        echo "<h2>If Statement</h2>";

        $grade = 30;

        if($grade >= 50){
            echo "<h3 style='color: green'>You Have Passed</h3>";
        }
        else{
            echo "<h3 style='color: red'>You Have Failed</h3>";
        }
    ?>
<?php require 'includes/footer.php' ?>