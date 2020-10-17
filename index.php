    <?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1><?php echo $title ?></h1>
    <br/>
    <?php 
        // Printing to HTML using echo
        echo "Hello PHP!";
        // You can echo HTML tags
        echo "<br/>";
        echo "Second Line";
        echo "<br/>";
    
        // Variable need a '$'. They are not strongly typed
        $name = "Jah Barry";
        $age = "25";
        // echo variable
        echo $name;
        // Echo using double quotes and interpolation
        echo "<h1>My name is: $name </h1>";
        echo "<h1>My age is: $age </h1>";
    ?>
    <button type="button" class="btn btn-dark">Click Me!</button>

    <?php 
        require 'includes/footer.php' 
    ?>