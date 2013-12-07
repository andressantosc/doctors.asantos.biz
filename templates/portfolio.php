<br>
<div>

    <table id="portfolio">
    <tr>
        <th><a href="quote.php">Quote</a></th>
        <th><a href="buy.php">Buy</a></th>
        <th><a href="sell.php">Sell</a></th>
        <th><a href="history.php">Histoy</a></th>
        <th><a href="add_cash.php">Add Cash</a></th>
        <th><a href="logout.php">Log out</a></th>
    </tr>
    </table>
    
    <br>
    
    <table id="table">

        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    
        <?php foreach ($positions as $position): ?>
            <tr>
                <td><?= $position["symbol"] ?></td>
                <td><?= $position["name"] ?></td>
                <td><?= $position["shares"] ?></td>
                <td><?= number_format($position["price"], 2) ?></td>
                <td><?= (number_format($position["shares"] * $position["price"])) ?></td>
            </tr>
        <? endforeach ?>
            <tr>
                <td><b>CASH</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td><b><?= number_format($cash[0][0]["cash"], 2) ?></b></td>
            </tr>
    
    </table>

</div>

<br>

<div>
    <a href="logout.php">Log Out</a>
</div>
