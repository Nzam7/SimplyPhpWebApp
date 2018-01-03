<?php
    define("TITLE", "Menu Item | Restaurant Fine Dinning" );

    include('includes/header.php'); 

    // this particular regular expression is a bit advanced for me, its just a copy and past.
    function strip_bad_chars($input) {
        $output = preg_replace("/[^a-zA-Z0-9_-]/","", $input );
        return $output;
        
    }
    
    if (isset($_GET['item']))  {
        $menuItem = strip_bad_chars ($_GET['item']);
        
        $dish = $MenuItems[$menuItem];
    }


    //Suggested Tip Calculation
    
        function suggestedTip($price, $tip) {
            
            $total_tip = $price * $tip;
            echo money_format('%.2n', $total_tip);

            
            
        }

?>
   <hr>
   
<div id="dish">
    <h1> <?php echo $dish['title']; ?> <span class="price"> <sup>$</sup><?php echo $dish['price']; ?></span></h1>
    <p><?php echo $dish['blurb']?></p>
    
    <br/>
    
    <p> <strong>Suggested bevarage: <?php echo $dish['drink']; ?></strong></p>
    
    
    </div> <!-- Dish -->
    
<hr>    
   <a href="menu.php" class="button previous">&laquo; Back to menu </a>
  
 


<?php include('includes/footer.php');?>