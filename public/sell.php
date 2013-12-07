<?php

    // configuration
    require("../includes/config.php"); 
    
    // set query for rows
    $rows[] = query("SELECT symbol, shares FROM portfolio WHERE id = ?", $_SESSION["id"]);
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must choose a symbol.");
        }       
        else
        {
            $stock = lookup($_POST["symbol"]);
            $shares = query("SELECT `shares` FROM `portfolio` WHERE `id` = ? AND `symbol` = ?", $_SESSION["id"], $stock["symbol"]);
            
            if (isset($stock))
            {
                $total = ($stock["price"] * $shares[0]["shares"]);
                
                query("INSERT INTO history (id, type, symbol, shares, price) VALUES (?, 'SELL', ?, ?, ?)", $_SESSION["id"], $stock["symbol"], $shares[0]["shares"], $stock["price"]);
                query("UPDATE users SET cash = cash + ? WHERE id = ?", $total, $_SESSION["id"]);
                query("DELETE from portfolio WHERE id = ? AND symbol = ?", $_SESSION["id"], $stock["symbol"]);
            }
        
        // redirect to portfolio
        redirect("/");    
        }
    }
    else
    {
    // else render form
    render("sell_form.php", ["rows" => $rows, "title" => "Sell"]);
    }
    
    
    
?>