<?php

    // configuration
    require("../includes/config.php");
    
    $cash = query("SELECT `cash` FROM `users` WHERE `id` = ?", $_SESSION["id"]);  
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {    
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must select a symbol.");
        }
        
        else if (empty($_POST["shares"]))
        {
            apologize("You must fill a number of shares.");
        }
        
        else if (preg_match("/^\d+$/", $_POST["shares"]) == false)
        {
            apologize("The number of shares must be a positive whole number.");
        }
        
        else if (lookup($_POST["symbol"]) == false)
        {
            apologize("The quote is invalid.");
        }
     
        else
        {
            $stock = lookup($_POST["symbol"]);
            $total = ($stock["price"] * $_POST["shares"]);
            if ($total > $cash)
            {
                apologize("You don't have enough cash.");
            }
            else
            {                  
                query("INSERT INTO history (id, type, symbol, shares, price) VALUES (?, 'BUY', ?, ?, ?)", $_SESSION["id"], $stock["symbol"], $_POST["shares"], $stock["price"]);
                query("INSERT INTO portfolio (id, symbol, shares) VALUES(?, ?, ?) ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)", $_SESSION["id"], $stock["symbol"], $_POST["shares"]);
                
                query("UPDATE users SET cash = cash - ? WHERE id = ?", $total, $_SESSION["id"]);
            }
            
            redirect("/");
        }
    }
    else
    {
        render("buy_form.php", ["title" => "Buy"]);
    }


?>
