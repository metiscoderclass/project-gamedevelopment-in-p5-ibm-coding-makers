<?php

session_start();

?>


<!DOCTYPE html>
<html>
    
    
    <head>
        
        <link rel="stylesheet" href="css/index.css" type="text/css" />
        
    </head>
    
    <body class="home">
        
        
    <button id="play">Play</button>
    <button id="show_lijst"> Show lijst</button>    
        
    <!-- todo: Add rank --> 
        
        <center>
    <p><?php echo "Welkom ".$_SESSION['naam'];    ?></p>
        </center>
       
        
        
    </body>
    

    
    
    
</html>