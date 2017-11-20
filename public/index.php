<?php

session_start();

?>


<!DOCTYPE html>
<html>
    
    
    <head>
        
        <link rel="stylesheet" href="css/index.css" type="text/css" />
        
    </head>
    
    <body class="home">
        
        

        
    
        
        <center>
    <h3 id="welkom"><?php echo "Welkom ".$_SESSION['naam'];    ?></h3>
    
        </center>
       
       
       
    <div class="kies">
        
    <button class="btn" onclick="window.open('game/')">Play</button><br>
    <button class="btn" onclick="window.open('/public/game/leaderbord')"> Leaderbord</button><br>   
    <button class="btn" onclick="window.open('/public/game/challenge')">challange mode</button>
        
    </div>    
 
    
    
    </body>
    

    
    
    
</html>