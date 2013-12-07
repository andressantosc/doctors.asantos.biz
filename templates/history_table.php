<br>
<br>

<div>

    <table id="table">

        <tr>
            <th>Transaction</th>
            <th>Date/Time</th>
            <th>Symbol</th>
            <th>Shares</th>
            <th>Price</th>
        </tr>
    
        <?php foreach ($rows as $row): ?>
            <tr>
                <td><?= $row["type"] ?></td>
                <td><?= date('m/d/Y, g:ia', strtotime($row['date'])) ?></td>
                <td><?= $row["symbol"] ?></td>
                <td><?= number_format($row["shares"]) ?></td>
                <td><?= number_format($row["price"], 2) ?></td>
            </tr>
        <? endforeach ?>
    
    </table>
    
</div>

<br>
<br>

<div>
    <a href="index.php">Go back</a>.
</div>

<br>


<div>
    <a href="logout.php">Log Out</a>
</div>
