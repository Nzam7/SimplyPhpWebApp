<?php
    define("TITLE", "Menu | Restaurant Fine Dinning" );

    include('includes/header.php'); ?>
    
       
       <div id="menu-items" > 
        <h1>Our Delicious menu</h1>
        <p>Lite our team, Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur molestie mattis ante at venenatis.  </p>    
        <p> <em>Click any meni item to learn more about it. </em></p>
        <hr>
        
        <ul>
               <?php 
            
                     foreach ($MenuItems as $dish => $item) { ?>
                     <li> <a href="dish.php?item=<?php echo $dish;?>"><?php echo $item['title'];  ?> </a> <sup>$</sup><?php echo $item['price'];  ?>  </li>
        
        
            <?php  }  ?>
            
            
        </ul>
        
        
        
    </div> <!--menu items -->
    
   <?php include('includes/footer.php');?>