<?php

    // configuration
    require("../includes/config.php"); 
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide a quote.");
        }       
        
        else if (lookup($_POST["symbol"]) == false)
        {
            apologize("The quote is invalid.");
        }
        
        else
        {
            render("quote_display.php", ["title" => "Quote"]);
        }
    }
    else
    {
        // else render form
        render("quote_form.php", ["title" => "Get Quote"]);
    }
