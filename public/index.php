<?php

    // configuration
    require("../includes/config.php"); 
    
    $name = query("SELECT `firstname`, `lastname` FROM `users` WHERE `id` = ?", $_SESSION["id"]);


    $SPECIALTIES = query("SELECT * FROM `specialties`");
    

    // renders porfolio
    render("welcome.php", ["SPECIALTIES" => $SPECIALTIES, "name" => $name, "title" => "Welcome"]);

?>
