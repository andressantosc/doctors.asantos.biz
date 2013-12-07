<?php

    // configuration
    require("../includes/config.php"); 
    
    $rows = query("SELECT `type`, `date`, `symbol`, `shares`, `price` FROM `history` WHERE `id` = ?", $_SESSION["id"]); 
    
    //dump($rows);
    
    render("history_table.php", ["rows" => $rows, "title" => "History"]);
    
?>
