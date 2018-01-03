<?php
    define("TITLE", "Team | Franklin Fine Dinning" );

    include('includes/header.php'); ?>
    <div id="team-members" class="cf">
        
        <h1> Our Team at Restaurant</h1>
        <p>
            We're small It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
        </p>
        
        <hr>
        
        <?php 
            
             foreach ($teamMembers as $member) {
        ?>
        
            <div class="member"> 
                <img src="img/<?php echo $member['img'];?>.png " alt="<?php echo $member['name'];?>">
                <h2><?php echo $member['name'];?> </h2>
                <h6><?php echo $member['position'];?> </h6>
                <p> <?php echo $member['bio'];?> </p>
            </div> <!--member -->
                
        
        <?php 
             
             }
        
        ?>
        
        
       
    </div> <!--team-members-->
     
       <hr>
    
<?php include('includes/footer.php');?>



