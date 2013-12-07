<h1>Results:</h1>

   <table id="table">

        <tr>
            <th>Name</th>
            <th>Specialty</th>
            <th>email</th>
            <th>phone</th>
            <th>Address</th>
        </tr>
    
        <?php foreach ($doctors as $doctor): ?>
            <tr>
                <td><a href= <?php print("doctors/" . $doctor["picture"] . ".php"); ?>><?= $doctor["firstname"] . " " . $doctor["lastname"] ?></a></td>
                <td><?= $doctor["specialty"] ?></td>
                <td><?= $doctor["email"] ?></td>
                <td><?= $doctor["phone"] ?></td>
                <td>
                	<?= $doctor["address1"] ?><br>
                	<?= $doctor["address2"] ?><br>
                	<?= $doctor["address3"] ?><br>
                </td>
            </tr>
        <? endforeach ?>
            <tr>
    </table>